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
                LIMITATION OF LIABILITY
            </h4>
            <div>
                <ol start="68">
                    <li>
                        Nothing in this agreement limits our liability for i. death or personal injury caused by its negligence; ii. fraud or fraudulent misrepresentation; or iii. any other liability which cannot be limited or excluded by applicable law. Subject to the sub-clause above, NuGenesis shall not be liable to You, whether in contract, tort (including negligence), for breach of statutory duty, or otherwise, arising under or in connection with this agreement for loss of profits, loss of sales or business, loss of agreements or contracts, loss of or damage to goodwill, brand or sponsorship revenue, loss of use or corruption of software, data, or information or any indirect or consequential loss.
                    </li>
                    <li>
                        You acknowledge that NuGenesis will have no liability to You in respect of any action taken against You, or in respect of Your social media accounts, by the operator of the relevant social media network (for example, Facebook, Instagram, YouTube, or Twitter) in respect of any activity comprised in any campaign undertaken by You or by participating in this Program.
                    </li>
                    <li>
                        Our total liability to You, whether in contract, tort (including negligence), for breach of statutory duty, or otherwise, arising under or in connection with this agreement shall be limited to, in respect of all claims (connected or unconnected) in any consecutive 12 (twelve) month period, the greater of the total fee for campaigns paid or payable by us to You in that period.
                    </li>
                    <li>
                        No Reliance on Statements: Each party agrees that it shall have no remedies in respect of any statement, representation, assurance, or warranty (whether made innocently or negligently) that is not set out in this agreement. Each party agrees that it shall have no claim for innocent or negligent misrepresentation or negligent misstatement based on any statement in this agreement. NuGenesis relies upon You having conducted Your own investigation into all matters and make all necessary enquiries to satisfy Yourself of the desirability of the Programs, the substance of any representations, and the obligations You enter into.
                    </li>
                    <li>
                        Complaints and Dispute Resolution: most concerns can be solved by contacting NuGenesis directly. If any dispute arises in connection with this agreement, the parties agree to enter into mediation intended to settle such a dispute unless otherwise agreed between the parties within 14 days of notice of the dispute. This agreement, and any dispute or claim (including non-contractual disputes or claims) arising out of or in connection with it or its subject matter or formation, shall be governed by and construed under the laws of New South Wales, Australia. Each party irrevocably agrees that the courts thereof shall have non-exclusive jurisdiction to settle any dispute or claim (including non-contractual disputes or claims) arising out of or in connection with this agreement, the Ambassador Deed, the Performance Plan, or their subject matter or formation.
                    </li>
                    <li>
                        <u>Force Majeure</u>. Neither party will be responsible for failure or delay of performance if caused by an act of war, hostility, or sabotage; an act of God; pandemics, electrical, internet, or telecommunication outage that is not caused by the obligated party; government restrictions; or other events outside the reasonable control of the obligated party. Each party will use reasonable efforts to mitigate the effect of a force majeure event.
                    </li>
                    <li>
                        <u>No Third-Party Beneficiaries</u>. Nothing in this Agreement, express or implied, is intended to or shall confer upon any person or entity (other than the parties hereto) any right, benefit, or remedy of any nature whatsoever under, or because of, this Agreement.
                    </li>
                </ol>
            </div>
        </section>

        <section class="custom-container container-xl mb-5 text-justify">
            <h4 class="mb-4">
                ACCEPTABLE USE POLICY
            </h4>
            <div>
                <ol start="75">
                    <li>
                        This policy forms part of Your NuGenesis Facilitator Agreement with NuGenesis. You agree that You will not:

                        <ol type="a">
                            <li>
                                use the Program, or any social media account during any proposal or campaign, to distribute or facilitate distribution of any Facilitator-generated content that is offensive, obscene, prohibited under any laws or regulations of any territory in which the campaign is to be conducted, or infringes any person’s intellectual property rights;
                            </li>
                            <li>
                                use another person or entity’s email address to sign up to use social media channels; engage in fraudulent or abusive purposes (including, without limitation, by using social media channels to impersonate any person or entity, or otherwise misrepresent Your affiliation with a person, entity or NuGenesis; use the Program for any commercial or business purpose or the benefit of any third party or to send unsolicited communications; remove or amend any proprietary notices or other ownership information from the
                                Program;
                            </li>
                            <li>
                                interfere with or disrupt the Program or servers or networks that provide the NuGenesis website and social media channels;
                            </li>
                            <li>
                                except as permitted by law, attempt to decompile, reverse engineer, disassemble or hack any of the Program or the NuGenesis website and social media channels, or to defeat or overcome any of our encryption technologies or security measures or data transmitted, processed, or stored by NuGenesis;
                            </li>
                            <li>
                                attempt to ‘spider’, ‘harvest’, ‘scrape’ or collect any information about or regarding other people that use the Program, including, but not limited to any personal data or information (including by uploading anything that collects information such as ‘spyware’);
                            </li>
                            <li>
                                disrupt the normal operation of the NuGenesis website or social media channels or do anything likely to harm other users’ ability to participate in the Program; disobey any requirements or regulations of mobile networks connected to the Program;
                            </li>
                            <li>
                                attempt to get around technological measures designed to control access to, or elements of the NuGenesis website, social media channels, or the Program;
                            </li>
                            <li>
                                claim that You are associated with or endorsed by us unless You have entered into a written agreement with NuGenesis to that effect; republish in bulk any information derived from the participation in this Program;
                            </li>
                            <li>
                                ‘White-label’ or otherwise hold Yourself out as the originating provider of any content, material, or processes shared by NuGenesis while participating in this Program; and,
                            </li>
                            <li>
                                use the Program in violation of any  applicable law or regulatory requirement.
                            </li>
                        </ol>
                    </li>
                    <li>
                        You shall not create, publish, transmit or distribute, under any circumstances, any bulk email messages (also known as ‘Spam’) without prior written consent from NuGenesis, to be granted or denied in NuGenesis' sole discretion, in each instance. Additionally, You may only send emails containing a NuGenesis Adoption Facilitator link and or a message regarding NuGenesis or the NuGenesis' Adoption Facilitation Program to people who have previously consented to receive such communications from You. Your failure to abide by applicable laws relating to email communications, in any manner, will be deemed a material breach of this Agreement by You and may result in the forfeiture by You of any rights Youmay have to any renumeration and the termination of Your participation in the Program. Further, if Your account has excessive clicks in a very short period as determined by NuGenesis in its sole discretion, the Facilitator relationship may be terminated.
                    </li>
                </ol>
            </div>
        </section>

        <section class="custom-container container-xl mb-5 text-justify">
            <h4 class="mb-4">
                PHOTO/VIDEO RELEASE
            </h4>
            <div>
                <ol start="77">
                    <li>
                        As part of the Terms and Conditions of participating in the NuGenesis Adoption Facilitation Programs, You grant permission to NuGenesis and its agents and employees the irrevocable and unrestricted right to reproduce the photographs and/or video images taken of You, or members of Your family, for publication, promotion, illustration, advertising, or trade, in any manner or any medium. This includes all user-generated content provided to NuGenesis for use on its social media channels. You also hereby release NuGenesis and its legal representatives for all claims and liability relating to said images or video. Furthermore, You grant permission to use any statements that were given during an interview or as part of a video, with or without Your name, for advertising and publicity without restriction. You also waive any right to any compensation unless expressly detailed in the Scope of Work section of Your contract.
                    </li>
                </ol>
            </div>
        </section>

        <section class="custom-container container-xl mb-5 text-justify">
            <h4 class="mb-4">
                ASSIGNMENT
            </h4>
            <div>
                <ol start="78">
                    <li>
                        The Applicable Facilitator Agreement of which these Terms and Conditions form part is personal to the Parties and subject to the succeeding clause, neither Party shall assign, transfer, mortgage, charge, subcontract, declare a trust over or deal in any other manner, with any of its rights and obligations under that Agreement.
                    </li>
                    <li>
                        NuGenesis may, by providing five (5) Business Days’ written notice under the provisions of the succeeding clause, assign, novate, transfer, mortgage, charge, subcontract, and/or declare a trust over or deal in any other manner with any of its rights and obligations under this Agreement to any member of the NuGenesis associated entities, or to any third party that it reasonably considers at its discretion capable of performing the duties, responsibilities, and obligations under the applicable Agreement.
                    </li>
                    <li>
                        In respect of any notification given by NuGenesis, for the assignment, or novation or transfer of rights and obligations to any third party (unless such assignment, transfer, or novation is made to any related or associated party in the NuGenesis Group in which case You hereby consent to such assignment, transfer or novation, effective upon notice being provided by NuGenesis and without any further action being required on Your part for effecting such assignment, transfer or novation) under the provisions of this, failure on Your part to object to such transfer within the notice period of 14 days shall evidence its acceptance of such transfer, and the transfer of the rights and obligations of NuGenesis under the applicable Agreement shall take effect giving rise to a direct
                        contractual relationship between the transferee and You.
                    </li>
                </ol>
            </div>
        </section>

        <section class="custom-container container-xl mb-5 text-justify">
            <h4 class="mb-4">
                ADHERENCE TO NUGENESIS CODE OF CONDUCT FOR FACILITATORS
            </h4>
            <div>
                <ol start="81">
                    <li>
                        You agree to adhere to the Code of Conduct for Adoption Facilitators in Schedule 2.
                    </li>
                </ol>
            </div>
        </section>

        <section class="custom-container container-xl mb-5 text-justify">
            <h4 class="mb-4">
                SCHEDULE 1 – DICTIONARY AND DEFINITIONS
            </h4>
            <div>
                <p>
                    <b>Agreement</b> means the applicable Facilitator Agreement.
                </p>
                <p>
                    <b>Ambassador Deed</b> means the Deed between an Ambassador and NuGenesis by which the Adoption Facilitator undertakes the role of Ambassador within the Program, and this Deed incorporates these Terms and Conditions and the Performance Plan for that Ambassador.

                </p>
                <p>
                    <b>Adoption Facilitation Program</b> (‘Program’) means the broad Program whereby NuGenesis acquires the promotional efforts of persons operating in various roles to promote NuGenesis technology.
                </p>
                <p>
                    <b>Applicable Facilitator Agreement</b> means the Adoption Facilitation Agreement or Deed applicable to the respective Facilitator undertaking being entered into, whether it is an Ambassador Deed, Market Consul Deed, Network Concordat Deed, Senatorial Deed or Diplomat Deed, and whether it is ongoing or stand-alone in respect of an individual campaign and the legally binding agreement or Deed shall comprise of the respective Deed, these Terms and Conditions and Performance plan together.
                </p>
                <p>
                    <b>Campaign</b> means a specific promotional initiative and is variously called a proposal and may also be a stand-alone undertaking.
                </p>
                <p>
                    <b>Confidential Information</b>: means, without limitation, all tangible and intangible information, and materials being disclosed to You in connection with this Agreement, in any form or medium (and without regard to whether the information is owned by NuGenesis or any member of the NuGenesis Group or by a third party), including but not limited to:

                    <ol type="a">
                        <li>
                            the existence and terms of these Terms and Conditions, Deed and Performance Plan;
                        </li>
                        <li>
                            any information relating to:

                            <ol type="i">
                                <li>
                                    the business affairs, Clients, trading platforms, liquidity providers, data or feed providers and other vendors, plans, intentions, or marketing plans and opportunities, financial position, and financial projections of NuGenesis or of the NuGenesis Group; and
                                </li>
                                <li>
                                    the operations, processes, product information, know-how, show how, contacts, designs, trade secrets or software of NuGenesis;
                                </li>
                                <li>
                                    any information or analysis derived from Confidential Information;
                                </li>
                            </ol>

                            but not including any information which is required by law to be disclosed after giving NuGenesis advance notice, and an opportunity to consider its position in respect of such requirement to disclose, and any information that has entered the public domain otherwise than by breach of these Terms and Conditions.
                        </li>
                    </ol>
                </p>
                <p>
                    <b>Diplomat Deed</b> means the Deed between a Diplomat and NuGenesis by which the Adoption Facilitator undertakes the role of Diplomat within the Program, and this Deed incorporates these Terms and Conditions and the Performance Plan for that Diplomat.
                </p>
                <p>
                    <b>Facilitator</b> means a Program participant, also known as Adoption Facilitator, who is providing promotional and adoption facilitation services.
                </p>
                <p>
                    <b>Facilitator-Generated Content</b> means video, audio, text, and other forms of expression created by the Facilitator to promote the adoption of NuGenesis.
                </p>
                <p>
                    <b>Intellectual Property Rights</b>: means without limitation patents, know-how, trademarks, rights to inventions, copyright and related rights, trade marks, business names and domain names, lists and information on any Clients, information on business or trading practices and remuneration, client incentive and loyalty schemes, commission or other similar incentive schemes for affiliates and other business partners, rights in get-up, goodwill and the right to sue for passing off, rights in designs, database rights, and all other intellectual property rights, in each case whether registered or unregistered, and including all applications and rights to apply for and be granted renewals or extensions of, and rights to claim priority from such rights and all similar or equivalent rights or forms of protection, which subsist or will subsist now or in the future in any part of the world.
                </p>
                <p>
                    <b>Market Consul Deed</b> means the Deed between a Market Consul and NuGenesis by which the Adoption Facilitator undertakes the role of Market Consul within the Program, and this Deed incorporates these Terms and Conditions and the Performance Plan for that Market Consul.
                </p>
                <p>
                    <b>Network Concordat Deed</b> means the Deed between a Network Concordat and NuGenesis by which the Adoption Facilitator undertakes the role of Network Concordat within the Program, and this Deed incorporates these Terms and Conditions and the Performance Plan for that Network Concordat.
                </p>
                <p>
                    <b>Party</b> means the party or parties to the Applicable Facilitator Agreement.
                </p>
                <p>
                    <b>Performance Plan</b> means the documents so named that incorporate the particular expectations, remuneration and KPI’s that apply to that Facilitator, which is incorporated, together with these terms, with the applicable Facilitation Deed for that category and role of Facilitator in this Program.
                </p>
                <p>
                    <b>Program</b>: means Adoption Facilitation Program.
                </p>
                <p>
                    <b>Proposal</b> means Campaign.
                </p>
                <p>
                    <b>Scope of Work</b> means the description of the specified activity established for a particular Facilitator in their agreement.
                </p>
                <p>
                    <b>Senatorial Deed</b> means the Deed between a Senator and NuGenesis by which the Adoption Facilitator undertakes the role of Senator within the Program, and this Deed incorporates these Terms and Conditions and the Performance Plan for that Senator.
                </p>
                <p>
                    <b>Stand Alone Campaign</b> means a singular or one-off undertaking.
                </p>
            </div>
        </section>

        <section class="custom-container container-xl mb-5 text-justify">
            <h4 class="mb-4">
                INTERPRETATION
            </h4>
            <div>
                <p>
                    In this deed the following rules of interpretation apply unless the contrary intention appears:

                    <ol type="a">
                        <li>
                            headings are for convenience only and do not affect the interpretation of the terms;
                        </li>
                        <li>
                            the singular includes the plural and vice versa;
                        </li>
                        <li>
                            words that are gender-neutral or gender-specific include each gender;
                        </li>
                        <li>
                            where a word or phrase is given a particular meaning, other parts of speech and grammatical forms of that word or phrase have corresponding meanings;
                        </li>
                        <li>
                            the words 'such as', 'including', 'particularly' and similar expressions are not used as, nor are intended to be, interpreted as words of limitation;
                        </li>
                        <li>
                            a reference to:

                            <ol type="i">
                                <li>
                                    a person includes a natural person, partnership, joint venture, government agency, association, corporation, or other body corporate;
                                </li>
                                <li>
                                    a thing (including, but not limited to, a choice in action or other rights) includes a part of that thing;
                                </li>
                                <li>
                                    a party includes its successors and permitted assigns;
                                </li>
                                <li>
                                    a document includes all amendments or supplements to that document;
                                </li>
                                <li>
                                    a clause, term, party, schedule, or attachment is a reference to a clause or term of, or party, schedule or attachment to the Applicable Deed, Performance Pan or these terms;
                                </li>
                                <li>
                                    the applicable Deed, Performance Plan, and these terms include all schedules and attachments to them;
                                </li>
                                <li>
                                    a law includes a constitutional provision, treaty, decree, convention, statute, regulation, ordinance, by-law, judgment, rule of common law or equity or a rule of an applicable financial market and is a reference to that law as amended, consolidated, or replaced; and,
                                </li>
                                <li>
                                    an agreement other than this deed includes an undertaking, or legally enforceable arrangement or understanding, whether or not in writing.
                                </li>
                            </ol>
                        </li>
                        <li>
                            an agreement on the part of two or more persons binds them jointly and severally;
                        </li>
                        <li>
                            when the day on which something must be done is not a Business Day, that thing must be done on the following Business Day;
                        </li>
                        <li>
                            in determining the time of day, where relevant to this deed, the relevant time of day is:

                            <ol type="i">
                                <li>
                                    to give or receive notices, the time of day where a party receiving a notice is located; or
                                </li>
                                <li>
                                    for any other purpose under this deed, the time of day in the place where the party required to perform an obligation is located; and
                                </li>
                            </ol>
                        </li>
                        <li>
                            no rule of construction applies to the disadvantage of a party because that party was responsible for the preparation of this deed or any part of it.
                        </li>
                    </ol>
                </p>
            </div>
        </section>

        <section class="custom-container container-xl mb-5 text-justify">
            <h4 class="mb-4">
                SCHEDULE 2 - NuGenesis CODE OF CONDUCT FOR ADOPTION FACILITATORS
            </h4>

            <ol type="a">
                <li>
                    <p>
                        <u>Social and ethical standards</u>
                    </p>
                    <div>
                        <p>
                            Facilitators are expected to be socially and ethically responsible towards peers and in general as well. If misconduct is evident upon inquiry, the individual will be immediately expelled from the Facilitator Program. The following are the key points of social and ethical responsibilities for a Facilitator.
                        </p>

                        <ul>
                            <li>
                                Service orientation
                            </li>
                            <li>
                                Social justice
                            </li>
                            <li>
                                Dignity
                            </li>
                            <li>
                                Worth of the person
                            </li>
                            <li>
                                Importance of human relationships
                            </li>
                            <li>
                                Integrity and competence
                            </li>
                            <li>
                                Honesty
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <p>
                        <u>Affirmative actions and animosity</u>
                    </p>
                    <p>
                        Facilitators are expected to be tolerant and considerate towards other individuals and groups. Facilitators are not allowed to despise or spread hate towards any gender, ethnicity, age, physical or mental disability, marital status, religion, creed, sex, sexual orientation, or political beliefs. Patience and understanding are highly required from the Facilitator to keep the NuGenesis eco-system vibrant, enthusiastic, and optimal for innovation. Hate speeches and related activities will be cause for breach and termination from the Facilitator Program. Hate speeches and actions in person or on digital platforms inclusive of social media, websites, and blogs, will be considered a violation of the code of conduct.
                    </p>
                </li>
                <li>
                    <p>
                        <u>Transparency</u>
                    </p>
                    <div>
                        <p>
                            Transparency of information and operations is essential to develop trust and success. Facilitators must be transparent with the information they provide for enrolment in the Facilitator Program. The Facilitator will have to be transparent about their mind and cognitive process. The Facilitator will also have to be transparent with the assigned job responsibilities and the processes they follow to complete given tasks. Any discrepancy found in the information and operations of assigned job responsibilities will be considered a breach. Any ambiguity in information and the processes of job responsibilities will be inquired and may be a breach. The following are the key point of transparency policy and code of conduct.
                        </p>

                        <ul>
                            <li>
                                Clear and non-ambiguous information
                            </li>
                            <li>
                                Openness with peers and the team
                            </li>
                            <li>
                                Transparent operation of tasks and responsibilities
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <p>
                        <u>Honesty</u>
                    </p>
                    <div>
                        <p>
                            Honesty is considered an integral part of the Facilitator Program. Articulations and actions must hold the highest integrity and honesty. Facilitators are expected to adhere to honesty and truth to represent the project and business in the bestmanner to students and the public. The truth will be appreciated and motivated, so Facilitators ought to respect honesty and truth. The following will be considered as a violation of the Facilitators’ Program code of conduct.
                        </p>

                        <ul>
                            <li>
                                Dishonesty with the job responsibilities
                            </li>
                            <li>
                                Presenting other work as own
                            </li>
                            <li>
                                Acknowledging illegitimate credit of work
                            </li>
                            <li>
                                Hiding self-misconduct or personal misconduct
                            </li>
                            <li>
                                Floating illegitimate information to clients and customers
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <p>
                        <u>Integrity</u>
                    </p>
                    <div>
                        <p>
                            Facilitators should follow moral principles based on honesty. The Facilitators’ Program expects Facilitators to have a strong and uncompromising set of ethics, principles, and values. The following are the key factors that are expected from individuals and teams for job operations, and on and off-campus behaviour.
                        </p>

                        <ul>
                            <li>
                                Fair
                            </li>
                            <li>
                                Transparency
                            </li>
                            <li>
                                Factual
                            </li>
                            <li>
                                Impersonal
                            </li>
                            <li>
                                Self-evident and indisputable
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <p>
                        <u>Help and Resourcefulness</u>
                    </p>
                    <div>
                        <p>
                            Facilitators are representatives who are not just representatives of the Facilitators’ Program but also of NuGenesis. Facilitators are expected to be helpful not just to their peers and teams but to the general population of the students and clients. Facilitators must be helpful to drive adoption. Facilitators should provide help and guidance for business-related questions to clients in a professional manner. If Facilitators are reported to be non-considerate with the matters where help can be provided, it will be considered volition of ethical conduct. The following are expected from Facilitators.
                        </p>

                        <ul>
                            <li>
                                Provide information for prospective clients
                            </li>
                            <li>
                                Provide help to prospective users of NuGenesis systems
                            </li>
                            <li>
                                Provide help with registrations
                            </li>
                            <li>
                                Provide help to students for better decision making
                            </li>
                            <li>
                                Provide help for business-related activities and information sharing
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <p>
                        <u>Service sense</u>
                    </p>
                    <p>
                        Customer focus is considered the primary trait of a Facilitator. This responsibility is not to be taken for granted, and the focus must be kept on queries and solutions. Prospective clients with queries are the key focus. Queries should be complied with transparency and honesty to provide the individual with the best user experience. Negligence in the response of the query violates the primary function of the job.
                    </p>
                </li>
                <li>
                    <p>
                        <u>Absence and Punctuality</u>
                    </p>
                    <div>
                        <p>
                            If a Facilitator is missing meeting or presentation hours, and not attending meetings and events without application, an explanation will be called. The representation must be notified in case of absence or when late arrival is anticipated. Constant misconduct will be inquired, and if it is evident that the absence and lack of punctuality are because of pure negligence, it will be considered a breach. If the individual has legitimate reasons, e.g. general or chronic illness, family issues, or an emergency, the individual will be accommodated. The following will decrease Facilitator value and may amount to a breach worthy of termination.
                        </p>

                        <ul>
                            <li>
                                Failure to provide proper notice of absence
                            </li>
                            <li>
                                Failure to provide the proper reason for absence
                            </li>
                            <li>
                                Failure to provide proper notice of late arrivals
                            </li>
                            <li>
                                Failure to provide the proper reason for late arrivals
                            </li>
                            <li>
                                Providing wrong information and dishonesty towards explanations
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <p>
                        <u>Attire and Workplace Etiquette</u>
                    </p>
                    <div>
                        <p>
                            Facilitators must follow the appropriate dress code for a particular job as they are representatives of NuGenesis. A formal dress code is obligatory for formal meetings and events. Facilitators will be notified in a timely manner of formal meetings and events. Proactive and inappropriate clothing is highly discouraged. Individuals should be considerate, polite, and courteous in their interactions with peers, other students, and the community on and offcampus. Facilitators must follow health and safety measures at the workplace, meetings, and events. Facilitators should have a high level of self-hygiene and self-care. The following are the key point of attire and workplace code of conduct if violated give rise to a breach:
                        </p>

                        <ul>
                            <li>
                                Formal attire at formal meetings and events
                            </li>
                            <li>
                                No offensive and racially triggered clothing
                            </li>
                            <li>
                                Inappropriate dressing with improper exposure of physical attributes is not allowed
                            </li>
                            <li>
                                Alcohol and smoking are not allowed at worktime and in the workplace
                            </li>
                            <li>
                                Homework, reading, and other personal work is not permitted unless a supervisor authorizes this activity
                            </li>
                            <li>
                                Telephones, computers, and other College resources may only be used with the permission of the owner
                            </li>
                            <li>
                                Cell phones, computers with personal internet access, video games, and other electronic devices not related to the Facilitator’s worktime are not to be used during work hours
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <p>
                        <u>Confidentiality</u>
                    </p>
                    <p>
                        Facilitators must be very cautious with the confidentiality of the activities and operations of the Facilitator's Program. Professional matters should be not discussed with irrelevant and unauthorised persons. Discussing internal matters at irrelevant or public places is highly forbidden. Financial, information, and other such private or personal subjects should be held in the strictest confidence. Facilitators Program internal matters and operations must not be subject to casual conversations.
                    </p>
                </li>
            </ol>
        </section>

        <section class="custom-container container-xl mb-5 text-justify">
            <h4 class="mb-4">
                SCHEDULE 3 - DISCLOSURE POLICY
            </h4>

            <div>
                <p>
                    One key is to make a good disclosure of Your relationship with the brand. Here are some tips on when and how to make good disclosures. If You endorse a product through social media, Your endorsement message should make it obvious when You have a relationship (‘material connection’) with the brand. A ‘material connection’ to the brand includes a personal, family, or employment relationship or a financial relationship – such as the brand paying You or giving You free or discounted products or services. Telling Your followers about these kinds of relationships is important because it helps keep Your recommendations honest and truthful, and it allows people to weigh the value of Your endorsements. As an influencer, it’s Your responsibility to make these disclosures, to be familiar with the Endorsement Guides, and to comply with laws against deceptive ads. Do not rely on others to do it for You.
                </p>

                <p>
                    When to Disclose
                </p>

                <ul>
                    <li>
                        Disclose when You have any financial, employment, personal, or family relationship with a brand.
                    </li>
                    <li>
                        Financial relationships are not limited to money. Disclose the relationship if You received anything of value to mention a product.
                    </li>
                    <li>
                        If a brand gives You free or discounted products or other perks and then Youmention one of its products, make a disclosure even if You weren’t asked to mention that product.
                    </li>
                    <li>
                        Don’t assume Your followers already know about Your brand relationships.
                    </li>
                    <li>
                        Make disclosures even if You think Your evaluations are biased.
                    </li>
                    <li>
                        Keep in mind that tags, likes, pins, and similar ways of showing You as a brand or product are endorsements.
                    </li>
                    <li>
                        If You have no brand relationship and are just telling people about a product You bought and happen to like, You do not need to declare that You do not have a brand relationship
                    </li>
                </ul>

                <p>
                    How to Disclose and make sure people will see and understand the disclosure:
                </p>

                <ul>
                    <li>
                        Place it so it is hard to miss.
                    </li>
                    <li>
                        The disclosure should be placed with the endorsement message itself.
                    </li>
                    <li>
                        Disclosures are likely to be missed if they appear only on an ‘About Me’ or profile page, at the end of posts or videos, or anywhere that requires a person to click ‘More”.
                    </li>
                    <li>
                        Do not mix Your disclosure into a group of hashtags or links.
                    </li>
                    <li>
                        If Your endorsement is in a picture on a platform like Snapchat and Instagram Stories, superimpose the disclosure over the picture, and make sure viewers have enough time to notice and read it.
                    </li>
                    <li>
                        If making an endorsement in a video, the disclosure should be in the video and not just in the description uploaded with the video. Viewers are more likely to notice disclosures made in both audio and video. Please remember - some viewers may watch without sound and others may not notice superimposed words.
                    </li>
                    <li>
                        If making an endorsement in a live stream, the disclosure should be repeated periodically so viewers who only see part of the stream will get the disclosure.
                    </li>
                    <li>
                        Use simple and clear language. Simple explanations like “Thank you to Acme brand for the free product”, are often enough if placed in a way that is hard to miss.
                    </li>
                    <li>
                        So are terms like “advertisement,” “ad,” and “sponsored.”
                    </li>
                    <li>
                        On a space-limited platform like Twitter, the terms “Acme Partner” or “Acme Ambassador” (where Acme is the brand name) are also options.
                    </li>
                    <li>
                        It is fine (but not necessary) to include a hashtag with the disclosure, such as #ad or #sponsored.
                    </li>
                    <li>
                        Do not use vague or confusing terms like “sp,” “spon,” or “collab,” or stand-alone terms like “thanks” or “ambassador,” and stay away from other abbreviations and shorthand when possible.
                    </li>
                    <li>
                        The disclosure should be in the same language as the endorsement itself.
                    </li>
                    <li>
                        Do not assume that a platforms disclosure tool is good enough, but consider using it in addition to Your own, good disclosure.
                    </li>
                </ul>

                <p>
                    What else to Know
                </p>

                <ul>
                    <li>
                        You cannot talk about Your experience with a product You have not tried.
                    </li>
                    <li>
                        If You are paid to talk about a product and thought it was terrible, You cannot say it is terrific.
                    </li>
                    <li>
                        You cannot make up claims about a product that would require proof the advertiser does not have – such as scientific proof that a product can treat a health condition.
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
