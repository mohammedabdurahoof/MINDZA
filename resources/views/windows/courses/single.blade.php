@extends('layouts.layout')

@section('contant')
    @include('partials.page_banner')
    <!--====== COURSES SINGEl PART START ======-->

    <section id="courses-single" class="pt-90 pb-120 gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="courses-single-left mt-30">
                        <div class="title">
                            <h3>{{ $course->courseName }}</h3>
                        </div>
                        <!-- title -->
                        <div class="course-terms">
                            <ul>
                                <li>
                                    <div class="teacher-name">
                                        <div class="thum">
                                            <img src="{{ asset('images/teacher') . '/' . $course->teacherImage }}"
                                                alt="Teacher">
                                        </div>
                                        <div class="name">
                                            <span>Teacher</span>
                                            <h6>{{ $course->name }}</h6>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="course-category">
                                        <span>Category</span>
                                        <h6>{{ $course->category }} </h6>
                                    </div>
                                </li>
                                <li>
                                    <div class="review">
                                        <span>Review</span>
                                        <ul>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li class="rating">(20 Reviews)</li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- course terms -->

                        <div class="courses-single-image pt-50">
                            <img src="{{ asset('images/course') . '/' . $course->courseImage }}" alt="Courses">
                        </div>
                        <!-- courses single image -->

                        <div class="courses-tab mt-30">
                            <ul class="nav nav-justified" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="active" id="overview-tab" data-toggle="tab" href="#overview" role="tab"
                                        aria-controls="overview" aria-selected="true">Overview</a>
                                </li>
                                {{-- <li class="nav-item">
                                    <a id="curriculum-tab" data-toggle="tab" href="#curriculum" role="tab"
                                        aria-controls="curriculum" aria-selected="false">Curriculum</a>
                                </li> --}}
                                <li class="nav-item">
                                    <a id="instructor-tab" data-toggle="tab" href="#instructor" role="tab"
                                        aria-controls="instructor" aria-selected="false">Instructor</a>
                                </li>
                                {{-- <li class="nav-item">
                                    <a id="reviews-tab" data-toggle="tab" href="#reviews" role="tab"
                                        aria-controls="reviews" aria-selected="false">Reviews</a>
                                </li> --}}
                            </ul>

                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="overview" role="tabpanel"
                                    aria-labelledby="overview-tab">
                                    <div class="overview-description">
                                        <div class="single-description pt-40">
                                            <h6>Course Summery</h6>
                                            <p>{{ $course->courseSummery }}</p>
                                        </div>
                                        <div class="single-description pt-40">
                                            <h6>Requirements</h6>
                                            <p>{{ $course->requirements }}</p>
                                        </div>
                                    </div>
                                    <!-- overview description -->
                                </div>
                                {{-- <div class="tab-pane fade" id="curriculum" role="tabpanel" aria-labelledby="curriculum-tab">
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

                                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                                    data-parent="#accordionExample">
                                                    <div class="card-body">
                                                        <p>Ut quis scelerisque risus, et viverra nisi. Phasellus ultricies
                                                            luctus augue, eget maximus felis laoreet quis. Maecenasbibendum
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
                                                        <p>Ut quis scelerisque risus, et viverra nisi. Phasellus ultricies
                                                            luctus augue, eget maximus felis laoreet quis. Maecenasbibendum
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
                                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                                    data-parent="#accordionExample">
                                                    <div class="card-body">
                                                        <p>Ut quis scelerisque risus, et viverra nisi. Phasellus ultricies
                                                            luctus augue, eget maximus felis laoreet quis. Maecenasbibendum
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
                                                        <p>Ut quis scelerisque risus, et viverra nisi. Phasellus ultricies
                                                            luctus augue, eget maximus felis laoreet quis. Maecenasbibendum
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
                                                        <p>Ut quis scelerisque risus, et viverra nisi. Phasellus ultricies
                                                            luctus augue, eget maximus felis laoreet quis. Maecenasbibendum
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
                                                        <p>Ut quis scelerisque risus, et viverra nisi. Phasellus ultricies
                                                            luctus augue, eget maximus felis laoreet quis. Maecenasbibendum
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
                                                <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven"
                                                    data-parent="#accordionExample">
                                                    <div class="card-body">
                                                        <p>Ut quis scelerisque risus, et viverra nisi. Phasellus ultricies
                                                            luctus augue, eget maximus felis laoreet quis. Maecenasbibendum
                                                            tempor eros.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- curriculum cont -->
                                </div> --}}
                                <div class="tab-pane fade" id="instructor" role="tabpanel" aria-labelledby="instructor-tab">
                                    <div class="instructor-cont">
                                        <div class="instructor-author">
                                            <div class="author-thum">
                                                <img src="{{ asset('images/teacher') . '/' . $course->teacherImage }}"
                                                    alt="Instructor">
                                            </div>
                                            <div class="author-name">
                                                <a href="/teachers/{{ $course->teacherId }}">
                                                    <h5>{{ $course->name }}</h5>
                                                </a>
                                                <span>{{ $course->position }}</span>
                                                <p>
                                                    {{ $course->description }}
                                                </p>
                                                <ul class="social">
                                                    <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        {{-- <div class="instructor-description pt-25">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus fuga
                                                ratione molestiae unde provident quibusdam sunt, doloremque. Error omnis
                                                mollitia, ex dolor sequi. Et, quibusdam excepturi. Animi assumenda,
                                                consequuntur dolorum odio sit inventore aliquid, optio fugiat alias.
                                                Veritatis minima, dicta quam repudiandae repellat non sit, distinctio,
                                                impedit, expedita tempora numquam?</p>
                                        </div> --}}
                                    </div>
                                    <!-- instructor cont -->
                                </div>
                                {{-- <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
                                    <div class="reviews-cont">
                                        <div class="title">
                                            <h6>Student Reviews</h6>
                                        </div>
                                        <ul>
                                            <li>
                                                <div class="single-reviews">
                                                    <div class="reviews-author">
                                                        <div class="author-thum">
                                                            <img src="{{ asset('assets/images/review/r-1.jpg') }}" alt="Reviews">
                                                        </div>
                                                        <div class="author-name">
                                                            <h6>Bobby Aktar</h6>
                                                            <span>April 03, 2019</span>
                                                        </div>
                                                    </div>
                                                    <div class="reviews-description pt-20">
                                                        <p>There are many variations of passages of Lorem Ipsum available,
                                                            but the majority have suffered alteration in some form, by
                                                            injected humour, or randomised words which.</p>
                                                        <div class="rating">
                                                            <ul>
                                                                <li><i class="fa fa-star"></i></li>
                                                                <li><i class="fa fa-star"></i></li>
                                                                <li><i class="fa fa-star"></i></li>
                                                                <li><i class="fa fa-star"></i></li>
                                                                <li><i class="fa fa-star"></i></li>
                                                            </ul>
                                                            <span>/ 5 Star</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- single reviews -->
                                            </li>
                                            <li>
                                                <div class="single-reviews">
                                                    <div class="reviews-author">
                                                        <div class="author-thum">
                                                            <img src="{{ asset('assets/images/review/r-2.jpg') }}" alt="Reviews">
                                                        </div>
                                                        <div class="author-name">
                                                            <h6>Humayun Ahmed</h6>
                                                            <span>April 13, 2019</span>
                                                        </div>
                                                    </div>
                                                    <div class="reviews-description pt-20">
                                                        <p>There are many variations of passages of Lorem Ipsum available,
                                                            but the majority have suffered alteration in some form, by
                                                            injected humour, or randomised words which.</p>
                                                        <div class="rating">
                                                            <ul>
                                                                <li><i class="fa fa-star"></i></li>
                                                                <li><i class="fa fa-star"></i></li>
                                                                <li><i class="fa fa-star"></i></li>
                                                                <li><i class="fa fa-star"></i></li>
                                                                <li><i class="fa fa-star"></i></li>
                                                            </ul>
                                                            <span>/ 5 Star</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- single reviews -->
                                            </li>
                                            <li>
                                                <div class="single-reviews">
                                                    <div class="reviews-author">
                                                        <div class="author-thum">
                                                            <img src="{{ asset('assets/images/review/r-3.jpg') }}" alt="Reviews">
                                                        </div>
                                                        <div class="author-name">
                                                            <h6>Tania Aktar</h6>
                                                            <span>April 20, 2019</span>
                                                        </div>
                                                    </div>
                                                    <div class="reviews-description pt-20">
                                                        <p>There are many variations of passages of Lorem Ipsum available,
                                                            but the majority have suffered alteration in some form, by
                                                            injected humour, or randomised words which.</p>
                                                        <div class="rating">
                                                            <ul>
                                                                <li><i class="fa fa-star"></i></li>
                                                                <li><i class="fa fa-star"></i></li>
                                                                <li><i class="fa fa-star"></i></li>
                                                                <li><i class="fa fa-star"></i></li>
                                                                <li><i class="fa fa-star"></i></li>
                                                            </ul>
                                                            <span>/ 5 Star</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- single reviews -->
                                            </li>
                                        </ul>
                                        <div class="title pt-15">
                                            <h6>Leave A Comment</h6>
                                        </div>
                                        <div class="reviews-form">
                                            <form action="#">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-single">
                                                            <input type="text" placeholder="Fast name">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-single">
                                                            <input type="text" placeholder="Last Name">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-single">
                                                            <div class="rate-wrapper">
                                                                <div class="rate-label">Your Rating:</div>
                                                                <div class="rate">
                                                                    <div class="rate-item"><i class="fa fa-star"
                                                                            aria-hidden="true"></i></div>
                                                                    <div class="rate-item"><i class="fa fa-star"
                                                                            aria-hidden="true"></i></div>
                                                                    <div class="rate-item"><i class="fa fa-star"
                                                                            aria-hidden="true"></i></div>
                                                                    <div class="rate-item"><i class="fa fa-star"
                                                                            aria-hidden="true"></i></div>
                                                                    <div class="rate-item"><i class="fa fa-star"
                                                                            aria-hidden="true"></i></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-single">
                                                            <textarea placeholder="Comment"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-single">
                                                            <button type="button" class="main-btn">Post Comment</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- row -->
                                            </form>
                                        </div>
                                    </div>
                                    <!-- reviews cont -->
                                </div> --}}
                            </div>
                            <!-- tab content -->
                        </div>
                    </div>
                    <!-- courses single left -->

                </div>
                <div class="col-lg-4">
                    <div class="row">
                        <div class="col-lg-12 col-md-6">
                            <div class="course-features mt-30">
                                <h4>Course Features </h4>
                                <ul>
                                    <li><i class="fa fa-clock-o"></i>Duaration : <span>{{ $course->duration }} Days</span>
                                    </li>
                                    {{-- <li><i class="fa fa-clone"></i>Leactures : <span>09</span></li>
                                    <li><i class="fa fa-beer"></i>Quizzes : <span>05</span></li> --}}
                                    <li><i class="fa fa-user-o"></i>Students : <span>52</span></li>
                                </ul>
                                <div class="price-button pt-10">
                                    <span>Price : <b>₹{{ $course->price }}</b></span>
                                    <a href="/register" class="main-btn">Enroll Now</a>
                                </div>
                            </div>
                            <!-- course features -->
                        </div>
                        <div class="col-lg-12 col-md-6">
                            <div class="You-makelike mt-30">
                                <h4>You make like </h4>
                                @foreach ($newCourses as $courses)
                                    <div class="single-makelike mt-20">
                                        <div class="image">
                                            <img src="{{ asset('assets/images/your-make/y-1.jpg') }}" alt="Image">
                                        </div>
                                        <div class="cont">
                                            <a href="/courses/{{ $courses->id }}">
                                                <h4>{{ $courses->courseName }}</h4>
                                            </a>
                                            <ul>
                                                <li><a href="#"><i class="fa fa-user"></i>31</a></li>
                                                <li>${{ $courses->price }}</li>
                                            </ul>
                                        </div>
                                    </div>
                                @endforeach

                                {{-- <div class="single-makelike mt-20">
                                    <div class="image">
                                        <img src="{{ asset('assets/images/your-make/y-1.jpg') }}" alt="Image">
                                    </div>
                                    <div class="cont">
                                        <a href="#">
                                            <h4>How to build a basic game with java </h4>
                                        </a>
                                        <ul>
                                            <li><a href="#"><i class="fa fa-user"></i>31</a></li>
                                            <li>$50</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="single-makelike mt-20">
                                    <div class="image">
                                        <img src="{{ asset('assets/images/your-make/y-1.jpg') }}" alt="Image">
                                    </div>
                                    <div class="cont">
                                        <a href="#">
                                            <h4>Basic accounting from primary</h4>
                                        </a>
                                        <ul>
                                            <li><a href="#"><i class="fa fa-user"></i>31</a></li>
                                            <li>$50</li>
                                        </ul>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- row -->
            {{-- <div class="row"> --}}
            {{-- <div class="col-lg-8"> --}}
            <div class="related-courses pt-95">
                <div class="title">
                    <h3>Related Courses</h3>
                </div>
                <div class="row">
                    @foreach ($oldCourses as $courses)
                        <div class="col-md-4">
                            <div class="single-course mt-30">
                                <div class="thum">
                                    <div class="image">
                                        <img src="{{ asset('images/course') . '/' . $courses->courseImage }}"
                                            alt="Course">
                                    </div>
                                    <div class="price">
                                        <span>₹{{ $courses->price }}</span>
                                    </div>
                                </div>
                                <div class="cont">
                                    <ul>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                    <span>(20 Reviews)</span><br>
                                    <a href="/courses/{{ $courses->id }}">
                                        <h4>{{ $courses->courseName }}</h4>
                                    </a>
                                    <div class="course-teacher">
                                        <div class="thum">
                                            <a href="/teachers/{{ $courses->teacherId }}"><img
                                                    src="{{ asset('images/teacher') . '/' . $courses->teacherImage }}"
                                                    alt="teacher"></a>
                                        </div>
                                        <div class="name">
                                            <a href="/teachers/{{ $courses->teacherId }}">
                                                <h6>{{ $courses->name }}</h6>
                                            </a>
                                        </div>
                                        <div class="admin">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-user"></i><span>31</span></a>
                                                </li>
                                                <li><a href="#"><i class="fa fa-heart"></i><span>10</span></a>
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
                <!-- row -->
            </div>
            <!-- related courses -->
            {{-- </div>
            </div> --}}
            <!-- row -->
        </div>
        <!-- container -->
    </section>

    <!--====== COURSES SINGEl PART ENDS ======-->
@endsection
