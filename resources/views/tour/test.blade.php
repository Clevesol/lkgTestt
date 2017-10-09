@extends('layouts.main')


@section('content')

<div class="col-md-12 col-lg-12">
<div class="row">
<div class="sec-title" style="background-color:#F0F8FF; padding-left: 20px;"><h4>Place Your Route</h4></div>
  <div class="col-md-6 col-lg-6" style="background-color: #D3D3D3; margin-top: 5px; padding-bottom: 40px;">

    {{-- <p><h2><b><u>Start Planning Your Trip</u></b></h2></p> --}}<br><br>
  {{--   <p>Distance &nbsp  &nbsp <input type="text"  id="distance" value="1" size="2"> km</p>

    <p>Starting from  &nbsp  &nbsp <input type="text" id="from" value="my"/></p>
    <p>Destination  &nbsp  &nbsp <input type="text" id="to" value="kandy"/></p> --}}

   {{--  <input type="submit" onclick="route()"/> --}}
    		<div class="row">
    		<div class="col-md-4 form-group pull-left">
                <label for="Distance">Distance</label>
                <p><input type="text" class="form-control" id="distance" value="1" size="2" placeholder="Distance From the Original Route"></p>
            </div>
              </div>
              <div class="row">
              <div class="col-md-6 form-group">
                <label for="from">Starting from</label>
                <input type="text" class="form-control" id="from" value="colombo" placeholder="Your Starting Location">
              </div>
              <div class="col-md-6 form-group">
                <label for="to">Destination</label>
                 <input type="text" class="form-control" id="to" value="kandy" placeholder="Your Destination">
              </div>
              </div>
            
            <div class="form-group">
			  <label for="sel1">Select Your Intrested Places</label>
			  <select class="form-control" id="places">
			    <option value="hotel">Hotel</option>
			    <option value="Historical">Historical</option>
			   {{--  <option value=""></option>
			    <option value="">4</option> --}}
			  </select>
			</div><br>

              <button type="submit" class="btn btn-block btn-success" onclick="route()">Submit</button>
    
  </div>
   <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6" style="min-height: 1000px; border: 0.3px solid; border-color:black;"> 
 		 <div  id="googlemap" style=" margin-top:5px; padding-right:20px;  min-height:1000px;"> 
   </div>


</div>
</div>




<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAR9Ai-zyevHDadqsbSaltmA-Sy4HhUmU0&signed_in=true&libraries=places"></script>{{-- &callback=initialize --}}

<script src="js/routeBoxer.js" type="text/javascript"></script>
<script src="js/route_config.js" type="text/javascript"></script>
<script> google.maps.event.addDomListener(window, 'load', initialize); </script>


@endsection

 
