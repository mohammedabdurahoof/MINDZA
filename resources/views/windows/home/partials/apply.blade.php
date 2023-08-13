<section id="category-2-part">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="section-title mt-50">
                    <h5>About us</h5>
                    <h2>Welcome to Mindza </h2>
                </div> <!-- section title -->
                <div class="about-cont">
                    <p>Mindza is dedicated to promoting mental well-being and empowering individuals to overcome
                        challenges, enhance their resilience, and lead more fulfilling lives. By blending convenience,
                        expertise, and compassion, Mindza continues to make a positive impact in the realm of online
                        mental health services.<br> </p>
                    <a href="/about" class="main-btn mt-55">Learn More</a>
                </div>
            </div> <!-- about cont -->
            {{-- <div class="col-lg-6">
                <div class="category-2-items pt-10">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="single-items text-center mt-30">
                                <div class="items-image">
                                    <img src="images/category/ctg-1.jpg" alt="Category">
                                </div>
                                <div class="items-cont">
                                    <a href="#">
                                        <h5>App Design</h5>
                                        <span>24 courses</span>
                                    </a>
                                </div>
                            </div> <!-- single items -->
                        </div>
                        <div class="col-md-6">
                            <div class="single-items text-center mt-30">
                                <div class="items-image">
                                    <img src="images/category/ctg-2.jpg" alt="Category">
                                </div>
                                <div class="items-cont">
                                    <a href="#">
                                        <h5>App development</h5>
                                        <span>57 courses </span>
                                    </a>
                                </div>
                            </div> <!-- single items -->
                        </div>
                        <div class="col-md-6">
                            <div class="single-items text-center mt-30">
                                <div class="items-image">
                                    <img src="images/category/ctg-3.jpg" alt="Category">
                                </div>
                                <div class="items-cont">
                                    <a href="#">
                                        <h5>UI/ UX Design</h5>
                                        <span>103 courses</span>
                                    </a>
                                </div>
                            </div> <!-- single items -->
                        </div>
                        <div class="col-md-6">
                            <div class="single-items text-center mt-30">
                                <div class="items-image">
                                    <img src="images/category/ctg-4.jpg" alt="Category">
                                </div>
                                <div class="items-cont">
                                    <a href="#">
                                        <h5>Photography</h5>
                                        <span>17 courses </span>
                                    </a>
                                </div>
                            </div> <!-- single items -->
                        </div>
                        <div class="col-md-6">
                            <div class="single-items text-center mt-30">
                                <div class="items-image">
                                    <img src="images/category/ctg-5.jpg" alt="Category">
                                </div>
                                <div class="items-cont">
                                    <a href="#">
                                        <h5>Finance</h5>
                                        <span>103 courses </span>
                                    </a>
                                </div>
                            </div> <!-- single items -->
                        </div>
                        <div class="col-md-6">
                            <div class="single-items text-center mt-30">
                                <div class="items-image">
                                    <img src="images/category/ctg-6.jpg" alt="Category">
                                </div>
                                <div class="items-cont">
                                    <a href="#">
                                        <h5>Science</h5>
                                        <span>17 courses </span>
                                    </a>
                                </div>
                            </div> <!-- single items -->
                        </div>
                    </div> <!-- row -->
                </div> <!-- category -->
            </div> --}}
            <div class="col-lg-5 offset-lg-1">
                <div class="category-form">
                    <div class="form-title text-center">
                        <h3>Get 50 courses free!</h3>
                        <span>Sign up now </span>
                    </div>
                    <div class="main-form">
                        <form action="{{ route('student.store') }}" method="POST">
                            @csrf
                            <div class="single-form">
                                <input type="text" placeholder="Your name" required name="name"
                                    value="{{ old('name') }}">
                            </div>
                            <div class="single-form">
                                <input type="email" placeholder="Your Email" required name="email"
                                    value="{{ old('email') }}">
                            </div>
                            <div class="single-form">
                                <input type="tel" placeholder="Your Mobile Number" required name="phone"
                                    value="{{ old('phone') }}">
                            </div>
                            <div class="single-form">
                                <select class="form-control" name="course" id="exampleFormControlSelect1" required>
                                    <option selected value="">choose a course</option>
                                    @foreach ($course as $course)
                                        <option value="{{ $course->id }}">{{ $course->courseName }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="single-form">
                                <button class="main-btn" type="submit">Register Now</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>
