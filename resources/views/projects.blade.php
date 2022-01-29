@extends('layout')
@section('content')
<div class="mb-5 shadow" id="hero-container">
		<header id="header" class="custom-container container-xl position-relative">
            @include('nav')
		</header>
    </div>
    <section class="custom-container container-xl pt-5">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h2 class="mb-3">
                    <b>{{__("the_nugenesis_flagship")['h5']}}</b>
                </h2>
            </div>
        </div>
    </section>

    <section class="custom-container container-xl" id="the_nugenesis_flagship">
        <div class="row mb-5">
            <div class="col-8">
                <h3 class="mb-3 text-center">
                    <b>{{__("the_nugenesis_flagship")['p1']}}</b>
                </h3>
                <div class="text-justify text-secondary">
                    <p>
                        {{__("the_nugenesis_flagship")['p2']}}
                    </p>
                    <p>
                        {{__("the_nugenesis_flagship")['p3']}}
                    </p>
                    <p>
                        {{__("the_nugenesis_flagship")['p4']}}
                    </p>
                    <p>
                        {{__("the_nugenesis_flagship")['p5']}}
                    </p>
                    <p>
                        {{__("the_nugenesis_flagship")['p6']}}
                    </p>
                    <p>
                        {{__("the_nugenesis_flagship")['p7']}}
                    </p>
                    <p>
                        {{__("the_nugenesis_flagship")['p8']}}
                    </p>
                </div>
          
            </div>
            <div class="col-md-4">
                <video autoplay muted loop class="about-us-video">
                        <source src="../images/about-us.mp4" type="video/mp4">
                </video>
            </div>
        </div>

        <div class="mb-5 row">
            <div class="col-12">
                <h5 class="text-center">
                    <b>{{__("bitcoin_nu")['h5']}}</b>
                </h5>
                <div class="text-secondary text-justify">
                    <p>
                        {{__("bitcoin_nu")['p1']}}
                    </p>

                    <p>
                        {{__("bitcoin_nu")['p2']}}
                    </p>

                    <p>
                        {{__("bitcoin_nu")['p3']}}
                    </p>
                    <p>
                        {{__("bitcoin_nu")['p4']}}
                    </p>
                    <p>
                        {{__("bitcoin_nu")['p5']}}
                    </p>
                </div>
            </div>
        </div>

        <div class="row mb-5">
            <div class="col-12">
                <h5 class="mb-3 text-center">
                    <b>{{__("bitcoin_green")['h5']}}</b>
                </h5>
                <div class="text-secondary text-justify">
                    <p>
                        {{__("bitcoin_green")['p1']}}
                    </p>

                    <p>
                        {{__("bitcoin_green")['p2']}}
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="custom-container container-xl" id="troy_gold_backed_token">
        <div class="row mb-5">
            <div class="col-12">
                <h3 class="mb-3 text-center">
                    <b>{{__("troy_gold_backed_token")['h3']}}</b>
                </h3>
                <div class="text-justify">
                    <p class="text-secondary">
                        {{__("troy_gold_backed_token")['p1']}}
                    </p>
                    <p class="text-secondary">
                        {{__("troy_gold_backed_token")['p2']}}
                    </p>
                    <p class="text-secondary">
                        {{__("troy_gold_backed_token")['p3']}}
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="custom-container container-xl" id="just_social">
        <div class="row mb-5">
            <div class="col-12">
                <h3 class="mb-3 text-center">
                    <b>{{__("just_social")['h3']}}</b>
                </h3>
                <div class="text-secondary text-justify">
                    <p>
                        {{__("just_social")['p1']}}
                    </p>
                    <p>
                        {{__("just_social")['p2']}}
                    </p>
                    <p>
                        {{__("just_social")['p3']}}
                    </p>
                    <p>
                        {{__("just_social")['p4']}}
                    </p>
                    <p>
                        {{__("just_social")['p5']}}
                    </p>
                    <p>
                        {{__("just_social")['p6']}}
                    </p>
                    <p>
                        {{__("just_social")['p7']}}
                    </p>
                </div>
            </div>
        </div>

        <div class="row mb-5">
            <div class="col-12">
                <h5 class="mb-3 text-center">
                    <b>{{__("just_social")['h5']}}</b>
                </h5>
                <div class="text-secondary text-justify">
                    <p>
                        {{__("just_social")['p8']}}
                    </p>

                    <p>
                        {{__("just_social")['p9']}}
                    </p>

                    <p>
                        {{__("just_social")['p10']}}
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="custom-container container-xl" id="dnc">
        <div class="row mb-5">
            <div class="col-12">
                <h3 class="mb-3 text-center">
                    <b>{{__("dnc")['h3']}}</b>
                </h3>
                <div class="text-secondary text-justify">
                    <p>
                        {{__("dnc")['p1']}}
                    </p>
                    <p>
                        {{__("dnc")['p2']}}
                    </p>
                    <p>
                        {{__("dnc")['p3']}}
                    </p>
                    <p>
                        {{__("dnc")['p4']}}
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="custom-container container-xl" id="nft_city">
        <div class="row mb-5">
            <div class="col-12">
                <h3 class="mb-3 text-center">
                    <b>{{__("nft_city")['h3']}}</b>
                </h3>
                <div class="text-secondary text-justify"></div>
                <p>
                    {{__("nft_city")['p1']}}
                </p>
                <p>
                    {{__("nft_city")['p2']}}
                </p>
            </div>
        </div>

        <div class="row mb-5">
            <div class="col-12">
                <h5 class="mb-3 text-center">
                    <b>{{__("themetarealm")['h3']}}</b>
                </h5>
                <div class="text-secondary text-justify">
                    <p>
                        {{__("themetarealm")['p1']}}
                    </p>

                    <p>
                        {{__("themetarealm")['p2']}}
                    </p>

                    <p>
                        {{__("themetarealm")['p3']}}
                    </p>
                    <p>
                        {{__("themetarealm")['p4']}}
                    </p>
                </div>
            </div>
        </div>

        <div class="row mb-5">
            <div class="col-12">
                <h5 class="mb-3 text-center">
                    <b>{{__("nextgeneration")['h5']}}</b>
                </h5>
                <div class="text-secondary text-justify">
                    <p>
                        {{__("nextgeneration")['p1']}}
                    </p>

                    <p>
                        {{__("nextgeneration")['p2']}}
                    </p>
                    <ol type="a">
                        <li>
                            {{__("nextgeneration")['li']}}
                        </li>
                        <li>
                            {{__("nextgeneration")['lia']}}
                        </li>
                        <li>
                            {{__("nextgeneration")['lib']}}
                        </li>
                        <li>
                            {{__("nextgeneration")['lic']}}
                        </li>
                    </ol>
                    <p>
                        {{__("nextgeneration")['lid']}}
                    </p>
                </div>
            </div>
        </div>

        <div class="row mb-5">
            <div class="col-12">
                <h5 class="mb-3 text-center">
                        <b>{{__("nextgeneration")['h5a']}}</b>
                    </h5>
                <div class="text-secondary text-justify">
                    <p>
                        {{__("nextgeneration")['p3']}}
                    </p>

                    <p>
                        {{__("nextgeneration")['p4']}}
                    </p>

                    <p>
                        {{__("nextgeneration")['p5']}}
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="custom-container container-xl" id="ledgerx">
        <div class="row mb-5">
            <div class="col-12">
                <h3 class="mb-3 text-center">
                    <b>{{__("ledgerx_p")['h3']}}</b>
                </h3>
                <div class="text-left text-secondary">
                    <p>
                        {{__("ledgerx_p")['p1']}}
                    </p>
                    <p>
                        {{__("ledgerx_p")['p2']}}
                    </p>
                    <p>
                        {{__("ledgerx_p")['p3']}}
                    </p>
                    <p>
                        {{__("ledgerx_p")['p4']}}[<a href="#">{{__("ledgerx_p")['a']}}</a>]
                    </p>
                    <p>
                        {{__("ledgerx_p")['p5']}}
                    </p>
                    <p>
                        {{__("ledgerx_p")['p6']}}
                    </p>
                    <p>
                        {{__("ledgerx_p")['p7']}}
                    </p>
                    <ol type="a">
                        <li>
                            {{__("ledgerx_p")['li']}}
                        </li>
                        <li>
                            {{__("ledgerx_p")['lia']}}
                        </li>
                        <li>
                            {{__("ledgerx_p")['lib']}}
                        </li>
                    </ol>
                    <p>
                        {{__("ledgerx_p")['p8']}}
                    </p>
                    <p>
                        {{__("ledgerx_p")['p9']}}
                    </p>
                    <ol type="a">
                        <li>
                            {{__("ledgerx_p")['lic']}}
                        </li>
                        <li>
                            {{__("ledgerx_p")['lid']}}
                        </li>
                    </ol>
                    <p>
                        {{__("ledgerx_p")['p10']}}
                    </p>
                    <p>
                        T{{__("ledgerx_p")['p11']}}
                    </p>
                    <p>
                        {{__("ledgerx_p")['p12']}}
                    </p>
                </div>
            </div>
        </div>

        <div class="py-5">
            <div class="row">
                <div class="col-lg-6 pr-lg-5 pr-3 d-flex align-items-center">
                    <div class="text-secondary">
                        <p>
                            {{__("ledgerx_p")['p13']}}
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 pl-lg-5 pl-3 d-flex align-items-center">
                    <img src="../images/Bitcoin NU image.png" alt="" class="img-fluid">
                </div>
            </div>
        </div>

        <div class="py-5">
            <div class="row">
                <div class="col-lg-6 pr-lg-5 pr-3 d-flex align-items-center order-lg-1 order-2">
                    <img src="../images/Nucoin Image.png" alt="" class="img-fluid">
                </div>
                <div class="col-lg-6 pl-lg-5 pl-3 d-flex align-items-center order-lg-2 order-1">
                    <div class="text-secondary">
                        <p>
                            {{__("ledgerx_p")['p14']}}
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="py-5">
            <div class="row">
                <div class="col-lg-6 pr-lg-5 pr-3 d-flex align-items-center">
                    <div class="text-secondary">
                        <p>
                            {{__("ledgerx_p")['p15']}}
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 pl-lg-5 pl-3 d-flex align-items-center">
                    <img src="../images/Ledgerx Image.png" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </section>
@endsection
