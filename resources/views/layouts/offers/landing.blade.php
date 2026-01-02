
<!DOCTYPE html>

<html class="no-js">
    <head>
        <meta charset="utf-8">
        <title>Real Estate</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link href="css/flexslider.min.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="css/elegant-icons.min.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="css/lightbox.min.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="css/theme-1.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="css/custom.css" rel="stylesheet" type="text/css" media="all"/>
        <link rel="stylesheet" href="https:
        <link href='http:
        <script src="js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
            <!-- إلى -->
<link href="{{ asset('css/style.css') }}" rel="stylesheet">


<!-- إلى -->
<script src="{{ asset('js/script.js') }}"></script>
    </head>
    <body>
    	<div class="loader">
    		<div class="spinner">
			  <div class="double-bounce1"></div>
			  <div class="double-bounce2"></div>
			</div>
    	</div>

		<div class="nav-container">
			<nav class="simple-bar top-bar" >
				<div class="container">


					<div class="row nav-menu">
						<div class="col-md-3 col-sm-3 columns">
							<a href="index.html">
							<img class="logo logo-dark" alt="Logo" src="img/logo-dark.png">
						</div>

                        <div class="col-md-9 col-sm-9 columns text-right">

             <form action="{{ route('logout') }}" method="POST">
    @csrf
    <button type="submit" class="btn btn-success" style="background-color: #2f6f64">
        Logout
    </button>
</form>


    </div>
</div>
				</div>
			</nav>



		</div>

		<div class="main-container">
		<a id="hero-slider" class="in-page-link"></a>

			<section class="hero-slider">
				<ul class="slides">


					<li class="overlay">
						<div class="background-image-holder parallax-background">
							<img class="background-image" alt="Background Image" src={{ asset('uploads/properties/1767179604_Villa2.jpg') }}>
							</div>
							<div class="container align-vertical">
							<div class="row">
								<div class="col-md-6 col-sm-9">
									<h1 class="text-white">Voluptatem accusantium doloremque laudantium totam rem aperiam eaque ipsa quae.</h1>
									{{-- <a target="_blank" href="#" class="btn btn-primary btn-white">Learn more</a> --}}

								</div>
							</div>

						</div>


					</li>

					<li class="overlay">
						<div class="background-image-holder parallax-background">
							<img class="background-image" alt="Background Image" src={{ asset('uploads/properties/1767179681_home2.jpg') }}>
						</div>

						<div class="container align-vertical">
							<div class="row">
								<div class="col-md-6 col-sm-9">
									<h1 class="text-white">Voluptatem accusantium doloremque laudantium totam rem aperiam eaque ipsa quae.</h1>
									{{-- <a target="_blank" href="#" class="btn btn-primary btn-white">Learn more</a> --}}

								</div>
							</div>
						</div>
					</li>

					<li class="overlay">
						<div class="background-image-holder parallax-background">
							<img class="background-image" alt="Background Image" src={{ asset('uploads/properties/slider1.jpg') }}>
						</div>

						<div class="container align-vertical">
							<div class="row">
								<div class="col-md-6 col-sm-9">
									<h1 class="text-white">Tempora incidunt ut labore dolore magnam aliquam voluptatem minima.</h1>
									{{-- <a target="_blank" href="#" class="btn btn-primary btn-white">Learn more</a> --}}

								</div>
							</div>
						</div>
					</li>
				</ul>
			</section>




			<section class="feature-selector">
				<div class="container">
									<center><span style="font-size:40px;color:#777777;" ><b>All Property  </b></span></center>
				</div>


			</section>

			<section class="no-pad-bottom no-pad-top projects-gallery">

				<div class="projects-wrapper clearfix">

					<div class="projects-container">

						<div class="col-md-4 col-sm-6 no-pad project print image-holder">
							<div class="background-image-holder">
								<img class="background-image" alt="Background Image" src={{ asset('uploads/properties/1767176229_shop.jpg') }}>
							</div>
							<div class="hover-state" style="background:#2f6f646e;">
								<div class="align-vertical">
									<a href="{{ route('Property.all') }}" class="btn btn-primary btn-white">Show all Property</a>
								</div>
							</div>
						</div>

						<div class="col-md-4 col-sm-6 no-pad project branding image-holder">
							<div class="background-image-holder">
								<img class="background-image" alt="Background Image" src={{ asset('uploads/properties/1767178944_home.jpg') }}>
							</div>
							<div class="hover-state"style="background:#2f6f646e;">
								<div class="align-vertical">
									<a href="{{ route('Property.all') }}" class="btn btn-primary btn-white" >Show all Property</a>
								</div>
							</div>
						</div>

						<div class="col-md-4 col-sm-6 no-pad project print image-holder">
							<div class="background-image-holder">
								<img class="background-image" alt="Background Image" src={{ asset('uploads/properties/1767179604_Villa2.jpg') }}>
							</div>
							<div class="hover-state" style="background:#2f6f646e;">
								<div class="align-vertical">
									<a href="{{ route('Property.all') }}" class="btn btn-primary btn-white">Show all Property</a>
								</div>
							</div>
						</div>

					</div>

				</div>

			</section>
		</div>

	<section class="feature-selector">
				<div class="container">
                <center><span style="font-size:40px" ><b>if you have any complaint we are always ready to assist you. </b></span></center>
<br>
<br>
    <center>    <a href="{{ route('complaint') }}"
        style="display: inline-block;
        background: linear-gradient(135deg, #2f6f64, #38323e 100%);
        color: white;
        text-decoration: none;
        padding: 12px 30px;
        border-radius: 6px;
        font-weight: 600;
        transition: transform 0.2s ease;
        margin: 15px 0;
        box-shadow: 0 4px 6px rgba(102, 126, 234, 0.2);">
        <span style="font-size: 16px;">
            <i class="fas fa-comment-alt" style="margin-right: 8px;"></i>
            Add Complaint
        </span>
</a></center>
				</div>


			</section>

		<div class="footer-container">
			<footer class="details">
				<div class="container">
					<div class="row">
						<div class="col-sm-4">
							<img alt="logo" class="logo" src="img/logo-dark.png">
							<p>
								Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
							</p>
						</div>

						<div class="col-sm-4">

                        </div>
						<div class="col-sm-4">
							<h1>Contact</h1>
							<p>contact@realestate.com<br>+70 424 495 952<br>
								<br>



							<h1>Social Profiles</h1>
							<ul class="social-icons">
								<li>
									<a href="#">
										<i class="icon social_twitter"></i>
									</a>
								</li>

								<li>
									<a href="#">
										<i class="icon social_facebook"></i>
									</a>
								</li>

								<li>
									<a href="#">
										<i class="icon social_instagram"></i>
									</a>
								</li>


							</ul>
						</div>
					</div>



				</div>
			</footer>
		</div>

		<script src="https:
		<script src="js/jquery.min.js"></script>
        {{-- <script src="js/jquery.plugin.min.js"></script> --}}
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.flexslider-min.js"></script>
        <script src="js/smooth-scroll.min.js"></script>
        {{-- <script src="js/skrollr.min.js"></script> --}}
        {{-- <script src="js/spectragram.min.js"></script> --}}
        <script src="js/scrollReveal.min.js"></script>
        <script src="js/isotope.min.js"></script>
        <script src="js/twitterFetcher_v10_min.js"></script>
        {{-- <script src="js/lightbox.min.js"></script> --}}
        {{-- <script src="js/jquery.countdown.min.js"></script> --}}
        <script src="js/scripts.js"></script>
    </body>
</html>
