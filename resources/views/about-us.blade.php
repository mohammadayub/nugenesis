@extends('layout')
@section('content')
<div id="about-us" @if(\App\Language::isRTL()) dir="rtl" @endif>
    <div class="position-relative min-vh-100 d-flex flex-column" id="hero-container">
        <section id="header">
            <header class="custom-container container-xl position-relative z-index-2s">
                <!-- <img src="./images/Header IMG.png" alt="hero image" class="hero-image position-absolute d-none d-lg-block"> -->
                @include('nav')
            </header>
        </section>
        <section id="hero" class="bg-white py-5 align-self-stretch">
            <div class="custom-container container-xl">
                <div class="row text-justify">
                    <div class="col-lg-6 about-container pt-lg-5 d-flex align-items-center">
                        <div class="z-index-2">
                            <h4 class="mb-3 text-color-1">
                                <b>{{__("about-us_page_hero")['about_nugenesis']}}</b>
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
                    <div class="col-lg-6 position-relative">
                        <img src="./images/about_us/Assets/abt-illustration-1.png" alt="" class="z-index-2 w-100 about-image">
                    </div>
                </div>
            </div>
        </section>
    </div>

    <section id="system" class="min-vh-100 d-flex align-items-center">
        <div class="custom-container container-xl">
            <div class="row">
                <div class="col-lg-7 offset-lg-5 text-white">
                    <p>
                        {{__("about-us_page_system")['p1']}}
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section id="roadmap">
        <div class="custom-container container-xl">
            <div class="row text-justify mb-5">
                <div class="col-lg-6 about-container pt-lg-5 d-flex align-items-center order-2 order-lg-1">
                    <div class="z-index-2">
                        <h4 class="mb-3 text-color-1">
                            <b>{{__("about-us_page_roadmap")['roadmap']}}</b>
                        </h4>
                        <div class="text-color-2">
                            <p>
                                {{__("about-us_page_roadmap")['p1']}}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 position-relative order-1 order-lg-2">
                    <img src="../images/about_us/Assets/abt-illustration-3.png" alt="" class="z-index-2 w-100 about-image">
                </div>
            </div>
            <div class="row text-justify mb-5">
                <div class="col-lg-6 position-relative">
                    <img src="../images/about_us/Assets/abt-illustration-4.png" alt="" class="z-index-2 w-100 about-image">
                </div>
                <div class="col-lg-6 about-container pt-lg-5 d-flex align-items-center">
                    <div class="z-index-2">
                        <h4 class="mb-3 text-color-1">
                            <b>{{__("about-us_page_roadmap")['roadmapone']}}</b>
                        </h4>
                        <div class="text-color-2">
                            <p>
                                {{__("about-us_page_roadmap")['p2']}}
                            </p>
                            <p>
                                {{__("about-us_page_roadmap")['p3']}}
                            </p>
                            <p>
                                {{__("about-us_page_roadmap")['p4']}}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="py-5">
        <div class="d-flex justify-content-center text-white">
            NuGenesis &copy; <span id="year"></span>. All rights reserved.
        </div>
    </footer>

</div>
@endsection

