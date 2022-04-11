@extends('layout')
@section('content')
<div class="mb-5 shadow" id="hero-container" @if(\App\Language::isRTL()) dir="rtl" @endif>
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
                    <a class="nav-link" href="https://nucoin.com.au/" target="_blank">{{__("nav")['nucoin']}}</a>
                </li>
                <li class="mr-3 nav-item">
                    <a class="nav-link" href="https://justsocial.tech/" target="_blank">{{__("nav")['just_social']}}</a>
                </li>
                <li class="mr-3 nav-item">
                    <a class="nav-link" href="https://explorer.nucoin.com.au/" target="_blank">{{__("nav")['explorer']}}</a>
                </li>
                <li class="mr-3 nav-item">
                    <a class="nav-link" href="https://ledgerx.exchange/" target="_blank">{{__("nav")['nucoin_ledgerx']}}</a>
                </li>
                <li class="mr-3 nav-item">
                    <a class="nav-link" href="https://nugenesisou.myshopify.com/" target="_blank">{{__("nav")['shop']}}</a>
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
                            <a class="pl-2 nav-link {{ Request::is('*getting-involved*') ? 'active' : '' }}" href="{{url(app()->getLocale(),'projects')}}">{{__("toggledropdown")['projects']}}</a>
                            <div class="dropdown-divider"></div>
                            <!-- <a class="pl-2 nav-link" href="industries.html">Industries <small>(more info coming soon)</small></a>
                            <div class="dropdown-divider"></div> -->
                            <a class="pl-2 nav-link {{ Request::is('*getting-involved*') ? 'active' : '' }}" href="{{url(app()->getLocale(),'media')}}">{{__("toggledropdown")['media']}}</a>
                            <div class="dropdown-divider"></div>
                            <a class="pl-2 nav-link {{ Request::is('*getting-involved*') ? 'active' : '' }}"
                            href="{{url(app()->getLocale(),'getting-involved')}}">{{__("toggledropdown")['getting_involved']}}</a>
                            <a class="pl-2 nav-link {{ Request::is('*getting-involved*') ? 'active' : '' }}" href="{{url(app()->getLocale(),'opportunities')}}">{{__("toggledropdown")['opportunities']}}</a>
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
                                <a class="pl-2 nav-link active" href="{{url(app()->getLocale(),'opportunities')}}">{{__("toggledropdown")['opportunities']}}</a>
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
        <div class="col-lg-10 offset-lg-1 text-center mb-5">
            <h4 class="mb-5">
                <b>{{__("contact-us_page")['contact_us']}}</b>
            </h4>
            <h4 class="mb-4">
                <b>
                    {{__("contact-us_page")['want_to']}}
                </b>
            </h4>
            <p class="text-secondary">
                {{__("contact-us_page")['p1']}}
            </p>
        </div>
    </div>
</section>

<section class="custom-container container-xl mb-5">
    <form action="">
        <div class="row">
            <div class="col-lg-5 offset-lg-1 mb-5">
                <div class="form-group">
                    <label for="exampleInputEmail1">
                        <b>
                            {{__("contact-us_page")['email']}} <span class="text-danger">*</span>
                        </b>
                    </label>
                    <input type="email"
                        class="form-control radius-0 border-top-0 border-left-0 border-right-0 input-no-ring" placeholder="Your Email">
                </div>
            </div>
            <div class="col-lg-6 mb-5">
                <div class="form-group">
                    <label for="exampleInputEmail1">
                        <b>
                            {{__("contact-us_page")['your_name']}} <span class="text-danger">*</span>
                        </b>
                    </label>
                    <input type="text"
                        class="form-control radius-0 border-top-0 border-left-0 border-right-0 input-no-ring" placeholder="Your Name">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-5 offset-lg-1 mb-5">
                <div class="form-group">
                    <label for="exampleInputEmail1">
                        <b>
                            {{__("contact-us_page")['your_organization']}}  <span class="text-danger">*</span>
                        </b>
                    </label>
                    <input type="text"
                        class="form-control radius-0 border-top-0 border-left-0 border-right-0 input-no-ring" placeholder="Name of your company">
                </div>
            </div>
            <div class="col-lg-6 mb-5">
                <div class="form-group">
                    <label for="exampleInputEmail1">
                        <b>
                            {{__("contact-us_page")['your_title']}} <span class="text-danger">*</span>
                        </b>
                    </label>
                    <input type="text"
                        class="form-control radius-0 border-top-0 border-left-0 border-right-0 input-no-ring" placeholder="Your Designation">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-10 offset-lg-1 mb-5">
                <div class="form-group">
                    <label for="exampleInputEmail1">
                        <b>
                            {{__("contact-us_page")['p2']}} <span class="text-danger">*</span>
                        </b>
                    </label>
                    <input type="text"
                        class="form-control radius-0 border-top-0 border-left-0 border-right-0 input-no-ring" placeholder="Your answer">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-10 offset-lg-1 mb-5">
                <div class="form-group">
                    <label for="exampleInputEmail1">
                        <b>
                            {{__("contact-us_page")['tell_us']}} <span
                                class="text-danger">*</span>
                        </b>
                    </label>
                    <input type="text"
                        class="form-control radius-0 border-top-0 border-left-0 border-right-0 input-no-ring" placeholder="Your answer">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-10 offset-lg-1 mb-5">
                <div class="form-group">
                    <label for="exampleInputEmail1">
                        <b>
                            {{__("contact-us_page")['what']}} <span class="text-danger">*</span>
                        </b>
                    </label>
                    <input type="text"
                        class="form-control radius-0 border-top-0 border-left-0 border-right-0 input-no-ring" placeholder="Your answer">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <button type="submit"
                    class="py-3 text-white btn bg-base-color learn-more-btn btn-no-ring d-block d-lg-inline">
                    <small class="mr-2">{{__("contact-us_page")['submit']}}</small>
                    <i class="text-white fa fa-send" aria-hidden="true"></i>
                </button>
            </div>
        </div>
    </form>
</section>

<section class="mb-5 py-5">
    <hr class="bg-secondary">
</section>

<section class="custom-container container-xl mb-5 text-secondary">
    <div class="row">
        <div class="col-12 col-lg-10 offset-lg-1">
            <div class="row mb-5">
                <div class="mb-3 col-6 col-lg-3 mb-lg-0">
                    <h6 class="text-base-color mb-4">
                        Contact #
                    </h6>
                    <div class="mb-3 d-flex">
                        <div class="mr-4 contact-logo">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                        </div>
                        <div class="contact-text">
                            632 Forest Road Bexley , Sydney, NSW, Australia 2216 - <b>HQ</b>
                        </div>
                    </div>
                    <div class="mb-3 d-flex">
                        <div class="mr-4 contact-logo">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                        </div>
                        <div class="contact-text">
                            1300 nucoin
                        </div>
                    </div>
                    <div class="mb-3 d-flex">
                        <div class="mr-4 contact-logo">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                        </div>
                        <div class="contact-text">
                            +61 418 688 812
                        </div>
                    </div>
                    <div class="mb-3 d-flex">
                        <div class="mr-4 contact-logo">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </div>
                        <div class="contact-text">
                            admin@nucoin.com.au
                        </div>
                    </div>
                </div>
                <div class="mb-3 col-6 col-lg-3 mb-lg-0">
                    <h6 class="text-base-color mb-4">
                        Contact #
                    </h6>
                    <div class="mb-3 d-flex">
                        <div class="mr-4 contact-logo">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                        </div>
                        <div class="contact-text">
                            9/A-1 Pratapgunj Opp. C. S. Patel Enclaves Vadodara, Gujarat – 390002, India
                        </div>
                    </div>
                    <div class="mb-3 d-flex">
                        <div class="mr-4 contact-logo">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                        </div>
                        <div class="contact-text">
                            (+91) 999 8526878
                        </div>
                    </div>
                    <div class="mb-3 d-flex">
                        <div class="mr-4 contact-logo">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </div>
                        <div class="contact-text">
                            admin@nucoin.com.au
                        </div>
                    </div>
                </div>
                <div class="mb-3 col-6 col-lg-3 mb-lg-0">
                    <h6 class="text-base-color mb-4">
                        Contact #
                    </h6>
                    <div class="mb-3 d-flex">
                        <div class="mr-4 contact-logo">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                        </div>
                        <div class="contact-text">
                            3rd Floor, Raidurgam Junction Hyderabad, Telangana – 500032, India
                        </div>
                    </div>
                    <div class="mb-3 d-flex">
                        <div class="mr-4 contact-logo">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                        </div>
                        <div class="contact-text">
                            (+91) 994 9670204
                        </div>
                    </div>
                    <div class="mb-3 d-flex">
                        <div class="mr-4 contact-logo">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </div>
                        <div class="contact-text">
                            admin@nucoin.com.au
                        </div>
                    </div>
                </div>
                <div class="mb-3 col-6 col-lg-3 mb-lg-0">
                    <h6 class="text-base-color mb-4">
                        Contact #
                    </h6>
                    <div class="mb-3 d-flex">
                        <div class="mr-4 contact-logo">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                        </div>
                        <div class="contact-text">
                            Unit No. 2H-05-256, Floor No. 5, Bldg No. 2, Plot No. 550-554, J&G, DMCC, Dubai, UAE
                        </div>
                    </div>
                    <div class="mb-3 d-flex">
                        <div class="mr-4 contact-logo">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                        </div>
                        <div class="contact-text">
                            (+971) 528 370635
                        </div>
                    </div>
                    <div class="mb-3 d-flex">
                        <div class="mr-4 contact-logo">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </div>
                        <div class="contact-text">
                            admin@nucoin.com.au
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-10 offset-lg-1">
            <div class="row mb-5">
                <div class="mb-3 col-6 col-lg-3 mb-lg-0">
                    <h6 class="text-base-color mb-4">
                        Contact #
                    </h6>
                    <div class="mb-3 d-flex">
                        <div class="mr-4 contact-logo">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                        </div>
                        <div class="contact-text">
                            30 Cecil St, #19-08 Prudential Tower, Singapore 049712
                        </div>
                    </div>
                    <div class="mb-3 d-flex">
                        <div class="mr-4 contact-logo">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                        </div>
                        <div class="contact-text">
                            (+65) 911 51760
                        </div>
                    </div>
                    <div class="mb-3 d-flex">
                        <div class="mr-4 contact-logo">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </div>
                        <div class="contact-text">
                            admin@nucoin.com.au
                        </div>
                    </div>
                </div>
                <div class="mb-3 col-6 col-lg-3 mb-lg-0">
                    <h6 class="text-base-color mb-4">
                        Contact #
                    </h6>
                    <div class="mb-3 d-flex">
                        <div class="mr-4 contact-logo">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                        </div>
                        <div class="contact-text">
                            Unit 11, Building 327, 30 ST, Arasat Alhindiya, Baghdad, Iraq
                        </div>
                    </div>
                    <div class="mb-3 d-flex">
                        <div class="mr-4 contact-logo">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                        </div>
                        <div class="contact-text">
                            (+964) 783 622 9800 <b>WhatsApp</b>
                        </div>
                    </div>
                    <div class="mb-3 d-flex">
                        <div class="mr-4 contact-logo">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </div>
                        <div class="contact-text">
                            admin@nucoin.com.au
                        </div>
                    </div>
                </div>
                <div class="mb-3 col-6 col-lg-3 mb-lg-0">
                    <h6 class="text-base-color mb-4">
                        Contact #
                    </h6>
                    <div class="mb-3 d-flex">
                        <div class="mr-4 contact-logo">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                        </div>
                        <div class="contact-text">
                            Harju maakond, Tallinn, Lasnamäe linnaosa, Väike-Paala tn 2, 11415, Estonia
                        </div>
                    </div>
                    <div class="mb-3 d-flex">
                        <div class="mr-4 contact-logo">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                        </div>
                        <div class="contact-text">
                            (+614) 343 15315
                        </div>
                    </div>
                    <div class="mb-3 d-flex">
                        <div class="mr-4 contact-logo">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </div>
                        <div class="contact-text">
                            admin@advagroup.com.au
                        </div>
                    </div>
                </div>
                <div class="mb-3 col-6 col-lg-3 mb-lg-0">
                    <h6 class="text-base-color mb-4">
                        Contact #
                    </h6>
                    <div class="mb-3 d-flex">
                        <div class="mr-4 contact-logo">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                        </div>
                        <div class="contact-text">
                            573 A, 1st floor airlines society, Lahore, Pakistan
                        </div>
                    </div>
                    <div class="mb-3 d-flex">
                        <div class="mr-4 contact-logo">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                        </div>
                        <div class="contact-text">
                            (+92) 423 2321827
                        </div>
                    </div>
                    <div class="mb-3 d-flex">
                        <div class="mr-4 contact-logo">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </div>
                        <div class="contact-text">
                            admin@nucoin.com.au
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-10 offset-lg-1">
            <div class="row">
                <div class="mb-3 col-6 col-lg-3 mb-lg-0">
                    <h6 class="text-base-color mb-4">
                        Contact #
                    </h6>
                    <div class="mb-3 d-flex">
                        <div class="mr-4 contact-logo">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                        </div>
                        <div class="contact-text">
                            مكتب رقم ١ كورنيش المزرعه بعد محمصه الرفاعي بنايه الخضري طابق الثاني
                        </div>
                    </div>
                    <div class="mb-3 d-flex">
                        <div class="mr-4 contact-logo">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                        </div>
                        <div class="contact-text">
                            (+96) 138 72758
                        </div>
                    </div>
                    <div class="mb-3 d-flex">
                        <div class="mr-4 contact-logo">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                        </div>
                        <div class="contact-text">
                            (+96) 181 735100
                        </div>
                    </div>
                    <div class="mb-3 d-flex">
                        <div class="mr-4 contact-logo">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </div>
                        <div class="contact-text">
                            admin@nucoin.com.au
                        </div>
                    </div>
                </div>
                <div class="mb-3 col-6 col-lg-3 mb-lg-0">
                    <h6 class="text-base-color mb-4">
                        Contact #
                    </h6>
                    <div class="mb-3 d-flex">
                        <div class="mr-4 contact-logo">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                        </div>
                        <div class="contact-text">
                            مكتب الروشه شارع اوستراليا طلعت الكارلتون بيناية اليمودي طابق الاول
                        </div>
                    </div>
                    <div class="mb-3 d-flex">
                        <div class="mr-4 contact-logo">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                        </div>
                        <div class="contact-text">
                            (+96) 138 72758
                        </div>
                    </div>
                    <div class="mb-3 d-flex">
                        <div class="mr-4 contact-logo">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                        </div>
                        <div class="contact-text">
                            (+96) 181 735100
                        </div>
                    </div>
                    <div class="mb-3 d-flex">
                        <div class="mr-4 contact-logo">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </div>
                        <div class="contact-text">
                            admin@nucoin.com.au
                        </div>
                    </div>
                </div>
                <div class="mb-3 col-6 col-lg-3 mb-lg-0">
                    <h6 class="text-base-color mb-4">
                        Contact #
                    </h6>
                    <div class="mb-3 d-flex">
                        <div class="mr-4 contact-logo">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                        </div>
                        <div class="contact-text">
                            مكتب ٣ عين الرماني شارع العريض منطقه بنك الريف بنايه السنتر جنب الدفاع المدني
                        </div>
                    </div>
                    <div class="mb-3 d-flex">
                        <div class="mr-4 contact-logo">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                        </div>
                        <div class="contact-text">
                            (+96) 138 72758
                        </div>
                    </div>
                    <div class="mb-3 d-flex">
                        <div class="mr-4 contact-logo">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                        </div>
                        <div class="contact-text">
                            (+96) 181 735100
                        </div>
                    </div>
                    <div class="mb-3 d-flex">
                        <div class="mr-4 contact-logo">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </div>
                        <div class="contact-text">
                            admin@nucoin.com.au
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
