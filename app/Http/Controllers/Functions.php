<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class Functions extends Controller
{
    //makes a http request and returns an array with objects
    static function getHttp($id)
    {
        switch ($id) {
            case 'bike':
                $response = Http::get('http://www.opendata.gis.kolobrzeg.pl/api/3/action/datastore_search?resource_id=4a25e4e2-6a34-47ce-b68b-6517b4b1e431');
                break;
            case 'park':
                $response = Http::get('http://www.opendata.gis.kolobrzeg.pl/api/3/action/datastore_search?resource_id=3a2fe7f5-7d84-414c-9f34-a49e84b8fc4f'); //need to select parks only
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
            case 'allHotels':
                $response = Http::get('http://www.opendata.gis.kolobrzeg.pl/api/3/action/datastore_search_sql?sql=SELECT%20*%20from%20%22d38fc37b-a515-46a8-9905-8f7bdbd7b2c3%22%20');
                break;
            default:
                $response = null;
                break;
        }

        if ($response->successful() == 0) return abort(404);

        if ($response !== null) $response = $response['result']['records'];

        return $response;
    }

    //shows the distance to the cloest object from an array (only returns the time needed to travel)
    static function nearestObject($hotel, $objects)
    {
        // stop the function if given variables aren't arrays
        if (!is_array($hotel) || !is_array($objects)) return null;

        for ($j = 0; $j < count($objects); $j++) {
            $locations[$j] = ceil(calculateDistance($hotel['x'], $hotel['y'], $objects[$j]['x'], $objects[$j]['y']) * 0.015);
        }
        sort($locations);
        $closestLocation = $locations[0];

        return $closestLocation;
    }

    //only works for zabytki
    static function sortObjectsByDistanceZ($hotel, $objects)
    {
        if (!is_array($hotel) || !is_array($objects)) return null;

        for ($j = 0; $j < count($objects); $j++) {
            $objects[$j]['distance'] = ceil(calculateDistance($hotel['x'], $hotel['y'], $objects[$j]['y'], $objects[$j]['x']) * 0.015);
        }

        $keys = array_column($objects, 'distance');
        array_multisort($keys, SORT_ASC, $objects);

        return $objects;
    }

    //works for everything else
    static function sortObjectsByDistance($hotel, $objects)
    {
        if (!is_array($hotel) || !is_array($objects)) return null;

        for ($j = 0; $j < count($objects); $j++) {
            $objects[$j]['distance'] = ceil(calculateDistance($hotel['x'], $hotel['y'], $objects[$j]['x'], $objects[$j]['y']) * 0.015);
        }

        $keys = array_column($objects, 'distance');
        array_multisort($keys, SORT_ASC, $objects);

        return $objects;
    }
}
