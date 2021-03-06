@extends('layout')
@section('content')
    <div id="language">
        <div class="mb-5 shadow" id="hero-container">
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
                            <li class="nav-item d-lg-flex align-items-center"  @if(\App\Language::isRTL()) dir="ltr" @endif>
                                <div class="btn-group">
                                    <a href="{{\App\Language::selectedLanguage('link')}}" class="bg-transparent border-0 btn btn-primary nav-link btn-no-ring font-weight-bold " @if(\App\Language::getCurrentPage()=='') style="color:white!important"@endif><span class="{{\App\Language::selectedLanguage('icon')}}"></span> {{\App\Language::selectedLanguage('label')}}</a>
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

        <section class="custom-container container-xl pt-5">
            <div class="row">
                <div class="col-12 text-left mb-5">
                    <h4 class="mb-3">
                        <b><h4>LANGUAGE TRANSLATIONS</h4></b>
                    </h4>
                    <b><h5>Select Language</h5></b>
                    @foreach(\App\Language::getLanguageList() as $l)
                        <div class="row mt-3">
                            <div class="col-md-4"></div>
                            <div class="col-md-4">
                                <a class="btn btn-light btn-block" href="/{{$l['name']}}/getting-involved#programs">
                                    <i class="{{$l['icon']}}"></i> {{$l['full_name']}}
                                </a>
                            </div>
                            <div class="col-md-4"></div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
</div>
@endsection
