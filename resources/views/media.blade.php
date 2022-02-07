@extends('layout')
@section('content')

    <div id="media"  @if(\App\Language::isRTL()) dir="rtl" @endif>
        <div class="mb-5 shadow" id="hero-container">
            <header id="header" class="custom-container container-xl position-relative">

                @include('nav')
            </header>
        </div>

        <section class="custom-container container-xl pt-5">
            <div class="row">
                <div class="col-12 text-center">
                    <h4 class="mb-3">
                        <b>{{__("media")['h4']}}</b>
                    </h4>
                </div>
            </div>
        </section>

        <section class="custom-container container-xl py-5">
            <div class="row">
                <div class="col-lg-6 pr-lg-5 pr-3 d-flex align-items-center">
                    <div>
                        <div class="d-flex align-items-center flex-column flex-lg-row mb-4">
                            <h5>
                                <b>{{__("media")['h5']}}</b>
                            </h5>
                        </div>
                        <div class="text-secondary">
                            <p>
                                {{__("media")['p1']}}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 pl-lg-5 pl-3 d-flex align-items-center">
                    <iframe
                        src="https://www.youtube.com/embed/jiAf-YSd96E">
                    </iframe>
                </div>
            </div>
        </section>

        <section class="custom-container container-xl py-5">
            <div class="row">
                <div class="col-lg-6 pr-lg-5 pr-3 d-flex align-items-center order-lg-1 order-2">
                    <iframe
                        src="https://www.youtube.com/embed/d7uKY68-tgU">
                    </iframe>
                </div>
                <div class="col-lg-6 pl-lg-5 pl-3 d-flex align-items-center order-lg-2 order-1">
                    <div>
                        <div class="d-flex align-items-center flex-column flex-lg-row mb-4">
                            <h5>
                                <b>{{__("media")['h5a']}}</b>
                            </h5>
                        </div>
                        <div class="text-secondary">
                            <p>
                                {{__("media")['p2']}}
                            </p>
                            <p>
                                {{__("media")['p3']}}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

@endsection
