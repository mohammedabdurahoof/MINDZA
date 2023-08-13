<!--====== TEACHERS PART START ======-->

<section id="teachers-part" class="pt-70 pb-120">
    <div class="container">
        <div class="row">
            {{-- <div class="col-lg-5"> --}}
            <div class="section-title mt-50">
                <h5>Featured Faculties</h5>
                <h2>Meet our faculties</h2>
            </div> <!-- section title -->
            {{-- <div class="teachers-cont">
                    <p>Lorem ipsum gravida nibh vel velit auctor aliquetn sollicitudirem quibibendum auci elit cons equat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet . Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt  mauris. <br> <br> auci elit cons equat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet . Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt  mauris</p>
                    <a href="#" class="main-btn mt-55">Career with us</a>
                </div> <!-- teachers cont --> --}}
            <div class="teachers mt-20">
                <div class="row">
                    @foreach ($teachers as $teacher)
                        <div class="col-sm-6 col-lg-3">
                            <div class="single-teachers mt-30 text-center">
                                <div class="image">
                                    <img src="{{ asset('images/teacher') . '/' . $teacher->image }}" alt="Teachers">
                                </div>
                                <div class="cont">
                                    <a href="/teachers/{{ $teacher->id }}">
                                        <h6>{{ $teacher->name }}</h6>
                                    </a>
                                    <span>{{ $teacher->position }}</span>
                                </div>
                            </div> <!-- single teachers -->
                        </div>
                    @endforeach

                    
                    
                </div> <!-- row -->
            </div>
            {{-- </div> --}}
            {{-- <div class="col-lg-6 offset-lg-1"> --}}
            {{-- <div class="happy-student mt-55">
                    <div class="happy-title">
                        <h3>Happy Students</h3>
                    </div>
                    <div class="student-slide slick-initialized slick-slider">
                        <div class="slick-list draggable">
                            <div class="slick-track"
                                style="opacity: 1; width: 3710px; transform: translate3d(-530px, 0px, 0px);">
                                <div class="single-student slick-slide slick-cloned" data-slick-index="-1"
                                    aria-hidden="true" tabindex="-1" style="width: 530px;">
                                    <img src="{{ asset('assets/images/quote.png') }}" alt="Quote">
                                    <p>Aliquetn sollicitudirem quibibendum auci elit cons equat ipsutis sem nibh id
                                        elit. Duis sed odio sit ametAliquetn sollicitudirem quibibendum auci elit cons
                                        equat ipsutis sem nibh id elit. Duis sed odio sit amet</p>
                                    <h6>Mark anthem</h6>
                                    <span>Bsc, Engineering</span>
                                </div>
                                <div class="single-student slick-slide slick-current slick-active" data-slick-index="0"
                                    aria-hidden="false" tabindex="0" style="width: 530px;">
                                    <img src="{{ asset('assets/images/quote.png') }}" alt="Quote">
                                    <p>Aliquetn sollicitudirem quibibendum auci elit cons equat ipsutis sem nibh id
                                        elit. Duis sed odio sit amet Aliquetn sollicitudirem quibibendum auci elit cons
                                        equat ipsutis sem nibh id elit. Duis sed odio sit amet Aliquetn sollicitudirem
                                        quibibendum auci elit cons equat ipsutis sem nibh id elit. Duis sed odio sit
                                        amet</p>
                                    <h6>Mark anthem</h6>
                                    <span>Bsc, Engineering</span>
                                </div>
                                <div class="single-student slick-slide" data-slick-index="1" aria-hidden="true"
                                    tabindex="-1" style="width: 530px;">
                                    <img src="{{ asset('assets/images/quote.png') }}" alt="Quote">
                                    <p>Aliquetn sollicitudirem quibibendum auci elit cons equat ipsutis sem nibh id
                                        elit. Duis sed odio sit amet</p>
                                    <h6>Mark anthem</h6>
                                    <span>Bsc, Engineering</span>
                                </div>
                                <div class="single-student slick-slide" data-slick-index="2" aria-hidden="true"
                                    tabindex="-1" style="width: 530px;">
                                    <img src="{{ asset('assets/images/quote.png') }}" alt="Quote">
                                    <p>Aliquetn sollicitudirem quibibendum auci elit cons equat ipsutis sem nibh id
                                        elit. Duis sed odio sit amet</p>
                                    <h6>Mark anthem</h6>
                                    <span>Bsc, Engineering</span>
                                </div>
                                <div class="single-student slick-slide slick-cloned" data-slick-index="3"
                                    aria-hidden="true" tabindex="-1" style="width: 530px;">
                                    <img src="{{ asset('assets/images/quote.png') }}" alt="Quote">
                                    <p>Aliquetn sollicitudirem quibibendum auci elit cons equat ipsutis sem nibh id
                                        elit. Duis sed odio sit amet</p>
                                    <h6>Mark anthem</h6>
                                    <span>Bsc, Engineering</span>
                                </div>
                                <div class="single-student slick-slide slick-cloned" data-slick-index="4"
                                    aria-hidden="true" tabindex="-1" style="width: 530px;">
                                    <img src="{{ asset('assets/images/quote.png') }}" alt="Quote">
                                    <p>Aliquetn sollicitudirem quibibendum auci elit cons equat ipsutis sem nibh id
                                        elit. Duis sed odio sit amet</p>
                                    <h6>Mark anthem</h6>
                                    <span>Bsc, Engineering</span>
                                </div>
                                <div class="single-student slick-slide slick-cloned" data-slick-index="5"
                                    aria-hidden="true" tabindex="-1" style="width: 530px;">
                                    <img src="{{ asset('assets/images/quote.png') }}" alt="Quote">
                                    <p>Aliquetn sollicitudirem quibibendum auci elit cons equat ipsutis sem nibh id
                                        elit. Duis sed odio sit amet</p>
                                    <h6>Mark anthem</h6>
                                    <span>Bsc, Engineering</span>
                                </div>
                            </div>
                        </div> <!-- single student -->

                        <!-- single student -->

                        <!-- single student -->
                    </div> <!-- student slide -->
                    <div class="student-image">
                        <img src="{{ asset('assets/images/happy.png') }}" alt="Image">
                    </div>
                </div> --}}
            {{-- <div class="teachers mt-20">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="single-teachers mt-30 text-center">
                                <div class="image">
                                    <img src="{{ asset('assets/images/teachers/t-1.jpg') }}" alt="Teachers">
                                </div>
                                <div class="cont">
                                    <a href="teachers-single.html"><h6>Mark Alen</h6></a>
                                    <span>Vice Chancellor</span>
                                </div>
                            </div> <!-- single teachers -->
                        </div>
                        <div class="col-sm-6">
                            <div class="single-teachers mt-30 text-center">
                                <div class="image">
                                    <img src="{{ asset('assets/images/teachers/t-2.jpg') }}" alt="Teachers">
                                </div>
                                <div class="cont">
                                    <a href="teachers-single.html"><h6>David card</h6></a>
                                    <span>Pro Chancellor</span>
                                </div>
                            </div> <!-- single teachers -->
                        </div>
                        <div class="col-sm-6">
                            <div class="single-teachers mt-30 text-center">
                                <div class="image">
                                    <img src="{{ asset('assets/images/teachers/t-3.jpg') }}" alt="Teachers">
                                </div>
                                <div class="cont">
                                    <a href="teachers-single.html"><h6>Rebeka Alig</h6></a>
                                    <span>Pro Chancellor</span>
                                </div>
                            </div> <!-- single teachers -->
                        </div>
                        <div class="col-sm-6">
                            <div class="single-teachers mt-30 text-center">
                                <div class="image">
                                    <img src="{{ asset('assets/images/teachers/t-4.jpg') }}" alt="Teachers">
                                </div>
                                <div class="cont">
                                    <a href="teachers-single.html"><h6>Hanna Bein</h6></a>
                                    <span>Aerobics head</span>
                                </div>
                            </div> <!-- single teachers -->
                        </div>
                    </div> <!-- row -->
                </div> <!-- teachers -->
            </div> --}}
        </div> <!-- row -->
    </div> <!-- container -->
</section>

<!--====== TEACHERS PART ENDS ======-->
