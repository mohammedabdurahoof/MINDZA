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
                                                        <h6
                                                            style='color:{{ $course['status'] == 'pending' ? 'red' : 'black' }}'>
                                                            {{ $course['status'] }}</h6>
                                                        <a href="{{ route('students.lecture', $course['id']) }}">
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
