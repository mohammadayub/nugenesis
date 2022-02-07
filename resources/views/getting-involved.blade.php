@extends('layout')
@section('content')
	<div id="getting_involved">
	    <div class="mb-5 position-relative navigation z-index-2">
	        <header id="header" class="custom-container container-xl position-relative">
	            @include('nav')
	        </header>
	    </div>

	    <section id="hero" class="py-5 position-relative" @if(\App\Language::isRTL()) dir="rtl" @endif>
	        <div class="hero-bg position-absolute z-index-1"></div>
	        <div class="custom-container container-xl py-5 z-index-2 position-relative">
	            <div class="row py-md-5 py-0">
	                <div class="col-md-12 py-md-5 py-0 mt-5">
	                    <h1 class="mb-4 hero-text text-white">
	                        {{__("hero")['h1']}} <br>
                            {{__("hero")['h1a']}}

	                    </h1>
	                    <h5 class="hero-sub-text">
                            {{__("hero")['h5']}}  <br>
	                        {{__("hero")['h5a']}}
	                    </h5>
	                </div>
	            </div>
	        </div>
	    </section>

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
	                        {{__("hero")['h2']}}
	                    </h2>
	                    <h5 class="header-sub-text">
	                        {{__("hero")['h5b']}}
	                    </h5>
	                </div>
	            </div>
	            <div class="row">
	                <div class="col-lg-6">
	                    <div class="card bg-transparent position-relative">
	                        <div class="blur-bg position-absolute z-index-1"></div>
	                        <div class="card-body p-5 text-white z-index-2">
	                            <p>
	                                {{__("hero")['p1']}}
	                            </p>
	                            <p>
                                    {{__("hero")['p2']}}
	                            </p>
	                            <p>
                                    {{__("hero")['p3']}}
	                            </p>
	                            <p>
	                                {{__("hero")['p4']}}
	                            </p>
	                            <p>
                                    {{__("hero")['p5']}}
	                            </p>
	                        </div>
	                    </div>
	                </div>
	                <div class="col-lg-6">
	                    <div class="navis-video pt-lg-0 pt-5">
	                        <video autoplay muted loop>
	                            <source src="../images/navis-dark.mp4" type="video/mp4">
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
                            {{__("programs")['h1']}}
	                    </h1>
	                    <h5 class="header-sub-text">
	                        <p>
	                            {{__("programs")['p1']}}
	                        </p>
	                        <p>
	                            {{__("programs")['p3']}}
	                        </p>
	                    </h5>
	                </div>
	            </div>
	            <div class="row pt-5" id="program-selection">
	                <div class="col-lg-4 col-md-6 mb-30px">
	                    <div class="card rounded-lg program" id="ambassador_program" data-value="ambassador_program">
	                        <div class="card-body py-4">
	                            <div class="text-center mb-3">
	                                <img src="../images/Smart-Contract.jpg" alt="" class="rounded-circle" width="50"
	                                    height="50">
	                            </div>
	                            <div class="header-sub-text text-center mb-3">
	                                {{__("program-selection")['div']}}
	                            </div>
	                            <div class="text-white">
	                                <ol class="pl-4">
	                                    <li>
	                                        <a href="../documents/{{__("trans_link")['ambassador_program_nugenesis']}}"
	                                            target="_blank" class="text-white">{{__("program-selection")['a']}}</a>
	                                    </li>
	                                    <li>
	                                        <a href="../documents/{{__("trans_link")['ambassador_program_deed']}}"
	                                            target="_blank" class="text-white">{{__("program-selection")['aone']}}</a>
	                                    </li>
	                                    <li>
	                                        <a href="../documents/{{__("trans_link")['ambassador_program_performance']}}"
	                                            target="_blank" class="text-white">{{__("program-selection")['atwo']}}</a>
	                                    </li>
	                                    <li>
	                                        <a href="../documents/{{__("trans_link")['ambassador_program_terms_condition']}}"
	                                            target="_blank" class="text-white">{{__("program-selection")['athree']}}</a>
	                                    </li>
	                                    <li>
	                                        <a href="../documents/{{__("trans_link")['ambassador_program_online_application']}}"
	                                            target="_blank" class="text-white">{{__("program-selection")['afour']}}</a>
	                                    </li>
	                                </ol>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	                <div class="col-lg-4 col-md-6 mb-30px">
	                    <div class="card rounded-lg program" id="diplomats_program">
	                        <div class="card-body py-4">
	                            <div class="text-center mb-3">
	                                <img src="../images/Smart-Contract.jpg" alt="" class="rounded-circle" width="50"
	                                    height="50">
	                            </div>
	                            <div class="header-sub-text text-center mb-3">
	                                {{__("diplomats_program")['div']}}
	                            </div>
	                            <div class="text-white">
	                                <ol class="pl-4">
	                                    <li>
	                                        <a href="../documents/{{__("trans_link")['diplomats_program_nugenesis']}}"
	                                            target="_blank" class="text-white"> {{__("diplomats_program")['a']}}</a>
	                                    </li>
	                                    <li>
	                                        <a href="../documents/{{__("trans_link")['diplomats_program_deed']}}"
	                                            target="_blank" class="text-white">{{__("diplomats_program")['aone']}}</a>
	                                    </li>
	                                    <li>
	                                        <a href="../documents/{{__("trans_link")['diplomats_program_performance']}}"
	                                            target="_blank" class="text-white">{{__("diplomats_program")['atwo']}}</a>
	                                    </li>
	                                    <li>
	                                        <a href="../documents/{{__("trans_link")['diplomats_program_terms_condition']}}"
	                                            target="_blank" class="text-white">{{__("program-selection")['athree']}}</a>
	                                    </li>
	                                    <li>
	                                        <a href="../documents/{{__("trans_link")['diplomats_program_online_application']}}"
	                                            target="_blank" class="text-white">{{__("program-selection")['afour']}}</a>
	                                    </li>
	                                </ol>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	                <div class="col-lg-4 col-md-6 mb-30px">
	                    <div class="card rounded-lg program" id="senators_program">
	                        <div class="card-body py-4">
	                            <div class="text-center mb-3">
	                                <img src="../images/Smart-Contract.jpg" alt="" class="rounded-circle" width="50"
	                                    height="50">
	                            </div>
	                            <div class="header-sub-text text-center mb-3">
	                                {{__("senators_program")['div']}}
	                            </div>
	                            <div class="text-white">
	                                <ol class="pl-4">
	                                    <li>
	                                        <a href="../documents/{{__("trans_link")['sanators_program_nugenesis']}}"
	                                            target="_blank" class="text-white">{{__("senators_program")['a']}}</a>
	                                    </li>
	                                    <li>
	                                        <a href="../documents/{{__("trans_link")['sanators_program_deed']}}"
	                                            target="_blank" class="text-white">{{__("senators_program")['aone']}}</a>
	                                    </li>
	                                    <li>
	                                        <a href="../documents/{{__("trans_link")['sanators_program_performance']}}"
	                                            target="_blank" class="text-white">{{__("senators_program")['atwo']}}</a>
	                                    </li>
	                                    <li>
	                                        <a href="../documents/{{__("trans_link")['sanators_program_terms_condition']}}"
	                                            target="_blank" class="text-white">{{__("program-selection")['athree']}}</a>
	                                    </li>
	                                    <li>
	                                        <a href="../documents/{{__("trans_link")['sanators_program_online_application']}}"
	                                            target="_blank" class="text-white">{{__("program-selection")['afour']}}</a>
	                                    </li>
	                                </ol>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	                <div class="col-lg-4 col-md-6 mb-30px">
	                    <div class="card rounded-lg program" id="market_consuls_program">
	                        <div class="card-body py-4">
	                            <div class="text-center mb-3">
	                                <img src="../images/Smart-Contract.jpg" alt="" class="rounded-circle" width="50"
	                                    height="50">
	                            </div>
	                            <div class="header-sub-text text-center mb-3">
	                                {{__("market_consuls_program")['div']}}
	                            </div>
	                            <div class="text-white">
	                                <ol class="pl-4">
	                                    <li>
	                                        <a href="../documents/{{__("trans_link")['market_consuls_program_nugenesis']}}"
	                                            target="_blank" class="text-white">{{__("market_consuls_program")['a']}}</a>
	                                    </li>
	                                    <li>
	                                        <a href="../documents/{{__("trans_link")['market_consuls_program_deed']}}"
	                                            target="_blank" class="text-white">{{__("market_consuls_program")['aone']}}</a>
	                                    </li>
	                                    <li>
	                                        <a href="../documents/{{__("trans_link")['market_consuls_program_performance']}}"
	                                            target="_blank" class="text-white">{{__("market_consuls_program")['atwo']}}</a>
	                                    </li>
	                                    <li>
	                                        <a href="../documents/{{__("trans_link")['market_consuls_program_terms_condition']}}"
	                                            target="_blank" class="text-white">{{__("program-selection")['athree']}}</a>
	                                    </li>
	                                    <li>
	                                        <a href="./documents/{{__("trans_link")['market_consuls_program_online_application']}}"
	                                            target="_blank" class="text-white">{{__("program-selection")['afour']}}</a>
	                                    </li>
	                                </ol>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	                <div class="col-lg-4 col-md-6 mb-30px">
	                    <div class="card rounded-lg program" id="network_concordat_program">
	                        <div class="card-body py-4">
	                            <div class="text-center mb-3">
	                                <img src="../images/Smart-Contract.jpg" alt="" class="rounded-circle" width="50"
	                                    height="50">
	                            </div>
	                            <div class="header-sub-text text-center mb-3">
	                                {{__("network_concordat_program")['div']}}
	                            </div>
	                            <div class="text-white">
	                                <ol class="pl-4">
	                                    <li>
	                                        <a href="/documents/{{__('trans_link')['network_concordat_program_nugenesis']}}"
	                                            target="_blank" class="text-white">{{__("network_concordat_program")['a']}}</a>
	                                    </li>
	                                    <li>
	                                        <a href="/documents/{{__('trans_link')['network_concordat_program_deed']}}"
	                                            target="_blank" class="text-white">{{__("network_concordat_program")['aone']}}</a>
	                                    </li>
	                                    <li>
	                                        <a href="/documents/{{__('trans_link')['network_concordat_program_performance']}}"
	                                            target="_blank" class="text-white">{{__("network_concordat_program")['atwo']}}</a>
	                                    </li>
	                                    <li>
	                                        <a href="/documents/{{__('trans_link')['network_concordat_program_terms_condition']}}"
	                                            target="_blank" class="text-white">{{__("program-selection")['athree']}}</a>
	                                    </li>
	                                    <li>
	                                        <a href="/documents/{{__('trans_link')['network_concordat_program_online_application']}}"
	                                            target="_blank" class="text-white">{{__("program-selection")['afour']}}</a>
	                                    </li>
	                                </ol>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	                <div class="col-lg-4 col-md-6 mb-30px">
	                    <div class="card rounded-lg program" id="get_in_touch">
	                        <div class="card-body py-4">
	                            <ul class="pl-2">
	                                <li class="mb-3">
	                                    <a href="{{url(app()->getLocale(),'contact-us')}}" class="header-sub-text">{{__("get_in_touch")['a']}}</a>
	                                </li>
	                                <li class="mb-3">
	                                    <a href="{{url(app()->getLocale(),'contact-us')}}" class="header-sub-text">{{__("get_in_touch")['aone']}}</a>
	                                </li>
	                                <li class="mb-3">
	                                    <a href="{{url(app()->getLocale(),'contact-us')}}" class="header-sub-text">{{__("get_in_touch")['atwo']}}</a>
	                                </li>
	                                <li class="mb-3">
	                                    <a href="{{url(app()->getLocale(),'contact-us')}}" class="header-sub-text">{{__("get_in_touch")['athree']}}</a>
	                                </li>
	                                <li class="mb-3">
	                                    <a href="{{url(app()->getLocale(),'contact-us')}}" class="header-sub-text">{{__("get_in_touch")['afour']}}</a>
	                                </li>
	                            </ul>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </section>


	</div>
@endsection
