<section id="event-part" class="pt-50 pb-100">
    <div class="container">
        <div class="event-bg bg_cover" style="background-image: url({{ asset('assets/images/bg-3.jpg') }})">
            <div class="row">
                <div class="col-lg-5 offset-lg-6 col-md-8 offset-md-2 col-sm-10 offset-sm-1">
                    <div class="event-2 pt-90 pb-70">
                        <div class="event-title">
                            <h3>Upcoming events</h3>
                        </div> <!-- event title -->
                        <ul>
                            @foreach ($events as $event)
                                <li>
                                    <div class="single-event">
                                        {{-- <span><i class="fa fa-calendar"></i> 2 December 2018</span> --}}
                                        <a href="/events/{{ $event->id }}">
                                            <h4>{{ $event->name }}</h4>
                                        </a>
                                        <span><i class="fa fa-clock-o"></i>{{ $event->startTime }} -
                                            {{ $event->finishTime }}</span>
                                        <span><i class="fa fa-map-marker"></i>{{ $event->address }}</span>
                                    </div>
                                </li>
                            @endforeach
                            
                        </ul>
                        <a class="show-more" href="/events">Show more</a> 
                    </div> <!-- event 2 -->
                </div>
            </div> <!-- row -->
        </div>
    </div> <!-- container -->
</section>
