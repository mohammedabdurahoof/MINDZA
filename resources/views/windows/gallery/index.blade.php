@extends('layouts.layout')

@section('contant')
    @include('partials.page_banner')
    <section class="pt-90 pb-120 gray-bg">
        <div class="container">
            <div class="row gallery">
                @foreach ($gallery as $image)
                    <div class="col-md-4 col-xs-6 thumb">
                        <a href="{{ asset('images/gallery') . '/' . $image->name }}">
                            <figure><img class="img-fluid img-thumbnail"
                                    src="{{ asset('images/gallery') . '/' . $image->name }}" alt="Gallery Image"></figure>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
