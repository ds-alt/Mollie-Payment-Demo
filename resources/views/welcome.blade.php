<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" >
		<title>Laravel - Mollie Payment Demo</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
				<link rel="icon" href="i/favicon.png" type="image/x-icon">
		<!-- Google Fonts -->
				<link href="https://fonts.googleapis.com/css?family=Dosis:100,200,300,400,600,500,700,800,900|Open+Sans:100,200,300,400,500,600,700,800,900&amp;subset=latin" rel="stylesheet">
				<!-- Bootstrap 4.3.1 CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<!-- Slick 1.8.1 jQuery plugin CSS (Sliders) -->
		<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
		<!-- Fancybox 3 jQuery plugin CSS (Open images and video in popup) -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
		<!-- AOS 2.3.1 jQuery plugin CSS (Animations) -->
		<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
		<!-- FontAwesome CSS -->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
		<!-- Startup 3 CSS (Styles for all blocks) -->
					<link href="css/style.css" rel="stylesheet" />
				<!-- jQuery 3.3.1 -->
		<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
			</head>
	<body>
<!-- Navigation 18 -->

<nav class="navigation_18 bg-dark pt-30 pb-30 lh-20 text-adaptive">
	<div class="container px-xl-0">
		<div class="row justify-content-between align-items-center">
			<a href="https://www.mollie.com/en" class="logo link color-white">Laravel-Mollie Payment Demo</a>

			<div class="row justify-content-between align-items-center" >
                @if (Route::has('login'))
                <div class="col-sm-12 text-sm-right"">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-light">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-10 text-light">Register</a>
                    @endif
                    @endauth
                </div>
                @endif

			</div>
		</div>
	</div>
</nav>
<!-- Feature 44 -->

<section class="feature_44 bg-light pt-50 text-center text-md-left">
	<div class="container px-xl-0">
		<div class="row align-items-center align-items-lg-start">
			<div class="col-xl-1"></div>
			<div class="col-lg-5 col-md-7" data-aos-duration="600" data-aos="fade-down" data-aos-delay="0">
				<h2 class="mt-20 mb-30 small">Accept online payments today. <br />Stat Humble</h2>
				<div class="f-22 color-heading text-adaptive">
					Start growing your business with effortless payments.
				</div>
				<a href="https://www.mollie.com/en/signup" class="mt-30 mb-40 btn border-gray color-main">Sign Up</a>
			</div>

		</div>
	</div>
</section>
<!-- Content 31 -->

<section class="content_31 bg-dark pt-300 pb-70 text-center color-white">
	<div class="container px-xl-0">
		<div class="row justify-content-center">
			<h2 class="small col-lg-8" data-aos-duration="200" data-aos="fade-down" data-aos-delay="0">Our Great Clients</h2>
			<div class="col-lg-8 mt-25 mb-55 f-18 medium op-7 text-adaptive">
				<span data-aos-duration="600" data-aos="fade-down" data-aos-delay="300">
				Startup includes great form options for your startup projects. Each <br />
				component is coded for web which makes creating a website quick and easy.
            </span>
			</div>
		</div>

	</div>
</section>


<!-- Footer 11 -->

<footer class="footer_11 bg-dark pt-45 pb-45 color-white text-center">
	<div class="container px-xl-0">
		<div class="row align-items-center">
			<div class="mb-20 mb-lg-0 col-lg-3" data-aos-duration="600" data-aos="fade-down" data-aos-delay="0">
				<a href="#" class="logo link color-white">Laravel - Mollie Payment Demo</a>
			</div>
			<div class="col-lg-9 text-lg-right" data-aos-duration="600" data-aos="fade-down" data-aos-delay="300">
				<a href="#" class="link color-white mr-10">Privacy Policy</a>
				<a href="#" class="link color-white mx-10">Terms</a>
				<div class="d-inline-block socials">
					<a href="#" class="link color-white mx-10"><i class="fab fa-twitter"></i></a>
					<a href="#" class="link color-white mx-10"><i class="fab fa-facebook-f"></i></a>
					<a href="#" class="link color-white ml-10"><i class="fab fa-google-plus-g"></i></a>
				</div>
			</div>
		</div>
		<div data-aos-duration="600" data-aos="fade-down" data-aos-delay="600">
			<div class="mt-45 mb-45 hr h-2 bg-white op-3"></div>
		</div>

	</div>
</footer>
<!-- forms alerts -->
<div class="alert alert-success alert-dismissible alert-form-success" role="alert">
	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	Thanks for your message!
</div>
<div class="alert alert-warning alert-dismissible alert-form-check-fields" role="alert">
	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	Please, fill in required fields.
</div>
<div class="alert alert-danger alert-dismissible alert-form-error" role="alert">
	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	An error occurred while sending data :(
</div>
<!-- popup with video -->
<div class="overlay"></div>

<div class="video_popup">
	<a class="close">
		<img srcset="i/close_white@2x.png 2x" src="i/close_white.png" alt="" />
	</a>
	<div class="d-flex align-items-center justify-content-center w-full h-full iframe_container"></div>
</div>

<!-- Bootstrap 4.3.1 JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
<!-- Fancybox 3 jQuery plugin JS (Open images and video in popup) -->
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
<!-- Google maps JS API -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3&key=AIzaSyDP6Ex5S03nvKZJZSvGXsEAi3X_tFkua4U"></script>
<!-- Slick 1.8.1 jQuery plugin JS (Sliders) -->
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<!-- AOS 2.3.1 jQuery plugin JS (Animations) -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<!-- Maskedinput jQuery plugin JS (Masks for input fields) -->
<script src="js/jquery.maskedinput.min.js"></script>
<!-- Startup 3 JS (Custom js for all blocks) -->
<script src="js/script.js"></script>

</body>
</html>
