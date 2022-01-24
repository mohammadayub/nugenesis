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
                       {{--         {{ __('index.p1') }}  --}}
						</h1>
						<h6 class="mb-5 hero-secondary-text text-secondary">
						<p>
							Welcome to the NuGenesis platform: the multi-chain interoperable network system availing your optimal combination of private, public, open, permission and with degree of decentralisation to suit.
						</p>
						<p>
							Secured by dual layer internal and external Artificial intelligence (AI), it is gasless and carbon neutral.
						</p>
						<p>
							With unlimited scale and speed, the NuGenesis blockchain infrastructure is the substratum for gas less interactive NFTs, augmented and virtual reality. The backbone of the metaverse and metarealm.
						</p>
						<p>
							NuGenesis did not have an ICO. It funded a complete operational blockchain system itself before NuCoin became available to the public from 23 December 2021. NuGenesis has been working on enterprise and government solutions, particularly for countries seeking to implement (Central Bank Digital Currencies) CBDCs and infrastructure instruments. Accordingly NuGenesis re-engineered blockchain from inception. A “new” Genesis. New, not only in different and fresh thinking, but “NU” as in N.U. – non-usury.
						</p>
						</h6>

						<a href="projects.html" class="py-3 mb-5 text-white btn bg-base-color learn-more-btn btn-no-ring d-block d-lg-inline">
							<small>View Projects</small>
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
						<b>About NuGenesis</b>
					</h4>
				</div>
			</div>
			<div class="pb-lg-5 text-justify position-relative">
				<div class="row">
					<div class="col-lg-6 about-container pt-lg-5">
						<div class="z-index-2 position-relative w-100">
							<p class="text-secondary">
								Welcome to the NuGenesis platform: the multi-chain interoperable network system availing your optimal combination of private, public, open, permission and with degree of decentralisation to suit. (There are 4 Patents Pending on the key aspects of the platform).
							</p>
							<p class="text-secondary">
								Secured by dual layer internal and external Artificial intelligence (AI), it is gasless and carbon neutral.
							</p>
							<p class="text-secondary mb-5">
								With unlimited scale and speed, the NuGenesis blockchain infrastructure is the substratum for gas less interactive NFTs, augmented and virtual reality. The backbone of the metaverse and metarealm.
							</p>
							<a href="about-us.html" class="py-3 mb-5 text-white btn bg-base-color learn-more-btn btn-no-ring d-block d-lg-inline">
								<small>Learn More</small>
							</a>
						</div>
					</div>
					<div class="col-lg-6 about-container pt-lg-5">
						<div class="navis-video pt-lg-0 pt-5">
							<video autoplay muted loop>
								<source src="./images/navis-light.mp4" type="video/mp4">
							</video>
						</div>
					</div>
					<div class="col-12 video-container mt-5 text-center">
						<div class="d-block mx-auto">
							<video autoplay muted loop>
								<source src="./images/nu.mp4" type="video/mp4">
							</video>
							<video autoplay muted loop>
								<source src="./images/spinning-coin.mp4" type="video/mp4">
							</video>
							<video autoplay muted loop>
								<source src="./images/nugenisis.mp4" type="video/mp4">
							</video>
							<video autoplay muted loop>
								<source src="./images/nft-city.mp4" type="video/mp4">
							</video>
							<video autoplay muted loop>
								<source src="./images/just-social.mp4" type="video/mp4">
							</video>
							<video autoplay muted loop>
								<source src="./images/ledx.mp4" type="video/mp4">
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
						<b>Projects</b>
					</h4>
					<p class="text-secondary">
						With unlimited scale and speed, the NuGenesis blockchain infrastructure is the substratum for gas less interactive NFTs, augmented and virtual reality. The backbone of the metaverse and metarealm. Learn more about our Projects.
					</p>
				</div>
			</div>
			<div class="mb-4 project-cards w-100">
				<div class="owl-carousel">
					<div class="item">
						<div class="card w-100">
							<div class="py-4 card-body position-relative position-relative">
								<img class="card-img-top w-100" src="./images/NuCoin.jpg" alt="Card image" height="180">
								<h5 class="mt-5">
									<b>The NuGenesis flagship: NU Coin</b>
								</h5>
								<p class="mb-4 text-secondary">
									NuGenesis’ flagship blockchain, NU Coin, is a fully operational and is already at zero-carbon emission. It is way past the POW vs POS debate!
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
									<b>TROY Gold-backed token denominated in major currencies</b>
								</h5>
								<p class="mb-4 text-secondary">
									A troy is a token to represent the fiat currency representation in physical gold. For example Troy USD (TUSD) Troy Euro (TEURO) Troy AUD (TAUD) etc. It functions similar to a stable coin and a remittance tool.
								</p>
								<div class="d-flex justify-content-center position-absolute link-btn">
									<a class="bg-base-color rounded-circle d-flex justify-content-center align-items-center" href="projects.html#troy_gold_backed_token" style="width: 50px; height: 50px;">
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
									<b>JUST SOCIAL</b>
								</h5>
								<p class="mb-4 text-secondary">
									The decentralised social media platform that empowers users to realise their value. JUST SOCIAL is designed to allow users to re-claim their value using the technology of blockchain.
								</p>
								<div class="d-flex justify-content-center position-absolute link-btn">
									<a class="bg-base-color rounded-circle d-flex justify-content-center align-items-center" href="projects.html#just_social" style="width: 50px; height: 50px;">
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
									<b>Next Generation SMART CONTRACT DIGITAL NOTRALISED CONTRACTS (DNC’S)</b>
								</h5>
								<p class="mb-4 text-secondary">
									The NuGenesis innovation to facilitate mass adoption by the mainstream economy is to go beyond existing limitations of smart contract protocols.
								</p>
								<div class="d-flex justify-content-center position-absolute link-btn">
									<a class="bg-base-color rounded-circle d-flex justify-content-center align-items-center" href="projects.html#dnc" style="width: 50px; height: 50px;">
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
									<b>NFT City.Exchange - Interactive NFT™ Platform</b>
								</h5>
								<p class="mb-4 text-secondary">
									NuGenesis Layer 1 NFT Platform is totally gasless. It is designed to encourage innovation. To encourage the shift from the rather static NFTs that are currently in existence, to more interactive NFTs. NFTs that transcend art into gaming.
								</p>
								<div class="d-flex justify-content-center position-absolute link-btn">
									<a class="bg-base-color rounded-circle d-flex justify-content-center align-items-center" href="projects.html#nft_city" style="width: 50px; height: 50px;">
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
									<b>THE LEDGER X EXCHANGE BLOCKCHAINS</b>
								</h5>
								<p class="mb-4 text-secondary">
									Ledger X is fully fledged (fiat/crypto) exchange where prices are determined by the brutality of the open market. It was designed to be an important part of the NuGenesis ecosystem to ensure capital is to be allocated by the market rather than bond curves and technocratic formulae.
								</p>
								<div class="d-flex justify-content-center position-absolute link-btn">
									<a class="bg-base-color rounded-circle d-flex justify-content-center align-items-center" href="projects.html#ledgerx" style="width: 50px; height: 50px;">
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
				<a href="projects.html" class="py-3 mb-5 text-white btn bg-base-color learn-more-btn btn-no-ring d-block d-lg-inline">
					<small>View Projects</small>
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
						<b>Media</b>
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
									<b>NuGenesis in Under 4 Minutes</b>
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
									<b>NuGenesis - The Unveiling</b>
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
				<a href="media.html" class="py-3 mb-5 text-white btn bg-base-color learn-more-btn btn-no-ring d-block d-lg-inline">
					<small>Learn More</small>
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
						<b>Community Participation</b>
					</h4>
					<p>
						<h5>Get involved and make your mark?</h5>
					</p>
					<p>
						<h5>Want to become a part of the NuGenesis community?</h5>
					</p>
					<p>
						<h5>Want to make a career, profession, or business in the new economy?</h5>
					</p>
					<p>
						<h5>Check out the opportunities in the NuGenesis ecosystem:</h5>
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
											src="./images/programs/1. staff2.png"
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
											src="./images/programs/2. celb.png"
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
											src="./images/programs/3. influlancer.png"
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
											src="./images/programs/4. senator.png"
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
											src="./images/programs/5. marketing.png"
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
											src="./images/programs/6. network.png"
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
											src="./images/programs/7. blockchain.png"
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
											src="./images/programs/8. mind blow.png"
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
								<source src="./images/Nugenesis Hero Video - Hi Res.mp4" type="video/mp4">
							</video>
							<div class="d-flex flex-lg-row flex-column">
								<div class="text-light bottom-text">
									Unlimited scale and speed, the NuGenesis blockchain infrastructure is the substratum for gasless interactive NFTs, augmented and virtual reality. The  backbone of the metaverse and metarealm.
								</div>
								<div class="d-flex align-items-center">
									<button type="button" class="py-1 text-white btn bg-base-color btn-no-ring close-btn mt-lg-0 mt-2" data-dismiss="modal">
										<small>Close</small>
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