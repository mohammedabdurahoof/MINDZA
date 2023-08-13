@extends('layouts.layout')

@section('contant')
    @include('partials.page_banner')
    <!--====== EVENTS PART START ======-->

    <section id="event-page" class="pt-90 pb-120 gray-bg">
        <div class="container">
            <div class="row">
                @foreach ($events as $event)
                    <div class="col-lg-6">
                        <div class="single-event-list mt-30">
                            <div class="event-thum">
                                <img src="{{ asset('images/events') . '/' . $event->image }}" alt="Event">
                            </div>
                            <div class="event-cont">
                                {{-- <span><i class="fa fa-calendar"></i> 2 December 2018</span> --}}
                                <a href="events/1">
                                    <h4>{{$event->name}}</h4>
                                </a>
                                <span><i class="fa fa-clock-o"></i> {{$event->startTime}} - {{$event->finishTime}}</span>
                                <span><i class="fa fa-map-marker"></i> {{$event->address}}</span>
                                <p>{{$event->description}}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <!-- row -->
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

    <!--====== EVENTS PART ENDS ======-->
@endsection
