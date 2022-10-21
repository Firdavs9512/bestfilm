
<!-- BEGIN | Header -->
<header class="ht-header">
	<div class="container">
		<nav class="navbar navbar-default navbar-custom">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header logo">
				    <div class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					    <span class="sr-only">Toggle navigation</span>
					    <div id="nav-icon1">
							<span></span>
							<span></span>
							<span></span>
						</div>
				    </div>
				    <a href="{{ route('main') }}"><img class="logo" src="{{ url('images/logo1.png') }}" alt="" width="119" height="58"></a>
			    </div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse flex-parent" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav flex-child-menu menu-left">
						<li class="hidden">
							<a href="#page-top"></a>
						</li>
						<li class="dropdown first">
							<a class="btn btn-default " href="{{ route('main') }}">
							Home
							</a>

						</li>
						<li class="dropdown first">
							<a class="btn btn-default" href="{{ route('allmovielist') }}">
							movies list
							</a>

						</li>
						<li class="dropdown first">
							<a class="btn btn-default" href="{{ route('actiorlist') }}">
							actiors list
							</a>

						</li>
					</ul>
					<ul class="nav navbar-nav flex-child-menu menu-right">
						<li><a href="#">Help</a></li>
						<li class="loginLink"><a href="#">LOG In</a></li>
						<li class="btn signupLink"><a href="#">sign up</a></li>
					</ul>
				</div>
			<!-- /.navbar-collapse -->
	    </nav>

        <form action="{{ route('search') }}" method="POST">
            @csrf
            <!-- top search form -->
            <div class="top-search">
                <select>
                    <option value="united">Movie</option>
                </select>
                <input value="{{ $search }}" type="text" name="search" placeholder="Search for a movie name...">
            </div>
        </form>

        </div>
</header>
<!-- END | Header -->
