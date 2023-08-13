<section id="publication-part" class="pt-115 pb-120 gray-bg">
    <div class="container">
        <div class="row align-items-end">
            <div class="col-lg-6 col-md-8 col-sm-7">
                <div class="section-title pb-60">
                    <h5>Publications</h5>
                    <h2>From Store </h2>
                </div> <!-- section title -->
            </div>
            <div class="col-lg-6 col-md-4 col-sm-5">
                <div class="products-btn text-right pb-60">
                    <a href="/shop" class="main-btn">All Products</a>
                </div> <!-- products btn -->
            </div>
        </div> <!-- row -->
        <div class="row justify-content-center">
            @foreach ($products as $product)
                <div class="col-lg-3 col-md-6 col-sm-8">
                    <div class="single-publication mt-30 text-center">
                        <div class="image">
                            <img src="{{ asset('images/shop') . '/' . $product->images[0] }}" alt="Product">
                            <div class="add-cart">
                                <ul>
                                    <li><a href="/shop/{{ $product->id }}"><i class="fa fa-shopping-cart"></i></a></li>
                                    <li><a href="/shop/{{ $product->id }}"><i class="fa fa-heart-o"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="content pt-20">
                            <h5 class="book-title"><a href="/shop/{{ $product->id }}">{{ $product->name }}</a></h5>
                            {{-- <p class="writer-name"><span>By</span> Scott Trench</p> --}}
                            <div class="price-btn d-flex align-items-center justify-content-between">
                                <div class="price pt-20">
                                    {{-- <span class="discount-price">$250</span> --}}
                                    <span class="normal-price">₹{{ $product->price }}</span>
                                </div>
                                <div class="button pt-10">
                                    <a href="/shop/{{ $product->id }}" class="main-btn"><i class="fa fa-cart-plus"></i>
                                        Buy
                                        Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single publication -->
                </div>
            @endforeach



        </div> <!-- row -->
    </div> <!-- container -->
</section>
