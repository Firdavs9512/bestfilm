<!DOCTYPE html>
<html lang="en" class="no-js">


<head>
	<!-- Basic need -->
	<title>Open Pediatrics</title>
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
	<link rel="stylesheet" href="css/plugins.css">
	<link rel="stylesheet" href="css/style.css">

</head>
<body>
<!--preloading-->
<div id="preloader">
    <img class="logo" src="images/logo1.png" alt="" width="119" height="58">
    <div id="status">
        <span></span>
        <span></span>
    </div>
</div>
<!--end of preloading-->
<!--login form popup-->
@include('layauts.signin')
<!--signup form popup-->

@include('layauts.signup')

<!--end of signup form popup-->

@include('layauts.mainheader')

<div class="slider movie-items">
	<div class="container">
		<div class="row">
			<div class="social-link">
				<p>Follow us:{{ auth()->user() }} </p>
				<a href="#"><i class="ion-social-facebook"></i></a>
				<a href="#"><i class="ion-social-twitter"></i></a>
				<a href="#"><i class="ion-social-youtube"></i></a>
			</div>
	    	<div  class="slick-multiItemSlider">


	    		@foreach ($post as $movie)
                <div class="movie-item">
                    <div class="mv-imgs image-uchun">
                        <a href="#"><img style="width: 100%;height: 100%;" src="{{ url('storage/'.$movie->photo) }}" alt="" width="285" height="437"></a>
	    			</div>
	    			<div class="title-in">
                        <div class="cate">
                            @foreach ($movie->categories as $category)
                            <span class="blue"><a href="#">{{ $category->name }}</a></span>
                            @endforeach
	    				</div>
	    				<h6><a href="{{ url('/movies/'.$movie->id) }}">{{ $movie->name }}</a></h6>
	    				<p><i class="ion-android-star"></i><span>{{ $movie->reating }}</span> /10</p>
	    			</div>
	    		</div>
                @endforeach

				<div class="movie-item">
	    			<div class="mv-imgs">
	    				<a href="#"><img src="images/uploads/slider2.jpg" alt="" width="285" height="437"></a>
	    			</div>
	    			<div class="title-in">
	    				<div class="cate">
	    					<span class="yell"><a href="#">action</a></span>
	    				</div>
	    				<h6><a href="#">The revenant</a></h6>
	    				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
	    			</div>
	    		</div>
	    		<div class="movie-item">
	    			<div class="mv-imgs">
	    				<a href="#"><img src="images/uploads/slider3.jpg" alt="" width="285" height="437"></a>
	    			</div>
	    			<div class="title-in">
	    				<div class="cate">
	    					<span class="green"><a href="#">comedy</a></span>
	    				</div>
	    				<h6><a href="#">Die hard</a></h6>
	    				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
	    			</div>
	    		</div>
	    		<div class="movie-item">
	    			<div class="mv-imgs">
	    				<a href="#"><img src="images/uploads/slider4.jpg" alt="" width="285" height="437"></a>
	    			</div>
	    			<div class="title-in">
	    				<div class="cate">
	    					<span class="blue"><a href="#">Sci-fi</a></span> <span class="orange"><a href="#">advanture</a></span>
	    				</div>
	    				<h6><a href="#">The walk</a></h6>
	    				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
	    			</div>
	    		</div>
	    	</div>
	    </div>
	</div>
</div>
<div class="movie-items">
	<div class="container">
		<div class="row ipad-width">
			<div class="col-md-8">
				<div class="title-hd">
					<h2>in theater</h2>
					<a href="#" class="viewall">View all <i class="ion-ios-arrow-right"></i></a>
				</div>
				<div class="tabs">
					<ul class="tab-links">
						<li class="active"><a href="#tab1">#Popular</a></li>
						<li><a href="#tab2"> #Coming soon</a></li>
						<li><a href="#tab3">  #Top rated  </a></li>
						<li><a href="#tab4"> #Most reviewed</a></li>
					</ul>
				    <div class="tab-content">
				        <div id="tab1" class="tab active">
				            <div class="row">
				            	<div class="slick-multiItem">
				            		<div class="slide-it">
				            			<div class="movie-item">
					            			<div class="mv-img">
					            				<img src="images/uploads/mv-item1.jpg" alt="" width="185" height="284">
					            			</div>
					            			<div class="hvr-inner">
					            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
					            			</div>
					            			<div class="title-in">
					            				<h6><a href="#">Interstellar</a></h6>
					            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
					            			</div>
					            		</div>
				            		</div>

                                    @foreach ($pupul as $movie)
									<div class="slide-it">
                                        <div class="movie-item">
                                            <div class="mv-img">
                                                <img style="height: 100%" src="{{ url('storage/'.$movie->photo) }}" alt="" width="185" height="284">
					            			</div>
					            			<div class="hvr-inner">
                                                <a  href="{{ route('moviepage',$movie->id) }}"> Read more <i class="ion-android-arrow-dropright"></i> </a>
					            			</div>
					            			<div class="title-in">
                                                <h6><a href="{{ route('moviepage',$movie->id) }}">{{ $movie->name }}</a></h6>
					            				<p><i class="ion-android-star"></i><span>{{ $movie->reating }}</span> /10</p>
					            			</div>
					            		</div>
									</div>
                                    @if ($loop->index > 10)
                                        @break
                                    @endif
                                    @endforeach

                                    <div class="slide-it">
				            			<div class="movie-item">
					            			<div class="mv-img">
					            				<img src="images/uploads/mv-item3.jpg" alt="" width="185" height="284">
					            			</div>
					            			<div class="hvr-inner">
					            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
					            			</div>
					            			<div class="title-in">
					            				<h6><a href="#">Die hard</a></h6>
					            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
					            			</div>
					            		</div>
				            		</div>
				            		<div class="slide-it">
				            			<div class="movie-item">
					            			<div class="mv-img">
					            				<img src="images/uploads/mv-item4.jpg" alt="" width="185" height="284">
					            			</div>
					            			<div class="hvr-inner">
					            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
					            			</div>
					            			<div class="title-in">
					            				<h6><a href="#">The walk</a></h6>
					            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
					            			</div>
					            		</div>
				            		</div>
				            		<div class="slide-it">
				            			<div class="movie-item">
					            			<div class="mv-img">
					            				<img src="images/uploads/mv-item5.jpg" alt="" width="185" height="284">
					            			</div>
					            			<div class="hvr-inner">
					            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
					            			</div>
					            			<div class="title-in">
					            				<h6><a href="#">Interstellar</a></h6>
					            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
					            			</div>
					            		</div>
				            		</div>
									<div class="slide-it">
										<div class="movie-item">
					            			<div class="mv-img">
					            				<img src="images/uploads/mv-item6.jpg" alt="" width="185" height="284">
					            			</div>
					            			<div class="hvr-inner">
					            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
					            			</div>
					            			<div class="title-in">
					            				<h6><a href="#">The revenant</a></h6>
					            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
					            			</div>
					            		</div>
									</div>
				            		<div class="slide-it">
				            			<div class="movie-item">
					            			<div class="mv-img">
					            				<img src="images/uploads/mv-item7.jpg" alt="" width="185" height="284">
					            			</div>
					            			<div class="hvr-inner">
					            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
					            			</div>
					            			<div class="title-in">
					            				<h6><a href="#">Die hard</a></h6>
					            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
					            			</div>
					            		</div>
				            		</div>
				            		<div class="slide-it">
				            			<div class="movie-item">
					            			<div class="mv-img">
					            				<img src="images/uploads/mv-item8.jpg" alt="" width="185" height="284">
					            			</div>
					            			<div class="hvr-inner">
					            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
					            			</div>
					            			<div class="title-in">
					            				<h6><a href="#">The walk</a></h6>
					            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
					            			</div>
					            		</div>
				            		</div>
				            		<div class="slide-it">
				            			<div class="movie-item">
					            			<div class="mv-img">
					            				<img src="images/uploads/mv-item3.jpg" alt="" width="185" height="284">
					            			</div>
					            			<div class="hvr-inner">
					            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
					            			</div>
					            			<div class="title-in">
					            				<h6><a href="#">Die hard</a></h6>
					            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
					            			</div>
					            		</div>
				            		</div>
				            	</div>
				            </div>
				        </div>
				        <div id="tab2" class="tab">
				           <div class="row">
				            	<div class="slick-multiItem">
				            		<div class="slide-it">
				            			<div class="movie-item">
					            			<div class="mv-img">
					            				<img src="images/uploads/mv-item5.jpg" alt="" width="185" height="284">
					            			</div>
					            			<div class="hvr-inner">
					            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
					            			</div>
					            			<div class="title-in">
					            				<h6><a href="#">Interstellar</a></h6>
					            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
					            			</div>
					            		</div>
				            		</div>

                                    @foreach ($pupul2 as $movie)
									<div class="slide-it">
                                        <div class="movie-item">
                                            <div class="mv-img">
                                                <img style="height: 100%" src="{{ url('storage/'.$movie->photo) }}" alt="" width="185" height="284">
					            			</div>
					            			<div class="hvr-inner">
                                                <a  href="{{ route('moviepage',$movie->id) }}"> Read more <i class="ion-android-arrow-dropright"></i> </a>
					            			</div>
					            			<div class="title-in">
                                                <h6><a href="{{ route('moviepage',$movie->id) }}">{{ $movie->name }}</a></h6>
					            				<p><i class="ion-android-star"></i><span>{{ $movie->reating }}</span> /10</p>
					            			</div>
					            		</div>
									</div>
                                    @if ($loop->index > 10)
                                        @break
                                    @endif
                                    @endforeach

				            		<div class="slide-it">
				            			<div class="movie-item">
					            			<div class="mv-img">
					            				<img src="images/uploads/mv-item7.jpg" alt="" width="185" height="284">
					            			</div>
					            			<div class="hvr-inner">
					            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
					            			</div>
					            			<div class="title-in">
					            				<h6><a href="#">Die hard</a></h6>
					            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
					            			</div>
					            		</div>
				            		</div>
				            		<div class="slide-it">
				            			<div class="movie-item">
					            			<div class="mv-img">
					            				<img src="images/uploads/mv-item8.jpg" alt="" width="185" height="284">
					            			</div>
					            			<div class="hvr-inner">
					            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
					            			</div>
					            			<div class="title-in">
					            				<h6><a href="#">The walk</a></h6>
					            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
					            			</div>
					            		</div>
				            		</div>
				            		<div class="slide-it">
				            			<div class="movie-item">
					            			<div class="mv-img">
					            				<img src="images/uploads/mv-item3.jpg" alt="" width="185" height="284">
					            			</div>
					            			<div class="hvr-inner">
					            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
					            			</div>
					            			<div class="title-in">
					            				<h6><a href="#">Die hard</a></h6>
					            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
					            			</div>
					            		</div>
				            		</div>
				            	</div>
				            </div>
				        </div>
				        <div id="tab3" class="tab">
				        	<div class="row">
				            	<div class="slick-multiItem">
				            		<div class="slide-it">
				            			<div class="movie-item">
					            			<div class="mv-img">
					            				<img src="images/uploads/mv-item1.jpg" alt="" width="185" height="284">
					            			</div>
					            			<div class="hvr-inner">
					            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
					            			</div>
					            			<div class="title-in">
					            				<h6><a href="#">Interstellar</a></h6>
					            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
					            			</div>
					            		</div>
				            		</div>

                                    @foreach ($pupul3 as $movie)
									<div class="slide-it">
                                        <div class="movie-item">
                                            <div class="mv-img">
                                                <img style="height: 100%;width:100%" src="{{ url('storage/'.$movie->photo) }}" alt="" width="185" height="284">
					            			</div>
					            			<div class="hvr-inner">
                                                <a  href="{{ route('moviepage',$movie->id) }}"> Read more <i class="ion-android-arrow-dropright"></i> </a>
					            			</div>
					            			<div class="title-in">
                                                <h6><a href="{{ route('moviepage',$movie->id) }}">{{ $movie->name }}</a></h6>
					            				<p><i class="ion-android-star"></i><span>{{ $movie->reating }}</span> /10</p>
					            			</div>
					            		</div>
									</div>
                                    @if ($loop->index > 10)
                                        @break
                                    @endif
                                    @endforeach

                                    <div class="slide-it">
				            			<div class="movie-item">
					            			<div class="mv-img">
					            				<img src="images/uploads/mv-item3.jpg" alt="" width="185" height="284">
					            			</div>
					            			<div class="hvr-inner">
					            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
					            			</div>
					            			<div class="title-in">
					            				<h6><a href="#">Die hard</a></h6>
					            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
					            			</div>
					            		</div>
				            		</div>
				            		<div class="slide-it">
				            			<div class="movie-item">
					            			<div class="mv-img">
					            				<img src="images/uploads/mv-item4.jpg" alt="" width="185" height="284">
					            			</div>
					            			<div class="hvr-inner">
					            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
					            			</div>
					            			<div class="title-in">
					            				<h6><a href="#">The walk</a></h6>
					            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
					            			</div>
					            		</div>
				            		</div>
				            		<div class="slide-it">
				            			<div class="movie-item">
					            			<div class="mv-img">
					            				<img src="images/uploads/mv-item3.jpg" alt="" width="185" height="284">
					            			</div>
					            			<div class="hvr-inner">
					            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
					            			</div>
					            			<div class="title-in">
					            				<h6><a href="#">Die hard</a></h6>
					            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
					            			</div>
					            		</div>
				            		</div>
				            	</div>
				            </div>
			       	 	</div>
			       	 	<div id="tab4" class="tab">
				        	<div class="row">
				            	<div class="slick-multiItem">
				            		<div class="slide-it">
				            			<div class="movie-item">
					            			<div class="mv-img">
					            				<img src="images/uploads/mv-item5.jpg" alt="" width="185" height="284">
					            			</div>
					            			<div class="hvr-inner">
					            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
					            			</div>
					            			<div class="title-in">
					            				<h6><a href="#">Interstellar</a></h6>
					            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
					            			</div>
					            		</div>
				            		</div>
									<div class="slide-it">
										<div class="movie-item">
					            			<div class="mv-img">
					            				<img src="images/uploads/mv-item6.jpg" alt="" width="185" height="284">
					            			</div>
					            			<div class="hvr-inner">
					            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
					            			</div>
					            			<div class="title-in">
					            				<h6><a href="#">The revenant</a></h6>
					            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
					            			</div>
					            		</div>
									</div>
				            		<div class="slide-it">
				            			<div class="movie-item">
					            			<div class="mv-img">
					            				<img src="images/uploads/mv-item7.jpg" alt="" width="185" height="284">
					            			</div>
					            			<div class="hvr-inner">
					            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
					            			</div>
					            			<div class="title-in">
					            				<h6><a href="#">Die hard</a></h6>
					            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
					            			</div>
					            		</div>
				            		</div>
				            		<div class="slide-it">
				            			<div class="movie-item">
					            			<div class="mv-img">
					            				<img src="images/uploads/mv-item8.jpg" alt="" width="185" height="284">
					            			</div>
					            			<div class="hvr-inner">
					            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
					            			</div>
					            			<div class="title-in">
					            				<h6><a href="#">The walk</a></h6>
					            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
					            			</div>
					            		</div>
				            		</div>
				            		<div class="slide-it">
				            			<div class="movie-item">
					            			<div class="mv-img">
					            				<img src="images/uploads/mv-item3.jpg" alt="" width="185" height="284">
					            			</div>
					            			<div class="hvr-inner">
					            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
					            			</div>
					            			<div class="title-in">
					            				<h6><a href="#">Die hard</a></h6>
					            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
					            			</div>
					            		</div>
				            		</div>
				            	</div>
				            </div>
			       	 	</div>
				    </div>
				</div>
				<div class="title-hd">
					<h2>Interesting</h2>
					<a href="#" class="viewall">View all <i class="ion-ios-arrow-right"></i></a>
				</div>
				<div class="tabs">
					<ul class="tab-links-2">
						<li><a href="#tab21">#Popular</a></li>
						<li class="active"><a href="#tab22"> #Coming soon</a></li>
						<li><a href="#tab23">  #Top rated  </a></li>
						<li><a href="#tab24"> #Most reviewed</a></li>
					</ul>
				    <div class="tab-content">
				        <div id="tab21" class="tab">
				            <div class="row">
				            	<div class="slick-multiItem">
				            		<div class="slide-it">
				            			<div class="movie-item">
					            			<div class="mv-img">
					            				<img src="images/uploads/mv-item1.jpg" alt="" width="185" height="284">
					            			</div>
					            			<div class="hvr-inner">
					            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
					            			</div>
					            			<div class="title-in">
					            				<h6><a href="#">Interstellar</a></h6>
					            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
					            			</div>
					            		</div>
				            		</div>
									<div class="slide-it">
										<div class="movie-item">
					            			<div class="mv-img">
					            				<img src="images/uploads/mv-item2.jpg" alt="" width="185" height="284">
					            			</div>
					            			<div class="hvr-inner">
					            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
					            			</div>
					            			<div class="title-in">
					            				<h6><a href="#">The revenant</a></h6>
					            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
					            			</div>
					            		</div>
									</div>
				            		<div class="slide-it">
				            			<div class="movie-item">
					            			<div class="mv-img">
					            				<img src="images/uploads/mv-item3.jpg" alt="" width="185" height="284">
					            			</div>
					            			<div class="hvr-inner">
					            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
					            			</div>
					            			<div class="title-in">
					            				<h6><a href="#">Die hard</a></h6>
					            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
					            			</div>
					            		</div>
				            		</div>
				            		<div class="slide-it">
				            			<div class="movie-item">
					            			<div class="mv-img">
					            				<img src="images/uploads/mv-item4.jpg" alt="" width="185" height="284">
					            			</div>
					            			<div class="hvr-inner">
					            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
					            			</div>
					            			<div class="title-in">
					            				<h6><a href="#">The walk</a></h6>
					            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
					            			</div>
					            		</div>
				            		</div>
				            		<div class="slide-it">
				            			<div class="movie-item">
					            			<div class="mv-img">
					            				<img src="images/uploads/mv-item3.jpg" alt="" width="185" height="284">
					            			</div>
					            			<div class="hvr-inner">
					            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
					            			</div>
					            			<div class="title-in">
					            				<h6><a href="#">Die hard</a></h6>
					            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
					            			</div>
					            		</div>
				            		</div>
				            	</div>
				            </div>
				        </div>
				        <div id="tab22" class="tab active">
				           <div class="row">
				            	<div class="slick-multiItem">
				            		<div class="slide-it">
				            			<div class="movie-item">
					            			<div class="mv-img">
					            				<img src="images/uploads/mv-item5.jpg" alt="" width="185" height="284">
					            			</div>
					            			<div class="hvr-inner">
					            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
					            			</div>
					            			<div class="title-in">
					            				<h6><a href="#">Interstellar</a></h6>
					            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
					            			</div>
					            		</div>
				            		</div>
									<div class="slide-it">
										<div class="movie-item">
					            			<div class="mv-img">
					            				<img src="images/uploads/mv-item6.jpg" alt="" width="185" height="284">
					            			</div>
					            			<div class="hvr-inner">
					            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
					            			</div>
					            			<div class="title-in">
					            				<h6><a href="#">The revenant</a></h6>
					            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
					            			</div>
					            		</div>
									</div>
				            		<div class="slide-it">
				            			<div class="movie-item">
					            			<div class="mv-img">
					            				<img src="images/uploads/mv-item7.jpg" alt="" width="185" height="284">
					            			</div>
					            			<div class="hvr-inner">
					            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
					            			</div>
					            			<div class="title-in">
					            				<h6><a href="#">Die hard</a></h6>
					            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
					            			</div>
					            		</div>
				            		</div>
				            		<div class="slide-it">
				            			<div class="movie-item">
					            			<div class="mv-img">
					            				<img src="images/uploads/mv-item8.jpg" alt="" width="185" height="284">
					            			</div>
					            			<div class="hvr-inner">
					            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
					            			</div>
					            			<div class="title-in">
					            				<h6><a href="#">The walk</a></h6>
					            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
					            			</div>
					            		</div>
				            		</div>
				            		<div class="slide-it">
				            			<div class="movie-item">
					            			<div class="mv-img">
					            				<img src="images/uploads/mv-item1.jpg" alt="" width="185" height="284">
					            			</div>
					            			<div class="hvr-inner">
					            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
					            			</div>
					            			<div class="title-in">
					            				<h6><a href="#">Interstellar</a></h6>
					            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
					            			</div>
					            		</div>
				            		</div>
									<div class="slide-it">
										<div class="movie-item">
					            			<div class="mv-img">
					            				<img src="images/uploads/mv-item2.jpg" alt="" width="185" height="284">
					            			</div>
					            			<div class="hvr-inner">
					            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
					            			</div>
					            			<div class="title-in">
					            				<h6><a href="#">The revenant</a></h6>
					            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
					            			</div>
					            		</div>
									</div>
				            		<div class="slide-it">
				            			<div class="movie-item">
					            			<div class="mv-img">
					            				<img src="images/uploads/mv-item3.jpg" alt="" width="185" height="284">
					            			</div>
					            			<div class="hvr-inner">
					            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
					            			</div>
					            			<div class="title-in">
					            				<h6><a href="#">Die hard</a></h6>
					            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
					            			</div>
					            		</div>
				            		</div>
				            		<div class="slide-it">
				            			<div class="movie-item">
					            			<div class="mv-img">
					            				<img src="images/uploads/mv-item4.jpg" alt="" width="185" height="284">
					            			</div>
					            			<div class="hvr-inner">
					            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
					            			</div>
					            			<div class="title-in">
					            				<h6><a href="#">The walk</a></h6>
					            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
					            			</div>
					            		</div>
				            		</div>
				            		<div class="slide-it">
				            			<div class="movie-item">
					            			<div class="mv-img">
					            				<img src="images/uploads/mv-item5.jpg" alt="" width="185" height="284">
					            			</div>
					            			<div class="hvr-inner">
					            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
					            			</div>
					            			<div class="title-in">
					            				<h6><a href="#">Interstellar</a></h6>
					            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
					            			</div>
					            		</div>
				            		</div>
									<div class="slide-it">
										<div class="movie-item">
					            			<div class="mv-img">
					            				<img src="images/uploads/mv-item6.jpg" alt="" width="185" height="284">
					            			</div>
					            			<div class="hvr-inner">
					            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
					            			</div>
					            			<div class="title-in">
					            				<h6><a href="#">The revenant</a></h6>
					            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
					            			</div>
					            		</div>
									</div>
				            	</div>
				            </div>
				        </div>
				        <div id="tab23" class="tab">
				        	<div class="row">
				            	<div class="slick-multiItem">
				            		<div class="slide-it">
				            			<div class="movie-item">
					            			<div class="mv-img">
					            				<img src="images/uploads/mv-item1.jpg" alt="" width="185" height="284">
					            			</div>
					            			<div class="hvr-inner">
					            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
					            			</div>
					            			<div class="title-in">
					            				<h6><a href="#">Interstellar</a></h6>
					            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
					            			</div>
					            		</div>
				            		</div>
									<div class="slide-it">
										<div class="movie-item">
					            			<div class="mv-img">
					            				<img src="images/uploads/mv-item2.jpg" alt="" width="185" height="284">
					            			</div>
					            			<div class="hvr-inner">
					            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
					            			</div>
					            			<div class="title-in">
					            				<h6><a href="#">The revenant</a></h6>
					            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
					            			</div>
					            		</div>
									</div>
				            		<div class="slide-it">
				            			<div class="movie-item">
					            			<div class="mv-img">
					            				<img src="images/uploads/mv-item3.jpg" alt="" width="185" height="284">
					            			</div>
					            			<div class="hvr-inner">
					            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
					            			</div>
					            			<div class="title-in">
					            				<h6><a href="#">Die hard</a></h6>
					            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
					            			</div>
					            		</div>
				            		</div>
				            		<div class="slide-it">
				            			<div class="movie-item">
					            			<div class="mv-img">
					            				<img src="images/uploads/mv-item4.jpg" alt="" width="185" height="284">
					            			</div>
					            			<div class="hvr-inner">
					            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
					            			</div>
					            			<div class="title-in">
					            				<h6><a href="#">The walk</a></h6>
					            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
					            			</div>
					            		</div>
				            		</div>
				            		<div class="slide-it">
				            			<div class="movie-item">
					            			<div class="mv-img">
					            				<img src="images/uploads/mv-item5.jpg" alt="" width="185" height="284">
					            			</div>
					            			<div class="hvr-inner">
					            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
					            			</div>
					            			<div class="title-in">
					            				<h6><a href="#">Interstellar</a></h6>
					            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
					            			</div>
					            		</div>
				            		</div>
									<div class="slide-it">
										<div class="movie-item">
					            			<div class="mv-img">
					            				<img src="images/uploads/mv-item6.jpg" alt="" width="185" height="284">
					            			</div>
					            			<div class="hvr-inner">
					            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
					            			</div>
					            			<div class="title-in">
					            				<h6><a href="#">The revenant</a></h6>
					            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
					            			</div>
					            		</div>
									</div>
				            		<div class="slide-it">
				            			<div class="movie-item">
					            			<div class="mv-img">
					            				<img src="images/uploads/mv-item7.jpg" alt="" width="185" height="284">
					            			</div>
					            			<div class="hvr-inner">
					            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
					            			</div>
					            			<div class="title-in">
					            				<h6><a href="#">Die hard</a></h6>
					            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
					            			</div>
					            		</div>
				            		</div>
				            		<div class="slide-it">
				            			<div class="movie-item">
					            			<div class="mv-img">
					            				<img src="images/uploads/mv-item8.jpg" alt="" width="185" height="284">
					            			</div>
					            			<div class="hvr-inner">
					            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
					            			</div>
					            			<div class="title-in">
					            				<h6><a href="#">The walk</a></h6>
					            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
					            			</div>
					            		</div>
				            		</div>
				            		<div class="slide-it">
				            			<div class="movie-item">
					            			<div class="mv-img">
					            				<img src="images/uploads/mv-item3.jpg" alt="" width="185" height="284">
					            			</div>
					            			<div class="hvr-inner">
					            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
					            			</div>
					            			<div class="title-in">
					            				<h6><a href="#">Die hard</a></h6>
					            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
					            			</div>
					            		</div>
				            		</div>
				            	</div>
				            </div>
			       	 	</div>
			       	 	 <div id="tab24" class="tab">
				        	<div class="row">
				            	<div class="slick-multiItem">
				            		<div class="slide-it">
				            			<div class="movie-item">
					            			<div class="mv-img">
					            				<img src="images/uploads/mv-item5.jpg" alt="" width="185" height="284">
					            			</div>
					            			<div class="hvr-inner">
					            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
					            			</div>
					            			<div class="title-in">
					            				<h6><a href="#">Interstellar</a></h6>
					            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
					            			</div>
					            		</div>
				            		</div>
									<div class="slide-it">
										<div class="movie-item">
					            			<div class="mv-img">
					            				<img src="images/uploads/mv-item6.jpg" alt="" width="185" height="284">
					            			</div>
					            			<div class="hvr-inner">
					            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
					            			</div>
					            			<div class="title-in">
					            				<h6><a href="#">The revenant</a></h6>
					            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
					            			</div>
					            		</div>
									</div>
				            		<div class="slide-it">
				            			<div class="movie-item">
					            			<div class="mv-img">
					            				<img src="images/uploads/mv-item7.jpg" alt="" width="185" height="284">
					            			</div>
					            			<div class="hvr-inner">
					            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
					            			</div>
					            			<div class="title-in">
					            				<h6><a href="#">Die hard</a></h6>
					            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
					            			</div>
					            		</div>
				            		</div>
				            		<div class="slide-it">
				            			<div class="movie-item">
					            			<div class="mv-img">
					            				<img src="images/uploads/mv-item8.jpg" alt="" width="185" height="284">
					            			</div>
					            			<div class="hvr-inner">
					            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
					            			</div>
					            			<div class="title-in">
					            				<h6><a href="#">The walk</a></h6>
					            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
					            			</div>
					            		</div>
				            		</div>
				            		<div class="slide-it">
				            			<div class="movie-item">
					            			<div class="mv-img">
					            				<img src="images/uploads/mv-item3.jpg" alt="" width="185" height="284">
					            			</div>
					            			<div class="hvr-inner">
					            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
					            			</div>
					            			<div class="title-in">
					            				<h6><a href="#">Die hard</a></h6>
					            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
					            			</div>
					            		</div>
				            		</div>
				            	</div>
				            </div>
			       	 	</div>
				    </div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="sidebar">
					<div class="ads">
						<img src="images/uploads/ads1.png" alt="" width="336" height="296">
					</div>
					<div class="celebrities">
						<h4 class="sb-title">Spotlight Celebrities</h4>

                        @foreach ($actiors as $actior)
						<div class="celeb-item">
                            <a href="#"><img style="width: 70px;height:70px" src="{{ url('storage/'.$actior->photo) }}" alt="" width="70" height="70"></a>
							<div class="celeb-author">
                                <h6><a href="#">{{ $actior->name }}</a></h6>
								<span>{{ $actior->birdday }}</span>
							</div>
						</div>
                        @endforeach

						<a href="#" class="btn">See all celebrities<i class="ion-ios-arrow-right"></i></a>
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
				 <p>5th Avenue st, manhattan<br>
				New York, NY 10001</p>
				<p>Call us: <a href="#">(+01) 202 342 6789</a></p>
			</div>
			<div class="flex-child-ft item2">
				<h4>Resources</h4>
				<ul>
					<li><a href="#">About</a></li>
					<li><a href="#">Blockbuster</a></li>
					<li><a href="#">Contact Us</a></li>
					<li><a href="#">Forums</a></li>
					<li><a href="#">Blog</a></li>
					<li><a href="#">Help Center</a></li>
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
				<h4>Account</h4>
				<ul>
					<li><a href="#">My Account</a></li>
					<li><a href="#">Watchlist</a></li>
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
			<p><a target="_blank" href="https://www.templateshub.net">Templates Hub</a></p>
		</div>
		<div class="backtotop">
			<p><a href="#" id="back-to-top">Back to top  <i class="ion-ios-arrow-thin-up"></i></a></p>
		</div>
	</div>
</footer>
<!-- end of footer section-->

<script src="js/jquery.js"></script>
<script src="js/plugins.js"></script>
<script src="js/plugins2.js"></script>
<script src="js/custom.js"></script>
</body>


</html>
