@extends('layouts.layout')

@section('contant')
    @include('partials.page_banner')
    <!--====== EVENTS PART START ======-->

    <section id="event-single" class="pt-120 pb-120 gray-bg">
        <div class="container">
            <div class="events-area">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="events-left">
                            <h3>Campus clean workshop</h3>
                            <a href="#"><span><i class="fa fa-calendar"></i> 2 December 2018</span></a>
                            <a href="#"><span><i class="fa fa-clock-o"></i> 10:00 Am - 3:00 Pm</span></a>
                            <a href="#"><span><i class="fa fa-map-marker"></i> Rc Auditorim</span></a>
                            <img src="{{ asset('assets/images/event/single-event/se-1.jpg') }}" alt="Event">
                            <p>Accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                                veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem
                                quia voluptas sit aspernatur aut odit aut fugit,
                                sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro
                                quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia
                                non numquam eius modi tempora incidunt
                                ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam</p>
                        </div>
                        <!-- events left -->
                    </div>
                    <div class="col-lg-4">
                        <div class="events-right">
                            <div class="events-coundwon bg_cover" data-overlay="8"
                                style="background-image: url({{ asset('assets/images/event/single-event/coundown.jpg') }})">
                                <div data-countdown="2019/08/01"></div>
                                <div class="events-coundwon-btn pt-30">
                                    <a href="#" class="main-btn">Book Your Seat</a>
                                </div>
                            </div>
                            <!-- events coundwon -->
                            <div class="events-address mt-30">
                                <ul>
                                    <li>
                                        <div class="single-address">
                                            <div class="icon">
                                                <i class="fa fa-clock-o"></i>
                                            </div>
                                            <div class="cont">
                                                <h6>Start Time</h6>
                                                <span>12:00 Am</span>
                                            </div>
                                        </div>
                                        <!-- single address -->
                                    </li>
                                    <li>
                                        <div class="single-address">
                                            <div class="icon">
                                                <i class="fa fa-bell-slash"></i>
                                            </div>
                                            <div class="cont">
                                                <h6>Finish Time</h6>
                                                <span>05:00 Am</span>
                                            </div>
                                        </div>
                                        <!-- single address -->
                                    </li>
                                    <li>
                                        <div class="single-address">
                                            <div class="icon">
                                                <i class="fa fa-map"></i>
                                            </div>
                                            <div class="cont">
                                                <h6>Address</h6>
                                                <span>Street Park ,America</span>
                                            </div>
                                        </div>
                                        <!-- single address -->
                                    </li>
                                </ul>
                                <div id="contact-map" class="mt-25"></div>
                                <!-- Map -->
                            </div>
                            <!-- events address -->
                        </div>
                        <!-- events right -->
                    </div>
                </div>
                <!-- row -->
            </div>
            <!-- events-area -->
        </div>
        <!-- container -->
    </section>

    <!--====== EVENTS PART ENDS ======-->
@endsection
