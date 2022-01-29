@extends('layout')
@section('content')
    <div id="about-us">
		<div class="mb-5 display-relative shadow" id="hero-container">
			<header id="header" class="custom-container container-xl position-relative">
                @include('nav')
			</header>
		</div>
        <section class="custom-container container-xl pt-5">
            <div class="row">
                <div class="col-12 text-center mb-5">
                    <h2 class="mb-3">
                        <b>{{__("about-us")['h4']}}</b>
                    </h2>
                </div>

            </div>
        </section>
        <section class="custom-container container-xl">

            <div class="row mb-2">
                <div class="col-12 col-xl-8 col-md-8">
               
                    <h6 class="text-secondary mb-5 text-justify text-secondary">
                        <b>{{__("about-us")['h6']}}</b>
                    </h6>
                    <video autoplay muted loop class="about-us-video">
                        <source src="../images/about-us.mp4" type="video/mp4">
                    </video>
                </div>

                <div class="col-md-12">
            

                        <p class="about-us-p">
                            {{__("about-us")['p1']}}
                        </p>
                       <p class="about-us-p">
                            {{__("about-us")['p2']}}
                       </p>

                        <p class="about-us-p">
                                {{__("about-us")['p3']}}
                        </p>

                        <p class="about-us-p">
                            {{__("about-us")['p4']}}
                        </p>

                        <p class="about-us-p">
                            {{__("about-us")['p5']}}
                        </p>

                        <p class="about-us-p">
                            {{__("about-us")['p6']}}
                        </p>

                        <div class="mb-5 py-5 bg-light- position-relative">
                            <img src="../images/Elements-1.png" alt="" class="position-absolute coin-left z-index-1" width="100">
                            <img src="../images/Elements-1.png" alt="" class="position-absolute coin-right z-index-1" width="100">
                        </div>

                        <p class="about-us-p">
                            {{__("about-us")['p7']}}
                        </p>

                        <p class="about-us-p">
                            {{__("about-us")['p8']}}
                        </p>

                        <p class="about-us-p">
                            {{__("about-us")['p9']}}
                        </p>

                    </div>
                </div>
            </section>




      {{--
		<section class="pt-5">
			<div class="position-relative custom-container container-xl row">
				<div class="container-bg-image position-absolute z-index-n1 rounded-lg"></div>
				<div class="col-12">
					<div class="text-center mb-5 py-5 bg-light- position-relative">
                        <img src="../images/Elements-1.png" alt="" class="position-absolute coin-left z-index-1" width="100">
						<img src="../images/Elements-1.png" alt="" class="position-absolute coin-right z-index-1" width="100">
						<div class="row mb-4">
							<div class="col-lg-4 offset-lg-4">
								<h4>
									<b>{{__("about-us")['h4']}}</b>
								</h4>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-6 offset-lg-3">
								<h5 class="text-secondary mb-5">
									{{__("about-us")['h5']}}
								</h5>
							</div>
						</div>
						<div class="row text-lg-center text-justify">
							<div class="col-lg-10 offset-lg-1">
								<p class="mb-4">
									{{__("about-us")['p1']}}
								</p>
								<p class="mb-4">
								{{__("about-us")['p2']}}
								</p>
								<p class="mb-4">
								{{__("about-us")['p3']}}
								</p>
								<p class="mb-4">
								{{__("about-us")['p4']}}
								</p>
								<p class="mb-4">
								{{__("about-us")['p5']}}
								</p>



								<p class="mb-4">
								{{__("about-us")['p6']}}
								</p>
								<p class="mb-4">
								{{__("about-us")['p7']}}
								</p>
								<p class="mb-4">
								{{__("about-us")['p8']}}
								</p>
								<p class="about-us-p">
								{{__("about-us")['p9']}}
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

        --}}

	</div>
	@endsection

