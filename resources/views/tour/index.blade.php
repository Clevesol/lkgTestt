@extends('layouts.master')

@section('title')
   Tours
@stop

@section('content')

<!-------- Main panel-------------------------------------------------------------->
{!! Form::open(['route' => 'tour.store', 'class' => 'City']) !!}
<div class="container">
    <div class="panel-info">
        <div class="panel-heading">
            <div class="row" >
                <div class="col-sm-7"><h4>My Tour</h4></div>
                <div class="col-sm-4 form-inline">
                    <label for="tourname"><h5>Tour Name:</h5></label>
                    <!--<input type="text" class="form-control" id="tourname">-->
                    {!! Form::text('name', null, [
                        'class' => 'form-control',
                        'id' => 'tourname',
                        'required',
                        'placeholder' => 'mytour'
                    ]) !!}
                    <!--{!! Form::submit('Save Tour', [ 'class' => 'btn btn-default','id' => 'btnSave']) !!}-->
                    <button type="button" id="btnSave" class="btn btn-default ">Save</button>
                </div>
            </div>
        </div>
        <div class="panel-body">           
            <div class="row"> 
                <div class="container col-md-7">
                    <!-- Form area---------------------------------------------------------------->
                    <div class="row">
                        <div class="panel-group">                           
                            <div class="col-sm-12">                       
                                <div class="row">
                                <!-- start point---------------------------------------------------------------->
                                    <div class="panel-info col-sm-6">
                                        <div class="panel-heading"><h7>Start Point</h7></div>
                                        <div class="panel-body">
                                            <div class="form-group col-sm-12">     
                                            {!! Form::select('select_startpoint',$list,null, 
                                               [
                                                   'id' => 'select_startpoint',
                                                   'class' => 'form-control',                                                    
                                                   'placeholder' => 'Pick a start point...',
                                                   'required'
                                                ]);                                           
                                            !!}
                                            <!--<select class="form-control" id="select_startpoint">
                                                @foreach($cities as $city)
                                                    <option value="{{$city->name}}">{{$city->name}}</option>
                                                @endforeach
                                            </select>-->

                                            </div>
                                        </div>
                                    </div>                                                  
                                <!-- end point-------------------------------------------------------------->             
                                    <div class="panel-info col-sm-6">
                                        <div class="panel-heading"><h7>End Point</h7></div>
                                        <div class="panel-body">
                                            <div class="form-group col-sm-12">
                                            {!! Form::select('select_endpoint',$list,null, 
                                               [
                                                   'id' => 'select_endpoint',
                                                   'class' => 'form-control',                                                    
                                                   'placeholder' => 'Pick a end point...',
                                                   'required'
                                                ]);                                           
                                            !!}
                                            </div>
                                        </div>
                                    </div> 
                                </div>                                                       
                                <div class="row">
                                <!-- way points------------------------------------------------------------>
                                    <div class="panel-info col-sm-12">
                                        <div class="panel-heading"><h7>Cities to visit</h7></div>
                                        <div class="panel-body">
                                            <div class="form-group">
                                                <div class="container col-sm-7">
                                                {!! Form::select('select_city',$list,null, 
                                                    [
                                                        'id' => 'select_city',
                                                        'class' => 'form-control',                                                    
                                                        'placeholder' => 'Pick cities'
                                                    ]);                                           
                                                !!}
                                                </div>
                                                <div class="container col-sm-2">
                                                    <button type='button' onclick="btnAdd()" class="btn btn-default">
                                                        Add<span class="glyphicon glyphicon-plus-sign" style="padding: 0px 5px"></span>
                                                    </button>                  
                                                </div>
                                            </div>    
                                        </div>              
                                    </div>
                                </div>                        
                                <div class="row">
                                 <!-- Selected------------------------------------------------------------>
                                    <div class="panel-default col-sm-12">
                                        <div class="panel-heading"><h7>Selected </h7></div>
                                        <div class="panel-body">
                                            <div class="form-group">
                                                <div class="container col-sm-7">
                                                    <select multiple class="form-control" id="select_selected" size="5"> </select>
                                                </div>
                                                <div class="container col-sm-5 ">
                                                    <div class="row">
                                                        <button type='button' onclick="btnRemove()"  class="btn btn-default">
                                                            Remove<span class="glyphicon glyphicon-remove" style="padding: 0px 5px"></span>
                                                        </button>             
                                                    </div>
                                                    <div class="row">
                                                        <button type='button' id="btngetdirections" onclick="getDirections()" class="btn btn-default btn-lg" style="margin: 25px 30px">
                                                            Get Directions<span class="glyphicon glyphicon-hand-right" style="padding: 0px 5px"></span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>    
                                        </div>              
                                    </div>
                                </div>
                                <div class="row">
                                <!-- Description ------------------------------------------------------------>                              
                                    <div class="container col-sm-12" id= "div_description"> 
                                        <div id= "div_details"> </div>                            
                                    </div> 
                                </div>
                            </div>                      
                        </div>                       
                    </div>
                </div>
                <!-- map area------------------------------------------------------------>
                <div class="col-md-5">
                    <div class="row">
                        <div class="col-sm-12 col-md-12" id="googlemap" style="height: 600px"> </div> 
                    </div>
                    <div class="row">
                        <div class="col-sm-5" id="div_img" style="margin-top: 10px"> </div> 
                    </div>
                </div>                                                  
            </div>
        </div>
    </div>
</div>
{!! Form::close() !!}
    <!--Maps Javascript--->
    <!--<script src="http://maps.googleapis.com/maps/api/js?AIzaSyA3eXvM8jfmQtxN8TDCcgsV_lhrA9cv5aE"></script>-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAR9Ai-zyevHDadqsbSaltmA-Sy4HhUmU0&signed_in=true&callback=initializeMap" async defer></script>
    <script src="js/routeBoxer.js"></script>
    <script src ="{{ asset('js/createtour.js') }}" type="text/javascript"></script>
    <script> google.maps.event.addDomListener(window, 'load', initializeMap); </script>

@endsection


