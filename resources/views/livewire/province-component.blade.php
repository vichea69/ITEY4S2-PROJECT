<div>
    {{-- The Master doesn't talk, he acts. --}}
    <div>
        {{-- Nothing in the world is as soft and yielding as water. --}}
        <main class="main">
            <div class="page-header breadcrumb-wrap">
                <div class="container">
                    <div class="breadcrumb">
                        <a href="#" rel="nofollow">Home</a>
                        <span></span> Province
                    </div>
                </div>
            </div>
            <section class="mt-50 mb-50">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9">
                            <div class="shop-product-fillter">
                                <div class="totall-product">
                                    <p> We found <strong class="text-brand">{{$place ->total()}}</strong> place for
                                        you!</p>
                                </div>
                            </div>
                            <div class="row product-grid-3">
                                @foreach($place  as $places)

                                    <div class="col-lg-4 col-md-4 col-6 col-sm-6">
                                        <div class="product-cart-wrap mb-30">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="{{route('place.details',['slug'=>$places->slug])}}">
                                                        <img class="default-img"
                                                             src="{{asset('assets/imgs/products')}}/{{$places->image}}"
                                                             alt="{{$places->name}}">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                </div>
                                                <h2><a href="#">{{$places->name}}</a></h2>
                                                <div>
                                            <span>
                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <!--pagination-->
                            <div class="pagination-area mt-15 mb-sm-5 mb-lg-0">
                                {{$place->links()}}
                            </div>
                        </div>
                        <div class="col-lg-3 primary-sidebar sticky-sidebar">
                            <div class="row">
                                <div class="col-lg-12 col-mg-6"></div>
                                <div class="col-lg-12 col-mg-6"></div>
                            </div>
                            <div class="widget-category mb-30">
                                <h5 class="section-title style-1 mb-30 wow fadeIn animated">Province</h5>
                                <ul class="categories">
                                    @foreach($province_name as $province_names)
                                        <li>
                                            <a href="{{route('place.province',['slug'=>$province_names->name])}}">{{$province_names->name}}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="sidebar-widget product-sidebar  mb-30 p-30 bg-grey border-radius-10">
                                <div class="widget-header position-relative mb-20 pb-10">
                                    <h5 class="widget-title mb-10">Popular Visited</h5>
                                    <div class="bt-1 border-color-1"></div>
                                </div>
                                @foreach($popular_visit_place as $popular_visit_places)
                                    <div class="single-post clearfix">
                                        <div class="image">
                                            <img
                                                src="{{asset('assets/imgs/products')}}/{{$popular_visit_places->image}}"
                                                alt="{{$popular_visit_places->name}}">
                                        </div>
                                        <div class="content pt-10">
                                            <h5>
                                                <a href="{{route('place.details',['slug'=>$popular_visit_places->slug])}}">{{$popular_visit_places->name}}</a>
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

</div>
