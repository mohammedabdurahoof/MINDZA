@extends('layouts.layout')

@section('contant')
    @include('partials.page_banner')
    <section id="teachers-single" class="pt-70 pb-120 gray-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-8">
                    <div class="teachers-left mt-50">
                        <div class="hero">
                            <img src="{{ asset('images/student') . '/' . $student->image }}" alt="student">
                        </div>
                        <div class="name">
                            <h6>{{ $student->name }}</h6>
                            <span>{{ $student->phone }}</span>
                            <span>{{ $student->email }}</span>
                        </div>
                        <div class="social">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus-square"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
                            </ul>
                        </div>
                        {{-- <div class="description">
                            <p>{{ $teacher->description }}</p>
                </div> --}}
                    </div>
                    <!-- teachers left -->
                </div>
                <div class="col-lg-8">
                    <div class="teachers-right mt-50">
                        <ul class="nav nav-justified" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="active" id="dashboard-tab" data-toggle="tab" href="#dashboard" role="tab"
                                    aria-controls="dashboard" aria-selected="true">Dashboard</a>
                            </li>
                            <li class="nav-item">
                                <a id="courses-tab" data-toggle="tab" href="#courses" role="tab" aria-controls="courses"
                                    aria-selected="false">Courses</a>
                            </li>
                            <li class="nav-item">
                                <a id="reviews-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="reviews"
                                    aria-selected="false">Profile</a>
                            </li>
                        </ul>
                        <!-- nav -->
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="dashboard" role="tabpanel"
                                aria-labelledby="dashboard-tab">
                                <div class="dashboard-cont">

                                    <h6 class="pt-3">Hi! welcome</h6>
                                    <h4 class="pt-1" style="color: #315377">{{ $student->name }}</h4>
                                    <div class="title pt-3">
                                        <h6>COURSE STATUS</h6>
                                    </div>
                                    <div class="row">
                                        {{-- @foreach ($courses as $course)
                                            <div class="col-md-6">
                                                <div class="single-course mt-30">
                                                    <div class="thum">
                                                        <div class="image">
                                                            <img src="{{ asset('images/course') . '/' . $course->image }}"
                                                                alt="Course">
                                                        </div>
                                                        <div class="price">
                                                            <span>₹{{ $course->price }}</span>
                                                        </div>
                                                    </div>
                                                    <div class="cont border">
                                                        <ul>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                        </ul>
                                                        <span>(20 Reviews)</span><br>
                                                        <a href="/courses/{{ $course->id }}">
                                                            <h4>{{ $course->courseName }}</h4>
                                                        </a>
                                                        <div class="course-teacher">
                                                            <div class="thum">
                                                                <a href="#"><img
                                                                        src="{{ asset('images/teacher') . '/' . $teacher->image }}"
                                                                        alt="teacher"></a>
                                                            </div>
                                                            <div class="name">
                                                                <a href="#">
                                                                    <h6>{{ $teacher->name }}</h6>
                                                                </a>
                                                            </div>
                                                            <div class="admin">
                                                                <ul>
                                                                    <li><a href="#"><i
                                                                                class="fa fa-user"></i><span>31</span></a>
                                                                    </li>
                                                                    <li><a href="#"><i
                                                                                class="fa fa-heart"></i><span>10</span></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- single course -->
                                            </div>
                                        @endforeach --}}
                                    </div>
                                    <div class="form-group float-right">
                                        <input type="submit" name="submit" id="add-course-btn"
                                            class="main-btn register-submit" value="Add Course" />
                                    </div>

                                    <form action="" id="add-course-form">
                                        <div class="form-group" style="overflow: visible; margin-bottom: 5rem;">
                                            <select class="form-control" name="course" id="exampleFormControlSelect1"
                                                required>
                                                <option selected value="">choose a course</option>
                                                @foreach ($courses as $course)
                                                    <option value="{{ $course->id }}"
                                                        {{ Session::get('value.course') == $course->id ? 'selected' : '' }}>
                                                        {{ $course->courseName }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group float-right mt-3">
                                            <input type="submit" name="submit" id="submit"
                                                class="main-btn register-submit" value="Register" />
                                        </div>
                                    </form>
                                    <div style="height: 7.5rem;"></div>
                                </div>

                                {{-- <div class="dashboard-cont">
                                    <div class="single-dashboard pt-40">
                                        <h5>About</h5>
                                        <!-- <p>{{ $teacher->about }}</p> -->
                    </div>
                    <!-- single dashboard -->
                    <div class="single-dashboard pt-40">
                        <h5>Achievements</h5>
                        <!-- <p>{{ $teacher->achievements }}</p> -->
                    </div>
                    <!-- single dashboard -->
                    <div class="single-dashboard pt-40">
                        <h5>My Objective</h5>
                        <!-- <p>{{ $teacher->objective }}</p> -->
                    </div>
                    <!-- single dashboard -->
                </div> --}}
                                <!-- dashboard cont -->
                            </div>
                            <div class="tab-pane fade" id="courses" role="tabpanel" aria-labelledby="courses-tab">
                                <div class="courses-cont pt-20">
                                    <div class="row">
                                        <div class="curriculum-cont">
                                            <div class="title">
                                                <h6>Learn basic javascript Lecture Started</h6>
                                            </div>
                                            <div class="accordion" id="accordionExample">
                                                <div class="card">
                                                    <div class="card-header" id="headingOne">
                                                        <a href="#" data-toggle="collapse"
                                                            data-target="#collapseOne" aria-expanded="true"
                                                            aria-controls="collapseOne">
                                                            <ul>
                                                                <li><i class="fa fa-file-o"></i></li>
                                                                <li><span class="lecture">Lecture 1.1</span></li>
                                                                <li><span class="head">What is javascript</span></li>
                                                                <li><span class="time d-none d-md-block"><i
                                                                            class="fa fa-clock-o"></i> <span>
                                                                            00.30.00</span></span>
                                                                </li>
                                                            </ul>
                                                        </a>
                                                    </div>

                                                    <div id="collapseOne" class="collapse show"
                                                        aria-labelledby="headingOne" data-parent="#accordionExample">
                                                        <div class="card-body">
                                                            <p>Ut quis scelerisque risus, et viverra nisi. Phasellus
                                                                ultricies
                                                                luctus augue, eget maximus felis laoreet quis.
                                                                Maecenasbibendum
                                                                tempor eros.</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="card">
                                                    <div class="card-header" id="headingTow">
                                                        <a href="#" data-toggle="collapse" class="collapsed"
                                                            data-target="#collapseTow" aria-expanded="true"
                                                            aria-controls="collapseTow">
                                                            <ul>
                                                                <li><i class="fa fa-file-o"></i></li>
                                                                <li><span class="lecture">Lecture 1.2</span></li>
                                                                <li><span class="head">What is javascript</span></li>
                                                                <li><span class="time d-none d-md-block"><i
                                                                            class="fa fa-clock-o"></i> <span>
                                                                            00.30.00</span></span>
                                                                </li>
                                                            </ul>
                                                        </a>
                                                    </div>

                                                    <div id="collapseTow" class="collapse" aria-labelledby="headingTow"
                                                        data-parent="#accordionExample">
                                                        <div class="card-body">
                                                            <p>Ut quis scelerisque risus, et viverra nisi. Phasellus
                                                                ultricies
                                                                luctus augue, eget maximus felis laoreet quis.
                                                                Maecenasbibendum
                                                                tempor eros.</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="card">
                                                    <div class="card-header" id="headingThree">
                                                        <a href="#" data-toggle="collapse" class="collapsed"
                                                            data-target="#collapseThree" aria-expanded="false"
                                                            aria-controls="collapseThree">
                                                            <ul>
                                                                <li><i class="fa fa-file-o"></i></li>
                                                                <li><span class="lecture">Lecture 1.3</span></li>
                                                                <li><span class="head">What is javascript</span></li>
                                                                <li><span class="time d-none d-md-block"><i
                                                                            class="fa fa-clock-o"></i> <span>
                                                                            00.30.00</span></span>
                                                                </li>
                                                            </ul>
                                                        </a>
                                                    </div>
                                                    <div id="collapseThree" class="collapse"
                                                        aria-labelledby="headingThree" data-parent="#accordionExample">
                                                        <div class="card-body">
                                                            <p>Ut quis scelerisque risus, et viverra nisi. Phasellus
                                                                ultricies
                                                                luctus augue, eget maximus felis laoreet quis.
                                                                Maecenasbibendum
                                                                tempor eros.</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="card">
                                                    <div class="card-header" id="headingFore">
                                                        <a href="#" data-toggle="collapse" class="collapsed"
                                                            data-target="#collapseFore" aria-expanded="false"
                                                            aria-controls="collapseFore">
                                                            <ul>
                                                                <li><i class="fa fa-file-o"></i></li>
                                                                <li><span class="lecture">Lecture 1.4</span></li>
                                                                <li><span class="head">What is javascript</span></li>
                                                                <li><span class="time d-none d-md-block"><i
                                                                            class="fa fa-clock-o"></i> <span>
                                                                            00.30.00</span></span>
                                                                </li>
                                                            </ul>
                                                        </a>
                                                    </div>
                                                    <div id="collapseFore" class="collapse" aria-labelledby="headingFore"
                                                        data-parent="#accordionExample">
                                                        <div class="card-body">
                                                            <p>Ut quis scelerisque risus, et viverra nisi. Phasellus
                                                                ultricies
                                                                luctus augue, eget maximus felis laoreet quis.
                                                                Maecenasbibendum
                                                                tempor eros.</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="card">
                                                    <div class="card-header" id="headingFive">
                                                        <a href="#" data-toggle="collapse" class="collapsed"
                                                            data-target="#collapseFive" aria-expanded="false"
                                                            aria-controls="collapseFive">
                                                            <ul>
                                                                <li><i class="fa fa-file-o"></i></li>
                                                                <li><span class="lecture">Lecture 1.5</span></li>
                                                                <li><span class="head">What is javascript</span></li>
                                                                <li><span class="time d-none d-md-block"><i
                                                                            class="fa fa-clock-o"></i> <span>
                                                                            00.30.00</span></span>
                                                                </li>
                                                            </ul>
                                                        </a>
                                                    </div>
                                                    <div id="collapseFive" class="collapse" aria-labelledby="headingFive"
                                                        data-parent="#accordionExample">
                                                        <div class="card-body">
                                                            <p>Ut quis scelerisque risus, et viverra nisi. Phasellus
                                                                ultricies
                                                                luctus augue, eget maximus felis laoreet quis.
                                                                Maecenasbibendum
                                                                tempor eros.</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="card">
                                                    <div class="card-header" id="headingSix">
                                                        <a href="#" data-toggle="collapse" class="collapsed"
                                                            data-target="#collapseSix" aria-expanded="false"
                                                            aria-controls="collapseSix">
                                                            <ul>
                                                                <li><i class="fa fa-file-o"></i></li>
                                                                <li><span class="lecture">Lecture 1.6</span></li>
                                                                <li><span class="head">What is javascript</span></li>
                                                                <li><span class="time d-none d-md-block"><i
                                                                            class="fa fa-clock-o"></i> <span>
                                                                            00.30.00</span></span>
                                                                </li>
                                                            </ul>
                                                        </a>
                                                    </div>
                                                    <div id="collapseSix" class="collapse" aria-labelledby="headingSix"
                                                        data-parent="#accordionExample">
                                                        <div class="card-body">
                                                            <p>Ut quis scelerisque risus, et viverra nisi. Phasellus
                                                                ultricies
                                                                luctus augue, eget maximus felis laoreet quis.
                                                                Maecenasbibendum
                                                                tempor eros.</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="card">
                                                    <div class="card-header" id="headingSeven">
                                                        <a href="#" data-toggle="collapse" class="collapsed"
                                                            data-target="#collapseSeven" aria-expanded="false"
                                                            aria-controls="collapseSeven">
                                                            <ul>
                                                                <li><i class="fa fa-file-o"></i></li>
                                                                <li><span class="lecture">Lecture 1.7</span></li>
                                                                <li><span class="head">What is javascript</span></li>
                                                                <li><span class="time d-none d-md-block"><i
                                                                            class="fa fa-clock-o"></i> <span>
                                                                            00.30.00</span></span>
                                                                </li>
                                                            </ul>
                                                        </a>
                                                    </div>
                                                    <div id="collapseSeven" class="collapse"
                                                        aria-labelledby="headingSeven" data-parent="#accordionExample">
                                                        <div class="card-body">
                                                            <p>Ut quis scelerisque risus, et viverra nisi. Phasellus
                                                                ultricies
                                                                luctus augue, eget maximus felis laoreet quis.
                                                                Maecenasbibendum
                                                                tempor eros.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="curriculum-cont">
                                            <div class="title">
                                                <h6>Learn basic javascript Lecture Started</h6>
                                            </div>
                                            <div class="accordion" id="accordionExample">
                                                <div class="card">
                                                    <div class="card-header" id="headingOne">
                                                        <a href="#" data-toggle="collapse"
                                                            data-target="#collapseOne" aria-expanded="true"
                                                            aria-controls="collapseOne">
                                                            <ul>
                                                                <li><i class="fa fa-file-o"></i></li>
                                                                <li><span class="lecture">Lecture 1.1</span></li>
                                                                <li><span class="head">What is javascript</span></li>
                                                                <li><span class="time d-none d-md-block"><i
                                                                            class="fa fa-clock-o"></i> <span>
                                                                            00.30.00</span></span>
                                                                </li>
                                                            </ul>
                                                        </a>
                                                    </div>

                                                    <div id="collapseOne" class="collapse show"
                                                        aria-labelledby="headingOne" data-parent="#accordionExample">
                                                        <div class="card-body">
                                                            <p>Ut quis scelerisque risus, et viverra nisi. Phasellus
                                                                ultricies
                                                                luctus augue, eget maximus felis laoreet quis.
                                                                Maecenasbibendum
                                                                tempor eros.</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="card">
                                                    <div class="card-header" id="headingTow">
                                                        <a href="#" data-toggle="collapse" class="collapsed"
                                                            data-target="#collapseTow" aria-expanded="true"
                                                            aria-controls="collapseTow">
                                                            <ul>
                                                                <li><i class="fa fa-file-o"></i></li>
                                                                <li><span class="lecture">Lecture 1.2</span></li>
                                                                <li><span class="head">What is javascript</span></li>
                                                                <li><span class="time d-none d-md-block"><i
                                                                            class="fa fa-clock-o"></i> <span>
                                                                            00.30.00</span></span>
                                                                </li>
                                                            </ul>
                                                        </a>
                                                    </div>

                                                    <div id="collapseTow" class="collapse" aria-labelledby="headingTow"
                                                        data-parent="#accordionExample">
                                                        <div class="card-body">
                                                            <p>Ut quis scelerisque risus, et viverra nisi. Phasellus
                                                                ultricies
                                                                luctus augue, eget maximus felis laoreet quis.
                                                                Maecenasbibendum
                                                                tempor eros.</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="card">
                                                    <div class="card-header" id="headingThree">
                                                        <a href="#" data-toggle="collapse" class="collapsed"
                                                            data-target="#collapseThree" aria-expanded="false"
                                                            aria-controls="collapseThree">
                                                            <ul>
                                                                <li><i class="fa fa-file-o"></i></li>
                                                                <li><span class="lecture">Lecture 1.3</span></li>
                                                                <li><span class="head">What is javascript</span></li>
                                                                <li><span class="time d-none d-md-block"><i
                                                                            class="fa fa-clock-o"></i> <span>
                                                                            00.30.00</span></span>
                                                                </li>
                                                            </ul>
                                                        </a>
                                                    </div>
                                                    <div id="collapseThree" class="collapse"
                                                        aria-labelledby="headingThree" data-parent="#accordionExample">
                                                        <div class="card-body">
                                                            <p>Ut quis scelerisque risus, et viverra nisi. Phasellus
                                                                ultricies
                                                                luctus augue, eget maximus felis laoreet quis.
                                                                Maecenasbibendum
                                                                tempor eros.</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="card">
                                                    <div class="card-header" id="headingFore">
                                                        <a href="#" data-toggle="collapse" class="collapsed"
                                                            data-target="#collapseFore" aria-expanded="false"
                                                            aria-controls="collapseFore">
                                                            <ul>
                                                                <li><i class="fa fa-file-o"></i></li>
                                                                <li><span class="lecture">Lecture 1.4</span></li>
                                                                <li><span class="head">What is javascript</span></li>
                                                                <li><span class="time d-none d-md-block"><i
                                                                            class="fa fa-clock-o"></i> <span>
                                                                            00.30.00</span></span>
                                                                </li>
                                                            </ul>
                                                        </a>
                                                    </div>
                                                    <div id="collapseFore" class="collapse" aria-labelledby="headingFore"
                                                        data-parent="#accordionExample">
                                                        <div class="card-body">
                                                            <p>Ut quis scelerisque risus, et viverra nisi. Phasellus
                                                                ultricies
                                                                luctus augue, eget maximus felis laoreet quis.
                                                                Maecenasbibendum
                                                                tempor eros.</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="card">
                                                    <div class="card-header" id="headingFive">
                                                        <a href="#" data-toggle="collapse" class="collapsed"
                                                            data-target="#collapseFive" aria-expanded="false"
                                                            aria-controls="collapseFive">
                                                            <ul>
                                                                <li><i class="fa fa-file-o"></i></li>
                                                                <li><span class="lecture">Lecture 1.5</span></li>
                                                                <li><span class="head">What is javascript</span></li>
                                                                <li><span class="time d-none d-md-block"><i
                                                                            class="fa fa-clock-o"></i> <span>
                                                                            00.30.00</span></span>
                                                                </li>
                                                            </ul>
                                                        </a>
                                                    </div>
                                                    <div id="collapseFive" class="collapse" aria-labelledby="headingFive"
                                                        data-parent="#accordionExample">
                                                        <div class="card-body">
                                                            <p>Ut quis scelerisque risus, et viverra nisi. Phasellus
                                                                ultricies
                                                                luctus augue, eget maximus felis laoreet quis.
                                                                Maecenasbibendum
                                                                tempor eros.</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="card">
                                                    <div class="card-header" id="headingSix">
                                                        <a href="#" data-toggle="collapse" class="collapsed"
                                                            data-target="#collapseSix" aria-expanded="false"
                                                            aria-controls="collapseSix">
                                                            <ul>
                                                                <li><i class="fa fa-file-o"></i></li>
                                                                <li><span class="lecture">Lecture 1.6</span></li>
                                                                <li><span class="head">What is javascript</span></li>
                                                                <li><span class="time d-none d-md-block"><i
                                                                            class="fa fa-clock-o"></i> <span>
                                                                            00.30.00</span></span>
                                                                </li>
                                                            </ul>
                                                        </a>
                                                    </div>
                                                    <div id="collapseSix" class="collapse" aria-labelledby="headingSix"
                                                        data-parent="#accordionExample">
                                                        <div class="card-body">
                                                            <p>Ut quis scelerisque risus, et viverra nisi. Phasellus
                                                                ultricies
                                                                luctus augue, eget maximus felis laoreet quis.
                                                                Maecenasbibendum
                                                                tempor eros.</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="card">
                                                    <div class="card-header" id="headingSeven">
                                                        <a href="#" data-toggle="collapse" class="collapsed"
                                                            data-target="#collapseSeven" aria-expanded="false"
                                                            aria-controls="collapseSeven">
                                                            <ul>
                                                                <li><i class="fa fa-file-o"></i></li>
                                                                <li><span class="lecture">Lecture 1.7</span></li>
                                                                <li><span class="head">What is javascript</span></li>
                                                                <li><span class="time d-none d-md-block"><i
                                                                            class="fa fa-clock-o"></i> <span>
                                                                            00.30.00</span></span>
                                                                </li>
                                                            </ul>
                                                        </a>
                                                    </div>
                                                    <div id="collapseSeven" class="collapse"
                                                        aria-labelledby="headingSeven" data-parent="#accordionExample">
                                                        <div class="card-body">
                                                            <p>Ut quis scelerisque risus, et viverra nisi. Phasellus
                                                                ultricies
                                                                luctus augue, eget maximus felis laoreet quis.
                                                                Maecenasbibendum
                                                                tempor eros.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- curriculum cont -->
                                    </div>
                                    <!-- row -->
                                </div>
                                <!-- courses cont -->
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="reviews-tab">
                                <div class="reviews-cont">
                                    <div class="title">
                                        <h6>Edit Student</h6>
                                    </div>
                                    <form method="POST" id="signup-form" class="signup-form"
                                        action="{{ route('students.update', $student->id) }}" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        {{-- <h2 class="form-title pb-20">Register Now</h2> --}}
                                        @if ($errors->any())
                                            <span
                                                class="text-danger text-left mb-4">{{ implode('', $errors->all(':message')) }}</span>
                                        @endif
                                        <div class="avatar-upload">
                                            <div class="avatar-edit">
                                                <input type="file" name="image" id="imageUpload"
                                                    accept=".png, .jpg, .jpeg" />
                                                <label for="imageUpload"></label>
                                            </div>
                                            <div class="avatar-preview">
                                                <div id="imagePreview"
                                                    style="background-image: url({{ asset('images/student') . '/' . $student->image }});">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 col-md-4">
                                                <div class="form-group">
                                                    <input type="text" class="form-input" name="name"
                                                        id="name" placeholder="Your Name"
                                                        value="{{ $student->name }}" required />
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-8">
                                                <div class="form-group">
                                                    <input type="email" class="form-input" name="email"
                                                        id="email" disabled placeholder="Your Email"
                                                        value="{{ $student->email }}" required />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-12 col-md-6">
                                                <div class="form-group">
                                                    <input type="tel" class="form-input" name="phone"
                                                        id="phone" placeholder="Your Mobile Number"
                                                        value="{{ $student->phone }}" required />
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="form-group">
                                                    <input type="text" class="form-input" name="address"
                                                        id="address" placeholder="Your Address"
                                                        value="{{ $student->address }}" required />
                                                </div>
                                            </div>
                                        </div>

                                        <h6 class="mb-3">Select your Gender:</h6>
                                        <div class="row justify-content-around">
                                            <div class="form-group">
                                                <input type="radio" name="gender" id="male"
                                                    placeholder="Your Gender"
                                                    {{ $student->gender == 'Male' ? 'checked' : '' }} value="Male"
                                                    required />
                                                <label for="male"><b>Male</b></label><br>
                                            </div>
                                            <div class="form-group">
                                                <input type="radio" name="gender" id="female"
                                                    placeholder="Your Gender"
                                                    {{ $student->gender == 'Female' ? 'checked' : '' }} value="Female"
                                                    required />
                                                <label for="female"><b>Female</b></label><br>
                                            </div>
                                            <div class="form-group">
                                                <input type="radio" name="gender" id="other"
                                                    placeholder="Your Gender" value="Other" required
                                                    {{ $student->gender == 'Other' ? 'checked' : '' }} />

                                                <label for="other"><b>Other</b></label><br>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <input type="submit" name="submit" id="submit"
                                                class="main-btn register-submit" value="Edit" />
                                        </div>

                                    </form>

                                    <hr>

                                    <div class="title pt-15 pb-15">
                                        <h6>Change Password</h6>
                                    </div>
                                    <form action="{{ route('students.changePassword') }}" method="post">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-group" style="overflow: visible">
                                            <input type="password" class="form-input" name="password" id="password"
                                                placeholder="New Password" />
                                            <span toggle="#password"
                                                class="zmdi zmdi-eye field-icon toggle-password"></span>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-input" name="password_confirmation"
                                                id="password_confirmation" placeholder="Confirm Password" required />
                                            <span toggle="#password"
                                                class="zmdi zmdi-eye field-icon toggle-password"></span>
                                        </div>
                                        <div class="form-group">
                                            <input type="submit" name="submit" id="submit"
                                                class="main-btn register-submit" value="Change" />
                                        </div>
                                    </form>



                                </div>
                                <!-- reviews cont -->
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
