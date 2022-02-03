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
