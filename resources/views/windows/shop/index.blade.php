@extends('layouts.layout')

@section('contant')
    @include('partials.page_banner')
    <section id="shop-page" class="pt-120 pb-120 gray-bg">
        <div class="container">
            {{-- <div class="row">
                <div class="col-lg-12">
                    <div class="shop-top-search">
                        <div class="shop-bar">
                            <ul class="nav" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="active" id="shop-grid-tab" data-toggle="tab" href="#shop-grid" role="tab" aria-controls="shop-grid" aria-selected="true"><i class="fa fa-th-large"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a id="shop-list-tab" data-toggle="tab" href="#shop-list" role="tab" aria-controls="shop-list" aria-selected="false"><i class="fa fa-th-list"></i></a>
                                </li>
                                <li class="nav-item">Showing 4 0f 24 Results</li>
                            </ul>
                            <!-- nav -->
                        </div>
                        <!-- shop bar -->
                        <div class="shop-select">
                            <select>
                                <option value="1">Sort by</option>
                                <option value="1">Sort by 01</option>
                                <option value="2">Sort by 02</option>
                                <option value="3">Sort by 03</option>
                                <option value="4">Sort by 04</option>
                                <option value="5">Sort by 05</option>
                            </select>
                        </div>
                        <!-- shop select -->
                    </div>
                    <!-- shop top search -->
                </div>
            </div> --}}
            <!-- row -->
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="shop-grid" role="tabpanel" aria-labelledby="shop-grid-tab">
                    <div class="row justify-content-center">
                        @foreach ($products as $product)
                            <div class="col-lg-3 col-md-6 col-sm-8">
                                <div class="single-publication mt-30 text-center">
                                    <div class="image">
                                        <img src="{{ asset('images/shop') . '/' . $product->images[0] }}" alt="Product">
                                        <div class="add-cart">
                                            <ul>
                                                <li><a href="/shop/{{$product->id}}"><i class="fa fa-shopping-cart"></i></a></li>
                                                <li><a href="/shop/{{$product->id}}"><i class="fa fa-heart-o"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="content pt-20">
                                        <h5 class="book-title"><a href="/shop/{{$product->id}}">{{$product->name}}</a></h5>
                                        {{-- <p class="writer-name"><span>By</span> Scott Trench</p> --}}
                                        <div class="price-btn d-flex align-items-center justify-content-between">
                                            <div class="price pt-20">
                                                {{-- <span class="discount-price">$250</span> --}}
                                                <span class="normal-price">₹{{$product->price}}</span>
                                            </div>
                                            <div class="button pt-10">
                                                <a href="https://wa.me/+919946333396?text=product%20name:%20{{$product->name }}%0Aquantity:%201"></i> Buy
                                                    Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- single publication -->
                            </div>
                        @endforeach

                    </div>
                    <!-- row -->
                </div>
            </div>
            <!-- tab content -->
            {{-- <div class="row">
                <div class="col-lg-12">
                    <nav class="courses-pagination mt-50">
                        <ul class="pagination justify-content-center">
                            <li class="page-item">
                                <a href="#" aria-label="Previous">
                                    <i class="fa fa-angle-left"></i>
                                </a>
                            </li>
                            <li class="page-item"><a class="active" href="#">1</a></li>
                            <li class="page-item"><a href="#">2</a></li>
                            <li class="page-item"><a href="#">3</a></li>
                            <li class="page-item">
                                <a href="#" aria-label="Next">
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <!-- courses pagination -->
                </div>
            </div> --}}
            <!-- row -->
        </div>
        <!-- container -->
    </section>
@endsection
