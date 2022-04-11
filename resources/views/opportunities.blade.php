@extends('layout')
@section('content')
    <div id="opportunities">
		<div class="position-relative d-flex flex-column" id="hero-container">
			<section id="header">
				<header class="custom-container container-xl position-relative z-index-2s">
					@include('nav')
				</header>
			</section>
		</div>

		<section id="intro">
			<div class="custom-container container-xl position-relative">
				<img src="../images/Elements-1.png" alt="" class="position-absolute coin-right z-index-2" width="100">
				<div class="row my-5">
					<div class="col-lg-8 d-flex align-items-center mb-4 mb-lg-0 order-2 order-lg-1">
						<h1 class="mb-3 text-color-5">
							<b>{{ __('opportunities_page_intro')['explore'] }} <br> {{ __('opportunities_page_intro')['opportunities_with_nuGenesis'] }}</b>
						</h1>
					</div>
					<div class="col-lg-4 order-1 order-lg-2 mb-4 mb-lg-0">
						<img src="../images/opportunities/nugenesisou-logo-1.png" alt="" class="w-100">
					</div>
				</div>
			</div>
		</section>

		<section  id="content">
			<div class="custom-container container-xl position-relative">
				<img src="../images/Elements-1.png" alt="" class="position-absolute coin-left z-index-2" width="100">
				<div class="row mb-5" id="cards">
					<div class="col-lg-4 mb-md-0 mb-3">
						<div class="card card-1 bg-transparent">
							<div class="position-absolute text-white px-5 pt-5">
								<h3 class="mb-3">
									<b>{{ __('opportunities_page_content')['be_super'] }} <br> {{ __('opportunities_page_content')['market_maker'] }}</b>
								</h3>
								<p class="text-justify">
                                    {{ __('opportunities_page_content')['p1'] }}
								</p>
								<p class="text-justify">
                                    {{ __('opportunities_page_content')['p2'] }}
								</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 mb-md-0 mb-3">
						<div class="card card-2 position-relative bg-transparent">
							<div class="position-absolute text-white px-5 pb-5">
								<h3 class="mb-3">
									<b> {{ __('opportunities_page_content')['build_advance'] }}</b>
								</h3>
								<p class="text-justify">
									{{ __('opportunities_page_content')['p3'] }}
								</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 mb-md-0 mb-3">
						<div class="card card-3 bg-transparent">
							<div class="position-absolute text-white px-5 pt-5">
								<h3 class="mb-3">
									<b>{{ __('opportunities_page_content')['join'] }}</b>
								</h3>
								<p class="text-justify">
									{{ __('opportunities_page_content')['p4'] }}
								</p>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-10 offset-lg-1 text-center">
						<h3 class="text-white">
							{{ __('opportunities_page_content')['send_email'] }} <a href = "mailto: admin@nucoin.com.au" class="text-color-3">admin@nucoin.com.au</a> {{ __('opportunities_page_content')['p5'] }}
						</h3>
					</div>
				</div>
			</div>
		</section>

		<footer id="footer" class="py-5">
            <section class="custom-container container-xl py-5">
                <div class="row mb-5">
                    <div class="col-lg-4 mb-lg-0 mb-lg-3 mb-4 d-flex justify-content-center">
                        <a href="index.html">
							<img src="../images/media/Assets/nugenesisou-logo-1 (1).png" alt="" width="300">
						</a>
                    </div>
                    <div class="col-lg-4 d-flex mb-lg-0 mb-4">
                        <div class="w-50">
                            <div>
                                <a href="{{url(app()->getLocale(),'about-us')}}" class="text-color-4">
                                    <b>{{__("some_page_general_footer")['about_us']}}</b>
                                </a>
                            </div>
                            <div>
                                <a href="{{url(app()->getLocale(),'projects')}}" class="text-color-4">
                                    <b>{{__("some_page_general_footer")['projects']}}</b>
                                </a>
                            </div>
                            <div>
                                <a href="{{url(app()->getLocale(),'media')}}" class="text-color-4">
                                    <b>{{__("some_page_general_footer")['media']}}</b>
                                </a>
                            </div>
                            <div>
                                <a href="{{url(app()->getLocale(),'team')}}" class="text-color-4">
                                    <b>{{__("some_page_general_footer")['team']}}</b>
                                </a>
                            </div>
                        </div>
                        <div class="w-50">
                            <div>
                                <a href="https://justsocial.tech/" class="text-color-4">
                                    <b>{{__("some_page_general_footer")['just_social']}}</b>
                                </a>
                            </div>
                            <div>
                                <a href="https://explorer.nucoin.com.au/" class="text-color-4">
                                    <b>{{__("some_page_general_footer")['explore']}}</b>
                                </a>
                            </div>
                            <div>
                                <a href="https://nugenesisou.myshopify.com/" class="text-color-4">
                                    <b>{{__("some_page_general_footer")['shop']}}</b>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-lg-0 mb-4">
                        <div class="mb-3">
                            <b class="text-color-4">{{__("some_page_general_footer")['subscribe']}}</b>
                        </div>
                        <form>
                            <div class="input-group">
                                <input type="email" class="form-control form-control-lg" placeholder="Your email here" aria-label="Your email here" aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                  <button class="btn btn-lg bg-color-1" type="submit">
                                    <i class="fa fa-send text-white"></i>
                                  </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 d-flex align-items-center mb-md-0 mb-3 order-3 order-lg-1 mb-3 mb-lg-0 justify-content-center justify-content-lg-start">
                        <div class="text-color-4">
                            NuGenesis &copy; <span id="year"></span>. All rights reserved.
                        </div>
                    </div>
                    <div class="col-lg-4 d-flex align-items-center mb-md-0 mb-3 order-2 mb-3 mb-lg-0 justify-content-center justify-content-lg-start">
                        <a href="javascript:void(0)" class="text-color-4 mr-3">
                            Terms & conditions
                        </a>
                        <a href="javascript:void(0)" class="text-color-4">
                            Privacy Policy
                        </a>
                    </div>
                    <div class="col-lg-4 d-flex align-items-center order-1 order-lg-3 mb-3 mb-lg-0 justify-content-center justify-content-lg-start">
                        <span class="mr-1 text-color-4">Our Socials: </span>
                        <a href="https://www.facebook.com/nutechcity" class="text-color-4">
                            <img src="../images/media/Assets/Socials icons/Facebook.svg" alt="" width="48" height="48">
                        </a>
                        <a href="https://www.instagram.com/nugenesis.ou/" class="text-color-4">
                            <img src="../images/media/Assets/Socials icons/Instagram.svg" alt="" width="48" height="48">
                        </a>
                        <a href="https://twitter.com/nugenesisou" class="text-color-4">
                            <img src="../images/media/Assets/Socials icons/Twitter.svg" alt="" width="48" height="48">
                        </a>
                        <a href="https://www.linkedin.com/company/nugenesis/" class="text-color-4">
                            <img src="../images/media/Assets/Socials icons/LinkedIn.svg" alt="" width="48" height="48">
                        </a>
                        <a href="https://www.youtube.com/c/NuGenesis" class="text-color-4">
                            <img src="../images/media/Assets/Socials icons/YouTube.svg" alt="" width="48" height="48">
                        </a>
                    </div>
                </div>
            </section>
        </footer>
	</div>

@endsection

