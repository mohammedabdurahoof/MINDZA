@extends('layouts.layout')

@section('contant')
    @include('partials.page_banner')
    <section id="shop-single" class="pt-120 pb-120 gray-bg">
        <div class="container">
            <div class="shop-details">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="shop-left pt-30">
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-image-1" role="tabpanel"
                                    aria-labelledby="pills-image-1-tab">
                                    <div class="shop-image">
                                        <a href="{{ asset('images/shop') . '/' . $product->images[1] }}"
                                            class="shop-items"><img
                                                src="{{ asset('images/shop') . '/' . $product->images[1] }}"
                                                alt="Shop"></a>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-image-2" role="tabpanel"
                                    aria-labelledby="pills-image-2-tab">
                                    <div class="shop-image">
                                        <a href="{{ asset('images/shop') . '/' . $product->images[2] }}"
                                            class="shop-items"><img
                                                src="{{ asset('images/shop') . '/' . $product->images[2] }}"
                                                alt="Shop"></a>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-image-3" role="tabpanel"
                                    aria-labelledby="pills-image-3-tab">
                                    <div class="shop-image">
                                        <a href="{{ asset('images/shop') . '/' . $product->images[3] }}"
                                            class="shop-items"><img
                                                src="{{ asset('images/shop') . '/' . $product->images[3] }}"
                                                alt="Shop"></a>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-image-4" role="tabpanel"
                                    aria-labelledby="pills-image-4-tab">
                                    <div class="shop-image">
                                        <a href="{{ asset('images/shop') . '/' . $product->images[4] }}"
                                            class="shop-items"><img
                                                src="{{ asset('images/shop') . '/' . $product->images[4] }}"
                                                alt="Shop"></a>
                                    </div>
                                </div>
                            </div>
                            <ul class="nav nav-justified mt-30" id="pills-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="active" id="pills-image-1-tab" data-toggle="pill" href="#pills-image-1"
                                        role="tab" aria-controls="pills-image-1" aria-selected="true">
                                        <span class="shop-thum">
                                            <img src="{{ asset('images/shop') . '/' . $product->images[5] }}"
                                                alt="Thum">
                                        </span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a id="pills-image-2-tab" data-toggle="pill" href="#pills-image-2" role="tab"
                                        aria-controls="pills-image-2" aria-selected="false">
                                        <span class="shop-thum">
                                            <img src="{{ asset('images/shop') . '/' . $product->images[6] }}"
                                                alt="Thum">
                                        </span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a id="pills-image-3-tab" data-toggle="pill" href="#pills-image-3" role="tab"
                                        aria-controls="pills-image-1" aria-selected="false">
                                        <span class="shop-thum">
                                            <img src="{{ asset('images/shop') . '/' . $product->images[7] }}"
                                                alt="Thum">
                                        </span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a id="pills-image-4-tab" data-toggle="pill" href="#pills-image-4" role="tab"
                                        aria-controls="pills-image-4" aria-selected="false">
                                        <span class="shop-thum">
                                            <img src="{{ asset('images/shop') . '/' . $product->images[8] }}"
                                                alt="Thum">
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- shop left -->
                    </div>
                    <div class="col-lg-6">
                        <div class="shop-right pt-30">
                            <h6>{{ $product->name }} </h6>
                            <span>${{ $product->price }}</span>
                            <p>{{ $product->description }}</p>
                            <div class="nice-number pt-15">
                                <input id="quantity" type="text" value="1">
                            </div>
                            <div class="add-btn pt-15">
                                <button onclick="placeOrder()"  type="button" class="main-btn">Buy Now</button>
                            <script>
                                function placeOrder() {
                                    var quantity = document.getElementById("quantity").value
                                    window.location.href = `https://wa.me/+919946333396?text=product%20name:%20{{$product->name }}%0Aquantity:%20${quantity}`
                                }
                            </script>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- row -->
                {{-- <div class="row">
                    <div class="col-lg-12">
                        <div class="shop-reviews mt-60">
                            <ul class="nav" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="active" id="description-tab" data-toggle="tab" href="#description" role="tab" aria-controls="description" aria-selected="true">Description</a>
                                </li>
                                <li class="nav-item">
                                    <a id="reviews-tab" data-toggle="tab" href="#reviews" role="tab" aria-controls="reviews" aria-selected="false">Reviews</a>
                                </li>
                            </ul>
                            <!-- nav -->
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
                                    <div class="description-cont pt-40">
                                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper.
                                            Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                                    </div>
                                </div>
                                <!-- row -->
                                <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
                                    <div class="reviews-cont">
                                        <ul>
                                            <li>
                                                <div class="single-reviews">
                                                    <div class="reviews-author">
                                                        <div class="author-thum">
                                                            <img src="{{ asset('assets/images/review/r-1.jpg') }}" alt="Reviews">
                                                        </div>
                                                        <div class="author-name">
                                                            <h6>Bobby Aktar</h6>
                                                            <span>April 03, 2019</span>
                                                        </div>
                                                    </div>
                                                    <div class="reviews-description pt-20">
                                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which.</p>
                                                        <div class="rating">
                                                            <ul>
                                                                <li><i class="fa fa-star"></i></li>
                                                                <li><i class="fa fa-star"></i></li>
                                                                <li><i class="fa fa-star"></i></li>
                                                                <li><i class="fa fa-star"></i></li>
                                                                <li><i class="fa fa-star"></i></li>
                                                            </ul>
                                                            <span>/ 5 Star</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- single reviews -->
                                            </li>
                                            <li>
                                                <div class="single-reviews">
                                                    <div class="reviews-author">
                                                        <div class="author-thum">
                                                            <img src="{{ asset('assets/images/review/r-1.jpg') }}" alt="Reviews">
                                                        </div>
                                                        <div class="author-name">
                                                            <h6>Humayun Ahmed</h6>
                                                            <span>April 13, 2019</span>
                                                        </div>
                                                    </div>
                                                    <div class="reviews-description pt-20">
                                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which.</p>
                                                        <div class="rating">
                                                            <ul>
                                                                <li><i class="fa fa-star"></i></li>
                                                                <li><i class="fa fa-star"></i></li>
                                                                <li><i class="fa fa-star"></i></li>
                                                                <li><i class="fa fa-star"></i></li>
                                                                <li><i class="fa fa-star"></i></li>
                                                            </ul>
                                                            <span>/ 5 Star</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- single reviews -->
                                            </li>
                                        </ul>
                                        <div class="reviews-form">
                                            <form action="#">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-single">
                                                            <input type="text" placeholder="Fast name">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-single">
                                                            <input type="text" placeholder="Last Name">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-single">
                                                            <div class="rate-wrapper">
                                                                <div class="rate-label">Your Rating:</div>
                                                                <div class="rate">
                                                                    <div class="rate-item"><i class="fa fa-star" aria-hidden="true"></i></div>
                                                                    <div class="rate-item"><i class="fa fa-star" aria-hidden="true"></i></div>
                                                                    <div class="rate-item"><i class="fa fa-star" aria-hidden="true"></i></div>
                                                                    <div class="rate-item"><i class="fa fa-star" aria-hidden="true"></i></div>
                                                                    <div class="rate-item"><i class="fa fa-star" aria-hidden="true"></i></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-single">
                                                            <textarea placeholder="Comment"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-single">
                                                            <button type="button" class="main-btn">Post Comment</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- row -->
                                            </form>
                                        </div>
                                        <!-- reviews form -->
                                    </div>
                                </div>
                                <!-- row -->
                            </div>
                            <!-- tab-content -->
                        </div>
                        <!-- shop reviews -->
                    </div>
                </div> --}}
                <!-- row -->
            </div>
            <!-- shop-details -->
            <div class="related-item pt-110">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="title pb-10">
                            <h3>Related products</h3>
                        </div>
                    </div>
                </div>
                <!-- row -->
                <div class="row justify-content-center">
                    @foreach ($products as $product)
                        <div class="col-lg-3 col-md-6 col-sm-8">
                            <div class="single-publication mt-30 text-center">
                                <div class="image">
                                    <img src="{{ asset('images/shop') . '/' . $product->images[0] }}" alt="Product">
                                    <div class="add-cart">
                                        <ul>
                                            <li><a href="/shop/{{ $product->id }}"><i
                                                        class="fa fa-shopping-cart"></i></a></li>
                                            <li><a href="/shop/{{ $product->id }}"><i class="fa fa-heart-o"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="content pt-20">
                                    <h5 class="book-title"><a href="/shop/{{ $product->id }}">{{ $product->name }}</a>
                                    </h5>
                                    {{-- <p class="writer-name"><span>By</span> Scott Trench</p> --}}
                                    <div class="price-btn d-flex align-items-center justify-content-between">
                                        <div class="price pt-20">
                                            {{-- <span class="discount-price">$250</span> --}}
                                            <span class="normal-price">${{ $product->price }}</span>
                                        </div>
                                        <div class="button pt-10">
                                            <a href="https://wa.me/+919946333396?text=product%20name:%20{{$product->name }}%0Aquantity:%201" class="main-btn"><i
                                                    class="fa fa-cart-plus"></i> Buy
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
            <!-- related item -->
        </div>
        <!-- container -->
    </section>
@endsection
