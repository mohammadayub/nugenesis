@extends('layout')
@section('content')
<div id="general-terms-and-conditions"  @if(\App\Language::isRTL()) dir="rtl" @endif>
    <div class="mb-5 shadow">
        <header id="header" class="custom-container container-xl position-relative">
            <nav id="navbar" class="px-0 py-2 py-lg-4 navbar navbar-light navbar-expand-lg">
                <a class="navbar-brand" href="/">
                    <img src="../images/nugenesisou-logo-1.png" alt="logo" height="60">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="material-icons toggler-icon">
                        {{__("nav")['menu']}}
                    </span>
                </button>
                <ul class="navbar-nav d-none d-lg-flex font-weight-bold">
                    <li class="mr-3 nav-item">
                        <a class="nav-link" href="https://nucoin.com.au/">{{__("nav")['nucoin']}}</a>
                    </li>
                    <li class="mr-3 nav-item">
                        <a class="nav-link" href="https://justsocial.tech/">{{__("nav")['just_social']}}</a>
                    </li>
                    <li class="mr-3 nav-item">
                        <a class="nav-link" href="https://explorer.nucoin.com.au/">{{__("nav")['explorer']}}</a>
                    </li>
                    <li class="mr-3 nav-item">
                        <a class="nav-link" href="https://ledgerx.exchange/">{{__("nav")['nucoin_ledgerx']}}</a>
                    </li>
                    <li class="mr-3 nav-item">
                        <a class="nav-link" href="https://nugenesisou.myshopify.com/">{{__("nav")['shop']}}</a>
                    </li>
                    <li class="mr-3 nav-item">
                        <div class="btn-group">
                            <a href="{{url(app()->getLocale(),'about-us')}}"
                                class="bg-transparent border-0 btn btn-primary nav-link btn-no-ring font-weight-bold">{{__("nav")['about_us']}}</a>
                            <a class="bg-transparent border-0 btn btn-primary nav-link btn-no-ring font-weight-bold dropdown-toggle"
                                data-toggle="dropdown" aria-expanded="false" data-reference="parent">
                                <span class="sr-only">Toggle Dropdown</span>
                            </a>
                            <div class="p-2 border-0 shadow-lg dropdown-menu">
                                <a class="pl-2 nav-link" href="{{url(app()->getLocale(),'projects')}}">{{__("toggledropdown")['projects']}}</a>
                                <div class="dropdown-divider"></div>
                                <!-- <a class="pl-2 nav-link" href="industries.html">Industries <small>(more info coming soon)</small></a>
                                <div class="dropdown-divider"></div> -->
                                <a class="pl-2 nav-link" href="{{url(app()->getLocale(),'media')}}">{{__("toggledropdown")['media']}}</a>
                                <div class="dropdown-divider"></div>
                                <a class="pl-2 nav-link"
                                href="{{url(app()->getLocale(),'getting-involved')}}">{{__("toggledropdown")['getting_involved']}}</a>
                            </div>
                        </div>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="team.html">Team</a>
                    </li> -->
                    <li class="nav-item d-lg-flex align-items-center"  @if(\App\Language::isRTL()) dir="ltr" @endif>
                        <div class="btn-group">
                            <a href="{{\App\Language::selectedLanguage('link')}}" class="bg-transparent border-0 btn btn-primary nav-link btn-no-ring font-weight-bold" @if(\App\Language::getCurrentPage()=='') style="color:white!important"@endif><span class="{{\App\Language::selectedLanguage('icon')}}"></span> {{\App\Language::selectedLanguage('label')}}</a>
                            <a class="bg-transparent border-0 btn btn-primary nav-link btn-no-ring font-weight-bold dropdown-toggle" data-toggle="dropdown" aria-expanded="false" data-reference="parent"  @if(\App\Language::getCurrentPage()=='') style="color:white!important"@endif>
                              <span class="sr-only">Toggle Dropdown</span>
                            </a>
                            <div class="p-2 border-0 shadow-lg dropdown-menu">
                                @foreach(\App\Language::getLanguageList() as $l)
                                    @if($l['name'] != \App\Language::selectedLanguage('name'))
                                    <a class="pl-2 nav-link" href="{{$l['link']}}"> <span class="{{$l['icon']}}"></span> {{$l['label']}}</a>
                                    <div class="dropdown-divider"></div>
                                    @endif
                                @endforeach
                                <a class="pl-2 nav-link" href="{{url(app()->getLocale(),'language')}}"><b>LANGUAGE TRANSLATIONS</b></a>
                          </div>
                        </div>
                    </li>
                </ul>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="ml-auto navbar-nav font-weight-bold">
                        <li class="nav-item d-block d-lg-none">
                            <a class="nav-link" href="https://nucoin.com.au/">{{__("nav")['nucoin']}}</a>
                        </li>
                        <li class="nav-item d-block d-lg-none">
                            <a class="nav-link" href="https://justsocial.tech/">{{__("nav")['just_social']}}</a>
                        </li>
                        <li class="nav-item d-block d-lg-none">
                            <a class="nav-link" href="https://explorer.nucoin.com.au/">{{__("nav")['explorer']}}</a>
                        </li>
                        <li class="nav-item d-block d-lg-none">
                            <a class="nav-link" href="https://ledgerx.exchange/">{{__("nav")['nucoin_ledgerx']}}</a>
                        </li>
                        <li class="nav-item d-block d-lg-none">
                            <a class="nav-link" href="https://nugenesisou.myshopify.com/">{{__("nav")['shop']}}</a>
                        </li>
                        <li class="nav-item d-block d-lg-none">
                            <div class="btn-group">
                                <a href="{{url(app()->getLocale(),'about-us')}}"
                                    class="bg-transparent border-0 btn btn-primary nav-link btn-no-ring font-weight-bold">{{__("nav")['about_us']}}</a>
                                <a class="bg-transparent border-0 btn btn-primary nav-link btn-no-ring font-weight-bold dropdown-toggle"
                                    data-toggle="dropdown" aria-expanded="false" data-reference="parent">
                                    <span class="sr-only">Toggle Dropdown</span>
                                </a>
                                <div class="p-2 border-0 dropdown-menu">
                                    <a class="pl-2 nav-link" href="{{url(app()->getLocale(),'projects')}}">{{__("toggledropdown")['projects']}}</a>
                                    <div class="dropdown-divider"></div>
                                    <!-- <a class="pl-2 nav-link" href="/industries.html">Industries <small>(more info coming soon)</small></a>
                                    <div class="dropdown-divider"></div> -->
                                    <a class="pl-2 nav-link" href="{{url(app()->getLocale(),'media')}}">{{__("toggledropdown")['media']}}</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="pl-2 nav-link"
                                    href="{{url(app()->getLocale(),'getting-involved')}}">{{__("toggledropdown")['getting_involved']}}</a>
                                </div>
                            </div>
                        </li>
                        <!-- <li class="nav-item d-block d-lg-none">
                            <a class="nav-link" href="team.html">Team</a>
                        </li> -->
                        <li class="nav-item d-lg-flex align-items-center">
                            <!-- <a class="nav-link bg-base-color rounded-circle d-flex justify-content-center align-items-center"
                                href="contact-us.html" style="width: 40px; height: 40px;">
                                <i class="text-white fa fa-envelope-o" aria-hidden="true"></i>
                            </a> -->
                            <a class="bg-base-color py-1 px-3 rounded text-white" href="{{url(app()->getLocale(),'contact-us')}}">
                                {{__("nav")['contact']}}
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
    </div>
    <div id="content">
        <section class="custom-container container-xl pt-5">
            <div class="row">
                <div class="col-lg-10 offset-lg-1 text-center mb-5">
                    <h4 class="mb-5">
                        <b>{{__("general-terms-condition_page_content")['general_term']}}</b>
                    </h4>
                </div>
            </div>
        </section>

        <section class="custom-container container-xl mb-5 text-justify">
            <h4 class="mb-4">
                {{__("general-terms-condition_page_content")['program_overview']}}
            </h4>
            <div>
                <ol type="A">
                    <li>
                        {{__("general-terms-condition_page_content")['p1']}} <b> {{__("general-terms-condition_page_content")['adoption']}} </b>{{__("general-terms-condition_page_content")['incentivise']}}
                    </li>
                    <li>
                        {{__("general-terms-condition_page_content")['p2']}}
                    </li>
                    <li>
                        {{__("general-terms-condition_page_content")['p3']}} <b>{{__("general-terms-condition_page_content")['ambassador']}}</b>, <b>{{__("general-terms-condition_page_content")['senator']}}</b>, <b>{{__("general-terms-condition_page_content")['market_consul']}}</b>, <b>{{__("general-terms-condition_page_content")['senator']}}</b>{{__("general-terms-condition_page_content")['and']}}<b>{{__("general-terms-condition_page_content")['diplomat']}}</b> {{__("general-terms-condition_page_content")['p4']}}
                    </li>
                    <li>
                        {{__("general-terms-condition_page_content")['p5']}}

                        <ol type="a">
                            <li>
                                {{__("general-terms-condition_page_content")['p6']}}
                            </li>
                            <li>
                                {{__("general-terms-condition_page_content")['p7']}}
                            </li>
                            <li>
                                {{__("general-terms-condition_page_content")['p8']}}
                            </li>
                            <li>
                                {{__("general-terms-condition_page_content")['p9']}}
                            </li>
                            <li>
                                {{__("general-terms-condition_page_content")['p10']}}
                            </li>
                        </ol>
                    </li>
                    <li>
                        {{__("general-terms-condition_page_content")['p11']}}
                    </li>
                    {{__("general-terms-condition_page_content")['p12']}}
                    </li>
                    <li>
                        {{__("general-terms-condition_page_content")['p13']}}
                    </li>
                </ol>
            </div>
        </section>

        <section class="custom-container container-xl mb-5 text-justify">
            <h4 class="mb-4">
                {{__("general-terms-condition_page_agreement_status")['agreement_status']}}
            </h4>
            <div>
                <ol>
                    <li>
                        {{__("general-terms-condition_page_agreement_status")['p1']}}
                    </li>
                    <li>
                        {{__("general-terms-condition_page_agreement_status")['p2']}}
                    </li>
                    <li>
                        {{__("general-terms-condition_page_agreement_status")['p3']}}
                    </li>
                </ol>
            </div>
        </section>

        <section class="custom-container container-xl mb-5 text-justify">
            <h4 class="mb-4">
                {{__("general-terms-condition_page_stand_alone")['stand_alone']}}
            </h4>
            <div>
                <ol start="4">
                    <li>
                        {{__("general-terms-condition_page_stand_alone")['p1']}}
                    </li>
                    <li>
                        {{__("general-terms-condition_page_stand_alone")['p2']}}
                    </li>
                </ol>
            </div>
        </section>

        <section class="custom-container container-xl mb-5 text-justify">
            <h4 class="mb-4">
                {{__("general-terms-condition_page_fullfillment")['fullfillment']}}
            </h4>
            <div>
                <ol start="6">
                    <li>
                        {{__("general-terms-condition_page_fullfillment")['p1']}}
                    </li>
                    <li>
                        {{__("general-terms-condition_page_fullfillment")['p2']}}
                    </li>
                    <li>
                        {{__("general-terms-condition_page_fullfillment")['p3']}}
                    </li>
                    <li>
                        {{__("general-terms-condition_page_fullfillment")['p4']}}
                    </li>
                    <li>
                        {{__("general-terms-condition_page_fullfillment")['p5']}}

                        <ol type="a">
                            <li>
                                {{__("general-terms-condition_page_fullfillment")['p6']}}
                            </li>
                            <li>
                                {{__("general-terms-condition_page_fullfillment")['p7']}}
                            </li>
                            <li>
                                {{__("general-terms-condition_page_fullfillment")['p8']}}

                                <ol type="i">
                                    <li>
                                        {{__("general-terms-condition_page_fullfillment")['p9']}}
                                    </li>
                                    <li>
                                        {{__("general-terms-condition_page_fullfillment")['p10']}}
                                    </li>
                                </ol>
                            </li>
                        </ol>
                    </li>
                    <li>
                        {{__("general-terms-condition_page_fullfillment")['p11']}}
                    </li>
                    <li>
                        {{__("general-terms-condition_page_fullfillment")['p12']}}
                    </li>
                    <li>
                        {{__("general-terms-condition_page_fullfillment")['p13']}}
                    </li>
                    <li>
                        {{__("general-terms-condition_page_fullfillment")['p14']}}
                    </li>
                </ol>
            </div>
        </section>

        <section class="custom-container container-xl mb-5 text-justify">
            <h4 class="mb-4">
                {{__("general-terms-condition_page_non_circumvention")['non_circumvention']}}
            </h4>
            <div>
                <ol start="15">
                    <li>
                        {{__("general-terms-condition_page_non_circumvention")['p1']}}
                    </li>
                </ol>
            </div>
        </section>

        <section class="custom-container container-xl mb-5 text-justify">
            <h4 class="mb-4">
                {{__("general-terms-condition_page_non_circumvention")['p2']}}
            </h4>
            <div>
                <ol start="16">
                    <li>
                        {{__("general-terms-condition_page_non_circumvention")['p3']}}
                    </li>
                    <li>
                        {{__("general-terms-condition_page_non_circumvention")['p4']}}
                    </li>
                </ol>
            </div>
        </section>

        <section class="custom-container container-xl mb-5 text-justify">
            <h4 class="mb-4">
                {{__("general-terms-condition_page_compaign_obligation")['compaign_obligation']}}
            </h4>
            <div>
                <ol start="18">
                    <li>
                        {{__("general-terms-condition_page_compaign_obligation")['p1']}}
                    </li>
                    <li>
                        {{__("general-terms-condition_page_compaign_obligation")['p2']}}
                    </li>
                    <li>
                        {{__("general-terms-condition_page_compaign_obligation")['p3']}}
                    </li>
                    <li>
                        {{__("general-terms-condition_page_compaign_obligation")['p4']}}
                    </li>
                    <li>
                        {{__("general-terms-condition_page_compaign_obligation")['p5']}}
                    </li>
                    <li>
                        {{__("general-terms-condition_page_compaign_obligation")['p6']}}
                    </li>
                    <li>
                        {{__("general-terms-condition_page_compaign_obligation")['p7']}}
                    </li>
                </ol>
            </div>
        </section>

        <section class="custom-container container-xl mb-5 text-justify">
            <h4 class="mb-4">
                {{__("general-terms-condition_page_general_obligation")['general_obligation']}}
            </h4>
            <div>
                <ol start="25">
                    <li>
                {{__("general-terms-condition_page_general_obligation")['p1']}}
                    </li>
                    <li>
               {{__("general-terms-condition_page_general_obligation")['p2']}}
                    </li>
                    <li>
                        {{__("general-terms-condition_page_general_obligation")['you']}}

                        <ol type="a">
                            <li>
                                {{__("general-terms-condition_page_general_obligation")['p3']}}
                            </li>
                            <li>
                                {{__("general-terms-condition_page_general_obligation")['p4']}}
                            </li>
                            <li>
                                {{__("general-terms-condition_page_general_obligation")['p5']}}
                            </li>
                            <li>
                                {{__("general-terms-condition_page_general_obligation")['p6']}}
                            </li>
                            <li>
                                {{__("general-terms-condition_page_general_obligation")['p7']}}
                            </li>
                            <li>
                                {{__("general-terms-condition_page_general_obligation")['p8']}}
                            </li>
                            <li>
                                {{__("general-terms-condition_page_general_obligation")['p9']}}
                            </li>
                            <li>
                                {{__("general-terms-condition_page_general_obligation")['p10']}}
                            </li>
                        </ol>
                    </li>
                </ol>
            </div>
        </section>

        <section class="custom-container container-xl mb-5 text-justify">
            <h4 class="mb-4">
                {{__("general-terms-condition_page_disclosure_compaign")['disclosure_compaign']}}
            </h4>
            <div>
                <ol start="28">
                    <li>
                        {{__("general-terms-condition_page_disclosure_compaign")['p1']}}
                    </li>
                </ol>
            </div>
        </section>

        <section class="custom-container container-xl mb-5 text-justify">
            <h4 class="mb-4">
                {{__("general-terms-condition_page_intellectual_rights")['intellectual_rights']}}
            </h4>
            <div>
                <ol start="29">
                    <li>
                        {{__("general-terms-condition_page_intellectual_rights")['p1']}}
                    </li>
                    <li>
                        {{__("general-terms-condition_page_intellectual_rights")['p2']}}
                    </li>
                    <li>
                        {{__("general-terms-condition_page_intellectual_rights")['p3']}}
                    </li>
                    <li>
                        {{__("general-terms-condition_page_intellectual_rights")['p4']}}
                    </li>
                    <li>
                        {{__("general-terms-condition_page_intellectual_rights")['p5']}}
                    </li>
                </ol>
            </div>
        </section>

        <section class="custom-container container-xl mb-5 text-justify">
            <h4 class="mb-4">
                {{__("general-terms-condition_page_indemnifiction")['indemnifiction']}}
            </h4>
            <div>
                <ol start="34">
                    <li>
                        {{__("general-terms-condition_page_indemnifiction")['p1']}}
                    </li>
                </ol>
            </div>
        </section>

        <section class="custom-container container-xl mb-5 text-justify">
            <h4 class="mb-4">
                {{__("general-terms-condition_page_remuneration")['remuneration']}}
            </h4>
            <div>
                <ol start="35">
                    <li>
                        {{__("general-terms-condition_page_remuneration")['p1']}}

                        <ol type="a">
                            <li>
                                {{__("general-terms-condition_page_remuneration")['p2']}}
                            </li>
                            <li>
                                {{__("general-terms-condition_page_remuneration")['p3']}}
                            </li>
                        </ol>
                    </li>
                    <li>
                        {{__("general-terms-condition_page_remuneration")['p4']}}
                    </li>
                </ol>
            </div>
        </section>

        <section class="custom-container container-xl mb-5 text-justify">
            <h4 class="mb-4">
                {{__("general-terms-condition_page_referal_commission")['referal_commision']}}
            </h4>
            <div class="mb-3">
                <u class="mb-3">{{__("general-terms-condition_page_referal_commission")['referred_facilitators']}}</u>
            </div>
            <div>
                <ol start="37">
                    <li>
                        {{__("general-terms-condition_page_referal_commission")['p1']}}
                    </li>
                    <li>
                        <u>{{__("general-terms-condition_page_referal_commission")['p2']}}</u>:
                        {{__("general-terms-condition_page_referal_commission")['p3']}}
                    </li>
                    <li>
                        {{__("general-terms-condition_page_referal_commission")['p4']}}
                    </li>
                    <li>
                        {{__("general-terms-condition_page_referal_commission")['p5']}}
                    </li>
                </ol>
            </div>
        </section>

        <section class="custom-container container-xl mb-5 text-justify">
            <div class="mb-3">
                <u>{{__("general-terms-condition_page_training_support")['training_support']}}</u>
            </div>
            <div>
                <ol start="41">
                    <li>
                        {{__("general-terms-condition_page_training_support")['p1']}}
                    </li>
                </ol>
            </div>
        </section>

        <section class="custom-container container-xl mb-5 text-justify">
            <h4 class="mb-4">
                {{__("general-terms-condition_page_terms_condition")['terms_condition']}}
            </h4>
            <div>
                <ol start="42">
                    <li>
                        {{__("general-terms-condition_page_terms_condition")['p1']}}
                    </li>
                </ol>
            </div>
        </section>

        <section class="custom-container container-xl mb-5 text-justify">
            <h4 class="mb-4">
                {{__("general-terms-condition_page_relationship")['relationship']}}
            </h4>
            <div>
                <ol start="43">
                    <li>
                        {{__("general-terms-condition_page_relationship")['p1']}}
                    </li>
                    <li>
                        {{__("general-terms-condition_page_relationship")['p2']}}
                    </li>
                    <li>
                        {{__("general-terms-condition_page_relationship")['p3']}}
                    </li>
                    <li>
                        {{__("general-terms-condition_page_relationship")['agree']}}

                        <ol type="a">
                            <li>
                                {{__("general-terms-condition_page_relationship")['p4']}}
                            </li>
                            <li>
                                {{__("general-terms-condition_page_relationship")['p5']}}
                            </li>
                            <li>
                                {{__("general-terms-condition_page_relationship")['p6']}}
                            </li>
                            <li>
                                {{__("general-terms-condition_page_relationship")['p7']}}
                            </li>
                        </ol>
                    </li>
                    <li>
                        {{__("general-terms-condition_page_relationship")['p8']}}
                    </li>
                    <li>
                        {{__("general-terms-condition_page_relationship")['p9']}}
                    </li>
                </ol>
            </div>
        </section>

        <section class="custom-container container-xl mb-5 text-justify">
            <div class="mb-3">
                <u>{{__("general-terms-condition_page_relationship")['identifying_status']}}</u>
            </div>
            <div>
                <ol start="49">
                    <li>
                        {{__("general-terms-condition_page_relationship")['p10']}}
                    </li>
                    <li>
                        {{__("general-terms-condition_page_relationship")['p11']}}
                    </li>
                    <li>
                        {{__("general-terms-condition_page_relationship")['p12']}}
                    </li>
                </ol>
            </div>
        </section>

        <section class="custom-container container-xl mb-5 text-justify">
            <h4 class="mb-4">
                {{__("general-terms-condition_page_relationship")['relationship_with_clients']}}
            </h4>
            <div>
                <ol start="52">
                    <li>
                        {{__("general-terms-condition_page_relationship")['p13']}}
                    </li>
                    <li>
                        {{__("general-terms-condition_page_relationship")['p14']}}
                    </li>
                    <li>
                        {{__("general-terms-condition_page_relationship")['p15']}}
                    </li>
                    <li>
                        {{__("general-terms-condition_page_relationship")['p15']}}
                    </li>
                </ol>
            </div>
        </section>

        <section class="custom-container container-xl mb-5 text-justify">
            <h4 class="mb-4">
                {{__("general-terms-condition_page_warranty")['warranty']}}
            </h4>
            <div>
                <ol start="56">
                    <li>
                        {{__("general-terms-condition_page_warranty")['p1']}}
                    </li>
                    <li>
                        {{__("general-terms-condition_page_warranty")['p2']}}
                    </li>
                    <li>
                        {{__("general-terms-condition_page_warranty")['p3']}}
                    </li>
                    <li>
                        {{__("general-terms-condition_page_warranty")['p4']}}
                    </li>
                    <li>
                        {{__("general-terms-condition_page_warranty")['p5']}}
                    </li>
                    <li>
                        {{__("general-terms-condition_page_warranty")['p6']}}
                    </li>
                    <li>
                        {{__("general-terms-condition_page_warranty")['p7']}}
                    </li>
                    <li>
                        {{__("general-terms-condition_page_warranty")['p8']}}
                    </li>
                </ol>
            </div>
        </section>

        <section class="custom-container container-xl mb-5 text-justify">
            <h4 class="mb-4">
                {{__("general-terms-condition_page_confidential_information")['confidential_information']}}
            </h4>
            <div>
                <ol start="64">
                    <li>
                        {{__("general-terms-condition_page_confidential_information")['p1']}}
                    </li>
                </ol>
            </div>
        </section>

        <section class="custom-container container-xl mb-5 text-justify">
            <div class="mb-3">
                <u>{{__("general-terms-condition_page_data_protection")['data_protection']}}</u>
            </div>
            <div>
                <ol start="65">
                    <li>
                        {{__("general-terms-condition_page_data_protection")['ensure']}}

                        <ol type="a">
                            <li>
                                {{__("general-terms-condition_page_data_protection")['p1']}}
                            </li>
                            <li>
                                {{__("general-terms-condition_page_data_protection")['p2']}}
                            </li>
                        </ol>
                    </li>
                    <li>
                        {{__("general-terms-condition_page_data_protection")['p3']}}
                    </li>
                    <li>
                        {{__("general-terms-condition_page_data_protection")['p4']}}
                    </li>
                </ol>
            </div>
        </section>

        <section class="custom-container container-xl mb-5 text-justify">
            <h4 class="mb-4">
                {{__("general-terms-condition_page_limitation_liability")['limitation_liability']}}
            </h4>
            <div>
                <ol start="68">
                    <li>
                        {{__("general-terms-condition_page_limitation_liability")['p1']}}
                    </li>
                    <li>
                        {{__("general-terms-condition_page_limitation_liability")['p2']}}
                    </li>
                    <li>
                        {{__("general-terms-condition_page_limitation_liability")['p3']}}
                    </li>
                    <li>
                        {{__("general-terms-condition_page_limitation_liability")['p4']}}
                    </li>
                    <li>
                        {{__("general-terms-condition_page_limitation_liability")['p5']}}
                    </li>
                    <li>
                        <u>{{__("general-terms-condition_page_limitation_liability")['force_majeure']}}</u>. {{__("general-terms-condition_page_limitation_liability")['p6']}}
                    </li>
                    <li>
                        <u>{{__("general-terms-condition_page_limitation_liability")['third_party']}}</u>.{{__("general-terms-condition_page_limitation_liability")['p7']}}
                    </li>
                </ol>
            </div>
        </section>

        <section class="custom-container container-xl mb-5 text-justify">
            <h4 class="mb-4">
                {{__("general-terms-condition_page_acceptance_use_policy")['acceptance_policy']}}
            </h4>
            <div>
                <ol start="75">
                    <li>

                        {{__("general-terms-condition_page_acceptance_use_policy")['p1']}}
                        <ol type="a">
                            <li>
                                {{__("general-terms-condition_page_acceptance_use_policy")['p2']}}
                            </li>
                            <li>
                                {{__("general-terms-condition_page_acceptance_use_policy")['p3']}}
                            </li>
                            <li>
                                {{__("general-terms-condition_page_acceptance_use_policy")['p4']}}
                            </li>
                            <li>
                                {{__("general-terms-condition_page_acceptance_use_policy")['p5']}}
                            </li>
                            <li>
                                {{__("general-terms-condition_page_acceptance_use_policy")['p6']}}
                            </li>
                            <li>
                                {{__("general-terms-condition_page_acceptance_use_policy")['p7']}}
                            </li>
                            <li>
                                {{__("general-terms-condition_page_acceptance_use_policy")['p8']}}
                            </li>
                            <li>
                                {{__("general-terms-condition_page_acceptance_use_policy")['p9']}}
                            </li>
                            <li>
                                {{__("general-terms-condition_page_acceptance_use_policy")['p10']}}
                            </li>
                            <li>
                                {{__("general-terms-condition_page_acceptance_use_policy")['p11']}}
                            </li>
                        </ol>
                    </li>
                    <li>
                        {{__("general-terms-condition_page_acceptance_use_policy")['p12']}}
                    </li>
                </ol>
            </div>
        </section>

        <section class="custom-container container-xl mb-5 text-justify">
            <h4 class="mb-4">
                {{__("general-terms-condition_page_photo_video")['photo_video']}}
            </h4>
            <div>
                <ol start="77">
                    <li>
                        {{__("general-terms-condition_page_photo_video")['p1']}}
                    </li>
                </ol>
            </div>
        </section>

        <section class="custom-container container-xl mb-5 text-justify">
            <h4 class="mb-4">
                {{__("general-terms-condition_page_assignment")['assignment']}}
            </h4>
            <div>
                <ol start="78">
                    <li>
                        {{__("general-terms-condition_page_assignment")['p1']}}
                    </li>
                    <li>
                        {{__("general-terms-condition_page_assignment")['p2']}}
                    </li>
                    <li>
                        {{__("general-terms-condition_page_assignment")['p3']}}
                    </li>
                </ol>
            </div>
        </section>

        <section class="custom-container container-xl mb-5 text-justify">
            <h4 class="mb-4">
                {{__("general-terms-condition_page_assignment")['p4']}}
            </h4>
            <div>
                <ol start="81">
                    <li>
                        {{__("general-terms-condition_page_assignment")['p5']}}
                    </li>
                </ol>
            </div>
        </section>

        <section class="custom-container container-xl mb-5 text-justify">
            <h4 class="mb-4">
                {{__("general-terms-condition_page_schedule")['schedule']}}
            </h4>
            <div>
                <p>
                    <b>{{__("general-terms-condition_page_schedule")['agreement']}}</b>{{__("general-terms-condition_page_schedule")['p1']}}
                </p>
                <p>
                    <b>{{__("general-terms-condition_page_schedule")['ambassador_deed']}}</b> {{__("general-terms-condition_page_schedule")['p2']}}

                </p>
                <p>
                    <b>{{__("general-terms-condition_page_schedule")['adoption_facilitation_program']}}</b> {{__("general-terms-condition_page_schedule")['p3']}}
                </p>
                <p>
                    <b>{{__("general-terms-condition_page_schedule")['applicable_facilitator_agreement']}}</b> {{__("general-terms-condition_page_schedule")['p4']}}
                </p>
                <p>
                    <b>{{__("general-terms-condition_page_schedule")['compaign']}}</b> {{__("general-terms-condition_page_schedule")['p5']}}
                </p>
                <p>
                    <b>{{__("general-terms-condition_page_schedule")['confidential_information']}}</b>: {{__("general-terms-condition_page_schedule")['p6']}}

                    <ol type="a">
                        <li>
                            {{__("general-terms-condition_page_schedule")['p7']}}
                        </li>
                        <li>
                            {{__("general-terms-condition_page_schedule")['p8']}}

                            <ol type="i">
                                <li>
                                    {{__("general-terms-condition_page_schedule")['p9']}}
                                </li>
                                <li>
                                    {{__("general-terms-condition_page_schedule")['p10']}}
                                </li>
                                <li>
                                    {{__("general-terms-condition_page_schedule")['p11']}}
                                </li>
                            </ol>

                            {{__("general-terms-condition_page_schedule")['p12']}}
                        </li>
                    </ol>
                </p>
                <p>
                    <b>{{__("general-terms-condition_page_schedule")['diplomat_deed']}}</b> {{__("general-terms-condition_page_schedule")['p13']}}
                </p>
                <p>
                    <b>{{__("general-terms-condition_page_schedule")['facilitator']}}</b> {{__("general-terms-condition_page_schedule")['p14']}}
                </p>
                <p>
                    <b>{{__("general-terms-condition_page_schedule")['facilitator_generated_content']}}</b>{{__("general-terms-condition_page_schedule")['p15']}}
                </p>
                <p>
                    <b>{{__("general-terms-condition_page_schedule")['intellectual_property_rights']}}</b>:{{__("general-terms-condition_page_schedule")['p16']}}
                </p>
                <p>
                    <b>{{__("general-terms-condition_page_schedule")['market_consul_deed']}}</b> {{__("general-terms-condition_page_schedule")['p17']}}
                </p>
                <p>
                    <b>{{__("general-terms-condition_page_schedule")['network_concordat_deed']}}</b> {{__("general-terms-condition_page_schedule")['p18']}}
                </p>
                <p>
                    <b>{{__("general-terms-condition_page_schedule")['party']}}</b> {{__("general-terms-condition_page_schedule")['p19']}}
                </p>
                <p>
                    <b>{{__("general-terms-condition_page_schedule")['performance_plan']}}</b>{{__("general-terms-condition_page_schedule")['p20']}}
                </p>
                <p>
                    <b>{{__("general-terms-condition_page_schedule")['program']}}</b>: {{__("general-terms-condition_page_schedule")['p21']}}
                </p>
                <p>
                    <b>{{__("general-terms-condition_page_schedule")['proposal']}}</b>{{__("general-terms-condition_page_schedule")['p22']}}
                </p>
                <p>
                    <b>{{__("general-terms-condition_page_schedule")['scope_work']}}</b>{{__("general-terms-condition_page_schedule")['p23']}}
                </p>
                <p>
                    <b>{{__("general-terms-condition_page_schedule")['senatorial_deed']}}</b>{{__("general-terms-condition_page_schedule")['p24']}}
                </p>
                <p>
                    <b>{{__("general-terms-condition_page_schedule")['stand_alone_campaign']}}</b>{{__("general-terms-condition_page_schedule")['p25']}}
                </p>
            </div>
        </section>

        <section class="custom-container container-xl mb-5 text-justify">
            <h4 class="mb-4">
                {{__("general-terms-condition_page_interpretation")['interpretation']}}
            </h4>
            <div>
                <p>
                    {{__("general-terms-condition_page_interpretation")['p1']}}

                    <ol type="a">
                        <li>
                            {{__("general-terms-condition_page_interpretation")['p2']}}
                        </li>
                        <li>
                            {{__("general-terms-condition_page_interpretation")['p3']}}
                        </li>
                        <li>
                            {{__("general-terms-condition_page_interpretation")['p4']}}
                        </li>
                        <li>
                            {{__("general-terms-condition_page_interpretation")['p5']}}
                        </li>
                        <li>
                            {{__("general-terms-condition_page_interpretation")['p6']}}
                        </li>
                        <li>
                            {{__("general-terms-condition_page_interpretation")['a_reference']}}

                            <ol type="i">
                                <li>
                                    {{__("general-terms-condition_page_interpretation")['p7']}}
                                </li>
                                <li>
                                    {{__("general-terms-condition_page_interpretation")['p8']}}
                                </li>
                                <li>
                                    {{__("general-terms-condition_page_interpretation")['p9']}}
                                </li>
                                <li>
                                    {{__("general-terms-condition_page_interpretation")['p10']}}
                                </li>
                                <li>
                                    {{__("general-terms-condition_page_interpretation")['p11']}}
                                </li>
                                <li>
                                    {{__("general-terms-condition_page_interpretation")['p12']}}
                                </li>
                                <li>
                                    {{__("general-terms-condition_page_interpretation")['p13']}}
                                </li>
                                <li>
                                    {{__("general-terms-condition_page_interpretation")['p14']}}
                                </li>
                            </ol>
                        </li>
                        <li>
                            {{__("general-terms-condition_page_interpretation")['p15']}}
                        </li>
                        <li>
                            {{__("general-terms-condition_page_interpretation")['p16']}}
                        </li>
                        <li>
                            {{__("general-terms-condition_page_interpretation")['p17']}}

                            <ol type="i">
                                <li>
                                    {{__("general-terms-condition_page_interpretation")['p18']}}
                                </li>
                                <li>
                                    {{__("general-terms-condition_page_interpretation")['p19']}}
                                </li>
                            </ol>
                        </li>
                        <li>
                            {{__("general-terms-condition_page_interpretation")['p20']}}
                        </li>
                    </ol>
                </p>
            </div>
        </section>

        <section class="custom-container container-xl mb-5 text-justify">
            <h4 class="mb-4">
                {{__("general-terms-condition_page_schedule_two")['schedule_two']}}
            </h4>

            <ol type="a">
                <li>
                    <p>
                        <u>{{__("general-terms-condition_page_schedule_two")['social_ethical']}}</u>
                    </p>
                    <div>
                        <p>
                            {{__("general-terms-condition_page_schedule_two")['p1']}}
                        </p>

                        <ul>
                            <li>
                                {{__("general-terms-condition_page_schedule_two")['service_orientation']}}
                            </li>
                            <li>
                                {{__("general-terms-condition_page_schedule_two")['social_justice']}}
                            </li>
                            <li>
                                {{__("general-terms-condition_page_schedule_two")['dignity']}}
                            </li>
                            <li>
                                {{__("general-terms-condition_page_schedule_two")['worth_person']}}
                            </li>
                            <li>
                                {{__("general-terms-condition_page_schedule_two")['importance_relationships']}}
                            </li>
                            <li>
                                {{__("general-terms-condition_page_schedule_two")['integrity_competence']}}
                            </li>
                            <li>
                                {{__("general-terms-condition_page_schedule_two")['honesty']}}
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <p>
                        <u>{{__("general-terms-condition_page_schedule_two")['affirmative']}}</u>
                    </p>
                    <p>
                        {{__("general-terms-condition_page_schedule_two")['p2']}}
                    </p>
                </li>
                <li>
                    <p>
                        <u>{{__("general-terms-condition_page_schedule_two")['transparency']}}</u>
                    </p>
                    <div>
                        <p>
                            {{__("general-terms-condition_page_schedule_two")['p3']}}
                        </p>

                        <ul>
                            <li>
                                {{__("general-terms-condition_page_schedule_two")['clear']}}
                            </li>
                            <li>
                                {{__("general-terms-condition_page_schedule_two")['openness']}}
                            </li>
                            <li>
                                {{__("general-terms-condition_page_schedule_two")['transparent']}}
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <p>
                        <u>{{__("general-terms-condition_page_schedule_two")['honesty']}}</u>
                    </p>
                    <div>
                        <p>
                            {{__("general-terms-condition_page_schedule_two")['p4']}}
                        </p>

                        <ul>
                            <li>
                                {{__("general-terms-condition_page_schedule_two")['p5']}}
                            </li>
                            <li>
                                {{__("general-terms-condition_page_schedule_two")['p6']}}
                            </li>
                            <li>
                                {{__("general-terms-condition_page_schedule_two")['p7']}}
                            </li>
                            <li>
                                {{__("general-terms-condition_page_schedule_two")['p8']}}
                            </li>
                            <li>
                                {{__("general-terms-condition_page_schedule_two")['p9']}}
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <p>
                        <u>{{__("general-terms-condition_page_schedule_two")['integrity']}}</u>
                    </p>
                    <div>
                        <p>
                            {{__("general-terms-condition_page_schedule_two")['p10']}}
                        </p>

                        <ul>
                            <li>
                                {{__("general-terms-condition_page_schedule_two")['fair']}}
                            </li>
                            <li>
                                {{__("general-terms-condition_page_schedule_two")['transparency']}}
                            </li>
                            <li>
                                {{__("general-terms-condition_page_schedule_two")['factual']}}
                            </li>
                            <li>
                                {{__("general-terms-condition_page_schedule_two")['impersonel']}}
                            </li>
                            <li>
                                {{__("general-terms-condition_page_schedule_two")['self-evident']}}
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <p>
                        <u>{{__("general-terms-condition_page_schedule_two")['help']}}</u>
                    </p>
                    <div>
                        <p>
                            {{__("general-terms-condition_page_schedule_two")['p11']}}
                        </p>

                        <ul>
                            <li>
                                {{__("general-terms-condition_page_schedule_two")['p12']}}
                            </li>
                            <li>
                                {{__("general-terms-condition_page_schedule_two")['p13']}}
                            </li>
                            <li>
                                {{__("general-terms-condition_page_schedule_two")['p14']}}
                            </li>
                            <li>
                                {{__("general-terms-condition_page_schedule_two")['p15']}}
                            </li>
                            <li>
                                {{__("general-terms-condition_page_schedule_two")['p16']}}
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <p>
                        <u> {{__("general-terms-condition_page_schedule_two")['service_sense']}}</u>
                    </p>
                    <p>
                        {{__("general-terms-condition_page_schedule_two")['p17']}}
                    </p>
                </li>
                <li>
                    <p>
                        <u>{{__("general-terms-condition_page_schedule_two")['absence_punctuality']}}</u>
                    </p>
                    <div>
                        <p>
                            {{__("general-terms-condition_page_schedule_two")['p18']}}
                        </p>

                        <ul>
                            <li>
                                {{__("general-terms-condition_page_schedule_two")['p19']}}
                            </li>
                            <li>
                                {{__("general-terms-condition_page_schedule_two")['p20']}}
                            </li>
                            <li>
                                {{__("general-terms-condition_page_schedule_two")['p21']}}
                            </li>
                            <li>
                                {{__("general-terms-condition_page_schedule_two")['p22']}}
                            </li>
                            <li>
                                {{__("general-terms-condition_page_schedule_two")['p23']}}
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <p>
                        <u> {{__("general-terms-condition_page_schedule_two")['attire']}}</u>
                    </p>
                    <div>
                        <p>
                            {{__("general-terms-condition_page_schedule_two")['p24']}}
                        </p>

                        <ul>
                            <li>
                                {{__("general-terms-condition_page_schedule_two")['p25']}}
                            </li>
                            <li>
                                {{__("general-terms-condition_page_schedule_two")['p26']}}
                            </li>
                            <li>
                                {{__("general-terms-condition_page_schedule_two")['p27']}}
                            </li>
                            <li>
                                {{__("general-terms-condition_page_schedule_two")['p28']}}
                            </li>
                            <li>
                                {{__("general-terms-condition_page_schedule_two")['p29']}}
                            </li>
                            <li>
                                {{__("general-terms-condition_page_schedule_two")['p30']}}
                            </li>
                            <li>
                                {{__("general-terms-condition_page_schedule_two")['p31']}}
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <p>
                        <u>{{__("general-terms-condition_page_schedule_two")['confidentiality']}}</u>
                    </p>
                    <p>
                        {{__("general-terms-condition_page_schedule_two")['p32']}}
                    </p>
                </li>
            </ol>
        </section>

        <section class="custom-container container-xl mb-5 text-justify">
            <h4 class="mb-4">
                {{__("general-terms-condition_page_schedule_three")['schedule_three']}}
            </h4>

            <div>
                <p>
                    {{__("general-terms-condition_page_schedule_three")['p1']}}
                </p>

                <p>
                    {{__("general-terms-condition_page_schedule_three")['disclose']}}
                </p>

                <ul>
                    <li>
                        {{__("general-terms-condition_page_schedule_three")['p2']}}
                    </li>
                    <li>
                        {{__("general-terms-condition_page_schedule_three")['p3']}}
                    </li>
                    <li>
                        {{__("general-terms-condition_page_schedule_three")['p4']}}
                    </li>
                    <li>
                        {{__("general-terms-condition_page_schedule_three")['p5']}}
                    </li>
                    <li>
                        {{__("general-terms-condition_page_schedule_three")['p6']}}
                    </li>
                    <li>
                        {{__("general-terms-condition_page_schedule_three")['p7']}}
                    </li>
                    <li>
                        {{__("general-terms-condition_page_schedule_three")['p8']}}
                    </li>
                </ul>

                <p>
                    {{__("general-terms-condition_page_schedule_three")['p9']}}
                </p>

                <ul>
                    <li>
                        {{__("general-terms-condition_page_schedule_three")['p10']}}
                    </li>
                    <li>
                        {{__("general-terms-condition_page_schedule_three")['p11']}}
                    </li>
                    <li>
                        {{__("general-terms-condition_page_schedule_three")['p12']}}
                    </li>
                    <li>
                        {{__("general-terms-condition_page_schedule_three")['p13']}}
                    </li>
                    <li>
                        {{__("general-terms-condition_page_schedule_three")['p14']}}
                    </li>
                    <li>
                        {{__("general-terms-condition_page_schedule_three")['p15']}}
                    </li>
                    <li>
                        {{__("general-terms-condition_page_schedule_three")['p16']}}
                    </li>
                    <li>
                        {{__("general-terms-condition_page_schedule_three")['p17']}}
                    </li>
                    <li>
                        {{__("general-terms-condition_page_schedule_three")['p18']}}
                    </li>
                    <li>
                        {{__("general-terms-condition_page_schedule_three")['p19']}}
                    </li>
                    <li>
                        {{__("general-terms-condition_page_schedule_three")['p20']}}
                    </li>
                    <li>
                        {{__("general-terms-condition_page_schedule_three")['p21']}}
                    </li>
                    <li>
                        {{__("general-terms-condition_page_schedule_three")['p22']}}
                    </li>
                    <li>
                        {{__("general-terms-condition_page_schedule_three")['p23']}}
                    </li>
                </ul>

                <p>
                    {{__("general-terms-condition_page_schedule_three")['what_else']}}
                </p>

                <ul>
                    <li>
                        {{__("general-terms-condition_page_schedule_three")['p24']}}
                    </li>
                    <li>
                        {{__("general-terms-condition_page_schedule_three")['p25']}}
                    </li>
                    <li>
                        {{__("general-terms-condition_page_schedule_three")['p26']}}
                    </li>
                </ul>
            </div>
        </section>

    </div>
    <footer>
        <section class="custom-container container-xl">
            <hr class="mb-0">
        </section>
        <div class="d-flex justify-content-center py-4">
            NuGenesis &copy; <span id="year"></span>. All rights reserved.
        </div>
    </footer>
</div>



























@endsection
