<!DOCTYPE html>

<html lang="en">

<head>
	<title>Nugenesis | Contact Us</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="icon" type="image/x-icon" href="{{asset('/images/favicon.ico')}}">

	<link rel="stylesheet" href="{{asset('/css/styles.css')}}">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
		integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

	<!-- Fonts -->
	<link
		href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
		rel="stylesheet">

	<!-- Icons -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link media='all' href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	<!-- Slider -->
	<link rel="stylesheet" href="{{asset('/css/owl.carousel.min.css')}}">
	<link rel="stylesheet" href="{{('/css/owl.theme.default.min.css')}}">
</head>

<body>
	<div class="mb-5 shadow" id="hero-container">
        <header id="header" class="custom-container container-xl position-relative">
        {{View::make('header')}}
        </header>
	</div>
	<section class="custom-container container-xl pt-5">
		<div class="row">
			<div class="col-lg-10 offset-lg-1 text-center mb-5">
				<h4 class="mb-5">
					<b>Contact Us</b>
				</h4>
				<h4 class="mb-4">
					<b>
						Want the service of the NUGenesis team?
					</b>
				</h4>
				<p class="text-secondary">
					We work with a small number of select teams. If you are interested in discussing working together,
					please tell us about yourself, your use case, and what you're looking for.
				</p>
			</div>
		</div>
	</section>

	<section class="custom-container container-xl mb-5">
		<form action="">
			<div class="row">
				<div class="col-lg-5 offset-lg-1 mb-5">
					<div class="form-group">
						<label for="exampleInputEmail1">
							<b>
								Email <span class="text-danger">*</span>
							</b>
						</label>
						<input type="email"
							class="form-control radius-0 border-top-0 border-left-0 border-right-0 input-no-ring"
							id="email" aria-describedby="emailHelp" placeholder="Your Email">
					</div>
				</div>
				<div class="col-lg-6 mb-5">
					<div class="form-group">
						<label for="exampleInputEmail1">
							<b>
								What's your name <span class="text-danger">*</span>
							</b>
						</label>
						<input type="email"
							class="form-control radius-0 border-top-0 border-left-0 border-right-0 input-no-ring"
							id="email" aria-describedby="emailHelp" placeholder="Your Name">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-5 offset-lg-1 mb-5">
					<div class="form-group">
						<label for="exampleInputEmail1">
							<b>
								What's the name of your company/organization? <span class="text-danger">*</span>
							</b>
						</label>
						<input type="email"
							class="form-control radius-0 border-top-0 border-left-0 border-right-0 input-no-ring"
							id="email" aria-describedby="emailHelp" placeholder="Name of your company">
					</div>
				</div>
				<div class="col-lg-6 mb-5">
					<div class="form-group">
						<label for="exampleInputEmail1">
							<b>
								What's your title/designation <span class="text-danger">*</span>
							</b>
						</label>
						<input type="email"
							class="form-control radius-0 border-top-0 border-left-0 border-right-0 input-no-ring"
							id="email" aria-describedby="emailHelp" placeholder="Your Designation">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-10 offset-lg-1 mb-5">
					<div class="form-group">
						<label for="exampleInputEmail1">
							<b>
								Briefly describe your blockchain use case. Feel free to share links to your website or
								Github <span class="text-danger">*</span>
							</b>
						</label>
						<input type="email"
							class="form-control radius-0 border-top-0 border-left-0 border-right-0 input-no-ring"
							id="email" aria-describedby="emailHelp" placeholder="Your answer">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-10 offset-lg-1 mb-5">
					<div class="form-group">
						<label for="exampleInputEmail1">
							<b>
								Tell us a bit about your team, its size, and what it does. <span
									class="text-danger">*</span>
							</b>
						</label>
						<input type="email"
							class="form-control radius-0 border-top-0 border-left-0 border-right-0 input-no-ring"
							id="email" aria-describedby="emailHelp" placeholder="Your answer">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-10 offset-lg-1 mb-5">
					<div class="form-group">
						<label for="exampleInputEmail1">
							<b>
								What are you looking for? <span class="text-danger">*</span>
							</b>
						</label>
						<input type="email"
							class="form-control radius-0 border-top-0 border-left-0 border-right-0 input-no-ring"
							id="email" aria-describedby="emailHelp" placeholder="Your answer">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-10 offset-lg-1">
					<button type="submit"
						class="py-3 text-white btn bg-base-color learn-more-btn btn-no-ring d-block d-lg-inline">
						<small class="mr-2">Submit</small>
						<i class="text-white fa fa-send" aria-hidden="true"></i>
					</button>
				</div>
			</div>
		</form>
	</section>

	<section class="mb-5 py-5">
		<hr class="bg-secondary">
	</section>

	<section class="custom-container container-xl mb-5 text-secondary">
		<div class="row">
			<div class="col-12 col-lg-10 offset-lg-1">
				<div class="row mb-5">
					<div class="mb-3 col-6 col-lg-3 mb-lg-0">
						<h6 class="text-base-color mb-4">
							Contact #
						</h6>
						<div class="mb-3 d-flex">
							<div class="mr-4 contact-logo">
								<i class="fa fa-map-marker" aria-hidden="true"></i>
							</div>
							<div class="contact-text">
								9/A-1 Pratapgunj Opp. C. S. Patel Enclaves Vadodara, Gujarat – 390002, India
							</div>
						</div>
						<div class="mb-3 d-flex">
							<div class="mr-4 contact-logo">
								<i class="fa fa-phone" aria-hidden="true"></i>
							</div>
							<div class="contact-text">
								(+91) 999 8526878
							</div>
						</div>
						<div class="mb-3 d-flex">
							<div class="mr-4 contact-logo">
								<i class="fa fa-envelope" aria-hidden="true"></i>
							</div>
							<div class="contact-text">
								admin@nucoin.com.au
							</div>
						</div>
					</div>
					<div class="mb-3 col-6 col-lg-3 mb-lg-0">
						<h6 class="text-base-color mb-4">
							Contact #
						</h6>
						<div class="mb-3 d-flex">
							<div class="mr-4 contact-logo">
								<i class="fa fa-map-marker" aria-hidden="true"></i>
							</div>
							<div class="contact-text">
								9/A-1 Pratapgunj Opp. C. S. Patel Enclaves Vadodara, Gujarat – 390002, India
							</div>
						</div>
						<div class="mb-3 d-flex">
							<div class="mr-4 contact-logo">
								<i class="fa fa-phone" aria-hidden="true"></i>
							</div>
							<div class="contact-text">
								(+91) 999 8526878
							</div>
						</div>
						<div class="mb-3 d-flex">
							<div class="mr-4 contact-logo">
								<i class="fa fa-envelope" aria-hidden="true"></i>
							</div>
							<div class="contact-text">
								admin@nucoin.com.au
							</div>
						</div>
					</div>
					<div class="mb-3 col-6 col-lg-3 mb-lg-0">
						<h6 class="text-base-color mb-4">
							Contact #
						</h6>
						<div class="mb-3 d-flex">
							<div class="mr-4 contact-logo">
								<i class="fa fa-map-marker" aria-hidden="true"></i>
							</div>
							<div class="contact-text">
								9/A-1 Pratapgunj Opp. C. S. Patel Enclaves Vadodara, Gujarat – 390002, India
							</div>
						</div>
						<div class="mb-3 d-flex">
							<div class="mr-4 contact-logo">
								<i class="fa fa-phone" aria-hidden="true"></i>
							</div>
							<div class="contact-text">
								(+91) 999 8526878
							</div>
						</div>
						<div class="mb-3 d-flex">
							<div class="mr-4 contact-logo">
								<i class="fa fa-envelope" aria-hidden="true"></i>
							</div>
							<div class="contact-text">
								admin@nucoin.com.au
							</div>
						</div>
					</div>
					<div class="mb-3 col-6 col-lg-3 mb-lg-0">
						<h6 class="text-base-color mb-4">
							Contact #
						</h6>
						<div class="mb-3 d-flex">
							<div class="mr-4 contact-logo">
								<i class="fa fa-map-marker" aria-hidden="true"></i>
							</div>
							<div class="contact-text">
								9/A-1 Pratapgunj Opp. C. S. Patel Enclaves Vadodara, Gujarat – 390002, India
							</div>
						</div>
						<div class="mb-3 d-flex">
							<div class="mr-4 contact-logo">
								<i class="fa fa-phone" aria-hidden="true"></i>
							</div>
							<div class="contact-text">
								(+91) 999 8526878
							</div>
						</div>
						<div class="mb-3 d-flex">
							<div class="mr-4 contact-logo">
								<i class="fa fa-envelope" aria-hidden="true"></i>
							</div>
							<div class="contact-text">
								admin@nucoin.com.au
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-10 offset-lg-1">
				<div class="row">
					<div class="mb-3 col-6 col-lg-3 mb-lg-0">
						<h6 class="text-base-color mb-4">
							Contact #
						</h6>
						<div class="mb-3 d-flex">
							<div class="mr-4 contact-logo">
								<i class="fa fa-map-marker" aria-hidden="true"></i>
							</div>
							<div class="contact-text">
								9/A-1 Pratapgunj Opp. C. S. Patel Enclaves Vadodara, Gujarat – 390002, India
							</div>
						</div>
						<div class="mb-3 d-flex">
							<div class="mr-4 contact-logo">
								<i class="fa fa-phone" aria-hidden="true"></i>
							</div>
							<div class="contact-text">
								(+91) 999 8526878
							</div>
						</div>
						<div class="mb-3 d-flex">
							<div class="mr-4 contact-logo">
								<i class="fa fa-envelope" aria-hidden="true"></i>
							</div>
							<div class="contact-text">
								admin@nucoin.com.au
							</div>
						</div>
					</div>
					<div class="mb-3 col-6 col-lg-3 mb-lg-0">
						<h6 class="text-base-color mb-4">
							Contact #
						</h6>
						<div class="mb-3 d-flex">
							<div class="mr-4 contact-logo">
								<i class="fa fa-map-marker" aria-hidden="true"></i>
							</div>
							<div class="contact-text">
								9/A-1 Pratapgunj Opp. C. S. Patel Enclaves Vadodara, Gujarat – 390002, India
							</div>
						</div>
						<div class="mb-3 d-flex">
							<div class="mr-4 contact-logo">
								<i class="fa fa-phone" aria-hidden="true"></i>
							</div>
							<div class="contact-text">
								(+91) 999 8526878
							</div>
						</div>
						<div class="mb-3 d-flex">
							<div class="mr-4 contact-logo">
								<i class="fa fa-envelope" aria-hidden="true"></i>
							</div>
							<div class="contact-text">
								admin@nucoin.com.au
							</div>
						</div>
					</div>
					<div class="mb-3 col-6 col-lg-3 mb-lg-0">
						<h6 class="text-base-color mb-4">
							Contact #
						</h6>
						<div class="mb-3 d-flex">
							<div class="mr-4 contact-logo">
								<i class="fa fa-map-marker" aria-hidden="true"></i>
							</div>
							<div class="contact-text">
								9/A-1 Pratapgunj Opp. C. S. Patel Enclaves Vadodara, Gujarat – 390002, India
							</div>
						</div>
						<div class="mb-3 d-flex">
							<div class="mr-4 contact-logo">
								<i class="fa fa-phone" aria-hidden="true"></i>
							</div>
							<div class="contact-text">
								(+91) 999 8526878
							</div>
						</div>
						<div class="mb-3 d-flex">
							<div class="mr-4 contact-logo">
								<i class="fa fa-envelope" aria-hidden="true"></i>
							</div>
							<div class="contact-text">
								admin@nucoin.com.au
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<footer class="py-3">
		<section class="custom-container container-xl">
			<hr>
		</section>
		<div class="d-flex justify-content-center">
			NuGenesis &copy; 2021. All rights reserved.
		</div>
	</footer>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
