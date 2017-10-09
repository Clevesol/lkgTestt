@extends('layouts.main')


@section('content')

<div class="col-md-12" style="min-height: 1000px;">
	<div class="row">
	<div class="col-md-2 banner" style="float: left;border: 1px solid; min-height: 1100px; margin-top: 20px; padding-right:5px;">
		BANNER 1
	</div>
	<div class="col-md-2 banner" style="float: right;border: 1px solid; min-height: 1100px; margin-top: 20px; padding-left:5px;">
		BANNER 1
	</div>

	<div class="col-md-8" style="border: 1px solid; min-height: 100px; margin-top: 20px;">
		    <div class="col-md-4 eve-type" style="margin-top: 20px; margin-right:10px;">
		     <div class="form-group">
			  <label for="sel1">Event Type</label>
			  <select class="form-control" id="places">
			    <option value="hotel">Cultural</option>
			    <option value="Historical">Sport</option>
			    <option value="Historical">Adventure</option>
			   {{--  <option value=""></option>
			    <option value="">4</option> --}}
			  </select>
			</div>
			</div>

			<div class="col-md-4 eve-type" style="margin-top: 20px;">

				

			</div>
	</div>

	<div class="col-md-8" style=" min-height: 900px; margin-top: 10px;">
		<div class="event-list" style="margin-top: 10px;">
			<div class="well">
			<div class="row">
				<div class="col-md-4 eve-img" style="padding-left: 20px; border-right: 1px solid; padding-right: 20px;"><img src="{{asset('img/places/12.jpg')}}" height="auto"></div>
				<div class="col-md-8 eve-des">
					Event Item 1Event Item 1 Event Item 1 Event Item 1 Event Item 1 Event Item 1 Event Item 1 Event Item 1 Event Item 1Event Item 1 Event Item 1 Event Item 1 Event Item 1 Event Item 1 Event Item 1 Event Item 1 Event Item 1Event Item 1 Event Item 1 Event Item 1 Event Item 1 Event Item 1 Event Item 1 Event Item 1 Event Item 1Event Item 1 Event Item 1 Event Item 1 Event Item 1 Event Item 1 Event Item 1 Event Item 1 
					Event Item 1Event Item 1 Event Item 1 Event Item 1 Event Item 1 Event Item 1 Event Item 1 Event Item 1 
				</div>
			{{-- 	<button class="btn btn-default btn-lg pull-right" style="position: relative;">Get Location</button>
 --}}
			</div></div>
			<div class="well">
			<div class="row" style="margin-top: 20px;">
				<div class="col-md-4 eve-img" style="padding-left: 20px; border-right: 1px solid; padding-right: 20px;"><img src="{{asset('img/places/12.jpg')}}" height="auto"></div>
				<div class="col-md-8 eve-des">
					Event Item 1Event Item 1 Event Item 1 Event Item 1 Event Item 1 Event Item 1 Event Item 1 Event Item 1 Event Item 1Event Item 1 Event Item 1 Event Item 1 Event Item 1 Event Item 1 Event Item 1 Event Item 1 Event Item 1Event Item 1 Event Item 1 Event Item 1 Event Item 1 Event Item 1 Event Item 1 Event Item 1 Event Item 1Event Item 1 Event Item 1 Event Item 1 Event Item 1 Event Item 1 Event Item 1 Event Item 1 
					Event Item 1Event Item 1 Event Item 1 Event Item 1 Event Item 1 Event Item 1 Event Item 1 Event Item 1 
				</div>
			{{-- 	<button class="btn btn-default btn-lg pull-right" style="position: relative;">Get Location</button>
 --}}
			</div>

			</div>
		</div>
	</div>
</div>

</div>


@endsection