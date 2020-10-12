<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class ApiController extends Controller
{
    public function getApi(){

        // $client = new Client();
        // $api_key = '18254741-ce7f3e60a43d460c4e262ec4f';
        // $request  = $client->get('https://pixabay.com/api/');
        // $response = $request->getBody();

        return view('admin.api');
    }
}
