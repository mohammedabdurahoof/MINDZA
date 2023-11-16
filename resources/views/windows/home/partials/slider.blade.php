<!--====== SLIDER PART START ======-->

<section id="slider-part" class="slider-active ">

    @foreach ($banners as $banner)
        <div class="single-slider bg_cover pt-150"
            style="background-image: url({{ asset('images/banner') . '/' . $banner->image }})" data-overlay="4">
            <div class="container">
                <div class="row">
                    <div class="col-xl-7 col-lg-9">
                        <div class="slider-cont">
                            <h1 data-animation="fadeInLeft" data-delay="1s">{{ $banner->title }}</h1>
                            <p data-animation="fadeInUp" data-delay="1.3s">{{ $banner->description }}</p>
                            <ul>
                                <li><a data-animation="fadeInUp" data-delay="1.6s" class="main-btn"
                                        href="{{ $banner->readMoreLink }}">Read
                                        More</a></li>
                                <li><a data-animation="fadeInUp" data-delay="1.9s" class="main-btn"
                                        href="{{ $banner->getStartedLink }}">Get
                                        Started</a></li>
                            </ul>
                        </div>
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- single slider -->
    @endforeach

</section>

<!--====== SLIDER PART ENDS ======-->
