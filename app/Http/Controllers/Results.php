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

        $result = array_slice($responseString, 0, 8, true);


        return view('search', ['results'=>$result]);
    }

    function singleResult($id) {
        $response = Http::get('http://www.opendata.gis.kolobrzeg.pl/api/3/action/datastore_search_sql?sql=SELECT%20*%20from%20%22d38fc37b-a515-46a8-9905-8f7bdbd7b2c3%22%20WHERE%20_id%20=%20%27'.$id.'%27');
        $arrayResponse = json_decode($response->body(), true);
        $results = $arrayResponse['result']['records'][0];
        
        return view('listing', ['results'=>$results]);
    }

}
