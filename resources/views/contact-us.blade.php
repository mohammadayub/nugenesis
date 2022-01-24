@extends('layout')
@section('content')
	<div class="mb-5 shadow" id="hero-container">
        <header id="header" class="custom-container container-xl position-relative">
			@include('nav')
        </header>
	</div>
	<section class="custom-container container-xl pt-5">
		<div class="row">
			<div class="col-lg-10 offset-lg-1 text-center mb-5">
				<h4 class="mb-5">
					<b>{{__("contact-us")['h4']}}</b>
				</h4>
				<h4 class="mb-4">
					<b>
						{{__("contact-us")['h4a']}}
					</b>
				</h4>
				<p class="text-secondary">
					{{__("contact-us")['p1']}}
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
								{{__("contact-us")['label']}} <span class="text-danger">*</span>
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
								{{__("contact-us")['labela']}} <span class="text-danger">*</span>
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
								{{__("contact-us")['labelb']}} <span class="text-danger">*</span>
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
								{{__("contact-us")['labelc']}} <span class="text-danger">*</span>
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
								{{__("contact-us")['labeld']}} <span class="text-danger">*</span>
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
								{{__("contact-us")['labele']}} <span
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
								{{__("contact-us")['labelf']}} <span class="text-danger">*</span>
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
						<small class="mr-2">{{__("contact-us")['small']}}</small>
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
							{{__("address-info")['h6']}}
						</h6>
						<div class="mb-3 d-flex">
							<div class="mr-4 contact-logo">
								<i class="fa fa-map-marker" aria-hidden="true"></i>
							</div>
							<div class="contact-text">
								{{__("address-info")['p1']}}
							</div>
						</div>
						<div class="mb-3 d-flex">
							<div class="mr-4 contact-logo">
								<i class="fa fa-phone" aria-hidden="true"></i>
							</div>
							<div class="contact-text">
								{{__("address-info")['p2']}}
							</div>
						</div>
						<div class="mb-3 d-flex">
							<div class="mr-4 contact-logo">
								<i class="fa fa-envelope" aria-hidden="true"></i>
							</div>
							<div class="contact-text">
								{{__("address-info")['p3']}}
							</div>
						</div>
					</div>
					<div class="mb-3 col-6 col-lg-3 mb-lg-0">
						<h6 class="text-base-color mb-4">
							{{__("address-info")['h6']}}
						</h6>
						<div class="mb-3 d-flex">
							<div class="mr-4 contact-logo">
								<i class="fa fa-map-marker" aria-hidden="true"></i>
							</div>
							<div class="contact-text">
								{{__("address-info")['p1']}}
							</div>
						</div>
						<div class="mb-3 d-flex">
							<div class="mr-4 contact-logo">
								<i class="fa fa-phone" aria-hidden="true"></i>
							</div>
							<div class="contact-text">
								{{__("address-info")['p2']}}
							</div>
						</div>
						<div class="mb-3 d-flex">
							<div class="mr-4 contact-logo">
								<i class="fa fa-envelope" aria-hidden="true"></i>
							</div>
							<div class="contact-text">
								{{__("address-info")['p3']}}
							</div>
						</div>
					</div>
					<div class="mb-3 col-6 col-lg-3 mb-lg-0">
						<h6 class="text-base-color mb-4">
							{{__("address-info")['h6']}}
						</h6>
						<div class="mb-3 d-flex">
							<div class="mr-4 contact-logo">
								<i class="fa fa-map-marker" aria-hidden="true"></i>
							</div>
							<div class="contact-text">
								{{__("address-info")['p1']}}
							</div>
						</div>
						<div class="mb-3 d-flex">
							<div class="mr-4 contact-logo">
								<i class="fa fa-phone" aria-hidden="true"></i>
							</div>
							<div class="contact-text">
								{{__("address-info")['p2']}}
							</div>
						</div>
						<div class="mb-3 d-flex">
							<div class="mr-4 contact-logo">
								<i class="fa fa-envelope" aria-hidden="true"></i>
							</div>
							<div class="contact-text">
								{{__("address-info")['p3']}}
							</div>
						</div>
					</div>
					<div class="mb-3 col-6 col-lg-3 mb-lg-0">
						<h6 class="text-base-color mb-4">
							{{__("address-info")['h6']}}
						</h6>
						<div class="mb-3 d-flex">
							<div class="mr-4 contact-logo">
								<i class="fa fa-map-marker" aria-hidden="true"></i>
							</div>
							<div class="contact-text">
								{{__("address-info")['p1']}}
							</div>
						</div>
						<div class="mb-3 d-flex">
							<div class="mr-4 contact-logo">
								<i class="fa fa-phone" aria-hidden="true"></i>
							</div>
							<div class="contact-text">
								{{__("address-info")['p2']}}
							</div>
						</div>
						<div class="mb-3 d-flex">
							<div class="mr-4 contact-logo">
								<i class="fa fa-envelope" aria-hidden="true"></i>
							</div>
							<div class="contact-text">
								{{__("address-info")['p3']}}
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
@endsection
