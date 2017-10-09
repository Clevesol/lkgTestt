@extends('layouts.main')


@section('content')


  
	<div id="myCarousel" class="carousel slide">
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="" contenteditable="false"></li>
        <li data-target="#myCarousel" data-slide-to="1" class="active" contenteditable="false"></li>
        <li data-target="#myCarousel" data-slide-to="2" class="" contenteditable="false"></li>
    </ol>
    <div class="carousel-inner">
        <div class="item" style="">
            <img src="{{asset('img/cities/1.jpg')}}" alt="" class="img-responsive">
            <div class="carousel-caption">
                <h4 class="">First Slide Title</h4>
                <p class="">
                   Description for First Slide, this First Slide.
                </p>
            </div>
        </div>
        <div class="item active">
            <img src="{{asset('img/cities/11.jpg')}}" alt="" class="img-responsive">
            <div class="carousel-caption">
                <h4 class="">Second Slide Title</h4>

                <p class="">
                   Description for Second Slide, this is Second Slide.
                </p>
            </div>
        </div>
        <div class="item" style="">
            <img src="{{asset('img/cities/4.jpg')}}" alt="" class="img-responsive">
            <div class="carousel-caption">
                <h4 class="">Third Slide Title</h4>

                            <p class="">
                   Description for Third Slide, this is Third Slide.
                </p>
            </div>
        </div>
    </div>    

    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
    </a>

    <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
    </a>


</div>
    <!-- highlightSection -->
    <div class="highlightSection">
		<div class="container">
			<div class="row" align="center">

			     <a class="btn btn-lg btn-brand" href="/test"> <i class="fa fa-phone" aria-hidden="true"></i><span> &nbsp; &nbsp; Plan Your Trip Now &nbsp; &nbsp;</span> <i class="fa fa-phone" aria-hidden="true"></i></a>
	
			</div>
		</div>
	</div>
  
  <div class="services">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-10 col-lg-offset-1">
        <div class="row">
           <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 div-padding">
                                <div class="box london">
                                    <div class="box-icon">
                                        <img src="http://www.srilankanexpeditions.com/tour_img/75813.jpg" alt="Image" class="img-responsive">
                                    </div>
                                    <div class="info float-container">
                                        <div class="col-sm-12 london-title">
                                            <h3 class="text-uppercase">Unawatuna Beach</h3>
                                            {{-- <h4 class="text-uppercase">mauris vitae erat</h4> --}}
                                        </div>
                                        <p>Sinharaja Forest Reserve is a national park and a biodiversity hotspot in Sri Lanka. It is of international significance and has been designated a Biosphere Reserve and World Heritage Site by UNESCO.  </p><hr />
                                        <div class="col-sm-12 location-main"> 
                                            <div class="pull-left location">
                                                <i class="fa fa-map-marker fa-2x"></i><span>LONDON</span>
                                            </div>
                                            <div class="pull-right user-icons">
                                                <a href="#"><i class="fa fa-star fa-2x"></i></a>
                                                <a href="#"><i class="fa fa-user fa-2x"></i></a>
                                                <a href="#"><i class="fa fa-twitter fa-2x"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                     </div>
           <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 div-padding">
                                <div class="box london">
                                    <div class="box-icon">
                                        <img src="http://www.srilankanexpeditions.com/tour_img/75813.jpg" alt="Image" class="img-responsive">
                                    </div>
                                    <div class="info float-container">
                                        <div class="col-sm-12 london-title">
                                            <h3 class="text-uppercase">Sinharaja Forest</h3>
                                            {{-- <h4 class="text-uppercase">mauris vitae erat</h4> --}}
                                        </div>
                                        <p>Sinharaja Forest Reserve is a national park and a biodiversity hotspot in Sri Lanka. It is of international significance and has been designated a Biosphere Reserve and World Heritage Site by UNESCO. </p><hr />
                                        <div class="col-sm-12 location-main"> 
                                            <div class="pull-left location">
                                                <i class="fa fa-map-marker fa-2x"></i><span>LONDON</span>
                                            </div>
                                            <div class="pull-right user-icons">
                                                <a href="#"><i class="fa fa-star fa-2x"></i></a>
                                                <a href="#"><i class="fa fa-user fa-2x"></i></a>
                                                <a href="#"><i class="fa fa-twitter fa-2x"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                     </div>
           <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 div-padding">
                                <div class="box london">
                                    <div class="box-icon">
                                        <img src="http://www.srilankanexpeditions.com/tour_img/75813.jpg" alt="Image" class="img-responsive">
                                    </div>
                                    <div class="info float-container">
                                        <div class="col-sm-12 london-title">
                                              <h3 class="text-uppercase">Sinharaja Forest</h3>
                                           {{--  <h4 class="text-uppercase">mauris vitae erat</h4> --}}
                                        </div>
                                        <p>Sinharaja Forest Reserve is a national park and a biodiversity hotspot in Sri Lanka. It is of international significance and has been designated a Biosphere Reserve and World Heritage Site by UNESCO. </p><hr />
                                        <div class="col-sm-12 location-main"> 
                                            <div class="pull-left location">
                                                <i class="fa fa-map-marker fa-2x"></i><span>LONDON</span>
                                            </div>
                                            <div class="pull-right user-icons">
                                                <a href="#"><i class="fa fa-star fa-2x"></i></a>
                                                <a href="#"><i class="fa fa-user fa-2x"></i></a>
                                                <a href="#"><i class="fa fa-twitter fa-2x"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                     </div>
           <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
                                <div class="box london">
                                    <div class="box-icon">
                                        <img src="http://www.srilankanexpeditions.com/tour_img/75813.jpg" alt="Image" class="img-responsive">
                                    </div>
                                    <div class="info float-container">
                                        <div class="col-sm-12 london-title">
                                            <h3 class="text-uppercase">Proin gravida nibhvel</h3>
                                            {{-- <h4 class="text-uppercase">mauris vitae erat</h4> --}}
                                        </div>
                                        <p>Sinharaja Forest Reserve is a national park and a biodiversity hotspot in Sri Lanka. It is of international significance and has been designated a Biosphere Reserve and World Heritage Site by UNESCO.  </p><hr />
                                        <div class="col-sm-12 location-main"> 
                                            <div class="pull-left location">
                                                <i class="fa fa-map-marker fa-2x"></i><span>LONDON</span>
                                            </div>
                                            <div class="pull-right user-icons">
                                                <a href="#"><i class="fa fa-star fa-2x"></i></a>
                                                <a href="#"><i class="fa fa-user fa-2x"></i></a>
                                                <a href="#"><i class="fa fa-twitter fa-2x"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                     </div>
         </div> 
      </div>
    </div>

	
	
    <div class="bodySection" style="">
		<div class="container">		
			
	   </div>
	</div>

					
				
		
		<div class="testimonails">
		<div class="container">
		<blockquote class="">
                <p>Comment section that loads from the database</p>
                <small> cleverso user</small>
            </blockquote>		
		</div>
		</div>
		
		<div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 col-md-offset-1 col-lg-offset-1 content-r">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-4"> 
				<h3 class="title">Reason to choose us</h3>
				<p>
				On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire
				</p>
				<ul>
					<li>Tick mark here Reason one</li>
					<li>Tick mark here  Reason one</li>
					<li>Tick mark here  Reason one</li>
					<li>Reason one</li>
					<li>Reason one</li>
					<li>Reason one</li>
				</ul>
				<p>
				On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire
				</p>
				<p>
				On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire
				</p>
			</div>
			<div class="col-sm-12 col-xs-12 col-md-8 col-lg-8 news">
			<div class="projectList">
				<h3 class="title">Latest News</h3>

				<ul class="event-list" id="nt-example1" style="height: 300px; overflow: hidden;">
				
				<li>
				<div class="media">

                   <time datetime="2014-07-20">
                            <span class="day">4</span>
                            <span class="month">Jul</span>          
                   </time>

				  <a class="pull-left" href="#">
					<img src="assets/custom/img/project1.jpg" class="projectImg" title="project one">
				  </a>

				  <div class="media-b">
					<h4 class="media-header"><a href="#">Projects One</a></h4>
					<p>
						On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire
					</p>
					<a class="pull-right" href="#">more details</a>
				  </div>
				</div>
				</li>
				
				<li>
				<div class="media">
                    <time datetime="2014-07-20">
                            <span class="day">4</span>
                            <span class="month">Jul</span>          
                   </time>
				  <a class="pull-left" href="#">
					<img src="assets/custom/img/project2.jpg" class="projectImg" title="project one">
				  </a>
				  <div class="media-b">
					<h4 class="media-header"><a href="#">Projects Two</a></h4>
					<p>
						On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire
					</p>
					<a class="pull-right" href="#">more details</a>
				  </div>
				</div>
				</li>
				<li>
				<div class="media">
                    <time datetime="2014-07-20">
                            <span class="day">4</span>
                            <span class="month">Jul</span>          
                   </time>
				  <a class="pull-left" href="#">
					<img src="assets/custom/img/project1.jpg" class="projectImg" title="project one">
				  </a>
				  <div class="media-b">
					<h4 class="media-header"><a href="#">Projects Three</a></h4>
					<p>
						On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire
					</p>
					<a class="pull-right" href="#">more details</a>
				  </div>
				</div>		
				</li>
				<li>
				<div class="media">
                    <time datetime="2014-07-20">
                            <span class="day">4</span>
                            <span class="month">Jul</span>          
                   </time>
				  <a class="pull-left" href="#">
					<img src="assets/custom/img/project1.jpg" class="projectImg" title="project one">
				  </a>
				  <div class="media-b">
					<h4 class="media-header"><a href="#">Projects Four</a></h4>
					<p>
						On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire
					</p>
					<a class="pull-right" href="#">more details</a>
				  </div>
				</div>		
				</li>
				<li>
				<div class="media">
                    <time datetime="2014-07-20">
                            <span class="day">4</span>
                            <span class="month">Jul</span>          
                   </time>
				  <a class="pull-left" href="#">
					<img src="assets/custom/img/project1.jpg" class="projectImg" title="project one">
				  </a>
				  <div class="media-b">
					<h4 class="media-header"><a href="#">Projects Five</a></h4>
					<p>
						On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire
					</p>
					<a class="pull-right" href="#">more details</a>
				  </div>
				</div>		
				</li>
			</ul>	
			</div>
			</div>
		</div>
		</div>
	
    <!-- clientSection -->
	<div class="col-md-10 col-lg-10 col-md-offset-1 col-lg-offset-1 clients">
		<h3 class="title">Our Clients</h3>
		<div class="clientSection">
			<div class="row">					
					<div class="col-md-2">
						<a href="#"><img alt="" src="assets/custom/img/14.png"></a>
					</div>
					<div class="col-md-2">
						<a href="#"><img alt="" src="assets/custom/img/35.png"></a>
					</div>
					<div class="col-md-2">
						<a href="#"><img alt="" src="assets/custom/img/1.png"></a>
					</div>
					<div class="col-md-2">
						<a href="#"><img alt="" src="assets/custom/img/2.png"></a>
					</div>
					<div class="col-md-2">
						<a href="#"><img alt="" src="assets/custom/img/3.png"></a>
					</div>
					<div class="col-md-2">
						<a href="#"><img alt="" src="assets/custom/img/4.png"></a>
					</div>
				</div>
		</div>
	 </div>

	
	
    <!-- footerTopSection -->
    <div class="footerTopSection">
		<div class="col-md-12"  style="background-color: #2F4F4F;">
			<div class="col-md-10 col-md-offset-1">
            <div class="row">
			  <div class="col-md-4">
			
				
				<span><h3>NEWS SLETTER</h3></span>
				<div>
					<form class="form-inline" role="form">
					  <div class="form-group">
						<label class="sr-only" for="exampleInputEmail2">Email address</label>
						<input type="email" class="form-control" id="exampleInputEmail2" placeholder="Enter email">
					 <button type="submit" class="btn btn-brand" style="margin-top: 10px;">Subscribe</button>
                     </div>
					  
					</form>
				</div>
                <span><h3>FIND US</h3></span>
                <div class="btn-group media-bar" role="group" aria-label="Button group with nested dropdown">
                  <button type="button" class="btn btn-secondary">1</button>
                  <button type="button" class="btn btn-secondary">2</button>
                  <button type="button" class="btn btn-secondary">1</button>
                  <button type="button" class="btn btn-secondary">2</button>
                </div>
				
			  </div>
		
			  <div class="col-md-4">
				
				<p class="ser-links links" align="center" style="margin-top: 20px;">
					
    					<a href="#">Our Services</a><br>
    					<a href="#">About us</a><br>
    					<a href="#">Our Network</a><br>
    					<a href="#">Our Products</a><br>
                        <a href="#">Our Expertise</a><br>
                        <a href="#">FAQ</a><br>

                    
				</p>
			
				
			  </div>
			  <div class="col-md-4" >
			
				<p class="ser-links" style="margin-top: 20px;">
					<span class="title">Cleverso Pvt Ltd</span><br>
					<span>aaaaaaaaaaaaaaaaaaaaa</span><br>
					<span>Sri Lanka</span><br>
					<span>P : +44 (0) 3419818</span><br>
					<span>E : hasitha@hotmail.com</span><br>
					<span>W :	www.cleverso.com</span><br>
				</p>
				
					
			  </div>

			</div>
		</div>
        </div>
	</div>


@endsection