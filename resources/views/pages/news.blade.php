@extends('layouts.main')


@section('content')
<link rel="stylesheet" type="text/css" href="{{asset('css/news.css')}}">


<div class="col-sm-12 col-md-12 col-lg-12">
<div class="row">

<div class="news-list-drop">
<div class="btn-group">
	<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
     News Feed
      <span class="glyphicon glyphicon-chevron-down"></span>
    </button>
    
    <ul class="dropdown-menu">
     
      <li>
        <a href="#" title="Select this card"><img src="{{asset('img/places/12.jpg')}}">news event 1</a>
      </li>
      <li>
        <a href="#" title="Select this card"><img src="{{asset('img/places/11.jpg')}}">news event 1</a>
      </li>
      <li>
        <a href="#" title="Select this card"><img src="{{asset('img/places/10.jpg')}}">news event 1</a>
      </li>
    </ul>
 </div>
</div>


<div class="col-md-3 news-line" style="border-right: 1px solid;">
	

	<ol class="news-list">

		<li class="news-event">

		<div class="well">
			<div class="nv-img" style="">
				<img src="{{asset('img/places/12.jpg')}}">				
			</div>	

			<div class="nv-title"> 
				news event 1
			</div>

		</div>

		</li>


		<li class="news-event">

		<div class="well">
			<div class="nv-img" style="">
				<img src="{{asset('img/places/12.jpg')}}">				
			</div>	

			<div class="nv-title"> 
				news event 1
			</div>

		</div>

		</li>


		<li class="news-event">

		<div class="well">
			<div class="nv-img" style="">
				<img src="{{asset('img/places/12.jpg')}}">				
			</div>	

			<div class="nv-title"> 
				news event 1
			</div>

		</div>

		</li>

		<li class="news-event">

		<div class="well">
			<div class="nv-img" style="">
				<img src="{{asset('img/places/12.jpg')}}">				
			</div>	

			<div class="nv-title"> 
				news event 1
			</div>

		</div>

		</li>


		<li class="news-event">

		<div class="well">
			<div class="nv-img" style="">
				<img src="{{asset('img/places/12.jpg')}}">				
			</div>	

			<div class="nv-title"> 
				news event 1
			</div>

		</div>

		</li>
			<li class="news-event">

		<div class="well">
			<div class="nv-img" style="">
				<img src="{{asset('img/places/12.jpg')}}">				
			</div>	

			<div class="nv-title"> 
				news event 1
			</div>

		</div>

		</li>

	</ol>

</div>

<div class="col-md-9">
	<div class="title" style="border-bottom: 1px solid; padding-top: 10px;"><h4>News Title Goes Here</h4></div>
	<div class="news-area" style="border: 1px solid; padding-top: 10px; min-height: 950px;"></div>

</div>

</div>
</div>

@endsection