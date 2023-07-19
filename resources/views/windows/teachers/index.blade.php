@extends('layouts.layout')

@section('contant')
    @include('partials.page_banner')
    <section id="teachers-page" class="pt-90 pb-120 gray-bg">
        <div class="container">
            <div class="row justify-content-center">
                @foreach ($teachers as $teacher)
                    <div class="col-lg-3 col-md-6 col-sm-8">
                        <div class="single-teacher-2 text-center mt-30">
                            <div class="teacher-image">
                                <img src="{{ asset('images/teacher') . '/' . $teacher->image }}" alt="Teacher">
                                <div class="teacher-social "
                                    style="background-image: url({{ asset('assets/images/teachers/hover.png') }})">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="teacher-content">
                                <h6 class="teacher-title"><a href="/teachers/{{ $teacher->id }}">{{ $teacher->name }}</a>
                                </h6>
                                <span>{{ $teacher->position }}</span>
                            </div>
                        </div>
                        <!-- single teacher 2 -->
                    </div>
                @endforeach
            </div>
            {{-- <!-- row -->
            <div class="row">
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
            </div>
            <!-- row --> --}}
        </div>
        <!-- container -->
    </section>
@endsection
