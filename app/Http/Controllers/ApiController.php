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

    public function uploadURL(Request $request){
    	try{
    		$request->images = json_decode($request->images);
	    	foreach ($request->images as $url) {
	    		$contents = file_get_contents($url);
	        	$fileName = substr($url, strrpos($url, '/') + 1);
	        	$documentPath = 'public/images/'.$fileName;
	        	\Storage::put($documentPath, $contents);

	        	$image = new \App\Product;
	        	$image->image = $fileName;
	        	$image->title = "tities";
	        	$image->product_code = "56034";
	        	$image->description = "Just a naming something";
	        	$image->save();
	    	}

	    	return response()->json([
	    		"message" => "Images Processed"
	    	]);
    	}catch(Exception $error){
    		return response()->json([
    			"message" => "Unable to complete request"
    		], 500);
    	}
    }
}
