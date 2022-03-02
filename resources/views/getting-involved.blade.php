@extends('layout')
@section('content')
<div id="getting_involved" @if(\App\Language::isRTL()) dir="rtl" @endif>
    <div id="hero" class="position-relative min-vh-100">
        <div class="hero-video pt-lg-0 pt-5 position-absolute">
            <video autoplay muted loop>
                <source src="../images/NuGenesis World - NuCoin.mp4" type="video/mp4">
            </video>
        </div>
        <div class="mb-5 position-relative navigation z-index-2">
        <header id="header" class="custom-container container-xl position-relative">

        @include('nav')

      </header>
        </div>
        <section class="py-5 position-relative">
            <!-- <div class="hero-bg position-absolute z-index-1"></div> -->
            <div class="custom-container container-xl py-5 z-index-2 position-relative">
                <div class="row py-md-5 py-0">
                    <div class="col-md-12 py-md-5 py-0 mt-5">
                        <h1 class="mb-4 hero-text text-white">
                            {{__("getting-involved_page_hero")['mark']}} <br>
                            {{__("getting-involved_page_hero")['nugenesis_ecosystem']}}
                        </h1>
                        <h5 class="hero-sub-text">
                            {{__("getting-involved_page_hero")['careers']}} <br>
                            {{__("getting-involved_page_hero")['businesses']}}
                        </h5>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <section id="community" class="py-5 mt-5 position-relative">
        <div class="bg-img-2 position-absolute"></div>
        <div class="bg-img-3 position-absolute">
            <img src="../images/funds-bg-1bceee63f1933088eb08cb46dc08e144.png" alt="">
        </div>
        <div class="bg-img-4 position-absolute">
            <img src="../images/particle-bottom-right-a33c6aca44edb7d79cd3b83380e078b0.png" alt="">
        </div>
        <div class="custom-container container-xl">
            <div class="row mb-5">
                <div class="col-lg-8 col-md-10 mx-auto text-center">
                    <h2 class="text-white header-text mb-3">
                        {{__("getting-involved_page_community")['want_join']}}
                    </h2>
                    <h5 class="header-sub-text">
                        {{__("getting-involved_page_community")['p1']}}
                    </h5>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="card bg-transparent position-relative">
                        <div class="blur-bg position-absolute z-index-1"></div>
                        <div class="card-body p-5 text-white z-index-2">
                            <p>
                                {{__("getting-involved_page_community")['p2']}}
                            </p>
                            <p>
                                {{__("getting-involved_page_community")['p3']}}
                            </p>
                            <p>
                                {{__("getting-involved_page_community")['p4']}}
                            </p>
                            <p>
                                {{__("getting-involved_page_community")['p5']}}
                            </p>
                            <p>
                                {{__("getting-involved_page_community")['p6']}}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="navis-video pt-lg-0 pt-5">
                        <video autoplay muted loop>
                            <source src="../images/Navis + Matrix - Dark BG.mp4" type="video/mp4">
                        </video>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="programs" class="py-5 position-relative">
        <div class="bg-img-1 position-absolute">
            <img src="../images/Footer BG.png" alt="">
        </div>
        <div class="bg-img-2 position-absolute">
            <img src="../images/particle-bottom-left-31f04bb66c0e5d343bc7b23133a1ff8a.png" alt="">
        </div>
        <div class="custom-container container-xl">
            <div class="row mb-5">
                <div class="col-lg-8 col-md-10 mx-auto text-center">
                    <h1 class="text-white header-text mb-3">
                        {{__("getting-involved_page_program")['nugenesis_programs']}}
                    </h1>
                    <h5 class="header-sub-text">
                        <p>
                            {{__("getting-involved_page_program")['p1']}}
                        </p>
                        <p>
                            {{__("getting-involved_page_program")['p2']}}
                        </p>
                    </h5>
                </div>
            </div>
            <div class="row pt-5" id="program-selection">
                <div class="col-lg-4 col-md-6 mb-30px">
                    <div class="card rounded-lg program" id="ambassador_program" data-value="ambassador_program">
                        <div class="card-body py-4">
                            <div class="text-center mb-3">
                                <img src="../images/programs/ambassadorprogram.jpg" alt="" class="rounded-circle" width="50" height="50">
                            </div>
                            <div class="header-sub-text text-center mb-3">
                                {{__("getting-involved_page_program-selection")['abassador_program']}}
                            </div>
                            <div class="text-white">
                                <ul class="pl-4">
                                    <li>
                                        <a href="../documents/{{__("trans_link")['ambassador_program_nugenesis']}}" target="_blank" class="text-white">
                                            <i class="fa fa-download mr-1" aria-hidden="true"></i>
                                            {{__("getting-involved_page_program-selection")['ambassador_program_brochure']}}
                                        </a>
                                    </li>
                                    <li>
                                        <a href="../documents/Ambassador Program/02 Ambassadorial Deed.docx" target="_blank" class="text-white">
                                            <i class="fa fa-download mr-1" aria-hidden="true"></i>
                                            {{__("getting-involved_page_program-selection")['ambassador_deed']}}
                                        </a>
                                    </li>
                                    <li>
                                        <a href="../documents/Ambassador Program/03 Ambassadors Performance Plan.docx" target="_blank" class="text-white">
                                            <i class="fa fa-download mr-1" aria-hidden="true"></i>
                                            {{__("getting-involved_page_program-selection")['ambassador_performance_plan']}}
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{url(app()->getLocale(),'general-terms-condition')}}" target="_blank" class="text-white">
                                            <i class="fa fa-download mr-1" aria-hidden="true"></i>
                                            {{__("getting-involved_page_terms_condition")['terms_and_condition']}}
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://forms.gle/Xv55DQ82NvVtAtGB8" target="_blank" class="text-white">
                                            <i class="fa fa-download mr-1" aria-hidden="true"></i>
                                            {{__("getting-involved_page_online_form")['online_form']}}
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-30px">
                    <div class="card rounded-lg program" id="diplomats_program">
                        <div class="card-body py-4">
                            <div class="text-center mb-3">
                                <img src="../images/programs/diplomatprogram.jpg" alt="" class="rounded-circle" width="50" height="50">
                            </div>
                            <div class="header-sub-text text-center mb-3">
                                {{__("getting-involved_page_diplomats_program")['dimplomat_program']}}
                            </div>
                            <div class="text-white">
                                <ul class="pl-4">
                                    <li>
                                        <a href="../documents/{{__("trans_link")['diplomats_program_nugenesis']}}" target="_blank" class="text-white">
                                            <i class="fa fa-download mr-1" aria-hidden="true"></i>
                                            {{__("getting-involved_page_diplomats_program")['diplomat_program_brochure']}}
                                        </a>
                                    </li>
                                    <li>
                                        <a href="../documents/{{__("trans_link")['diplomats_program_deed']}}" target="_blank" class="text-white">
                                            <i class="fa fa-download mr-1" aria-hidden="true"></i>
                                            {{__("getting-involved_page_diplomats_program")['diplomat_deed']}}
                                        </a>
                                    </li>
                                    <li>
                                        <a href="../documents/{{__("trans_link")['diplomats_program_performance']}}" target="_blank" class="text-white">
                                            <i class="fa fa-download mr-1" aria-hidden="true"></i>
                                            {{__("getting-involved_page_diplomats_program")['diplomat_performance_plan']}}
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{url(app()->getLocale(),'general-terms-condition')}}" target="_blank" class="text-white">
                                            <i class="fa fa-download mr-1" aria-hidden="true"></i>
                                            {{__("getting-involved_page_terms_condition")['terms_and_condition']}}
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://forms.gle/Xv55DQ82NvVtAtGB8" target="_blank" class="text-white">
                                            <i class="fa fa-download mr-1" aria-hidden="true"></i>
                                            {{__("getting-involved_page_online_form")['online_form']}}
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-30px">
                    <div class="card rounded-lg program" id="senators_program">
                        <div class="card-body py-4">
                            <div class="text-center mb-3">
                                <img src="../images/programs/senatorsprogram.jpg" alt="" class="rounded-circle" width="50" height="50">
                            </div>
                            <div class="header-sub-text text-center mb-3">
                                {{__("getting-involved_page_senators_program")['senator_program']}}
                            </div>
                            <div class="text-white">
                                <ul class="pl-4">
                                    <li>
                                        <a href="../documents/{{__("trans_link")['sanators_program_nugenesis']}}" target="_blank" class="text-white">
                                            <i class="fa fa-download mr-1" aria-hidden="true"></i>
                                            {{__("getting-involved_page_senators_program")['senator_program_brochure']}}
                                        </a>
                                    </li>
                                    <li>
                                        <a href="../documents/{{__("trans_link")['sanators_program_deed']}}" target="_blank" class="text-white">
                                            <i class="fa fa-download mr-1" aria-hidden="true"></i>
                                            {{__("getting-involved_page_senators_program")['senator_deed']}}
                                        </a>
                                    </li>
                                    <li>
                                        <a href="../documents/{{__("trans_link")['sanators_program_performance']}}" target="_blank" class="text-white">
                                            <i class="fa fa-download mr-1" aria-hidden="true"></i>
                                            {{__("getting-involved_page_senators_program")['senator_performance_plan']}}
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{url(app()->getLocale(),'general-terms-condition')}}" target="_blank" class="text-white">
                                            <i class="fa fa-download mr-1" aria-hidden="true"></i>
                                            {{__("getting-involved_page_terms_condition")['terms_and_condition']}}
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://forms.gle/Xv55DQ82NvVtAtGB8" target="_blank" class="text-white">
                                            <i class="fa fa-download mr-1" aria-hidden="true"></i>
                                            {{__("getting-involved_page_online_form")['online_form']}}
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-30px">
                    <div class="card rounded-lg program" id="market_consuls_program">
                        <div class="card-body py-4">
                            <div class="text-center mb-3">
                                <img src="../images/programs/marketconsulprogram.jpg" alt="" class="rounded-circle" width="50" height="50">
                            </div>
                            <div class="header-sub-text text-center mb-3">
                                {{__("getting-invovled_page_market_consuls_program")['market_program']}}
                            </div>
                            <div class="text-white">
                                <ul class="pl-4">
                                    <li>
                                        <a href="../documents/{{__("trans_link")['market_consuls_program_nugenesis']}}" target="_blank" class="text-white">
                                            <i class="fa fa-download mr-1" aria-hidden="true"></i>
                                            {{__("getting-invovled_page_market_consuls_program")['market_program_brochure']}}
                                        </a>
                                    </li>
                                    <li>
                                        <a href="../documents/{{__("trans_link")['market_consuls_program_deed']}}" target="_blank" class="text-white">
                                            <i class="fa fa-download mr-1" aria-hidden="true"></i>
                                            {{__("getting-invovled_page_market_consuls_program")['market_deed']}}
                                        </a>
                                    </li>
                                    <li>
                                        <a href="../documents/{{__("trans_link")['market_consuls_program_performance']}}" target="_blank" class="text-white">
                                            <i class="fa fa-download mr-1" aria-hidden="true"></i>
                                            {{__("getting-invovled_page_market_consuls_program")['market_performance_plan']}}
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{url(app()->getLocale(),'general-terms-condition')}}" target="_blank" class="text-white">
                                            <i class="fa fa-download mr-1" aria-hidden="true"></i>
                                            {{__("getting-involved_page_terms_condition")['terms_and_condition']}}
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://forms.gle/Xv55DQ82NvVtAtGB8" target="_blank" class="text-white">
                                            <i class="fa fa-download mr-1" aria-hidden="true"></i>
                                            {{__("getting-involved_page_online_form")['online_form']}}
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-30px">
                    <div class="card rounded-lg program" id="network_concordat_program">
                        <div class="card-body py-4">
                            <div class="text-center mb-3">
                                <img src="../images/programs/networkconcordatprogram.jpg" alt="" class="rounded-circle" width="50" height="50">
                            </div>
                            <div class="header-sub-text text-center mb-3">
                                {{__("getting-invovled_page_network_concordat_program")['network_program']}}
                            </div>
                            <div class="text-white">
                                <ul class="pl-4">
                                    <li>
                                        <a href="../documents/{{__('trans_link')['network_concordat_program_nugenesis']}}" target="_blank" class="text-white">
                                            <i class="fa fa-download mr-1" aria-hidden="true"></i>
                                            {{__("getting-invovled_page_network_concordat_program")['network_program_brochure']}}
                                        </a>
                                    </li>
                                    <li>
                                        <a href="../documents/{{__('trans_link')['network_concordat_program_deed']}}" target="_blank" class="text-white">
                                            <i class="fa fa-download mr-1" aria-hidden="true"></i>
                                            {{__("getting-invovled_page_network_concordat_program")['network_deed']}}
                                        </a>
                                    </li>
                                    <li>
                                        <a href="../documents/{{__('trans_link')['network_concordat_program_performance']}}" target="_blank" class="text-white">
                                            <i class="fa fa-download mr-1" aria-hidden="true"></i>
                                            {{__("getting-invovled_page_network_concordat_program")['network_performance_plan']}}
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{url(app()->getLocale(),'general-terms-condition')}}" target="_blank" class="text-white">
                                            <i class="fa fa-download mr-1" aria-hidden="true"></i>
                                            {{__("getting-involved_page_terms_condition")['terms_and_condition']}}
                                        </a>
                                    </li>
                                    <li>

                                        <a href="https://forms.gle/Xv55DQ82NvVtAtGB8" target="_blank" class="text-white">
                                            <i class="fa fa-download mr-1" aria-hidden="true"></i>
                                            {{__("getting-involved_page_online_form")['online_form']}}
                                        </a>

                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-30px">
                    <div class="card rounded-lg program" id="get_in_touch">
                        <div class="card-body py-4">
                            <ul class="pl-2">
                                <li class="mb-3">
                                    <a href="{{url(app()->getLocale(),'contact-us')}}" class="text-white">{{__("getting-involved_page_get_in_touch")['do_have']}}</a>
                                </li>
                                <li class="mb-3">
                                    <a href="{{url(app()->getLocale(),'contact-us')}}" class="text-white">{{__("getting-involved_page_get_in_touch")['tech_developer']}}</a>
                                </li>
                                <li class="mb-3">
                                    <a href="{{url(app()->getLocale(),'contact-us')}}" class="text-white">{{__("getting-involved_page_get_in_touch")['join_team']}}</a>
                                </li>
                                <li class="mb-3">
                                    <a href="{{url(app()->getLocale(),'contact-us')}}" class="text-white">{{__("getting-involved_page_get_in_touch")['p1']}}</a>
                                </li>
                                <li class="mb-3">
                                    <a href="{{url(app()->getLocale(),'contact-us')}}" class="text-white">{{__("getting-involved_page_get_in_touch")['get_touch']}}</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="full-width-images">
        <div class="d-flex">
            <img class="flex-fill" src="../images/page01_25e96a8f-8263-438e-9099-0ce884e9364f_720x.png" alt="">
            <img class="flex-fill" src="../images/page01_09b886db-ffd6-41c0-bd54-ae99cd00af0c_720x.png" alt="">
            <img class="flex-fill" src="../images/page01_8247a47a-1f03-4215-8380-1b68fa1bb158_720x.png" alt="">
        </div>
    </section>

    <!-- <footer class="py-3">
        <section class="custom-container container-xl">
            <hr>
        </section>
        <div class="d-flex justify-content-center">
            NuGenesis &copy; 2021. All rights reserved.
        </div>
    </footer> -->
</div>
@endsection
