<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class Results extends Controller
{
    function getResults() {
        $response = Http::get('http://www.opendata.gis.kolobrzeg.pl/api/3/action/datastore_search_sql?sql=SELECT%20*%20from%20%22d38fc37b-a515-46a8-9905-8f7bdbd7b2c3%22%20');
        $responseString = $response;
        $responseString = $responseString['result']['records'];

        $result = array_slice($responseString, 0, 6, true);


        return view('search', ['results'=>$result]);
    }

    function singleResult($id) {
        $response = Http::get('http://www.opendata.gis.kolobrzeg.pl/api/3/action/datastore_search_sql?sql=SELECT%20*%20from%20%22d38fc37b-a515-46a8-9905-8f7bdbd7b2c3%22%20WHERE%20_id%20=%20%27'.$id.'%27');
        $arrayResponse = json_decode($response->body(), true);

        if (array_key_exists('result', $arrayResponse) == true && array_key_exists('records', $arrayResponse['result']) && array_key_exists(0, $arrayResponse['result']['records'])) {
            $results = $arrayResponse['result']['records'][0];
        }
        else {
            return redirect('/404');
        }

        
        
        return view('listing', ['results'=>$results]);
    }

    function getHttp($id) {
        switch ($id) {
            case 'bike':
                $response = Http::get('http://www.opendata.gis.kolobrzeg.pl/api/3/action/datastore_search?resource_id=4a25e4e2-6a34-47ce-b68b-6517b4b1e431');
                break;
            case 'park':
                $response = Http::get('http://www.opendata.gis.kolobrzeg.pl/api/3/action/datastore_search?resource_id=4a25e4e2-6a34-47ce-b68b-6517b4b1e431');
                break;  
            case 'playground':
                $response = Http::get('http://www.opendata.gis.kolobrzeg.pl/api/3/action/datastore_search?resource_id=4a25e4e2-6a34-47ce-b68b-6517b4b1e431');
                break;     
            case 'dogpark':
                $response = Http::get('http://www.opendata.gis.kolobrzeg.pl/api/3/action/datastore_search?resource_id=4a25e4e2-6a34-47ce-b68b-6517b4b1e431');
                break;     
            default:
                $response = null;
                break;
        }

        if ($response !== null) {
            $responseString = $response['result']['records'];
        }

        return $response;
    }

}
