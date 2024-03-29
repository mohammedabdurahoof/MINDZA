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
                            <h3>{{ $event->name }}</h3>
                            {{-- <a href="#"><span><i class="fa fa-calendar"></i> 2 December 2018</span></a> --}}
                            <a href="#"><span><i class="fa fa-clock-o"></i> {{ $event->startTime }} -
                                    {{ $event->finishTime }}</span></a>
                            <a href="#"><span><i class="fa fa-calendar"></i> {{ $event->startDate }}
                                    {{ $event->finishDate ? '- ' . $event->finishDate : '' }}</span></a>
                            <a href="#"><span><i class="fa fa-map-marker"></i> {{ $event->place }}</span></a>
                            <img src="{{ asset('images/events') . '/' . $event->image }}" alt="Event">
                            <p>{{ $event->description }}</p>
                        </div>
                        <!-- events left -->
                    </div>
                    <div class="col-lg-4">
                        <div class="events-right">
                            @if ($event->registration || $event->countdown)
                                <div class="events-coundwon bg_cover" data-overlay="8"
                                    style="background-image: url({{ asset('assets/images/event/single-event/coundown.jpg') }})">
                                    @if ($event->countdown)
                                        <div data-countdown="{{ $event->date }}"></div>
                                    @endif
                                    @if ($event->registration)
                                        <div class="events-coundwon-btn pt-30">
                                            <a href="/event-register/{{ $event->id }}" class="main-btn">Book Your Seat
                                            </a>
                                        </div>
                                    @endif
                                </div>
                            @endif
                            <!-- events coundwon -->
                            <div class="events-address mt-30">
                                <ul>
                                    @if ($event->link)
                                        <li>
                                            <div class="single-address">
                                                <div class="icon">
                                                    <i class="fa fa-link"></i>
                                                </div>
                                                <div class="cont">
                                                    <h6>Link</h6>
                                                    <span><a href="{{ $event->link }}">{{ $event->link }}</a></span>
                                                </div>
                                            </div>
                                            <!-- single address -->
                                        </li>
                                    @endif
                                    <li>
                                        <div class="single-address">
                                            <div class="icon">
                                                <i class="fa fa-clock-o"></i>
                                            </div>
                                            <div class="cont">
                                                <h6>Start Time</h6>
                                                <span>{{ $event->startTime }}</span>
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
                                                <span>{{ $event->finishTime }}</span>
                                            </div>
                                        </div>
                                        <!-- single address -->
                                    </li>

                                    <li>
                                        <div class="single-address">
                                            <div class="icon">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                            <div class="cont">
                                                <h6>Date</h6>
                                                <span>{{ $event->startDate }}
                                                    {{ $event->finishDate ? '- ' . $event->finishDate : '' }}</span>
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
                                                <span>{{ $event->place }}</span>
                                            </div>
                                        </div>
                                        <!-- single address -->
                                    </li>
                                </ul>
                                {{-- <div id="contact-map" class="mt-25"></div> --}}
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
