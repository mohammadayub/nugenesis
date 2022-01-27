@extends('layout')
@section('content')
<div id="home">
		<div class="min-vh-100" id="hero-container">
            <header id="header" class="custom-container container-xl position-relative">
            <img src="./images/Header IMG.png" alt="hero image" class="hero-image position-absolute d-none d-lg-block">
			@include('nav')
        </header>
			<section id="hero" class="custom-container container-xl">
				<div class="row">
					<div class="pt-5 col-lg-7">
						<h1 class="mb-4 hero-text">
                            {{__("home_page_hero")['h1']}}
						</h1>
						<h6 class="mb-5 hero-secondary-text text-secondary">
						<p>
							{{__("home_page_hero")['p1']}}
						</p>
						<p>
							{{__("home_page_hero")['p2']}}
						</p>
						<p>
							{{__("home_page_hero")['p3']}}
						</p>
						<p>
							{{__("home_page_hero")['p4']}}
						</p>
						</h6>

						<a href="{{url(app()->getLocale(),'projects')}}" class="py-3 mb-5 text-white btn bg-base-color learn-more-btn btn-no-ring d-block d-lg-inline">
							<small>{{__("home_page_hero")['small']}}</small>
						</a>
					</div>
					<div class="col-lg-5 position-relative">
						<div class="position-absolute play-btn-container bg-light d-flex justify-content-center align-items-center rounded-circle" style="width: 120px; height: 120px;">
							<button type="button" class="bg-base-color rounded-circle d-flex justify-content-center align-items-center play-btn btn" data-toggle="modal" data-target="#hero-video" style="width: 80px; height: 80px;">
								<i class="text-white fa fa-play" aria-hidden="true"></i>
							</button>
						</div>
					</div>
				</div>
			</section>
		</div>

		<section id="about" class="custom-container container-xl position-relative pb-lg-5 mb-5 mb-lg-0">
			<img src="./images/Elements-1.png" alt="" class="position-absolute coin-left z-index-2" width="100">
			<img src="./images/Elements-1.png" alt="" class="position-absolute coin-right z-index-2" width="100">
			<div class="mb-4 row w-100">
				<div class="col-12 text-center">
					<h4 class="mb-3">
						{{__("about")['h4']}}
					</h4>
				</div>
			</div>
			<div class="pb-lg-5 text-justify position-relative">
				<div class="row">
					<div class="col-lg-6 about-container pt-lg-5">
						<div class="z-index-2 position-relative w-100">
							<p class="text-secondary">
								{{__("about")['p1']}}
							</p>
							<p class="text-secondary">
								{{__("about")['p2']}}
							</p>
							<p class="text-secondary mb-5">
								{{__("about")['p3']}}
							</p>
							<a href="{{url(app()->getLocale(),'about-us')}}" class="py-3 mb-5 text-white btn bg-base-color learn-more-btn btn-no-ring d-block d-lg-inline">
								<small>{{__("about")['small']}}</small>
							</a>
						</div>
					</div>
					<div class="col-lg-6 about-container pt-lg-5">
						<div class="navis-video pt-lg-0 pt-5">
							<video autoplay muted loop>
								<source src="../images/navis-light.mp4" type="video/mp4">
							</video>
						</div>
					</div>
					<div class="col-12 video-container mt-5 text-center">
						<div class="d-block mx-auto">
							<video autoplay muted loop>
								<source src="../images/nu.mp4" type="video/mp4">
							</video>
							<video autoplay muted loop>
								<source src="../images/spinning-coin.mp4" type="video/mp4">
							</video>
							<video autoplay muted loop>
								<source src="../images/nugenisis.mp4" type="video/mp4">
							</video>
							<video autoplay muted loop>
								<source src="../images/nft-city.mp4" type="video/mp4">
							</video>
							<video autoplay muted loop>
								<source src="../images/just-social.mp4" type="video/mp4">
							</video>
							<video autoplay muted loop>
								<source src="../images/ledx.mp4" type="video/mp4">
							</video>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section id="projects" class="custom-container container-xl pt-5 text-center d-flex align-items-center flex-column mb-lg-5 position-relative">
			<div class="container-bg-image position-absolute z-index-n1 rounded-lg"></div>
			<div class="mb-4 row w-100">
				<div class="col-lg-6 offset-lg-3">
					<div class="header-bar d-flex justify-content-center mb-2">
						<hr>
					</div>
					<h4 class="mb-3">
						<b>{{__("projects")['h4']}}</b>
					</h4>
					<p class="text-secondary">
						{{__("projects")['p1']}}
					</p>
				</div>
			</div>
			<div class="mb-4 project-cards w-100">
				<div class="owl-carousel">
					<div class="item">
						<div class="card w-100">
							<div class="py-4 card-body position-relative position-relative">
								<img class="card-img-top w-100" src="../images/NuCoin.jpg" alt="Card image" height="180">
								<h5 class="mt-5">
									{{__("projects")['h5']}}
								</h5>
								<p class="mb-4 text-secondary">
									{{__("projects")['p2']}}
								</p>
								<div class="d-flex justify-content-center position-absolute link-btn">
									<a class="bg-base-color rounded-circle d-flex justify-content-center align-items-center" href="projects.html#the_nugenesis_flagship" style="width: 50px; height: 50px;">
										<i class="text-white fa fa-angle-right" aria-hidden="true"></i>
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="card w-100">
							<div class="py-4 card-body position-relative">
								<img class="card-img-top w-100" src="./images/Troy-Gold-Backed.jpg" alt="Card image" height="180">
								<h5 class="mt-5">
									<b>{{__("projects")['h5b']}}</b>
								</h5>
								<p class="mb-4 text-secondary">
									{{__("projects")['p3']}}
								</p>
								<div class="d-flex justify-content-center position-absolute link-btn">
									<a class="bg-base-color rounded-circle d-flex justify-content-center align-items-center" href="{{url(app()->getLocale(),'projects')}}#troy_gold_backed_token" style="width: 50px; height: 50px;">
										<i class="text-white fa fa-angle-right" aria-hidden="true"></i>
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="card w-100">
							<div class="py-4 card-body position-relative">
								<img class="card-img-top w-100" src="./images/JustSocial.jpg" alt="Card image" height="180">
								<h5 class="mt-5">
									<b>{{__("projects")['h5c']}}</b>
								</h5>
								<p class="mb-4 text-secondary">
									{{__("projects")['p4']}}
								</p>
								<div class="d-flex justify-content-center position-absolute link-btn">
									<a class="bg-base-color rounded-circle d-flex justify-content-center align-items-center" href="{{url(app()->getLocale(),'projects')}}#just_social" style="width: 50px; height: 50px;">
										<i class="text-white fa fa-angle-right" aria-hidden="true"></i>
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="card w-100">
							<div class="py-4 card-body position-relative">
								<img class="card-img-top w-100" src="./images/Smart-Contract.jpg" alt="Card image" height="180">
								<h5 class="mt-5">
									<b>{{__("projects")['h5d']}}</b>
								</h5>
								<p class="mb-4 text-secondary">
									{{__("projects")['p5']}}
								</p>
								<div class="d-flex justify-content-center position-absolute link-btn">
									<a class="bg-base-color rounded-circle d-flex justify-content-center align-items-center" href="{{url(app()->getLocale(),'projects')}}#dnc" style="width: 50px; height: 50px;">
										<i class="text-white fa fa-angle-right" aria-hidden="true"></i>
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="card w-100">
							<div class="py-4 card-body position-relative">
								<img class="card-img-top w-100" src="./images/NFT-City-Exchange.jpg" alt="Card image" height="180">
								<h5 class="mt-5">
									<b>{{__("projects")['h5e']}}</b>
								</h5>
								<p class="mb-4 text-secondary">
									{{__("projects")['p6']}}
								</p>
								<div class="d-flex justify-content-center position-absolute link-btn">
									<a class="bg-base-color rounded-circle d-flex justify-content-center align-items-center" href="{{url(app()->getLocale(),'projects')}}#nft_city" style="width: 50px; height: 50px;">
										<i class="text-white fa fa-angle-right" aria-hidden="true"></i>
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="card w-100">
							<div class="py-4 card-body position-relative">
								<img class="card-img-top w-100" src="./images/LedgerX.jpg" alt="Card image" height="180">
								<h5 class="mt-5">
									<b>{{__("projects")['h5f']}}</b>
								</h5>
								<p class="mb-4 text-secondary">
									{{__("projects")['p7']}}
								</p>
								<div class="d-flex justify-content-center position-absolute link-btn">
									<a class="bg-base-color rounded-circle d-flex justify-content-center align-items-center" href="{{url(app()->getLocale(),'projects')}}#ledgerx" style="width: 50px; height: 50px;">
										<i class="text-white fa fa-angle-right" aria-hidden="true"></i>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="d-flex justify-content-center">
					<a class="bg-base-color rounded-circle d-flex justify-content-center align-items-center mr-2 customPrevBtn -mr-1" href="javascript:void(0)" style="width: 30px; height: 30px;">
						<i class="text-white fa fa-angle-left" aria-hidden="true"></i>
					</a>
					<a class="bg-base-color rounded-circle d-flex justify-content-center align-items-center customNextBtn" href="javascript:void(0)" style="width: 30px; height: 30px;">
						<i class="text-white fa fa-angle-right" aria-hidden="true"></i>
					</a>
				</div>
			</div>
			<div class="w-100 mt-3">
				<a href="{{url(app()->getLocale(),'projects')}}" class="py-3 mb-5 text-white btn bg-base-color learn-more-btn btn-no-ring d-block d-lg-inline">
					<small>{{__("projects")['small']}}</small>
				</a>
			</div>
		</section>

		<!-- <section id="industries" class="pt-5 text-center custom-container container-xl d-flex align-items-center flex-column mb-lg-5 position-relative d-none">
			<div class="mb-4 row w-100">
				<div class="col-lg-6 offset-lg-3">
					<div class="header-bar d-flex justify-content-center mb-2">
						<hr>
					</div>
					<h4 class="mb-3">
						<b>Industries</b>
					</h4>
					<p class="text-secondary">
						More info coming soon
					</p>
				</div>
			</div>
			<div class="industry-cards w-100 d-none">
				<div class="owl-carousel mb-4">
					<div class="item">
						<div class="card border-0 bg-transparent">
							<img class="card-img-top" src="./images/Ledgerx Image.png" alt="Card image">
							<div class="text-lg-left text-center card-body pl-0 pr-lg-3 pr-0">
								<div class="py-3 d-flex flex-lg-row flex-column align-items-lg-center">
									<div class="mb-3 mb-lg-0">
										<h5 class="">
											<b>Tortor Aliquam Nulla Facilisi Cras</b>
										</h5>
										<p class="mb-0 text-secondary">
											Lectus sit amet est placerat in egastas. Viverra suspendisse potenti nullam
										</p>
									</div>
									<div class="d-flex justify-content-center">
										<a class="bg-base-color rounded-circle d-flex justify-content-center align-items-center" href="#" style="width: 50px; height: 50px;">
											<i class="text-white fa fa-angle-right" aria-hidden="true"></i>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="card border-0 bg-transparent">
							<img class="card-img-top" src="./images/3551763.png" alt="Card image">
							<div class="text-lg-left text-center card-body pl-0 pr-lg-3 pr-0">
								<div class="py-3 d-flex flex-lg-row flex-column align-items-lg-center">
									<div class="mb-3 mb-lg-0">
										<h5 class="">
											<b>Tortor Aliquam Nulla Facilisi Cras</b>
										</h5>
										<p class="mb-0 text-secondary">
											Lectus sit amet est placerat in egastas. Viverra suspendisse potenti nullam
										</p>
									</div>
									<div class="d-flex justify-content-center">
										<a class="bg-base-color rounded-circle d-flex justify-content-center align-items-center" href="#" style="width: 50px; height: 50px;">
											<i class="text-white fa fa-angle-right" aria-hidden="true"></i>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="card border-0 bg-transparent">
							<img class="card-img-top" src="./images/Nucoin Image.png" alt="Card image">
							<div class="text-lg-left text-center card-body pl-0 pr-lg-3 pr-0">
								<div class="py-3 d-flex flex-lg-row flex-column align-items-lg-center">
									<div class="mb-3 mb-lg-0">
										<h5 class="">
											<b>Tortor Aliquam Nulla Facilisi Cras</b>
										</h5>
										<p class="mb-0 text-secondary">
											Lectus sit amet est placerat in egastas. Viverra suspendisse potenti nullam
										</p>
									</div>
									<div class="d-flex justify-content-center">
										<a class="bg-base-color rounded-circle d-flex justify-content-center align-items-center" href="#" style="width: 50px; height: 50px;">
											<i class="text-white fa fa-angle-right" aria-hidden="true"></i>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="card border-0 bg-transparent">
							<img class="card-img-top" src="./images/4183826.png" alt="Card image">
							<div class="text-lg-left text-center card-body pl-0 pr-lg-3 pr-0">
								<div class="py-3 d-flex flex-lg-row flex-column align-items-lg-center">
									<div class="mb-3 mb-lg-0">
										<h5 class="">
											<b>Tortor Aliquam Nulla Facilisi Cras</b>
										</h5>
										<p class="mb-0 text-secondary">
											Lectus sit amet est placerat in egastas. Viverra suspendisse potenti nullam
										</p>
									</div>
									<div class="d-flex justify-content-center">
										<a class="bg-base-color rounded-circle d-flex justify-content-center align-items-center" href="#" style="width: 50px; height: 50px;">
											<i class="text-white fa fa-angle-right" aria-hidden="true"></i>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="card border-0 bg-transparent">
							<img class="card-img-top" src="./images/3551763.png" alt="Card image">
							<div class="text-lg-left text-center card-body pl-0 pr-lg-3 pr-0">
								<div class="py-3 d-flex flex-lg-row flex-column align-items-lg-center">
									<div class="mb-3 mb-lg-0">
										<h5 class="">
											<b>Tortor Aliquam Nulla Facilisi Cras</b>
										</h5>
										<p class="mb-0 text-secondary">
											Lectus sit amet est placerat in egastas. Viverra suspendisse potenti nullam
										</p>
									</div>
									<div class="d-flex justify-content-center">
										<a class="bg-base-color rounded-circle d-flex justify-content-center align-items-center" href="#" style="width: 50px; height: 50px;">
											<i class="text-white fa fa-angle-right" aria-hidden="true"></i>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="d-flex justify-content-center">
					<a class="bg-base-color rounded-circle d-flex justify-content-center align-items-center mr-2 customPrevBtn -mr-1" href="javascript:void(0)" style="width: 30px; height: 30px;">
						<i class="text-white fa fa-angle-left" aria-hidden="true"></i>
					</a>
					<a class="bg-base-color rounded-circle d-flex justify-content-center align-items-center customNextBtn" href="javascript:void(0)" style="width: 30px; height: 30px;">
						<i class="text-white fa fa-angle-right" aria-hidden="true"></i>
					</a>
				</div>
			</div>
		</section> -->

		<section id="medias" class="custom-container container-xl py-5 text-center d-flex align-items-center flex-column mb-lg-5 position-relative">
			<div class="container-bg-image position-absolute z-index-n1 rounded-lg"></div>
			<div class="mb-4 row w-100">
				<div class="col-lg-6 offset-lg-3">
					<div class="header-bar d-flex justify-content-center mb-2">
						<hr>
					</div>
					<h4 class="mb-3">
						<b>{{__("medias")['h4']}}</b>
					</h4>
				</div>
			</div>
			<div class="mb-4 media-cards w-100">
				<div class="owl-carousel mb-4">
					<div class="item">
						<div class="card w-100">
							<div class="py-5 card-body position-relative">
								<div class="position-absolute rounded-circle d-flex justify-content-center align-items-center coin-logo bg-light">
								</div>
								<h5 class="mb-4">
									<b>{{__("medias")['h5']}}</b>
								</h5>
								<div class="d-flex justify-content-center">
									<iframe
										height="315"
										src="https://www.youtube.com/embed/jiAf-YSd96E">
									</iframe>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="card w-100">
							<div class="py-5 card-body position-relative">
								<div class="position-absolute rounded-circle d-flex justify-content-center align-items-center coin-logo bg-light">
								</div>
								<h5 class="mb-4">
									<b>{{__("medias")['h5a']}}</b>
								</h5>
								<div class="d-flex justify-content-center">
									<iframe
										height="315"
										src="https://www.youtube.com/embed/d7uKY68-tgU">
									</iframe>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="d-flex justify-content-center">
					<a class="bg-base-color rounded-circle d-flex justify-content-center align-items-center mr-2 customPrevBtn -mr-1" href="javascript:void(0)" style="width: 30px; height: 30px;">
						<i class="text-white fa fa-angle-left" aria-hidden="true"></i>
					</a>
					<a class="bg-base-color rounded-circle d-flex justify-content-center align-items-center customNextBtn" href="javascript:void(0)" style="width: 30px; height: 30px;">
						<i class="text-white fa fa-angle-right" aria-hidden="true"></i>
					</a>
				</div>
			</div>
			<div class="w-100 mt-3">
				<a href="{{url(app()->getLocale(),'media')}}" class="py-3 mb-5 text-white btn bg-base-color learn-more-btn btn-no-ring d-block d-lg-inline">
					<small>{{__("medias")['small']}}</small>
				</a>
			</div>
		</section>

		<section id="community_participation" class="mt-5 text-center d-flex align-items-center flex-column mb-lg-5 position-relative text-light overflow-hidden pb-3">
			<div class="container-bg-video position-absolute z-index-n1 w-100">
				<video autoplay muted loop class="w-100">
					<source src="./images/Wave Particles.mp4" type="video/mp4">
				</video>
			</div>
			<div class="row w-100 py-5">
				<div class="col-lg-8 offset-lg-2">
					<div class="header-bar d-flex justify-content-center mb-2">
						<hr>
					</div>
					<h4 class="mb-3">
						<b>{{__("medias")['h4a']}}</b>
					</h4>
					<p>
						<h5>{{__("medias")['h5b']}}</h5>
					</p>
					<p>
						<h5>{{__("medias")['h5c']}}</h5>
					</p>
					<p>
						<h5>{{__("medias")['h5d']}}</h5>
					</p>
					<p>
						<h5>{{__("medias")['h5e']}}</h5>
					</p>
				</div>
			</div>
			<div class="mb-4 community-participation-cards custom-container container-xl">
				<div class="owl-carousel mb-4">
					<div class="item">
						<div class="card w-100 bg-transparent">
							<div class="p-0 card-body">
								<div class="d-flex justify-content-center">
									<a href="contact-us.html">
										<img
											src="../images/programs/1. staff2.png"
										>
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="card w-100 bg-transparent">
							<div class="p-0 card-body">
								<div class="d-flex justify-content-center">
									<a href="getting-involved.html?program=ambassador#program-selection">
										<img
											src="../images/programs/2. celb.png"
										>
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="card w-100 bg-transparent">
							<div class="p-0 card-body">
								<div class="d-flex justify-content-center">
									<a href="getting-involved.html?program=diplomats#program-selection">
										<img
											src="../images/programs/3. influlancer.png"
										>
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="card w-100 bg-transparent">
							<div class="p-0 card-body">
								<div class="d-flex justify-content-center">
									<a href="getting-involved.html?program=senators#program-selection">
										<img
											src="../images/programs/4. senator.png"
										>
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="card w-100 bg-transparent">
							<div class="p-0 card-body">
								<div class="d-flex justify-content-center">
									<a href="getting-involved.html?program=market#program-selection">
										<img
											src="../images/programs/5. marketing.png"
										>
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="card w-100 bg-transparent">
							<div class="p-0 card-body">
								<div class="d-flex justify-content-center">
									<a href="getting-involved.html?program=network#program-selection">
										<img
											src="../images/programs/6. network.png"
										>
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="card w-100 bg-transparent">
							<div class="p-0 card-body">
								<div class="d-flex justify-content-center">
									<a href="contact-us.html">
										<img
											src="../images/programs/7. blockchain.png"
										>
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="card w-100 bg-transparent">
							<div class="p-0 card-body">
								<div class="d-flex justify-content-center">
									<a href="{{url(app()->getLocale(),'contact-us')}}">
										<img
											src="../images/programs/8. mind blow.png"
										>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="d-flex justify-content-center">
					<a class="bg-base-color rounded-circle d-flex justify-content-center align-items-center mr-2 customPrevBtn -mr-1" href="javascript:void(0)" style="width: 30px; height: 30px;">
						<i class="text-white fa fa-angle-left" aria-hidden="true"></i>
					</a>
					<a class="bg-base-color rounded-circle d-flex justify-content-center align-items-center customNextBtn" href="javascript:void(0)" style="width: 30px; height: 30px;">
						<i class="text-white fa fa-angle-right" aria-hidden="true"></i>
					</a>
				</div>
			</div>
		</section>

		<section id="modals">
			<div class="modal fade" id="hero-video" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-hidden="true">
				<div class="modal-dialog modal-lg modal-dialog-centered">
					<div class="modal-content">
						<div class="modal-body">
							<video autoplay muted loop class="w-100 h-auto">
								<source src="../images/Nugenesis Hero Video - Hi Res.mp4" type="video/mp4">
							</video>
							<div class="d-flex flex-lg-row flex-column">
								<div class="text-light bottom-text">
									{{__("medias")['p1']}}
								</div>
								<div class="d-flex align-items-center">
									<button type="button" class="py-1 text-white btn bg-base-color btn-no-ring close-btn mt-lg-0 mt-2" data-dismiss="modal">
										<small>{{__("medias")['smalla']}}</small>
									</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
	@endsection
