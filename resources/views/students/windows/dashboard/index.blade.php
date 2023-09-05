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
                            <p>{{ $teacher ?? ''->description }}</p>
                </div> --}}
                    <div>
                    {{-- <input type="submit" 
        class="main-btn" style ='width:100%'  value="Logout" /> --}}
        <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a class="main-btn" style ='width:100%' href="route('logout')"
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
                        <ul class="nav nav-justified" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="active" id="dashboard-tab" data-toggle="tab" href="#dashboard" role="tab"
                                    aria-controls="dashboard" aria-selected="true">Dashboard</a>
                            </li>
                            <li class="nav-item">
                                <a id="courses-tab" data-toggle="tab" href="#courses" role="tab" aria-controls="courses"
                                    aria-selected="false">Lecture</a>
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

                                        @foreach ($selectedCourses as $course)
                                            <div class="col-md-6">
                                                <div class="single-course mt-30">
                                                    <div class="thum">
                                                        <div class="image">
                                                            <img src="{{ asset('images/course') . '/' . $course['courseImage'] }}"
                                                                alt="Course">
                                                        </div>
                                                        <div class="price">
                                                            <span>₹{{ $course['price'] }}</span>
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
                                                        <h6 style='color:{{$course['status'] == 'pending' ? 'red' : 'black'}}'>{{$course['status']}}</h6>
                                                        <a href="/courses/{{ $course['id'] }}">
                                                            <h4>{{ $course['courseName'] }}</h4>
                                                        </a>
                                                        <div class="course-teacher">
                                                            <div class="thum">
                                                                <a href="#"><img
                                                                        src="{{ asset('images/teacher') . '/' . $course['teacherImage'] }}"
                                                                        alt="teacher"></a>
                                                            </div>
                                                            <div class="name">
                                                                <a href="#">
                                                                    <h6>{{ $course['name'] }}</h6>
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
                                        @endforeach
                                    </div>
                                    @include('students.windows.dashboard.partials.add_courses')
                                </div>

                                
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
                                                        <a href="#" data-toggle="collapse" data-target="#collapseOne"
                                                            aria-expanded="true" aria-controls="collapseOne">
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
                                    @include('students.windows.dashboard.partials.profile_edit')
                                    <hr>
                                    @include('students.windows.dashboard.partials.change_password')
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
