<div>
    {{-- Because she competes with no one, no one can compete with her. --}}
    <main class="main">
        <div class="page-header breadcrumb-wrap">
        </div>
        <section class="mt-50 mb-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="product-detail accordion-detail">
                            <div class="row mb-50">
                                <div class="col-md-6 col-sm-12 col-xs-12">
                                    <div class="detail-gallery">
                                        <span class="zoom-icon"><i class="fi-rs-search"></i></span>
                                        <!-- MAIN SLIDES -->
                                        <div class="product-image-slider">
                                            <figure class="border-radius-10">
                                                <img src="{{asset('assets/imgs/products')}}/{{$place->image}}"
                                                     alt="{{$place->name}}">
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12 col-xs-12">
                                    <div class="detail-info">
                                        <h2 class="title-detail">{{$place->name}}</h2>
                                        <div class="product-detail-rating">
                                            <div class="pro-details-brand">
                                                <span> Credit: <a href="">To Owner</a></span>
                                            </div>
                                            <div class="product-rate-cover text-end">
                                                <div class="product-rate d-inline-block">
                                                    <div class="product-rating" style="width:90%">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clearfix product-price-cover">

                                        </div>
                                        <div class="bt-1 border-color-1 mt-15 mb-15"></div>
                                        <div class="short-desc mb-30">
                                            {{$place->description}}
                                        </div>

                                        <div class="bt-1 border-color-1 mt-30 mb-30"></div>

                                    </div>
                                    <!-- Detail Info -->
                                </div>
                            </div>
                            <div class="row mt-60">
                                <div class="col-12">
                                    <h3 class="section-title style-1 mb-30">Recommended Places</h3>
                                </div>
                                <div class="col-12">
                                    <div class="row related-products">
                                        @foreach($recommended_place as $recommended_places)
                                            <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                                                <div class="product-cart-wrap small hover-up">
                                                    <div class="product-img-action-wrap">
                                                        <div class="product-img product-img-zoom">
                                                            <a href="{{route('place.details',['slug'=>$recommended_places->slug])}}"
                                                               tabindex="0">
                                                                <img class="default-img"
                                                                     src="{{asset('assets/imgs/products')}}/{{$recommended_places->image}}"
                                                                     alt="{{$recommended_places->name}}">
                                                                {{--                                                            <img class="hover-img" src="{{asset('assets/imgs/shop/product-2-2.jpg')}}" alt="">--}}
                                                            </a>
                                                        </div>
                                                        <div
                                                            class="product-badges product-badges-position product-badges-mrg">
                                                        </div>
                                                    </div>
                                                    <div class="product-content-wrap">
                                                        <h2><a href="#" tabindex="0">{{$recommended_places->name}}</a>
                                                        </h2>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 primary-sidebar sticky-sidebar">
                        <div class="widget-category mb-30">
                            <h5 class="section-title style-1 mb-30 wow fadeIn animated">Provinces</h5>
                            <ul class="categories">
                                @foreach($province as $provinces)
                                    <li>
                                        <a href="{{ route('place.province', ['slug' => $provinces->name]) }}">
                                            {{ $provinces->name }}
                                        </a>
                                    </li>

                                @endforeach
                            </ul>
                        </div>
                        <div class="sidebar-widget product-sidebar  mb-30 p-30 bg-grey border-radius-10">
                            <div class="widget-header position-relative mb-20 pb-10">
                                <h5 class="widget-title mb-10">Popular Visit </h5>
                                <div class="bt-1 border-color-1"></div>
                            </div>
                            @foreach($pplace as $pplaces)
                                <div class="single-post clearfix">
                                    <div class="image">
                                        <img src="{{asset('assets/imgs/products')}}/{{$pplaces->image}}"
                                             alt="{{$pplaces->name}}">
                                    </div>
                                    <div class="content pt-10">
                                        <h5>
                                            <a href="{{route('place.details',['slug'=>$pplaces->slug])}}">{{$pplaces->name}}</a>
                                        </h5>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>
