<!DOCTYPE html>

<html lang="en">

<head>
	<title>Nugenesis | Media</title>
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

	<!-- Slider -->
	<link rel="stylesheet" href="{{asset('/css/owl.carousel.min.css')}}">
	<link rel="stylesheet" href="{{asset('/css/owl.theme.default.min.css')}}">
</head>

<body>

    <div id="media">
        <div class="mb-5 shadow" id="hero-container">
            <header id="header" class="custom-container container-xl position-relative">

                {{View::make('header')}}
            </header>
        </div>

        <section class="custom-container container-xl pt-5">
            <div class="row">
                <div class="col-12 text-center">
                    <h4 class="mb-3">
                        <b>Media</b>
                    </h4>
                </div>
            </div>
        </section>

        <section class="custom-container container-xl py-5">
            <div class="row">
                <div class="col-lg-6 pr-lg-5 pr-3 d-flex align-items-center">
                    <div>
                        <div class="d-flex align-items-center flex-column flex-lg-row mb-4">
                            <h5>
                                <b>NuGenesis in Under 4 Minutes</b>
                            </h5>
                        </div>
                        <div class="text-secondary">
                            <p>
                                NuGenesis is the the most advanced blockchain eco-system. We'll help you understand our vision and mission in under 4 Minutes.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 pl-lg-5 pl-3 d-flex align-items-center">
                    <iframe
                        src="https://www.youtube.com/embed/jiAf-YSd96E">
                    </iframe>
                </div>
            </div>
        </section>

        <section class="custom-container container-xl py-5">
            <div class="row">
                <div class="col-lg-6 pr-lg-5 pr-3 d-flex align-items-center order-lg-1 order-2">
                    <iframe
                        src="https://www.youtube.com/embed/d7uKY68-tgU">
                    </iframe>
                </div>
                <div class="col-lg-6 pl-lg-5 pl-3 d-flex align-items-center order-lg-2 order-1">
                    <div>
                        <div class="d-flex align-items-center flex-column flex-lg-row mb-4">
                            <h5>
                                <b>NuGenesis - The Unveiling</b>
                            </h5>
                        </div>
                        <div class="text-secondary">
                            <p>
                                NuGenesis is finally here. Let us introduce to you the solutions available today, such as LedgerX, hardware, as well as the NuGenesis MetaRealm concept. In this unveiling, we'll also introduce our Team from around the world, including India and Dubai.
                            </p>
                            <p>
                                We celebrate the evolution of mankind and show you more insights on the roadmap of Nugenesis technologies. In this unveiling, we dive deeper into the journey and purpose of NuGenesis. Learn about parralel processing capabilities with NuGenesis, allowing uncomparable transactions per second, AI and Security.
                            </p>
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
	<script src="{{asset('/js/owl.carousel.min.js')}}"></script>
	<script src="{{asset('/js/main.js')}}"></script>

</body>
</html>
