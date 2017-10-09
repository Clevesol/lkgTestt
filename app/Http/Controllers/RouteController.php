<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Place;

class RouteController extends Controller
{
    //
    public function routePlaces(Request $request){
    	$data  = $request->data;

    	// $data = "boxes[]=7.977905698333403:80.68510957058152-6.241124301666595:79.3724308588371&boxes[]=7.977905698333403:81.12266914116299-6.6753196508332975:80.68510957058152";

    	$result_array = [];

    	$point_A_lat = '';
    	$point_A_lon = '';
    	$point_B_lon = '';
    	$point_B_lat = '';
    	
    	$data1 = explode('&', $data);

    	foreach ($data1 as $key => $value) {
    		$data1[$key] = str_replace("boxes[]="," ",$value);	
    	}

    	foreach ($data1 as $key => $value) {

    		$data_point = explode('-', $value);

    		if($data_point){
	    		$pointA = explode(':', $data_point[0]);
	    		$point_A_lat = $pointA[0];
    			
    			if(isset($pointA[1])){
    				$point_A_lon = $pointA[1];
    			}
    			
    			if(isset($data_point[1])){
	    			$pointB = explode(':', $data_point[1]);
	    			$point_B_lat = $pointB[0];
	    		if(isset($pointB[1])){
	    			$point_B_lon = $pointB[1];
    			}
    		}
    	}

    		//SELECT * FROM tilistings WHERE lat BETWEEN a AND c AND lng between b AND  d

    		if($point_A_lat > $point_B_lat){
    			$temp = $point_A_lat;
    			$point_A_lat = $point_B_lat;
    			$point_B_lat = $temp;
    		}

    		if($point_A_lon > $point_B_lon){
    			$temp = $point_A_lon;
    			$point_A_lon = $point_B_lon;
    			$point_B_lon = $temp;
    		}

    		$content = Place::
    					 whereBetween('latitude', [$point_A_lat, $point_B_lat])
    					 ->whereBetween('longitude', [$point_A_lon, $point_B_lon])
    					 ->select('name','latitude','longitude')
    					 ->get();

    		// $content = DB::select("
    		// 			SELECT * FROM places WHERE latitude BETWEEN $point_B_lat AND $point_A_lat
    		// 	");
    		foreach ($content as $key => $value) {
    			$result_array[] = $value;
    		}
    		


    	}


    	return $result_array;

    	
    }




    

   //  	 $random_places = [
			//   ['Moscow1', 55.822083, 37.665453, 4],
			//   ['Moscow2', 55.604697, 37.642107, 4],
			//   ['Lisbon1', 38.749402, -9.120034, 4],
			//   ['Lisbon2', 38.708960, -9.169130, 4],
			//   ['NewYork1', 40.784513, -73.976630, 4],
			//   ['NewYork2', 40.707522, -74.037055, 4],
			//   ['Bondi Beach', -33.890542, 151.274856, 4],
			//   ['Coogee Beach', -33.923036, 151.259052, 5],
			//   ['Cronulla Beach', -34.028249, 151.157507, 3],
			//   ['Manly Beach', -33.80010128657071, 151.28747820854187, 2],
			//   ['Maroubra Beach', -33.950198, 151.259302, 1]
			// ];
}
