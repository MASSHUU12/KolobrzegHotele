<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class Results extends Controller
{
    function getResults() {
        $response = Http::get('http://www.opendata.gis.kolobrzeg.pl/api/3/action/datastore_search?resource_id=d38fc37b-a515-46a8-9905-8f7bdbd7b2c3');
        $responseString = $response->json();
        $responseString = $responseString['result']['records'];


        return view('search', ['results'=>$responseString]);
    }
}
