@extends('layouts.layout')

@section('contant')
    @include('partials.page_banner')
    <section class="pt-90 pb-120 gray-bg">
        <div class="container">
            <div class="row gallery">
                <div class="col-md-4 col-xs-6 thumb">
                    <a href="{{ asset('assets/images/gallery/1.jpg') }}">
                        <figure><img class="img-fluid img-thumbnail" src="{{ asset('assets/images/gallery/1.jpg') }}" alt="Gallery Image"></figure>
                    </a>
                </div>

                <div class="col-md-4 col-xs-6 thumb">
                    <a href="{{ asset('assets/images/gallery/2.jpg') }}">
                        <figure><img class="img-fluid img-thumbnail" src="{{ asset('assets/images/gallery/2.jpg') }}" alt="Gallery Image"></figure>
                    </a>
                </div>

                <div class="col-md-4 col-xs-6 thumb">
                    <a href="{{ asset('assets/images/gallery/3.jpg') }}">
                        <figure><img class="img-fluid img-thumbnail" src="{{ asset('assets/images/gallery/3.jpg') }}" alt="Gallery Image"></figure>
                    </a>
                </div>

                <div class="col-md-4 col-xs-6 thumb">
                    <a href="{{ asset('assets/images/gallery/4.jpg') }}">
                        <figure><img class="img-fluid img-thumbnail" src="{{ asset('assets/images/gallery/4.jpg') }}" alt="Gallery Image"></figure>
                    </a>
                </div>

                <div class="col-md-4 col-xs-6 thumb">
                    <a href="{{ asset('assets/images/gallery/5.jpg') }}">
                        <figure><img class="img-fluid img-thumbnail" src="{{ asset('assets/images/gallery/5.jpg') }}" alt="Gallery Image"></figure>
                    </a>
                </div>

                <div class="col-md-4 col-xs-6 thumb">
                    <a href="{{ asset('assets/images/gallery/6.jpg') }}">
                        <figure><img class="img-fluid img-thumbnail" src="{{ asset('assets/images/gallery/6.jpg') }}" alt="Gallery Image"></figure>
                    </a>
                </div>

                <div class="col-md-4 col-xs-6 thumb">
                    <a href="{{ asset('assets/images/gallery/7.jpg') }}">
                        <figure><img class="img-fluid img-thumbnail" src="{{ asset('assets/images/gallery/7.jpg') }}" alt="Gallery Image"></figure>
                    </a>
                </div>

                <div class="col-md-4 col-xs-6 thumb">
                    <a href="{{ asset('assets/images/gallery/8.jpg') }}">
                        <figure><img class="img-fluid img-thumbnail" src="{{ asset('assets/images/gallery/8.jpg') }}" alt="Gallery Image"></figure>
                    </a>
                </div>

                <div class="col-md-4 col-xs-6 thumb">
                    <a href="{{ asset('assets/images/gallery/9.jpg') }}">
                        <figure><img class="img-fluid img-thumbnail" src="{{ asset('assets/images/gallery/9.jpg') }}" alt="Gallery Image"></figure>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
