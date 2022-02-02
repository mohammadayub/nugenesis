@extends('layout')
@section('content')
    <div id="language">
        <div class="mb-5 shadow" id="hero-container">
            <header id="header" class="custom-container container-xl position-relative">
                @include('nav')
            </header>
        </div>

        <section class="custom-container container-xl pt-5">
            <div class="row">
                <div class="col-12 text-left mb-5">
                    <h4 class="mb-3">
                        <b><h4>LANGUAGE TRANSLATIONS</h4></b>
                    </h4>
                    <b><h5>Select Language</h5></b>
                    <ol class="font-weight-bold">
                        <li>
                        <a href="{{url(app()->getLocale(),'getting-involved')}}?#programs">English </a><i class="fi fi-au"></i>
                        </li>
                        <li >
                            <a href="{{url(app()->getLocale()==('ar'),'ar/getting-involved')}}?#programs">Arabic </a><i class="fi fi-sa"></i>
                        </li>

                        <li>
                            <a href="{{url(app()->getLocale()==('de'),'de/getting-involved')}}?#programs">German </a><i class="fi fi-de"></i>
                        </li>

                        <li>
                            <a href="{{url(app()->getLocale()==('kr'),'kr/getting-involved')}}?#programs">Korean </a><i class="fi fi-jp"></i>
                        </li>

                        <li>
                            <a href="{{url(app()->getLocale()==('jp'),'jp/getting-involved')}}?#programs">Japense </a><i class="fi fi-kr"></i>
                        </li>

                    </ol>
                </div>
            </div>
        </section>
</div>
@endsection
