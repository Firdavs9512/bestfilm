<!DOCTYPE html>

<html lang="en" class="no-js">

<!-- moviesingle07:38-->
<head>
	<!-- Basic need -->
	<title>BestFilm - {{ $movie->name }}</title>
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

<div class="hero sr-single-hero">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				{{-- <h1> movie listing - list</h1>
				<ul class="breadcumb">
					<li class="active"><a href="#">Home</a></li>
					<li> <span class="ion-ios-arrow-right"></span> movie listing</li>
				</ul> --}}
			</div>
		</div>
	</div>
</div>
<div class="page-single movie-single movie_single">
	<div class="container">
		<div class="row ipad-width2">
			<div class="col-md-4 col-sm-12 col-xs-12">
                <div class="movie-img">
					<img style="height: 521px" src="{{ url('storage/'.$movie->photo) }}" alt="">
					<div class="movie-btn">
						<div class="btn-transform transform-vertical red">
							<div><a href="{{ $movie->url }}" class="item item-1 redbtn"> <i class="ion-play"></i> Watch Trailer</a></div>
							<div><a href="{{ $movie->url }}" class="item item-2 redbtn fancybox-media hvr-grow"><i class="ion-play"></i></a></div>
						</div>
						<div class="btn-transform transform-vertical">
							<div><a href="{{ $movie->telegram }}" class="item item-1 yellowbtn"> <i class="ion-card"></i> Buy ticket</a></div>
							<div><a href="{{ $movie->telegram }}" class="item item-2 yellowbtn"><i class="ion-card"></i></a></div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-8 col-sm-12 col-xs-12">
				<div class="movie-single-ct main-content">
					<h1 class="bd-hd">{{ $movie->name }} <span>{{ date('Y', strtotime($movie->date)); }}</span></h1>
					<div class="social-btn">
						<a href="#" class="parent-btn"><i class="ion-heart"></i> Like for film</a>
						<div class="hover-bnt">
							<a href="#" class="parent-btn"><i class="ion-android-share-alt"></i>share</a>
							<div class="hvr-item">
								<a href="#" class="hvr-grow"><i class="ion-social-facebook"></i></a>
								<a href="#" class="hvr-grow"><i class="ion-social-twitter"></i></a>
								<a href="#" class="hvr-grow"><i class="ion-social-googleplus"></i></a>
								<a href="#" class="hvr-grow"><i class="ion-social-youtube"></i></a>
							</div>
						</div>
					</div>
					<div class="movie-rate">
						<div class="rate">
							<i class="ion-android-star"></i>
							<p><span>{{ $movie->reating }}</span> /10<br>
								<span class="rv">{{ $viw }} Reviews</span>
							</p>
						</div>
						<div class="rate-star">
							<p>Rate This Movie:  </p>
                            @for ($x = 0; $x < $movie->reating; $x++)
							<i class="ion-ios-star"></i>
                            @endfor
                            @for ($x = 0; $x < (10-$movie->reating); $x++)
							<i class="ion-ios-star-outline"></i>
                            @endfor
						</div>
					</div>
					<div class="movie-tabs">
						<div class="tabs">
							<ul class="tab-links tabs-mv">
								<li class="active"><a href="#overview">Overview</a></li>
								<li><a href="#cast">  Cast & Crew </a></li>
								<li><a href="#media"> Media</a></li>
								<li><a href="#moviesrelated"> Related Movies</a></li>
							</ul>
						    <div class="tab-content">
						        <div id="overview" class="tab active">
						            <div class="row">
						            	<div class="col-md-8 col-sm-12 col-xs-12">
						            		<p>{{ $movie->overview }}</p>
						            		<div class="title-hd-sm">
												<h4>Videos </h4>
												<a href="#" class="time">All {{ $movie->moviephotos->count() }} Photos <i class="ion-ios-arrow-right"></i></a>
											</div>
											<div class="mvsingle-item ov-item">
                                               @foreach ($movie->moviephotos as $moviephoto)
                                                    @if ($loop->index == 4)
                                                        @break
                                                    @endif
                                                   <a class="img-lightbox"  data-fancybox-group="gallery" href="{{ url('storage/'.$moviephoto->name) }}" ><img style="width: 100px;height: 100px;" src="{{ url('storage/'.$moviephoto->name) }}" alt=""></a>
                                               @endforeach

											</div>
											<div class="title-hd-sm">
												<h4>cast</h4>
												<a href="#" class="time">All Cast & Crew  <i class="ion-ios-arrow-right"></i></a>
											</div>
											<!-- movie cast -->
											<div class="mvcast-item">

                                                @foreach ($movie->actiors as $actior)
												<div class="cast-it">
                                                    <div class="cast-left">
                                                        <img style="width: 40px;height:40px;" src="{{ url('storage/'.$actior->photo) }}" alt="">
														<a href="{{ route('actiorpage',$actior->id) }}">{{ $actior->name }}.</a>
													</div>
													<p>{{ $actior->birdday }}</p>
												</div>
                                                @endforeach

											</div>

						            	</div>
						            	<div class="col-md-4 col-xs-12 col-sm-12">
						            		<div class="sb-it">
						            			<h6>Director: </h6>
						            			<p><a>{{ $movie->director }}</a></p>
						            		</div>
						            		<div class="sb-it">
						            			<h6>Genres:</h6>
						            			<p>
                                                    @foreach ($movie->categories as $category)
                                                    <a href="#"> {{ $category->name }},</a>
                                                    @endforeach
                                                </p>
						            		</div>
						            		<div class="sb-it">
						            			<h6>Release Date:</h6>
						            			<p>{{ date('M d, Y', strtotime($movie->date)); }} </p>
						            		</div>
						            		<div class="sb-it">
						            			<h6>Run Time:</h6>
						            			<p>{{ date('h', strtotime($movie->filtime)); }}-hour {{ date('m', strtotime($movie->filtime)); }}-min</p>
						            		</div>
						            		<div class="sb-it">
						            			<h6>MMPA Rating:</h6>
						            			<p>{{ $movie->mmpa }}</p>
						            		</div>
						            		<div class="sb-it">
						            			<h6>Plot Keywords:</h6>
						            			<p class="tags">
                                                    @foreach ($movie->tags as $tag)
						            				<span class="time"><a href="#">{{ $tag->name }}</a></span>
                                                    @endforeach
						            			</p>
						            		</div>
						            		<div class="ads">
												<img src="{{ url('images/uploads/ads1.png') }}" alt="">
											</div>
						            	</div>
						            </div>
						        </div>

						        <div id="cast" class="tab">
						        	<div class="row">
						            	<h3>Cast & Crew of</h3>
					       	 			<h2>{{ $movie->name }}</h2>
										<!-- //== -->
					       	 			<div class="title-hd-sm">
											<h4>Directors & Credit Writers</h4>
										</div>
										<div class="mvcast-item">
											<div class="cast-it">
												<div class="cast-left">
													<h4>DC</h4>
													<a href="#">{{ $movie->director }}</a>
												</div>
												<p>{{ $movie->date }}</p>
											</div>
										</div>
										<!-- //== -->
										<div class="title-hd-sm">
											<h4>Cast</h4>
										</div>
										<div class="mvcast-item">

                                            @foreach ($movie->actiors as $actior)
											<div class="cast-it">
                                                <div class="cast-left">
                                                    <img style="width: 40px;height:40px;" src="{{ url('storage/'.$actior->photo) }}" alt="">
													<a href="#">{{ $actior->name }}.</a>
												</div>
												<p>{{ $actior->birdday }}</p>
											</div>
                                            @endforeach


										</div>
										<!-- //== -->
						            </div>
					       	 	</div>
					       	 	<div id="media" class="tab">
						        	<div class="row">
						        		<div class="rv-hd">
						            		<div>
						            			<h3>Photos of</h3>
					       	 					<h2>{{ $movie->name }}</h2>
						            		</div>
						            	</div>
										<div class="title-hd-sm">
											<h4>Photos <span> ({{ $movie->moviephotos->count() }})</span></h4>
										</div>
										<div class="mvsingle-item">
											@foreach ($movie->moviephotos as $photo)
                                            <a class="img-lightbox"  data-fancybox-group="gallery" href="{{ url('storage/'.$photo->name) }}" ><img style="width: 100px;height:100px;" src="{{ url('storage/'.$photo->name) }}" alt=""></a>
                                            @endforeach
										</div>
						        	</div>
					       	 	</div>
					       	 	<div id="moviesrelated" class="tab">
					       	 		<div class="row">
					       	 			<h3>Related Movies To</h3>
					       	 			<h2>Skyfall: Quantum of Spectre</h2>
					       	 			<div class="topbar-filter">
											<p>Last <span>10 movies</span></p>
											<label>Sort by:</label>
											<select>
												<option value="popularity">Popularity Descending</option>
												<option value="popularity">Popularity Ascending</option>
												<option value="rating">Rating Descending</option>
												<option value="rating">Rating Ascending</option>
												<option value="date">Release date Descending</option>
												<option value="date">Release date Ascending</option>
											</select>
										</div>

                                        @foreach ($films as $film)
										<div class="movie-item-style-2">
                                            <img style="width: 170px;height:261px" src="{{ url('storage/'.$film->photo) }}" alt="">
											<div class="mv-item-infor">
                                                <h6><a href="{{ route('moviepage',$film->id) }}">{{ $film->name }} <span>({{ date('Y', strtotime($film->date)); }})</span></a></h6>
												<p class="rate"><i class="ion-android-star"></i><span>{{ $film->reating }}</span> /10</p>
												<p class="describe">{{ $film->overview }}</p>
												<p class="run-time"> Run Time: {{ date('h', strtotime($film->filtime)); }}:{{ date('m', strtotime($film->filtime)); }}-min    .     <span>MMPA: {{ $film->mmpa }} </span>    .     <span>Release: {{ date('d M Y', strtotime($film->date)); }}</span></p>
												<p>Director: <a>{{ $film->director }}</a></p>
											</div>
										</div>
                                        @endforeach

										<div class="topbar-filter">
											<label>Movies per page:</label>
											<select>
												<option value="saab">10 Movies</option>
											</select>
											<div class="pagination2">
												<span>Page 1 of 1:</span>
												<a class="active" href="#">1</a>
												<a href="#"><i class="ion-arrow-right-b"></i></a>
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

<!-- moviesingle11:03-->
</html>
