<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\Functions;

class Search extends Controller
{
    function searchquery(Request $request)
    {
        $query = strtoupper($request->q);

        $response = Http::get('http://www.opendata.gis.kolobrzeg.pl/api/3/action/datastore_search_sql?sql=SELECT%20*%20from%20%22d38fc37b-a515-46a8-9905-8f7bdbd7b2c3%22%20WHERE%20upper%28nazwa_obiektu%29%20LIKE%20%27%' . $query . '%%27');

        if ($response->successful() == 0) return abort(500);

        $arrayResponse = json_decode($response->body(), true);

        //check if the given id is valid
        if (array_key_exists('result', $arrayResponse) == true && array_key_exists('records', $arrayResponse['result']) && array_key_exists(0, $arrayResponse['result']['records'])) $result = $arrayResponse['result']['records'];
        else return view('searchquery', ['results' => null, 'query' => $request->q]);

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

        //get only a certain number of hotels
        $finalResult = array_slice($result, 0, 8, true);

        return view('searchquery', ['results' => $finalResult, 'query' => $request->q]);
    }
}
