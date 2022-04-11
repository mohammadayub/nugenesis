@extends('layout')
@section('content')

<div id="media" @if(\App\Language::isRTL()) dir="rtl" @endif>
    <div class="position-relative min-vh-100 d-flex flex-column" id="hero-container">
        <section id="header">
            <header class="custom-container container-xl position-relative z-index-2s">
                <!-- <img src="./images/Header IMG.png" alt="hero image" class="hero-image position-absolute d-none d-lg-block"> -->
               @include('nav')
            </header>
        </section>
        <section id="hero" class="bg-white py-5 align-self-stretch">
            <div class="custom-container container-xl position-relative">
                <img src="../images/Elements-1.png" alt="" class="position-absolute coin-left z-index-2" width="100">
                <img src="../images/Elements-1.png" alt="" class="position-absolute coin-right z-index-2" width="100">
                <div class="row">
                    <div class="pt-0 pt-md-5 col-lg-6">
                        <div>
                            <h4 class="mb-3 text-color-1 my-5">
                                <b>{{__("media_page_hero")['media']}}</b>
                            </h4>
                            <h4 class="mb-3 text-color-4 welcome">
                                <b>{{__("media_page_hero")['welcome']}}</b>
                            </h4>
                            <h1 class="mb-4 hero-text text-color-4 hero-text">
                                {{__("media_page_hero")['nugenesis']}}
                            </h1>
                        </div>
                    </div>
                    <div class="col-lg-6 d-flex align-items-center py-5 position-relative">
                        <img src="../images/media/Assets/med-illustration.png" alt="" class="w-100 hero-image position-absolute">
                    </div>
                </div>
            </div>
        </section>
    </div>

    <section id="content" class="position-relative z-index-2">
        <div class="py-5 position-relative custom-container container-xl">
            <img src="../images/Elements-1.png" alt="" class="position-absolute coin-left z-index-2" width="100">
            <img src="../images/Elements-1.png" alt="" class="position-absolute coin-right z-index-2" width="100">
            <div class="pt-5 mb-5">
                <div class="mb-5">
                    <div>
                        <h4 class="mb-3 text-color-3">
                            <b>{{__("media_page_content")['nugenesis_under_4_minute']}}</b>
                        </h4>
                    </div>
                    <div class="row w-100">
                        <div class="col-lg-5 text-justify">
                            <p class="text-white">
                                {{__("media_page_content")['p1']}}
                            </p>
                            <!-- <div class="w-100 mt-4">
                                <a class="bg-base-color py-2 px-5 rounded text-white" href="media.html">
                                    Learn More
                                </a>
                            </div> -->
                        </div>
                        <div class="col-lg-7">
                            <div class="d-flex justify-content-center">
                                <iframe
                                    height="400"
                                    src="https://www.youtube.com/embed/_K5JB5ZNoeA">
                                </iframe>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="pt-5">
                    <div>
                        <h4 class="mb-3 text-color-3">
                            <b>{{__("media_page_content")['the_unveiling']}}</b>
                        </h4>
                    </div>
                    <div class="row w-100">
                        <div class="col-lg-5 text-justify">
                            <p class="text-white">
                                {{__("media_page_content")['p2']}}
                            </p>
                            <p class="text-white">
                                {{__("media_page_content")['p3']}}
                            </p>
                            <!-- <div class="w-100 mt-4">
                                <a class="bg-base-color py-2 px-5 rounded text-white" href="media.html">
                                    Learn More
                                </a>
                            </div> -->
                        </div>
                        <div class="col-lg-7">
                            <div class="d-flex justify-content-center">
                                <iframe
                                    height="400"
                                    src="https://www.youtube.com/embed/d7uKY68-tgU">
                                </iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="py-5">
                <div class="socials">
                    <div class="text-center mb-4">
                        <h3 class="text-white">
                            <b>{{__("media_page_content")['our_social']}}</b>
                        </h3>
                    </div>
                    <div class="row">
                        <div class="col-lg-8 offset-lg-2">
                            <div class="d-flex flex-lg-row flex-column justify-content-between bg-white p-5 social-links text-center">
                                <a href="https://www.facebook.com/nutechcity" class="text-color-4 mb-md-0 mb-3">
                                    <div class="d-flex justify-content-center mb-3">
                                        <img src="../images/media/Assets/Socials icons/Facebook.svg" alt="">
                                    </div>
                                    <p>NuGenesis</p>
                                </a>
                                <a href="https://www.instagram.com/nugenesis.ou/" class="text-color-4 mb-md-0 mb-3">
                                    <div class="d-flex justify-content-center mb-3">
                                        <img src="../images/media/Assets/Socials icons/Instagram.svg" alt="">
                                    </div>
                                    <p>@NuGenesis.ou</p>
                                </a>
                                <a href="https://twitter.com/nugenesisou" class="text-color-4 mb-md-0 mb-3">
                                    <div class="d-flex justify-content-center mb-3">
                                        <img src="../images/media/Assets/Socials icons/Twitter.svg" alt="">
                                    </div>
                                    <p>@NuGenesisou</p>
                                </a>
                                <a href="https://www.linkedin.com/company/nugenesis/" class="text-color-4 mb-md-0 mb-3">
                                    <div class="d-flex justify-content-center mb-3">
                                        <img src="../images/media/Assets/Socials icons/LinkedIn.svg" alt="">
                                    </div>
                                    <p>NuGenesis</p>
                                </a>
                                <a href="https://www.youtube.com/c/NuGenesis" class="text-color-4 mb-md-0 mb-3">
                                    <div class="d-flex justify-content-center mb-3">
                                        <img src="../images/media/Assets/Socials icons/YouTube.svg" alt="">
                                    </div>
                                    <p>NuGenesis</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer id="footer" class="py-5">
        <section class="custom-container container-xl py-5">
            <div class="row mb-5">
                <div class="col-lg-4 mb-lg-0 mb-3">
                    <img src="../images/media/Assets/nugenesisou-logo-1 (1).png" alt="" width="300">
                </div>
                <div class="col-lg-4 d-flex justify-content-lg-around mb-lg-0 mb-3">
                    <div class="mr-lg-0 mr-5">
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
                       
                    </div>
                    <div>
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
                <div class="col-lg-4 mb-lg-0 mb-3">
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
                <div class="col-lg-4 d-flex align-items-center mb-md-0 mb-3">
                    <div class="text-color-4">
                        NuGenesis &copy; <span id="year"></span>. All rights reserved.
                    </div>
                </div>
                <div class="col-lg-4 d-flex align-items-center mb-md-0 mb-3">
                    <a href="javascript:void(0)" class="text-color-4 mr-3">
                        Terms & conditions
                    </a>
                    <a href="javascript:void(0)" class="text-color-4">
                        Privacy Policy
                    </a>
                </div>
                <div class="col-lg-4 d-flex align-items-center">
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
