<div>
    {{-- Do your work, then step back. --}}
    <main class="main">
        <section class="home-slider position-relative pt-50">
            <div class="hero-slider-1 dot-style-1 dot-style-1-position-1">
                <div class="single-hero-slider single-animation-wrap">
                    <div class="container">
                        <div class="row align-items-center slider-animated-1">
                            <div class="col-lg-5 col-md-6">
                                <div class="hero-slider-content-2">
                                    <!-- <h4 class="animated">Trade-in offer</h4> -->
                                    <h3 class="animated fw-900">Travel makes one modest.</h3>
                                    <h3 class="animated fw-900 text-brand">You see what a tiny place you occupy in
                                        the world.</h3>
                                    <!-- <p class="animated"></p> -->
                                    <a class="animated btn btn-brush btn-brush-3" href="{{route('place')}}">
                                        Visit
                                        Now </a>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-6">
                                <div class="single-slider-img single-slider-img-1 ">
                                    <img class="animated slider-1-1"
                                         src="https://img.freepik.com/free-vector/man-woman-choosing-travel-destination-going-holiday-vacation_335657-2455.jpg?size=626&ext=jpg&ga=GA1.1.1448711260.1707091200&semt=ais"
                                         alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-hero-slider single-animation-wrap">
                    <div class="container">
                        <div class="row align-items-center slider-animated-1">
                            <div class="col-lg-5 col-md-6">
                                <div class="hero-slider-content-2">
                                    <!-- <h4 class="animated">Hot promotions</h4> -->
                                    <h3 class="animated fw-900">The Most Beautiful Thing In Cambodia </h3>
                                    <h3 class="animated fw-900 text-7">Isn’t The Country – It’s The Cambodian
                                        People.</h3>
                                    <!-- <p class="animated">Save more with coupons & up to 20% off</p> -->
                                    <a class="animated btn btn-brush btn-brush-2" href="{{route('place')}}"> Visit
                                        Now </a>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-6">
                                <div class="single-slider-img single-slider-img-1">
                                    <img class="animated slider-1-2 "
                                         src="{{asset('assets/imgs/banner/a.jpeg')}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider-arrow hero-slider-1-arrow"></div>
        </section>
        <section class="featured section-padding position-relative">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
                        <div class="banner-features wow fadeIn animated hover-up">
                            <img src="{{asset('assets/imgs/theme/icons/pablo-866.svg')}}" height="120" alt="">
                            <h4 class="bg-1">Work</h4>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
                        <div class="banner-features wow fadeIn animated hover-up">
                            <img
                                src="https://global-uploads.webflow.com/5e3ce2ec7f6e53c045fe7cfa/6346cff779787b3be4a2055c_Airport%20Arrival.png"
                                height="120" alt="">
                            <h4 class="bg-3">Travel</h4>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
                        <div class="banner-features wow fadeIn animated hover-up">
                            <img src="{{asset('assets/imgs/theme/icons/marginalia-savings-1.svg')}}" height="120"
                                 alt="">
                            <h4 class="bg-2">Save Money</h4>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
                        <div class="banner-features wow fadeIn animated hover-up">
                            <img
                                src="https://www.graphicpear.com/wp-content/uploads/2022/11/Passport-Travel-Illustration-1.jpg"
                                height="120" alt="">
                            <h4 class="bg-4">Repeat</h4>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
                        <div class="banner-features wow fadeIn animated hover-up">
                            <img
                                src="https://img.freepik.com/free-vector/exploring-concept-illustration_114360-958.jpg"
                                height="120" alt="">
                            <h4 class="bg-5">Explore</h4>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
                        <div class="banner-features wow fadeIn animated hover-up">
                            <img src="{{asset('assets/imgs/theme/icons/florid-support-service.svg')}}" height="120"
                                 alt="">
                            <h4 class="bg-6">See the world</h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="product-tabs section-padding position-relative wow fadeIn animated">
            <div class="bg-square"></div>
            <div class="container">
                <div class="tab-header">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="nav-tab-one" data-bs-toggle="tab"
                                    data-bs-target="#tab-one" type="button" role="tab" aria-controls="tab-one"
                                    aria-selected="true">Most Visited
                            </button>
                        </li>

                    </ul>
                    <a href="{{route('place')}}" class="view-more d-none d-md-flex">View More<i
                            class="fi-rs-angle-double-small-right"></i></a>
                </div>
                <!--End nav-tabs-->
                <div class="tab-content wow fadeIn animated" id="myTabContent">
                    <div class="tab-pane fade show active" id="tab-one" role="tabpanel" aria-labelledby="tab-one">
                        <div class="row product-grid-4">
                            @foreach($mostvisit_place as $mostvisit_places)
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 col-6">
                                    <div class="product-cart-wrap mb-30">
                                        <div class="product-img-action-wrap">
                                            <div class="product-img product-img-zoom">
                                                <a href="{{route('place.details',['slug'=>$mostvisit_places->slug])}}">
                                                    <img class="default-img"
                                                         src="{{asset('assets/imgs/products')}}/{{$mostvisit_places->image}} "
                                                         alt="{{$mostvisit_places->name}} ">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content-wrap">
                                            <div class="product-category">

                                                <a href="">{{$mostvisit_places->province->name}}</a>

                                            </div>
                                            <h2><a href="">{{$mostvisit_places->name}}</a></h2>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <!--End product-grid-4-->
                    </div>
                </div>
                <!--End tab-content-->
            </div>
        </section>
        <section class="banner-2 section-padding pb-0">
            <div class="container">
                <div class="banner-img banner-big wow fadeIn animated f-none">
                    <img
                        src="https://img.freepik.com/premium-vector/cambodia-travel-destination-grand-illustration_268722-388.jpg?w=2000"
                        height="300px" width="100%" alt="banner">
                </div>
            </div>
        </section>
        <section class="popular-categories section-padding mt-15 mb-25">
            <div class="container wow fadeIn animated">
                <h3 class="section-title mb-20"><span>Popular</span> Provinces</h3>
                <div class="carausel-6-columns-cover position-relative">
                    <div class="slider-arrow slider-arrow-2 carausel-6-columns-arrow"
                         id="carausel-6-columns-arrows"></div>
                    <div class="carausel-6-columns" id="carausel-6-columns">
                        @foreach($pouplar_province as $pouplar_provinces)
                            <div class="card-1">
                                <figure class=" img-hover-scale overflow-hidden">
                                    <a href="{{route('place.province',['slug'=>$pouplar_provinces->name])}}"><img
                                            src="{{asset('assets/imgs/categories')}}/{{$pouplar_provinces->image}}"
                                            alt="{{$pouplar_provinces->name}}"></a>
                                </figure>
                                <h5><a href="">{{$pouplar_provinces->name}}</a></h5>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        <section class="section-padding">
            <div class="container wow fadeIn animated">
                <h3 class="section-title mb-20"><span>Recommended</span> Place</h3>
                <div class="carausel-6-columns-cover position-relative">
                    <div class="slider-arrow slider-arrow-2 carausel-6-columns-arrow"
                         id="carausel-6-columns-2-arrows"></div>
                    <div class="carausel-6-columns carausel-arrow-center" id="carausel-6-columns-2">
                        @foreach($recommended_place as $recommended_places)
                            <div class="product-cart-wrap small hover-up">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="{{route('place.details',['slug'=>$recommended_places->slug])}}">
                                            <img class="default-img"
                                                 src={{asset('assets/imgs/products')}}/{{$recommended_places->image}} alt="{{$recommended_places->name}}">
                                        </a>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <h2><a href="">{{$recommended_places->name}}</a></h2>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>



