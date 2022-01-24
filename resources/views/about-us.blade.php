<!DOCTYPE html>

<html lang="en">

<head>
	<title>Nugenesis | About Us</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="icon" type="image/x-icon" href="./images/favicon.ico">

	<link rel="stylesheet" href="{{asset('/css/styles.css')}}">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

	<!-- Icons -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link media='all' href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>

    <div id="about-us">
		<div class="mb-5 display-relative shadow" id="hero-container">
			<header id="header" class="custom-container container-xl position-relative">
                {{View::make('header')}}
			</header>
		</div>

		<section class="pt-5">
			<div class="position-relative custom-container container-xl row">
				<div class="container-bg-image position-absolute z-index-n1 rounded-lg"></div>
				<div class="col-12">
					<div class="text-center mb-5 py-5 bg-light- position-relative">
						<img src="./images/Elements-1.png" alt="" class="position-absolute coin-left z-index-1" width="100">
						<img src="./images/Elements-1.png" alt="" class="position-absolute coin-right z-index-1" width="100">
						<div class="row mb-4">
							<div class="col-lg-4 offset-lg-4">
								<h4>
									<b>About Us</b>
								</h4>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-6 offset-lg-3">
								<h5 class="text-secondary mb-5">
									Welcome to the NuGenesis platform: the multi-chain interoperable network system availing your optimal combination of private, public, open, permission and with degree of decentralisation to suit. (There are 4 Patents Pending on the key aspects of the platform).
								</h5>
							</div>
						</div>
						<div class="row text-lg-center text-justify">
							<div class="col-lg-10 offset-lg-1">
								<p class="mb-4">
									Secured by dual layer internal and external Artificial intelligence (AI), it is gasless and carbon neutral.
								</p>
								<p class="mb-4">
									With unlimited scale and speed, the NuGenesis blockchain infrastructure is the substratum for gas less interactive NFTs, augmented and virtual reality. The backbone of the metaverse and metarealm.
								</p>
								<p class="mb-4">
									The NuGenesis system is a network of parallel processing sovereign blockchains (including a Bitcoin and Ethereum chain for example) and multi-lingual with 29 different languages allowing dApps built elsewhere to be seamlessly interoperable.
								</p>
								<p class="mb-4">
									It is a system designed for unlimited scalability to cater for mass adoption of blockchain tech. NuGenesis works with other projects to promote composability, elimination of information silos and the advancement of blockchain solutions to users meeting the demands of mass adoption.
								</p>
								<p class="mb-4">
									NuGenesis is entirely gasless and totally green!
								</p>
								<p class="mb-4">
									Roadmap 1 is fully completed. NuGenesis is a fully operational blockchain system, including a gasless interactive NFT™ platform, next gen smart contract Digital Notarised Contract DNC platform, serialised digital asset platform for next gen DeFi, mutli-coin smart chain and a complete ecosystem including a crypto-centric social media platform (Just Social) and a fully-fledged Fiat-Crypto exchange, Ledger X.
								</p>
								<p class="mb-4">
									Roadmap 2 is underway. The interactive NFTs are gamified, level-up and transition into augmented and virtual reality in the meta-realm.
								</p>
								<p class="mb-4">
									The NuGenesis system has a constant rate of innovation built into the code. The minting system provides for special purpose treasuries to fund the continuous rate of upgrade and innovation.
								</p>
								<p>
									User governance is encouraged; supported by a number of programs for community building and fostering those wishing to make crypto tech their career, profession and business.
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

        {{View::make('footer')}}
	</div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    </body>
</html>
