<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\Functions;

class Results extends Controller
{
    function getResults(Request $request)
    {
        $response = Http::get('http://www.opendata.gis.kolobrzeg.pl/api/3/action/datastore_search_sql?sql=SELECT%20*%20from%20%22d38fc37b-a515-46a8-9905-8f7bdbd7b2c3%22%20');

        if ($response->successful() == 0) return abort(500);

        $responseString = $response;
        $result = $responseString['result']['records'];

        //gets the variables from URL
        $fromSea = $request->sea;
        $fromBike = $request->bike;
        $fromPark = $request->park;
        $fromPlayground = $request->playground;
        $fromDogpark = $request->dogpark;

        //gets the arrays with information about objects
        $bike = Functions::getHttp('bike');
        $playground = Functions::getHttp('playground');
        $park = Functions::getHttp('park');
        $dogPark = Functions::getHttp('dogpark');

        //gets the arrays with information about objects for each hotel
        for ($i = 0; $i < count($result); $i++) {
            $result[$i]['from_sea'] = ceil(calculateDistance($result[$i]['x'], $result[$i]['y'], 54.186413, $result[$i]['y']) * 0.016);

            $nearestBike = Functions::nearestObject($result[$i], $bike);
            $result[$i]['from_bike'] = $nearestBike;

            $nearestPlayground = Functions::nearestObject($result[$i], $playground);
            $result[$i]['from_playground'] = $nearestPlayground;

            $nearestPark = Functions::nearestObject($result[$i], $park);
            $result[$i]['from_park'] = $nearestPark;

            $nearestDogpark = Functions::nearestObject($result[$i], $dogPark);
            $result[$i]['from_dogpark'] = $nearestDogpark;

            //accuracy of the result
            $accuracy = 0;
            $multiplier = 0.5;

            if ($fromSea != null && is_numeric($fromSea)) $accuracy = $accuracy + ($result[$i]['from_sea'] * $fromSea) * $multiplier;
            if ($fromBike != null && is_numeric($fromBike)) $accuracy = $accuracy + ($nearestBike * $fromBike) * $multiplier;
            if ($fromPark != null && is_numeric($fromPark)) $accuracy = $accuracy + ($nearestPark * $fromPark) * $multiplier;
            if ($fromPlayground != null && is_numeric($fromPlayground)) $accuracy = $accuracy + ($nearestPlayground * $fromPlayground) * $multiplier;
            if ($fromDogpark != null && is_numeric($fromDogpark)) $accuracy = $accuracy + ($nearestDogpark * $fromDogpark) * $multiplier;

            if ($result[$i]['nazwa_obiektu'] == null || $result[$i]['nazwa_obiektu'] == '') $accuracy = 1000;

            $result[$i]['accuracy'] = $accuracy / 10;

            //extract stars from the name
            $result[$i]['stars'] = substr_count($result[$i]['nazwa_obiektu'], "*");
            $result[$i]['nazwa_obiektu'] = preg_replace('/\*{2,}/', '', $result[$i]['nazwa_obiektu']);

            //assign the features
            if ($result[$i]['stars'] > 3) $result[$i]['features']['high_standard'] = true;
            if (ceil(calculateDistance($result[$i]['x'], $result[$i]['y'], 54.181981, 15.570071)) * 0.015 < 8 || ceil(calculateDistance($result[$i]['x'], $result[$i]['y'], 54.175182, 15.559306)) * 0.015 < 8) $result[$i]['features']['train'] = true;
            if (ceil(calculateDistance($result[$i]['x'], $result[$i]['y'], 54.179897, 15.569713)) * 0.015 < 10) $result[$i]['features']['city_center'] = true;
            if (ceil(calculateDistance($result[$i]['x'], $result[$i]['y'], 54.186329, 15.554450)) * 0.015 < 10) $result[$i]['features']['lighthouse'] = true;
            if ($nearestPark < 5) $result[$i]['features']['greenery'] = true;
        }

        //sort the results by accuracy
        $accuracyKey = array_column($result, 'accuracy');
        array_multisort($accuracyKey, SORT_ASC, $result);

        //get only a certain number of hotels
        $finalResult = array_slice($result, 0, 8, true);

        return view('search', ['results' => $finalResult]);
    }

    function singleResult($id)
    {
        $response = Http::get('http://www.opendata.gis.kolobrzeg.pl/api/3/action/datastore_search_sql?sql=SELECT%20*%20from%20%22d38fc37b-a515-46a8-9905-8f7bdbd7b2c3%22%20WHERE%20_id%20=%20%27' . $id . '%27');

        if ($response->successful() == 0) return abort(500);

        $arrayResponse = json_decode($response->body(), true);


        //check if the given id is valid
        if (array_key_exists('result', $arrayResponse) == true && array_key_exists('records', $arrayResponse['result']) && array_key_exists(0, $arrayResponse['result']['records'])) {
            $result = $arrayResponse['result']['records'][0];

            //gets the arrays with information about objects
            $bike = Functions::getHttp('bike');
            $playground = Functions::getHttp('playground');
            $park = Functions::getHttp('park');
            $dogPark = Functions::getHttp('dogpark');


            //get the neartest object
            $result['from_sea'] = ceil(calculateDistance($result['x'], $result['y'], 54.186413, $result['y']) * 0.016);

            $nearestBike = Functions::sortObjectsByDistance($result, $bike);
            $result['from_bike'] = $nearestBike[0];

            $nearestPark = Functions::sortObjectsByDistance($result, $park);
            $result['from_park'] = $nearestPark[0];

            $nearestPlayground = Functions::sortObjectsByDistance($result, $playground);
            $result['from_playground'] = $nearestPlayground[0];

            $nearestDogpark = Functions::sortObjectsByDistance($result, $dogPark);
            $result['from_dogpark'] = $nearestDogpark[0];

            //get the landmarks to show
            $landmarks = Functions::getHttp('landmarks');
            $sortedLandmarks = Functions::sortObjectsByDistanceZ($result, $landmarks);

            $otherHotels = Functions::getHttp('allHotels');
            $sortedOtherHotels = Functions::sortObjectsByDistance($result, $otherHotels);

            //count the stars
            $result['stars'] = substr_count($result['nazwa_obiektu'], "*");
        } else return view('404');

        return view('listing', ['results' => $result, 'landmarks' => $sortedLandmarks, 'otherHotels' => $sortedOtherHotels]);
    }
}
