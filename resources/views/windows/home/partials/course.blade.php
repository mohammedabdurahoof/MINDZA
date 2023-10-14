<section id="course-part" class="pt-115 pb-120 gray-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="section-title pb-45">
                    <h5>Our course</h5>
                    <h2>Featured courses </h2>
                </div> <!-- section title -->
            </div>
        </div> <!-- row -->
        <div class="row course-slide mt-30">
            @foreach ($course as $courses)
                <div class="col-md-4">
                    <div class="single-course mt-30">
                        <div class="thum">
                            <div class="image">
                                <img src="{{ asset('images/course') . '/' . $courses->courseImage }}" alt="Course">
                            </div>
                            <div class="price">
                                <span>{{ $courses->price == 0 ? 'Free' : '₹'.$courses->price }}</span>
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
        </div> <!-- course slide -->
    </div> <!-- container -->
</section>
