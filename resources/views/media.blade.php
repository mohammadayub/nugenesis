@extends('layout')
@section('content')	
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

@endsection