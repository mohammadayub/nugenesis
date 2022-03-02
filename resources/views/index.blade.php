@extends('layout')
@section('content')
<div id="home">
    <div class="min-vh-100" id="hero-container">
        <header id="header" class="custom-container container-xl position-relative">
            @include('nav')
        </header>

        <section id="hero" class="custom-container container-xl">
            <div class="row">
                <div class="pt-5 col-lg-7">
                    <h1 class="mb-4 hero-text text-color-3">
                        {{ __('home_page_hero')['h1'] }}
                    </h1>
                    <h6 class="mb-5 hero-secondary-text text-white">
                        <p>
                            {{ __('home_page_hero')['p1'] }}
                        </p>
                        <p>
                            {{ __('home_page_hero')['p2'] }}
                        </p>
                        <p>
                            {{ __('home_page_hero')['p3'] }}
                        </p>
                        <p>
                            {{ __('home_page_hero')['p4'] }}
                        </p>
                    </h6>

                    <a href="{{ url(app()->getLocale(), 'projects') }}"
                        class="py-3 mb-5 text-white btn bg-base-color learn-more-btn btn-no-ring d-block d-lg-inline rounded">
                        {{ __('home_page_hero')['viewproject'] }}
                    </a>
                </div>
            </div>
        </section>
    </div>

    <section id="about" class="custom-container container-xl position-relative pb-lg-5 mb-5 mb-lg-0">
        <img src="../images/Elements-1.png" alt="" class="position-absolute coin-left z-index-2" width="100">
        <img src="../images/Elements-1.png" alt="" class="position-absolute coin-right z-index-2" width="100">
        <div class="pb-lg-5 position-relative">
            <div class="row text-center hero-boxes text-color-2 mb-5">
                <div class="col-md-4">
                    <div class="card p-3 bg-transparent">
                        <div class="card-body p-5 bg-color-4">
                            <h5>
                                <b>{{ __('home_page_about')['scalability'] }}</b>
                            </h5>
                            <p>
                                {{ __('home_page_about')['p4'] }}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card p-3 bg-transparent">
                        <div class="card-body p-5 bg-color-4">
                            <h5>
                                <b>{{ __('home_page_about')['interoperability'] }}</b>
                            </h5>
                            <p>
                                {{ __('home_page_about')['p5'] }}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card p-3 bg-transparent">
                        <div class="card-body p-5 bg-color-4">
                            <h5>
                                <b>{{ __('home_page_about')['sustainability'] }}</b>
                            </h5>
                            <p>
                                {{ __('home_page_about')['p6'] }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row text-justify">
                <div class="col-lg-6 position-relative">
                    <img src="../images/home/assets/hm-illustration.png" alt="" class="z-index-2 w-100 about-image">
                </div>
                <div class="col-lg-6 about-container pt-lg-5 d-flex align-items-center">
                    <div class="z-index-2">
                        <h4 class="mb-3 text-color-1">
                            <b>{{ __('home_page_about')['about_nugenesis'] }}</b>
                        </h4>

                        <div class="text-color-2">
                            <p>
                                {{__("about-us_page_hero")['p1']}}
                            </p>
                            <p>
                                {{__("about-us_page_hero")['p2']}}
                            </p>
                            <p>
                                {{__("about-us_page_hero")['p3']}}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="projects" class="pt-5">
        <div
            class="custom-container container-xl text-center d-flex align-items-center flex-column mb-lg-5 position-relative">
            <img src="../images/Elements-1.png" alt="" class="position-absolute coin-left z-index-2" width="100">
            <img src="../images/Elements-1.png" alt="" class="position-absolute coin-right z-index-2" width="100">
            <div class="mb-4 row w-100">
                <div class="col-lg-6 offset-lg-3">
                    <div>
                        <img src="../images/home/assets/blocks.svg" alt="">
                    </div>
                    <h4 class="mb-3 text-color-3">
                        <b>{{ __('home_page_projects')['projects'] }}</b>
                    </h4>
                    <p class="text-white">
                        {{ __('home_page_projects')['p1'] }}
                    </p>
                </div>
            </div>
            <div class="mb-4 project-cards w-100">
                <div class="owl-carousel">
                    <div class="item">
                        <div class="card w-100 p-3">
                            <div class="py-4 card-body position-relative">
                                <img class="card-img-top w-100" src="../images/NuCoin.jpg" alt="Card image"
                                    height="180">
                                <h5 class="mt-5">
                                    <b>{{ __('home_page_projects')['the_nugenesis_flagship'] }}</b>
                                </h5>
                                <p class="mb-4 text-secondary">
                                    {{ __('home_page_projects')['p2'] }}
                                </p>
                                <div class="d-flex justify-content-center position-absolute link-btn">
                                    <a class="bg-base-color py-2 px-5 rounded text-white d-block d-lg-inline text-center"
                                        href="{{ url(app()->getLocale(), 'projects') }}#the_nugenesis_flagship">
                                        {{ __('home_page_projects')['learnmore'] }}
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card w-100 p-3">
                            <div class="py-4 card-body position-relative">
                                <img class="card-img-top w-100" src="../images/Troy-Gold-Backed.jpg" alt="Card image"
                                    height="180">
                                <h5 class="mt-5">
                                    <b>{{ __('home_page_projects')['troy_gold'] }}</b>
                                </h5>
                                <p class="mb-4 text-secondary">
                                    {{ __('home_page_projects')['p3'] }}
                                </p>
                                <div class="d-flex justify-content-center position-absolute link-btn">
                                    <a class="bg-base-color py-2 px-5 rounded text-white d-block d-lg-inline text-center"
                                        href="{{ url(app()->getLocale(), 'projects') }}#troy_gold_backed_token">
                                        {{ __('home_page_projects')['learnmore'] }}
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card w-100 p-3">
                            <div class="py-4 card-body position-relative">
                                <img class="card-img-top w-100" src="../images/JustSocial.jpg" alt="Card image"
                                    height="180">
                                <h5 class="mt-5">
                                    <b>{{ __('home_page_projects')['just_social'] }}</b>
                                </h5>
                                <p class="mb-4 text-secondary">
                                    {{ __('home_page_projects')['p4'] }}
                                </p>
                                <div class="d-flex justify-content-center position-absolute link-btn">
                                    <a class="bg-base-color py-2 px-5 rounded text-white d-block d-lg-inline text-center"
                                        href="{{ url(app()->getLocale(), 'projects') }}#just_social">
                                        {{ __('home_page_projects')['learnmore'] }}
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card w-100 p-3">
                            <div class="py-4 card-body position-relative">
                                <img class="card-img-top w-100" src="../images/Smart-Contract.jpg" alt="Card image"
                                    height="180">
                                <h5 class="mt-5">
                                    <b>{{ __('home_page_projects')['next_generation'] }}</b>
                                </h5>
                                <p class="mb-4 text-secondary">
                                    {{ __('home_page_projects')['p5'] }}
                                </p>
                                <div class="d-flex justify-content-center position-absolute link-btn">
                                    <a class="bg-base-color py-2 px-5 rounded text-white d-block d-lg-inline text-center"
                                        href="{{ url(app()->getLocale(), 'projects') }}#dnc">
                                        {{ __('home_page_projects')['learnmore'] }}
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card w-100 p-3">
                            <div class="py-4 card-body position-relative">
                                <img class="card-img-top w-100" src="../images/NFT-City-Exchange.jpg" alt="Card image"
                                    height="180">
                                <h5 class="mt-5">
                                    <b>{{ __('home_page_projects')['nft'] }}</b>
                                </h5>
                                <p class="mb-4 text-secondary">
                                    {{ __('home_page_projects')['p6'] }}
                                </p>
                                <div class="d-flex justify-content-center position-absolute link-btn">
                                    <a class="bg-base-color py-2 px-5 rounded text-white"
                                        href="{{ url(app()->getLocale(), 'projects') }}#nft_city d-block d-lg-inline text-center">
                                        {{ __('home_page_projects')['learnmore'] }}
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card w-100 p-3">
                            <div class="py-4 card-body position-relative">
                                <img class="card-img-top w-100" src="../images/LedgerX.jpg" alt="Card image"
                                    height="180">
                                <h5 class="mt-5">
                                    <b>{{ __('home_page_projects')['the_ledger'] }}</b>
                                </h5>
                                <p class="mb-4 text-secondary">
                                    {{ __('home_page_projects')['p7'] }}
                                </p>
                                <div class="d-flex justify-content-center position-absolute link-btn">
                                    <a class="bg-base-color py-2 px-5 rounded text-white d-block d-lg-inline text-center"
                                        href="{{ url(app()->getLocale(), 'projects') }}#ledgerx">
                                        {{ __('home_page_projects')['learnmore'] }}
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <a class="bg-base-color rounded-circle d-flex justify-content-center align-items-center mr-2 customPrevBtn -mr-1"
                        href="javascript:void(0)" style="width: 30px; height: 30px;">
                        <i class="text-white fa fa-angle-left" aria-hidden="true"></i>
                    </a>
                    <a class="bg-base-color rounded-circle d-flex justify-content-center align-items-center customNextBtn"
                        href="javascript:void(0)" style="width: 30px; height: 30px;">
                        <i class="text-white fa fa-angle-right" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section id="medias"
        class="custom-container container-xl py-5 text-center d-flex align-items-center flex-column mb-lg-5 position-relative">
        <div class="row w-100">
            <div class="col-lg-5 text-justify d-flex align-items-center mb-lg-0 mb-4">
                <div>
                    <h4 class="mb-3 text-color-1">
                        <b>{{ __('home_page_medias')['media'] }}</b>
                    </h4>
                    <p class="text-color-2">
                        {{ __('home_page_medias')['p1'] }}
                    </p>
                    <div class="w-100 mt-4">
                        <a class="bg-base-color py-3 px-5 rounded text-white d-block d-lg-inline text-center"
                            href="{{ url(app()->getLocale(), 'media') }}">
                            {{ __('home_page_projects')['learnmore'] }}
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="d-flex justify-content-center">
                    <iframe height="400" src="https://www.youtube.com/embed/_K5JB5ZNoeA">
                    </iframe>
                </div>
            </div>
        </div>
    </section>

    <section id="community_participation">
        <div
            class="mt-5 text-center d-flex align-items-center flex-column position-relative text-light overflow-hidden pb-3">
            <div class="row w-100 py-5">
                <div class="col-lg-8 offset-lg-2">
                    <h4 class="mb-3 text-color-3">
                        <b>{{ __('home_page_medias')['community_participation'] }}</b>
                    </h4>
                    <div class="d-flex justify-content-center" id="adoption_video">
                        <iframe height="400" width="800" src="https://www.youtube.com/embed/xMcCqJl4QA8">
                        </iframe>
                    </div>
                    <br>
                    <p class="mb-0">
                        {{ __('home_page_medias')['get_involved'] }}
                    </p>
                    <p class="mb-0">
                        {{ __('home_page_medias')['nugenesis_community'] }}
                    </p>
                    <p class="mb-0">
                        {{ __('home_page_medias')['new_economy'] }}
                    </p>
                    <p class="mb-0">
                        {{ __('home_page_medias')['nugenesis_ecosystem'] }}
                    </p>
                </div>
            </div>
            <div class="mb-4 community-participation-cards container-fluid">
                <div class="row">
                    <div class="col-sm col-12 col-md">
                        <div class="card bg-transparent">
                            <div class="p-0 card-body">
                                <div class="d-flex justify-content-center">
                                    <a href="https://www.youtube.com/watch?v=LNuesj6LeRcn" target="_blank">
                                        <img src="../images/programs/senatorsprogram.jpg" >
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm col-12">

                        <div class="card bg-transparent">
                            <div class="p-0 card-body">
                                <div class="d-flex justify-content-center">
                                    <a
                                        target="_blank"
                                        href="https://www.youtube.com/watch?v=KIlkhmxTi5M">
                                        <img src="../images/programs/marketconsulprogram.jpg">
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-sm col-12">

                        <div class="card bg-transparent">
                            <div class="p-0 card-body">
                                <div class="d-flex justify-content-center">
                                    <a
                                        target="_blank"
                                        href="https://www.youtube.com/watch?v=D0WFAAlEGOsn">
                                        <img src="../images/programs/networkconcordatprogram.jpg">
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-sm col-12">
                        <div class="card bg-transparent">
                            <div class="p-0 card-body">
                                <div class="d-flex justify-content-center">
                                    <a
                                        target="_blank"
                                        href="https://www.youtube.com/watch?v=plMKga9xAqE">
                                        <img src="../images/programs/diplomatprogram.jpg" width="100px">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm col-12">

                        <div class="card bg-transparent">
                            <div class="p-0 card-body">
                                <div class="d-flex justify-content-center">
                                    <a
                                        target="_blank"
                                        href="https://www.youtube.com/watch?v=gffjTUdgfDI">
                                        <img src="../images/programs/ambassadorprogram.jpg">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                 
                </div>
            </div>
            <div class="d-flex justify-content-center">
              
                    <a class="bg-base-color py-2 px-5 rounded text-white d-block d-lg-inline text-center"
                        href="{{url(app()->getLocale(),'getting-involved')}}?program=ambassador#program-selection">
                        {{ __('home_page_projects')['learnmore'] }}
                    </a>
             
            </div>
        </div>
    </section>

    @include('footer')

    <section id="modals">
        <div class="modal fade" id="hero-video" data-backdrop="static" data-keyboard="false" tabindex="-1"
            aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <video autoplay muted loop class="w-100 h-auto">
                            <source src="../images/Nugenesis Hero Video - Hi Res.mp4" type="video/mp4">
                        </video>
                        <div class="d-flex flex-lg-row flex-column">
                            <div class="text-light bottom-text">
                                {{ __('home_page_medias')['p2'] }}
                            </div>
                            <div class="d-flex align-items-center">
                                <button type="button"
                                    class="py-1 text-white btn bg-base-color btn-no-ring close-btn mt-lg-0 mt-2"
                                    data-dismiss="modal">
                                    <small>{{ __('home_page_medias')['close'] }}</small>
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
