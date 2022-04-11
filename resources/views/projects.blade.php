@extends('layout')
@section('content')
<div id="projects" @if(\App\Language::isRTL()) dir="rtl" @endif>
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
                    <div class="col-lg-6 order-2 order-lg-1 position-relative z-index-2">
                        <div>
                            <h4 class="mb-3 text-color-1 my-5">
                                <b>{{__("projects_page_hero")['ourprojects']}}</b>
                            </h4>
                            <h4 class="mb-3 text-color-4 welcome">
                                <b>{{__("projects_page_hero")['the_nugenesis_flagship']}}</b>
                            </h4>
                            <h1 class="mb-4 hero-text text-color-4 hero-text">
                                {{__("projects_page_hero")['nucoin']}}
                            </h1>
                            <div class="text-justify text-color-2">
                                <p>
                                    {{__("projects_page_hero")['p1']}}
                                </p>
                                <p>
                                    {{__("projects_page_hero")['p2']}}
                                </p>
                                <p>
                                    {{__("projects_page_hero")['p3']}}
                                </p>
                                <p>
                                    {{__("projects_page_hero")['p4']}}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 d-flex align-items-center py-md-5 py-0 position-relative order-1 order-lg-2">
                        <img src="../images/projects/Assets/pr-illustration.png" alt="" class="w-100 hero-image position-absolute z-index-0">
                    </div>
                </div>
            </div>
        </section>
    </div>

    <section id="hero-sub" class="min-vh-100 d-flex align-items-center position-relative py-md-0 py-5">
        <div class="custom-container container-xl">
            <div class="row">
                <div class="col-lg-6 offset-lg-6 text-white">
                    <div>
                        <p>
                            {{__("projects_page_hero_sub")['p1']}}
                        </p>
                        <p>
                            {{__("projects_page_hero_sub")['p2']}}
                        </p>
                        <p>
                            {{__("projects_page_hero_sub")['p3']}}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="bitcoin"  class="min-vh-100 d-flex align-items-center position-relative">
        <img src="../images/projects/Assets/pr-illustration 2.png" alt="" class="position-absolute coin-right z-index-2">
        <div class="custom-container container-xl py-5 position-relative z-index-2">
            <div class="row">
                <div class="col-lg-6">
                    <img src="../images/bitcoinNU.png" alt="" >
                    <h3 class="text-color-1 mb-4">
                        <b>{{__("projects_page_bitcoin")['bitcoinnu']}}</b>
                    </h3>
                    <div class="text-color-2 text-justify">
                        <p>
                           {{__("projects_page_bitcoin")['p1']}}
                        </p>

                        <p>
                            {{__("projects_page_bitcoin")['p2']}}
                        </p>

                        <p>
                            {{__("projects_page_bitcoin")['p3']}}
                        </p>
                        <p>
                            {{__("projects_page_bitcoin")['p4']}}
                        </p>
                        <p>
                            {{__("projects_page_bitcoin")['p5']}}

                        </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="../images/bitcoingreen.png" alt="" >
                    <h3 class="text-color-1 mb-4">
                        <b>{{__("projects_page_bitcoin")['bitcoingreen']}}</b>
                    </h3>
                    <div class="text-color-2 text-justify">
                        <p>
                            {{__("projects_page_bitcoin")['p6']}}
                        </p>

                        <p>
                            {{__("projects_page_bitcoin")['p7']}}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="troy" class="min-vh-100 d-flex align-items-center position-relative">
        <div class="custom-container container-xl">
            <div class="row">
                <div class="col-lg-6 offset-lg-6 text-white">
                    <div>
                        <h2 class="text-color-3 mb-4">
                            <b> {{__("projects_page_troy")['troy_gold']}}</b>
                        </h2>
                        <div class="text-white">
                            <p>
                                {{__("projects_page_troy")['p1']}}
                            </p>
                            <p>
                                {{__("projects_page_troy")['p2']}}
                            </p>
                            <p>
                                {{__("projects_page_troy")['p3']}}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="just-social" class="min-vh-100 d-flex align-items-center">
        <div class="custom-container container-xl py-5 position-relative">
            <img src="../images/Elements-1.png" alt="" class="position-absolute coin-left z-index-2" width="100">
            <img src="../images/Elements-1.png" alt="" class="position-absolute coin-right z-index-2" width="100">
            <div class="row pt-5">
                <div class="col-12">
                    <h2 class="text-color-1 mb-4">
                        <b>{{__("projects_page_just_social")['just_social']}}</b>
                    </h2>
                    <div class="text-color-2 text-justify">
                        <p>
                            {{__("projects_page_just_social")['p1']}}
                        </p>
                        <p>
                            {{__("projects_page_just_social")['p2']}}
                        </p>
                        <p>
                            {{__("projects_page_just_social")['p3']}}
                        </p>
                        <p>
                            {{__("projects_page_just_social")['p4']}}
                        </p>
                        <p>
                            {{__("projects_page_just_social")['p5']}}
                        </p>
                        <p>
                            {{__("projects_page_just_social")['p6']}}
                        </p>
                        <p>
                            {{__("projects_page_just_social")['p7']}}
                        </p>
                    </div>
                </div>
            </div>
            <div class="row pb-5">
                <div class="col-lg-6 d-flex align-items-center px-5 position-relative px-md-5 px-0 mb-md-0 mb-5">
                    <div class="px-md-5 px-0">
                        <div class="px-md-5 px-0">
                            <img src="../images/projects/Assets/pr-illustration 4.png" alt="" class="w-100">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div>
                        <div class="text-justify text-color-2">
                            <p>
                                {{__("projects_page_just_social")['p8']}}
                            </p>

                            <p>
                                {{__("projects_page_just_social")['p9']}}
                            </p>

                            <p>
                                {{__("projects_page_just_social")['p10']}}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="dnc" class="min-vh-100 d-flex align-items-center mb-5">
        <div class="custom-container container-xl py-5">
            <div class="row pt-5">
                <div class="col-12">
                    <h2 class="text-color-3 mb-4">
                        <b>{{__("projects_page_dnc")['next_generation']}}</b>
                    </h2>
                    <div class="text-white text-justify">
                        <p>
                            {{__("projects_page_dnc")['p1']}}
                        </p>
                        <p>
                            {{__("projects_page_dnc")['p2']}}
                        </p>
                        <p>
                            {{__("projects_page_dnc")['p3']}}
                        </p>
                        <p>
                            {{__("projects_page_dnc")['p4']}}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="exchange" class="d-flex align-items-center">
        <div class="custom-container container-xl py-5 position-relative">
            <img src="../images/Elements-1.png" alt="" class="position-absolute coin-left z-index-2" width="100">
            <img src="../images/Elements-1.png" alt="" class="position-absolute coin-right z-index-2" width="100">
            <div class="row">
                <div class="col-lg-6 d-flex align-items-center">
                    <div>
                        <h2 class="text-color-1 mb-4">
                            <b>{{__("projects_page_exchange")['nftcity']}}</b>
                        </h2>
                        <div class="text-justify text-color-2">
                            <p>
                                {{__("projects_page_exchange")['p1']}}
                            </p>
                            <p>
                                {{__("projects_page_exchange")['p2']}}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 d-flex align-items-center position-relative">
                    <img src="../images/projects/Assets/nftcity.png" alt="" class="w-100 nft">
                </div>
            </div>

            <div class="row mb-5">
                <div class="col-lg-5 d-flex align-items-center position-relative px-md-5 px-0">
                    <img src="../images/projects/Assets/pr-illustration 5.png" alt="" class="w-100">
                </div>
                <div class="col-lg-7 d-flex align-items-center">
                    <div>
                        <h2 class="text-color-1 mb-4">
                            <b>{{__("projects_page_exchange")['the_metarelm']}}</b>
                        </h2>
                        <div class="text-justify text-color-2">
                            <p>
                                {{__("projects_page_exchange")['p3']}}
                            </p>

                            <p>
                                {{__("projects_page_exchange")['p4']}}
                            </p>

                            <p>
                                {{__("projects_page_exchange")['p5']}}
                            </p>
                            <p>
                                {{__("projects_page_exchange")['p6']}}
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mb-5">
                <div class="col-lg-7 d-flex align-items-center order-2 order-lg-1">
                    <div>
                        <h2 class="text-color-1 mb-4">
                            <b>{{__("projects_page_exchange")['next_generation']}}</b>
                        </h2>
                        <div class="text-justify text-color-2">
                            <p>
                                {{__("projects_page_exchange")['p7']}}
                            </p>

                            <p>
                                {{__("projects_page_exchange")['p8']}}
                            </p>
                            <ol type="a">
                                <li>
                                    {{__("projects_page_exchange")['eachcoin']}}
                                </li>
                                <li>
                                    {{__("projects_page_exchange")['condition']}}
                                </li>
                                <li>
                                    {{__("projects_page_exchange")['multisignatury']}}
                                </li>
                                <li>
                                    {{__("projects_page_exchange")['comprehensive']}}
                                </li>
                            </ol>
                            <p>
                                {{__("projects_page_exchange")['p9']}}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 d-flex align-items-center position-relative px-md-5 px-0 order-1 order-lg-2">
                    <img src="../images/projects/Assets/pr-illustration 6.png" alt="" class="w-100">
                </div>
            </div>

            <div class="row">
                <div class="col-lg-5 d-flex align-items-center position-relative px-md-5 px-0">
                    <img src="../images/projects/Assets/pr-illustration 7.png" alt="" class="w-100">
                </div>
                <div class="col-lg-7 d-flex align-items-center">
                    <div>
                        <h2 class="text-color-1 mb-4">
                            <b>{{__("projects_page_exchange")['para_chains']}}</b>
                        </h2>
                        <div class="text-justify text-color-2">
                            <p>
                                {{__("projects_page_exchange")['p10']}}
                            </p>

                            <p>
                                {{__("projects_page_exchange")['p11']}}
                            </p>

                            <p>
                                {{__("projects_page_exchange")['p12']}}

                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="blockchains" class="d-flex align-items-center mb-4">
        <div class="custom-container container-xl pt-5 position-relative">
            <!-- <img src="./images/Elements-1.png" alt="" class="position-absolute coin-left z-index-2" width="100"> -->
            <img src="../images/Elements-1.png" alt="" class="position-absolute coin-right z-index-2" width="100">
            <div class="row pt-5">
                <div class="col-12">
                    <h2 class="text-color-1 mb-4">
                        <b>{{__("projects_page_blockchains")['ledger_exchange']}}</b>
                    </h2>
                    <div class="text-color-2 text-justify">
                        <p>
                            {{__("projects_page_blockchains")['p1']}}
                        </p>
                        <p>
                            {{__("projects_page_blockchains")['p2']}}
                        </p>
                        <p>
                            {{__("projects_page_blockchains")['p3']}}
                        </p>
                        <p>
                            {{__("projects_page_blockchains")['p4']}} <a href="{{url(app()->getLocale(),'contact-us')}}"> {{__("projects_page_blockchains")['clickhere']}}</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="d-flex align-items-center mb-5">
        <img src="../images/projects/Assets/bg-projects 5.png" alt="" class="w-100">
    </section>

    <section id="scalable" class="d-flex align-items-center">
        <div class="custom-container container-xl pb-5 position-relative">
            <img src="../images/Elements-1.png" alt="" class="position-absolute coin-left z-index-2" width="100">
            <img src="../images/Elements-1.png" alt="" class="position-absolute coin-right z-index-2" width="100">
            <div class="row">
                <div class="col-12">
                    <div class="text-color-2 text-justify">
                        <p>
                            <b>{{__("projects_page_scalable")['ledgerx']}}</b> {{__("projects_page_scalable")['p1']}}
                        </p>
                        <p>
                            <b>{{__("projects_page_scalable")['p2']}}</b>
                        </p>
                        <p class="mb-4">
                            {{__("projects_page_scalable")['p3']}}
                        </p>

                        <div class="row text-white mb-4">
                            <div class="col-lg-4 text-center mb-4 mb-lg-0">
                                <div class="px-md-5 px-0">
                                    <h5 class="mb-0 bg-color-5 py-3 text-center ledgerx-box">{{__("projects_page_scalable")['settlement_chain']}}</h5>
                                </div>
                            </div>
                            <div class="col-lg-4 text-center mb-4 mb-lg-0">
                                <div class="px-md-5 px-0">
                                    <h5 class="mb-0 bg-color-5 py-3 ledgerx-box">{{__("projects_page_scalable")['match_chain']}}</h5>
                                </div>
                            </div>
                            <div class="col-lg-4 text-center mb-4 mb-lg-0">
                                <div class="px-md-5 px-0">
                                    <h5 class="mb-0 bg-color-5 py-3 ledgerx-box">{{__("projects_page_scalable")['content_chain']}}</h5>
                                </div>
                            </div>
                        </div>
                        <p>
                            <b>{{__("projects_page_scalable")['the_consensus']}}</b>
                        </p>
                        <ol type="a">
                            <li>
                                {{__("projects_page_scalable")['delegated']}}
                            </li>
                            <li>
                                {{__("projects_page_scalable")['consensus_before']}}
                            </li>
                        </ol>
                        <p>
                            {{__("projects_page_scalable")['p4']}}
                        </p>
                        <p>
                            {{__("projects_page_scalable")['p5']}}
                        </p>
                        <p>
                            {{__("projects_page_scalable")['p6']}}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="d-flex align-items-center">
        <div class="custom-container container-xl py-5 position-relative">

            <div class="row">
                <div class="col-lg-5 d-flex align-items-center position-relative px-md-5 px-0">
                    <img src="../images/projects/Assets/icon1.svg" alt="" class="w-100">
                </div>
                <div class="col-lg-7 d-flex align-items-center">
                    <div>
                        <div class="text-justify text-color-2">
                            <p>
                                {{__("projects_page_scalable")['p7']}}
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-7 d-flex align-items-center">
                    <div>
                        <div class="text-justify text-color-2">
                            <p>
                                {{__("projects_page_scalable")['p8']}}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 d-flex align-items-center position-relative px-md-5 px-0">
                    <img src="../images/projects/Assets/icon2.svg" alt="" class="w-100">
                </div>
            </div>

            <div class="row">
                <div class="col-lg-5 d-flex align-items-center position-relative px-md-5 px-0">
                    <img src="../images/projects/Assets/icon3.svg" alt="" class="w-100">
                </div>
                <div class="col-lg-7 d-flex align-items-center">
                    <div>
                        <div class="text-justify text-color-2">
                            <p>
                                {{__("projects_page_scalable")['p9']}}
                            </p>
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
