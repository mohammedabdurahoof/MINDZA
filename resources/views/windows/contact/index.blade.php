@extends('layouts.layout')

@section('contant')
    @include('partials.page_banner')
    <section id="contact-page" class="pt-90 pb-120 gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    @include('windows.contact.partials.form')

                    <!--  contact from -->
                </div>
                <div class="col-lg-5">
                    @include('windows.contact.partials.address')
                    
                    <div class="map mt-30">
                        <div id="contact-map"></div>
                    </div>
                    <!-- map -->
                </div>
            </div>
            <!-- row -->
        </div>
        <!-- container -->
    </section>
@endsection
