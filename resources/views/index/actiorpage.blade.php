<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7 no-js" lang="en-US">
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8 no-js" lang="en-US">
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html lang="en" class="no-js">

<!-- celebritysingle12:04-->
<head>
	<!-- Basic need -->
	<title>{{ $actior->name }} - Full biographi</title>
	<meta charset="UTF-8">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<link rel="profile" href="#">

    <!--Google Font-->
    <link rel="stylesheet" href='http://fonts.googleapis.com/css?family=Dosis:400,700,500|Nunito:300,400,600' />
	<!-- Mobile specific meta -->
	<meta name=viewport content="width=device-width, initial-scale=1">
	<meta name="format-detection" content="telephone-no">

	<!-- CSS files -->
	<link rel="stylesheet" href="{{ url('css/plugins.css') }}">
	<link rel="stylesheet" href="{{ url('css/style.css') }}">

</head>
<body>
<!--preloading-->
<div id="preloader">
    <img class="logo" src="{{ url('images/logo1.png') }}" alt="" width="119" height="58">
    <div id="status">
        <span></span>
        <span></span>
    </div>
</div>
<!--end of preloading-->
<!--login form popup-->
@include('layauts.signin')
<!--end of login form popup-->
<!--signup form popup-->
@include('layauts.signup')
<!--end of signup form popup-->

<!-- BEGIN | Header -->
@include('layauts.mainheader')
<!-- END | Header -->

<div class="hero hero3">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<!-- <h1> movie listing - list</h1>
				<ul class="breadcumb">
					<li class="active"><a href="#">Home</a></li>
					<li> <span class="ion-ios-arrow-right"></span> movie listing</li>
				</ul> -->
			</div>
		</div>
	</div>
</div>
<!-- celebrity single section-->

<div class="page-single movie-single cebleb-single">
	<div class="container">
		<div class="row ipad-width">
			<div class="col-md-4 col-sm-12 col-xs-12">
				<div class="mv-ceb">
					<img style="height: 490px" src="{{ url('storage/'.$actior->photo) }}" alt="">
				</div>
			</div>
			<div class="col-md-8 col-sm-12 col-xs-12">
				<div class="movie-single-ct">
					<h1 class="bd-hd">{{ $actior->name }}</h1>
					<p class="ceb-single">Actor  |  Producer</p>
					<div class="social-link cebsingle-socail">
						<a href="#"><i class="ion-social-facebook"></i></a>
						<a href="#"><i class="ion-social-twitter"></i></a>
						<a href="#"><i class="ion-social-googleplus"></i></a>
						<a href="#"><i class="ion-social-linkedin"></i></a>
					</div>
					<div class="movie-tabs">
						<div class="tabs">
							<ul class="tab-links tabs-mv">
								<li class="active"><a href="#overviewceb">Overview</a></li>
								<li><a href="#biography"> biography</a></li>
								<li><a href="#mediaceb"> Media</a></li>
								<li><a href="#filmography">filmography</a></li>
							</ul>
						    <div class="tab-content">
						        <div id="overviewceb" class="tab active">
						            <div class="row">
						            	<div class="col-md-8 col-sm-12 col-xs-12">
						            		<p>{{ $actior->overview }}</p>
											<p class="time"><a href="#">See full bio <i class="ion-ios-arrow-right"></i></a></p>
						            		<div class="title-hd-sm">
												<h4>Photos</h4>
												<a href="#" class="time">All {{ $actior->actiorPhotos()->count() }} Photos <i class="ion-ios-arrow-right"></i></a>
											</div>
											<div class="mvsingle-item ov-item">
                                                @foreach ($actior->actiorPhotos as $moviephoto)
                                                    @if ($loop->index == 4)
                                                        @break
                                                    @endif
                                                   <a class="img-lightbox"  data-fancybox-group="gallery" href="{{ url('storage/'.$moviephoto->name) }}" ><img style="width: 100px;height: 100px;" src="{{ url('storage/'.$moviephoto->name) }}" alt=""></a>
                                                   @endforeach

											</div>
											<div class="title-hd-sm">
												<h4>filmography</h4>
												<a href="#" class="time">Full Filmography<i class="ion-ios-arrow-right"></i></a>
											</div>
											<!-- movie cast -->
											<div class="mvcast-item">

                                                @foreach ($filmlar as $film)
												<div class="cast-it">
                                                    <div class="cast-left cebleb-film">
                                                        <img style="width: 55px;height:77px" src="{{ url('storage/'.$film->photo) }}" alt="">
														<div>
                                                            <a href="{{ route('moviepage',$film->id) }}">{{ $film->name }} </a>
															<p class="time">Reting: {{ $film->reating }}</p>
														</div>

													</div>
													<p>...  {{ date('Y', strtotime($film->date)) }}</p>
												</div>
                                                @endforeach

											</div>
						            	</div>
						            	<div class="col-md-4 col-xs-12 col-sm-12">
						            		<div class="sb-it">
						            			<h6>Fullname:  </h6>
						            			<p><a href="#">{{ $actior->name }}</a></p>
						            		</div>
						            		<div class="sb-it">
						            			<h6>Date of Birth: </h6>
						            			<p>{{ date('M d, Y', strtotime($actior->birday)) }}</p>
						            		</div>
						            		<div class="sb-it">
						            			<h6>Country:  </h6>
						            			<p>{{ $actior->country }}</p>
						            		</div>
						            		<div class="sb-it">
						            			<h6>Height:</h6>
						            			<p>186 cm/p>
						            		</div>
						            		<div class="ads">
												<img src="{{ url('images/uploads/ads1.png') }}" alt="">
											</div>
						            	</div>
						            </div>
						        </div>
						        <div id="biography" class="tab">
						           <div class="row">
						            	<div class="rv-hd">
											<div>
												<h3>Biography of</h3>
						       	 				<h2>{{ $actior->name }}</h2>
											</div>
						            	</div>
						            	<p>{{ $actior->biographi }}</p>
						            </div>
						        </div>
						        <div id="mediaceb" class="tab">
						        	<div class="row">
						        		<div class="rv-hd">
						            		<div>
						            			<h3>Biography of</h3>
					       	 					<h2>{{ $actior->name }}</h2>
						            		</div>
						            	</div>

										<div class="title-hd-sm">
											<h4>Photos <span> ({{ $actior->actiorPhotos->count() }})</span></h4>
										</div>
										<div class="mvsingle-item">

                                            @foreach ($actior->actiorPhotos as $photo)
											<a class="img-lightbox"  data-fancybox-group="gallery" href="{{ url('storage/'.$photo->name) }}" ><img style="width: 100px; height:100px" src="{{ url('storage/'.$photo->name) }}" alt=""></a>
                                            @endforeach
										</div>
						        	</div>
					       	 	</div>
					       	 	<div id="filmography" class="tab">
						        	<div class="row">
						            	<div class="rv-hd">
						            		<div>
						            			<h3>Biography of</h3>
					       	 					<h2>{{ $actior->name }}</h2>
						            		</div>

						            	</div>
						            	<div class="topbar-filter">
											<p>Found <span>{{ $actior->movies->count() }} movies</span> in total</p>
											<label>Filter by:</label>
											<select>
												<option value="popularity">Popularity Descending</option>
												<option value="popularity">Popularity Ascending</option>
												<option value="rating">Rating Descending</option>
												<option value="rating">Rating Ascending</option>
												<option value="date">Release date Descending</option>
												<option value="date">Release date Ascending</option>
											</select>
										</div>
										<!-- movie cast -->
										<div class="mvcast-item">

                                            @foreach ($actior->movies as $movie)
											<div class="cast-it">
                                                <div class="cast-left cebleb-film">
                                                    <img style="width: 55px; height:77px" src="{{ url('storage/'.$movie->photo) }}" alt="">
													<div>
                                                        <a href="{{ route('moviepage',$movie->id) }}">{{ $movie->name }} </a>
														<p class="time">Reting: {{ $movie->reating }}</p>
													</div>

												</div>
												<p>...  {{ date('Y',strtotime($movie->date)) }}</p>
											</div>
                                            @endforeach

										</div>
						            </div>
					       	 	</div>
						    </div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
</div>
<!-- celebrity single section-->

<!-- footer section-->
<footer class="ht-footer">
	<div class="container">
		<div class="flex-parent-ft">
			<div class="flex-child-ft item1">
				 <a href="index-2.html"><img class="logo" src="images/logo1.png" alt=""></a>
				 <p>Web site Create Firdavs<br>
				Full BackEnd</p>
				<p>Call us: <a href="https://github.com/firdavs9512">
                      Github.com</a></p>
			</div>
			<div class="flex-child-ft item2">
				<h4>Resources</h4>
				<ul>
					<li><a href="#">Home</a></li>
					<li><a href="#">Movies list</a></li>
					<li><a href="#">Actiors list</a></li>
					<li><a href="#">Login</a></li>
					<li><a href="#">Register</a></li>
				</ul>
			</div>
			<div class="flex-child-ft item3">
				<h4>Legal</h4>
				<ul>
					<li><a href="#">Terms of Use</a></li>
					<li><a href="#">Privacy Policy</a></li>
					<li><a href="#">Security</a></li>
				</ul>
			</div>
			<div class="flex-child-ft item4">
				<h4>Admin</h4>
				<ul>
					<li><a href="#">Movies</a></li>
					<li><a href="#">Statistic</a></li>
					<li><a href="#">Collections</a></li>
					<li><a href="#">User Guide</a></li>
				</ul>
			</div>
			<div class="flex-child-ft item5">
				<h4>Newsletter</h4>
				<p>Subscribe to our newsletter system now <br> to get latest news from us.</p>
				<form action="#">
					<input type="text" placeholder="Enter your email...">
				</form>
				<a href="#" class="btn">Subscribe now <i class="ion-ios-arrow-forward"></i></a>
			</div>
		</div>
	</div>
	<div class="ft-copyright">
		<div class="ft-left">
			<p><a target="_blank" href="https://github.com/firdavs9512">Creater Firdavs</a></p>
		</div>
		<div class="backtotop">
			<p><a href="#" id="back-to-top">Back to top  <i class="ion-ios-arrow-thin-up"></i></a></p>
		</div>
	</div>
</footer>
<!-- end of footer section-->

<script src="{{ url('js/jquery.js') }}"></script>
<script src="{{ url('js/plugins.js') }}"></script>
<script src="{{ url('js/plugins2.js') }}"></script>
<script src="{{ url('js/custom.js') }}"></script>
</body>

<!-- celebritysingle12:18-->
</html>
