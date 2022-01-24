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
                <h4 class="mb-3">
                    <b>{{__("industries")['h4']}}</b>
                </h4>
                <p class="text-secondary">
                    {{__("industries")['p1']}}
                </p>
            </div>
        </div>
    </section>

    <section id="bitcoin" class="custom-container container-xl py-5">
        <div class="row">
            <div class="col-lg-6 pr-lg-5 pr-3 d-flex align-items-center">
                <div>
                    <div class="d-flex align-items-center flex-column flex-lg-row mb-4">
                        <img src="./images/bitcoin NU.png" alt="" width="80" height="80" class="mr-lg-3 mr-0">
                        <h5>
                            <b>{{__("bitcoin")['h5']}}</b>
                        </h5>
                    </div>
                    <div class="text-secondary">
                        <p>
                            {{__("bitcoin")['p1']}}
                        </p>

                        <p>
                            {{__("bitcoin")['p2']}}
                        </p>

                        <p>
                            {{__("bitcoin")['p3']}}
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 pl-lg-5 pl-3 d-flex align-items-center">
                <img src="./images/Bitcoin NU image.png" alt="" class="img-fluid">
            </div>
        </div>
    </section>

    <section id="nucoin" class="custom-container container-xl py-5">
        <div class="row">
            <div class="col-lg-6 pr-lg-5 pr-3 d-flex align-items-center order-lg-1 order-2">
                <img src="./images/Nucoin Image.png" alt="" class="img-fluid">
            </div>
            <div class="col-lg-6 pl-lg-5 pl-3 d-flex align-items-center order-lg-2 order-1">
                <div>
                    <div class="d-flex align-items-center flex-column flex-lg-row mb-4">
                        <img src="./images/Nucoin.png" alt="" width="80" height="80" class="mr-lg-3 mr-0">
                        <h5>
                            <b>{{__("nucoin")['h5']}}</b>
                        </h5>
                    </div>
                    <div class="text-secondary">
                        <p>
                            {{__("nucoin")['p1']}}
                        </p>

                        <p>
                            T{{__("nucoin")['p2']}}
                        </p>

                        <p>
                            {{__("nucoin")['p3']}}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="ledgerx" class="custom-container container-xl py-5">
        <div class="row">
            <div class="col-lg-6 pr-lg-5 pr-3 d-flex align-items-center">
                <div>
                    <div class="d-flex align-items-center flex-column flex-lg-row mb-4">
                        <img src="./images/Ledgerx.png" alt="" width="80" height="80" class="mr-lg-3 mr-0">
                        <h5>
                            <b>{{__("ledgerx")['h5']}}</b>
                        </h5>
                    </div>
                    <div class="text-secondary">
                        <p>
                            {{__("ledgerx")['p1']}}
                        </p>

                        <p>
                            {{__("ledgerx")['p2']}}
                        </p>

                        <p>
                            {{__("ledgerx")['p3']}}
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 pl-lg-5 pl-3 d-flex align-items-center">
                <img src="./images/Ledgerx Image.png" alt="" class="img-fluid">
            </div>
        </div>
    </section>
@endsection
