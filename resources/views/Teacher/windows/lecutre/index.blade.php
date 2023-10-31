@extends('layouts.layout')

@section('contant')
    @include('partials.page_banner')
    <section id="teachers-single" class="pt-70 pb-120 gray-bg">
        <div class="container">
            @if ($errors->any())
                <div class=" mt-3 alert alert-danger alert-dismissible fade show" role="alert">
                    {{ implode('', $errors->all(':message')) }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif

            @if ($message = Session::get('success'))
                <div class=" mt-3 alert alert-success alert-dismissible fade show" role="alert">
                    {{ $message }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-8">
                    <div class="teachers-left mt-50">
                        <div class="hero">
                            <img src="{{ asset('images/teacher') . '/' . $teacher->image }}" alt="teacher">
                        </div>
                        <div class="name">
                            <h6>{{ $teacher->name }}</h6>
                            <span>{{ $teacher->position }} |</span>
                            <span>{{ $teacher->email }}</span>
                        </div>
                        {{-- <div class="social">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus-square"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
                            </ul>
                        </div> --}}
                        {{-- <div class="description">
                            <p>{{ $teacher ?? ''->description }}</p>
                </div> --}}
                        <div>
                            {{-- <input type="submit" 
        class="main-btn" style ='width:100%'  value="Logout" /> --}}
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a class="main-btn" style='width:100%' href="route('logout')"
                                    onclick="event.preventDefault();
                        this.closest('form').submit();">Log
                                    out</a>
                            </form>
                        </div>

                    </div>
                    <!-- teachers left -->
                </div>
                <div class="col-lg-8">
                    <div class="teachers-right mt-50">

                        <!-- nav -->
                        <div class="card p-5">
                            <div class="row">
                                <div class="curriculum-cont" style="width: 100%;">
                                    <a class="mb-3" href="/teacher/dashboard">Dashboard</a>
                                    <div class="title d-flex justify-content-between mb-3 align-items-center">
                                        <h6>{{ $course->courseName }}</h6>
                                        <a type="button" class="main-btn"
                                            href="{{ route('lecture.create', ['id' => $course->id]) }}">
                                            Add Lecture
                                        </a>

                                    </div>
                                    <div class="accordion" id="accordionExample">
                                        @foreach ($lectures as $lecture)
                                            <div class="card">
                                                <div class="card-header" id="heading{{ $loop->index }}">
                                                    <a href="#" data-toggle="collapse"
                                                        data-target="#collapse{{ $loop->index }}" class="collapsed"
                                                        aria-expanded="true" aria-controls="collapse{{ $loop->index }}">
                                                        <ul>
                                                            <li><i class="fa fa-file-o"></i></li>
                                                            <li><span class="lecture">Lecture
                                                                    {{ $loop->index + 1 }}</span>
                                                            </li>
                                                            <li><span class="head">{{ $lecture->name }}</span></li>
                                                            <li>
                                                                <span class="time d-none d-md-block">

                                                                </span>

                                                            </li>
                                                        </ul>
                                                    </a>
                                                </div>

                                                <div id="collapse{{ $loop->index }}" class="collapse"
                                                    aria-labelledby="heading{{ $loop->index }}"
                                                    data-parent="#accordionExample">
                                                    <div class="card-body">
                                                        <p>{{ $lecture->description }}</p>
                                                        <br>
                                                        <a href="{{ $lecture->link }}">{{ $lecture->link }}</a>
                                                        <br>
                                                        <br>
                                                        <br>
                                                        <div class="row">
                                                            @if ($lecture->image)
                                                                <div class="col-md-6">
                                                                    <img style="width: 100%"
                                                                        src="{{ asset('images/lecture') . '/' . $lecture->image }}"
                                                                        alt="">
                                                                </div>
                                                            @endif
                                                            @if ($lecture->video)
                                                                <div class="col-md-6">
                                                                    <video id="imagePreview2" width="auto" height="auto"
                                                                        controls style="width: 100%">
                                                                        <source id=""
                                                                            src="{{ asset('video/lecture') . '/' . $lecture->video }}"
                                                                            type="video/mp4">
                                                                        Your browser does not support the video tag.
                                                                    </video>
                                                                </div>
                                                            @endif
                                                        </div>

                                                        <div class="row justify-content-end">
                                                            <form action="{{ route('lecture.destroy', $lecture->id) }}"
                                                                method="POST">

                                                                <a class="btn btn-primary"
                                                                    href="{{ route('lecture.edit', $lecture->id) }}"><svg
                                                                        xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="feather feather-edit-2 align-middle">
                                                                        <path
                                                                            d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z">
                                                                        </path>
                                                                    </svg></a>
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="btn btn-danger"><svg
                                                                        xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="feather feather-trash align-middle">
                                                                        <polyline points="3 6 5 6 21 6"></polyline>
                                                                        <path
                                                                            d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                                        </path>
                                                                    </svg></button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach


                                    </div>
                                </div>

                                <!-- curriculum cont -->
                            </div>
                        </div>
                        <!-- tab content -->
                    </div>
                    <!-- teachers right -->
                </div>
            </div>
            <!-- row -->
        </div>
        <!-- container -->
    </section>
@endsection
