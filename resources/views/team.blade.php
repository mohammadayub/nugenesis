@extends('layout')
@section('content')
    <div id="team">
        <div class="mb-5 shadow" id="hero-container">
            <header id="header" class="custom-container container-xl position-relative">
                @include('nav')
            </header>
        </div>

        <section class="custom-container container-xl pt-5">
            <div class="row">
                <div class="col-12 text-center mb-5">
                    <h4 class="mb-3">
                        <b>{{__("team")['h4']}}</b>
                    </h4>
                </div>
            </div>
        </section>

        <section class="custom-container container-xl py-5">
            <div class="row">
                <div class="col-lg-6 pl-lg-5 pl-3 d-flex align-items-center justify-content-center mb-5">
                    <div class="row member">
                        <div class="col-lg-6 mb-3 mb-lg-0">
                            <img src="../images/member-1.png" alt="" class="img-fluid w-100">
                        </div>
                        <div class="col-lg-6 d-flex align-items-center">
                            <div class="text-lg-left text-center w-100">
                                <a href="javascript:void(0)" class="text-dark">
                                    <h5>
                                        {{__("team")['h5']}}
                                    </h5>
                                </a>
                                <small class="text-secondary">
                                    {{__("team")['small']}}
                                </small>
                                <hr class="ml-lg-0">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 pr-lg-5 pr-3 d-flex align-items-center mb-5">
                    <div class="row member">
                        <div class="col-lg-6 mb-3 mb-lg-0">
                            <img src="../images/member-2.png" alt="" class="img-fluid w-100">
                        </div>
                        <div class="col-lg-6 d-flex align-items-center">
                            <div class="text-lg-left text-center w-100">
                                <a href="javascript:void(0)" class="text-dark">
                                    <h5>
                                        {{__("team")['h5a']}}
                                    </h5>
                                </a>
                                <small class="text-secondary">
                                    {{__("team")['smallone']}}
                                </small>
                                <hr class="ml-lg-0">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6 pl-lg-5 pl-3 d-flex align-items-center mb-5">
                    <div class="row member">
                        <div class="col-lg-6 mb-3 mb-lg-0">
                            <img src="../images/member-3.png" alt="" class="img-fluid w-100">
                        </div>
                        <div class="col-lg-6 d-flex align-items-center">
                            <div class="text-lg-left text-center w-100">
                                <a href="javascript:void(0)" class="text-dark">
                                    <h5>
                                        {{__("team")['h5b']}}
                                    </h5>
                                </a>
                                <small class="text-secondary">
                                    {{__("team")['smalltwo']}}
                                </small>
                                <hr class="ml-lg-0">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 pr-lg-5 pr-3 d-flex align-items-center mb-5">
                    <div class="row member">
                        <div class="col-lg-6 mb-3 mb-lg-0">
                            <img src="../images/member-4.png" alt="" class="img-fluid w-100">
                        </div>
                        <div class="col-lg-6 d-flex align-items-center">
                            <div class="text-lg-left text-center w-100">
                                <a href="javascript:void(0)" class="text-dark">
                                    <h5>
                                        {{__("team")['h5c']}}
                                    </h5>
                                </a>
                                <small class="text-secondary">
                                    {{__("team")['smallthree']}}
                                </small>
                                <hr class="ml-lg-0">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6 pl-lg-5 pl-3 d-flex align-items-center mb-5">
                    <div class="row member">
                        <div class="col-lg-6 mb-3 mb-lg-0">
                            <img src="../images/member-1.png" alt="" class="img-fluid w-100">
                        </div>
                        <div class="col-lg-6 d-flex align-items-center">
                            <div class="text-lg-left text-center w-100">
                                <a href="javascript:void(0)" class="text-dark">
                                    <h5>
                                        {{__("team")['h5d']}}
                                    </h5>
                                </a>
                                <small class="text-secondary">
                                    {{__("team")['smallfour']}}
                                </small>
                                <hr class="ml-lg-0">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 pr-lg-5 pr-3 d-flex align-items-center mb-5">
                    <div class="row member">
                        <div class="col-lg-6 mb-3 mb-lg-0">
                            <img src="../images/member-2.png" alt="" class="img-fluid w-100">
                        </div>
                        <div class="col-lg-6 d-flex align-items-center">
                            <div class="text-lg-left text-center w-100">
                                <a href="javascript:void(0)" class="text-dark">
                                    <h5>
                                        {{__("team")['h5e']}}
                                    </h5>
                                </a>
                                <small class="text-secondary">
                                    {{__("team")['smallfive']}}
                                </small>
                                <hr class="ml-lg-0">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6 pl-lg-5 pl-3 d-flex align-items-center mb-5">
                    <div class="row member">
                        <div class="col-lg-6 mb-3 mb-lg-0">
                            <img src="../images/member-3.png" alt="" class="img-fluid w-100">
                        </div>
                        <div class="col-lg-6 d-flex align-items-center">
                            <div class="text-lg-left text-center w-100">
                                <a href="javascript:void(0)" class="text-dark">
                                    <h5>
                                        {{__("team")['h5f']}}
                                    </h5>
                                </a>
                                <small class="text-secondary">
                                    {{__("team")['smallsix']}}
                                </small>
                                <hr class="ml-lg-0">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 pr-lg-5 pr-3 d-flex align-items-center mb-5">
                    <div class="row member">
                        <div class="col-lg-6 mb-3 mb-lg-0">
                            <img src="../images/member-4.png" alt="" class="img-fluid w-100">
                        </div>
                        <div class="col-lg-6 d-flex align-items-center">
                            <div class="text-lg-left text-center w-100">
                                <a href="javascript:void(0)" class="text-dark">
                                    <h5>
                                        {{__("team")['h5g']}}
                                    </h5>
                                </a>
                                <small class="text-secondary">
                                    {{__("team")['smallseven']}}
                                </small>
                                <hr class="ml-lg-0">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6 pl-lg-5 pl-3 d-flex align-items-center mb-5">
                    <div class="row member">
                        <div class="col-lg-6 mb-3 mb-lg-0">
                            <img src="../images/member-1.png" alt="" class="img-fluid w-100">
                        </div>
                        <div class="col-lg-6 d-flex align-items-center">
                            <div class="text-lg-left text-center w-100">
                                <a href="javascript:void(0)" class="text-dark">
                                    <h5>
                                        {{__("team")['h5h']}}
                                    </h5>
                                </a>
                                <small class="text-secondary">
                                    {{__("team")['smalleight']}}
                                </small>
                                <hr class="ml-lg-0">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 pr-lg-5 pr-3 d-flex align-items-center mb-5">
                    <div class="row member">
                        <div class="col-lg-6 mb-3 mb-lg-0">
                            <img src="../images/member-2.png" alt="" class="img-fluid w-100">
                        </div>
                        <div class="col-lg-6 d-flex align-items-center">
                            <div class="text-lg-left text-center w-100">
                                <a href="javascript:void(0)" class="text-dark">
                                    <h5>
                                        {{__("team")['h5i']}}
                                    </h5>
                                </a>
                                <small class="text-secondary">
                                    {{__("team")['smallnine']}}
                                </small>
                                <hr class="ml-lg-0">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6 pl-lg-5 pl-3 d-flex align-items-center mb-5">
                    <div class="row member">
                        <div class="col-lg-6 mb-3 mb-lg-0">
                            <img src="../images/member-3.png" alt="" class="img-fluid w-100">
                        </div>
                        <div class="col-lg-6 d-flex align-items-center">
                            <div class="text-lg-left text-center w-100">
                                <a href="javascript:void(0)" class="text-dark">
                                    <h5>
                                        {{__("team")['h5j']}}
                                    </h5>
                                </a>
                                <small class="text-secondary">
                                    {{__("team")['smallten']}}
                                </small>
                                <hr class="ml-lg-0">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 pr-lg-5 pr-3 d-flex align-items-center mb-5">
                    <div class="row member">
                        <div class="col-lg-6 mb-3 mb-lg-0">
                            <img src="../images/member-4.png" alt="" class="img-fluid w-100">
                        </div>
                        <div class="col-lg-6 d-flex align-items-center">
                            <div class="text-lg-left text-center w-100">
                                <a href="javascript:void(0)" class="text-dark">
                                    <h5>
                                        {{__("team")['h5k']}}
                                    </h5>
                                </a>
                                <small class="text-secondary">
                                    {{__("team")['smalleleven']}}
                                </small>
                                <hr class="ml-lg-0">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6 pl-lg-5 pl-3 d-flex align-items-center mb-5">
                    <div class="row member">
                        <div class="col-lg-6 mb-3 mb-lg-0">
                            <img src="../images/member-1.png" alt="" class="img-fluid w-100">
                        </div>
                        <div class="col-lg-6 d-flex align-items-center">
                            <div class="text-lg-left text-center w-100">
                                <a href="javascript:void(0)" class="text-dark">
                                    <h5>
                                        {{__("team")['h5l']}}
                                    </h5>
                                </a>
                                <small class="text-secondary">
                                    {{__("team")['smalltwelve']}}
                                </small>
                                <hr class="ml-lg-0">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 pr-lg-5 pr-3 d-flex align-items-center mb-5">
                    <div class="row member">
                        <div class="col-lg-6 mb-3 mb-lg-0">
                            <img src="../images/member-2.png" alt="" class="img-fluid w-100">
                        </div>
                        <div class="col-lg-6 d-flex align-items-center">
                            <div class="text-lg-left text-center w-100">
                                <a href="javascript:void(0)" class="text-dark">
                                    <h5>
                                        {{__("team")['h5m']}}
                                    </h5>
                                </a>
                                <small class="text-secondary">
                                    {{__("team")['smallthirteen']}}
                                </small>
                                <hr class="ml-lg-0">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6 pl-lg-5 pl-3 d-flex align-items-center mb-5">
                    <div class="row member">
                        <div class="col-lg-6 mb-3 mb-lg-0">
                            <img src="../images/member-3.png" alt="" class="img-fluid w-100">
                        </div>
                        <div class="col-lg-6 d-flex align-items-center">
                            <div class="text-lg-left text-center w-100">
                                <a href="javascript:void(0)" class="text-dark">
                                    <h5>
                                        {{__("team")['h5n']}}
                                    </h5>
                                </a>
                                <small class="text-secondary">
                                    {{__("team")['smallfourteen']}}
                                </small>
                                <hr class="ml-lg-0">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 pr-lg-5 pr-3 d-flex align-items-center mb-5">
                    <div class="row member">
                        <div class="col-lg-6 mb-3 mb-lg-0">
                            <img src="../images/member-4.png" alt="" class="img-fluid w-100">
                        </div>
                        <div class="col-lg-6 d-flex align-items-center">
                            <div class="text-lg-left text-center w-100">
                                <a href="javascript:void(0)" class="text-dark">
                                    <h5>
                                        {{__("team")['h5o']}}
                                    </h5>
                                </a>
                                <small class="text-secondary">
                                    {{__("team")['smallfiveteen']}}
                                </small>
                                <hr class="ml-lg-0">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6 pl-lg-5 pl-3 d-flex align-items-center mb-5">
                    <div class="row member">
                        <div class="col-lg-6 mb-3 mb-lg-0">
                            <img src="../images/member-1.png" alt="" class="img-fluid w-100">
                        </div>
                        <div class="col-lg-6 d-flex align-items-center">
                            <div class="text-lg-left text-center w-100">
                                <a href="javascript:void(0)" class="text-dark">
                                    <h5>
                                        {{__("team")['h5p']}}
                                    </h5>
                                </a>
                                <small class="text-secondary">
                                    {{__("team")['smallsixteen']}}
                                </small>
                                <hr class="ml-lg-0">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
</div>
@endsection
