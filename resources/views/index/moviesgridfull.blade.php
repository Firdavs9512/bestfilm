<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7 no-js" lang="en-US">
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8 no-js" lang="en-US">
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html lang="en" class="no-js">

<!-- moviegridfw07:38-->
<head>
	<!-- Basic need -->
	<title>All movies in oon web site!</title>
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
@include('layauts.mainheader')
<div class="hero common-hero">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="hero-ct">
					<h1>Movie Listing - All movie</h1>
					<ul class="breadcumb">
						<li class="active"><a href="#">Home</a></li>
						<li> <span class="ion-ios-arrow-right"></span> movie listing</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="page-single">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="topbar-filter fw">
					<p>Found <span>{{ $moviescount }} movies</span> in total</p>
					<label>Sort by:</label>
					<select>
						<option value="popularity">Popularity Descending</option>
						<option value="popularity">Popularity Ascending</option>
						<option value="rating">Rating Descending</option>
						<option value="rating">Rating Ascending</option>
						<option value="date">Release date Descending</option>
						<option value="date">Release date Ascending</option>
					</select></div>
				<div class="flex-wrap-movielist mv-grid-fw">

                        @foreach ($movies as $movie)
						<div class="movie-item-style-2 movie-item-style-1">
                            <img style="width: 170px;height: 260px" src="{{ url('storage/'.$movie->photo) }}"alt="">
							<div class="hvr-inner">
                                <a  href="{{ route('moviepage',$movie->id) }}"> Read more <i class="ion-android-arrow-dropright"></i> </a>
	            			</div>
							<div class="mv-item-infor">
                                <h6><a href="{{ route('moviepage',$movie->id) }}">{{ $movie->name }}</a></h6>
								<p class="rate"><i class="ion-android-star"></i><span>{{ $movie->reating }}</span> /10</p>
							</div>
						</div>
                        @endforeach

				</div>
				<div class="topbar-filter">
					<label>Movies per page:</label>
					<select>
						<option value="range">30 Movies</option>
					</select>

					<div class="pagination2">
						<span>Page {{ $movies->lastItem() }} of {{ $movies->total() }}:</span>

                        {{ $movies->links('vendor.pagination.defaultindex') }}
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

<!-- moviegridfw07:38-->
</html>
