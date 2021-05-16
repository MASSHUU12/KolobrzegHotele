<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class Results extends Controller
{
    function getResults(Request $request) {
        $response = Http::get('http://www.opendata.gis.kolobrzeg.pl/api/3/action/datastore_search_sql?sql=SELECT%20*%20from%20%22d38fc37b-a515-46a8-9905-8f7bdbd7b2c3%22%20');
        $responseString = $response;
        $result = $responseString['result']['records'];

        //gets the variables from URL
        $fromSea = $request->sea;
        $fromBike = $request->bike;
        $fromPark = $request->parking;
        $fromPlayground = $request->playground;
        $fromDogpark = $request->dogpark;
        

        //gets the arrays with information about objects        
        $bike = $this->getHttp('bike');
        $playground = $this->getHttp('playground');
        $dogPark = $this->getHttp('dogpark');

        //gets the arrays with information about objects for each hotel
        for ($i=0; $i < count($result); $i++) { 
            $result[$i]['from_sea'] = ceil(calculateDistance($result[$i]['x'], $result[$i]['y'], 54.186413, $result[$i]['y'])*0.016);

            $nearestBike = $this->nearestObject($result[$i], $bike);
            $result[$i]['from_bike'] = $nearestBike;

            $nearestPlayground = $this->nearestObject($result[$i], $playground);
            $result[$i]['from_playground'] = $nearestPlayground;

            $nearestDogpark = $this->nearestObject($result[$i], $dogPark);
            $result[$i]['from_dogpark'] = $nearestDogpark;

            //accuracy of the result
            $accuracy = 0;
            $multiplier = 0.5;
            if ($fromSea != null) $accuracy = $accuracy + ($result[$i]['from_sea'] * $fromSea)*$multiplier;
            if ($fromBike != null) $accuracy = $accuracy + ($nearestBike * $fromBike)*$multiplier;
            if ($fromPark != null) $accuracy = $accuracy + ($nearestBike * $fromBike)*$multiplier;
            if ($fromPlayground != null) $accuracy = $accuracy + ($nearestPlayground * $fromPlayground)*$multiplier;
            if ($fromDogpark != null) $accuracy = $accuracy + ($nearestDogpark * $fromDogpark)*$multiplier;

            $result[$i]['accuracy'] = $accuracy/10;

            //extract stars from the name
            $result[$i]['stars'] = substr_count($result[$i]['nazwa_obiektu'], "*");
            $result[$i]['nazwa_obiektu'] = preg_replace('/\*{2,}/', '', $result[$i]['nazwa_obiektu']);
        }

        //sort the results by accuracy
        $accuracyKey = array_column($result, 'accuracy');
        array_multisort($accuracyKey, SORT_ASC, $result);
        
        //get only a certain number of hotels
        $finalResult = array_slice($result, 0, 8, true);

        return view('search', ['results'=>$finalResult]);
    }

    function singleResult($id) {
        $response = Http::get('http://www.opendata.gis.kolobrzeg.pl/api/3/action/datastore_search_sql?sql=SELECT%20*%20from%20%22d38fc37b-a515-46a8-9905-8f7bdbd7b2c3%22%20WHERE%20_id%20=%20%27'.$id.'%27');
        $arrayResponse = json_decode($response->body(), true);


        //check if the given id is valid
        if (array_key_exists('result', $arrayResponse) == true && array_key_exists('records', $arrayResponse['result']) && array_key_exists(0, $arrayResponse['result']['records'])) {
            $result = $arrayResponse['result']['records'][0];

            //gets the arrays with information about objects 
            $bike = $this->getHttp('bike');
            $playground = $this->getHttp('playground');
            $dogPark = $this->getHttp('dogpark');


            //get the neartest object
            $result['from_sea'] = ceil(calculateDistance($result['x'], $result['y'], 54.186413, $result['y'])*0.016);

            $nearestBike = $this->nearestObject($result, $bike);
            $result['from_bike'] = $nearestBike;

            $nearestPlayground = $this->nearestObject($result, $playground);
            $result['from_playground'] = $nearestPlayground;

            $nearestDogpark = $this->nearestObject($result, $dogPark);
            $result['from_dogpark'] = $nearestDogpark;

            //get the landmarks to show
            $landmarks = $this->getHttp('landmarks');
        }
        else {
            return redirect('/404');
        }

        
        return view('listing', ['results'=>$result, 'landmarks'=>$landmarks]);
    }

    function getHttp($id) {
        switch ($id) {
            case 'bike':
                $response = Http::get('http://www.opendata.gis.kolobrzeg.pl/api/3/action/datastore_search?resource_id=4a25e4e2-6a34-47ce-b68b-6517b4b1e431');
                break;
            case 'park':
                $response = Http::get('http://www.opendata.gis.kolobrzeg.pl/api/3/action/datastore_search?resource_id=4a25e4e2-6a34-47ce-b68b-6517b4b1e431'); //need to select parks only
                break;  
            case 'playground':
                $response = Http::get('http://www.opendata.gis.kolobrzeg.pl/api/3/action/datastore_search?resource_id=36f2b1ed-580f-4c76-962d-6d4f4aae0dd8');
                break;     
            case 'dogpark':
                $response = Http::get('http://www.opendata.gis.kolobrzeg.pl/api/3/action/datastore_search?resource_id=6a170f39-ffe4-4bc2-9b27-05a7d14a1b12');
                break;     
            case 'landmarks':
                $response = Http::get('http://www.opendata.gis.kolobrzeg.pl/api/3/action/datastore_search?resource_id=3c1ec4e7-5f34-419e-a0c2-8a97bba7c2bb');
                break;     
            default:
                $response = null;
                break;
        }

        if ($response !== null) {
            $response = $response['result']['records'];
            
        }
        
        return $response;

        
    }

    function nearestObject($hotel, $objects) {
        // stop the function if given variables aren't arrays
        if (!is_array($hotel) || !is_array($objects)) {
            return null;
        }


        for ($j=0; $j < count($objects); $j++) { 
            $locations[$j] = calculateDistance($hotel['x'], $hotel['y'], $objects[$j]['x'], $objects[$j]['y']);
        }
        asort($locations);
        $closestLocation = $locations[0];

        return ceil($closestLocation*0.016);
    }

}

    
