@extends('layouts.layout')

@section('contant')
    @include('partials.page_banner')
    <section class="pt-105 pb-120 gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="mb-30">Frequently asked questions</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade active show" id="faq-accordion" role="tabpanel"
                            aria-labelledby="faq-accordion-tab">
                            <div class="faq-accordion-cont">

                                <div class="accordion" id="accordionExample">
                                    <div class="card">
                                        <div class="card-header" id="headingOne">
                                            <a href="#" data-toggle="collapse" data-target="#collapseOne"
                                                aria-expanded="true" aria-controls="collapseOne">
                                                <ul>
                                                    <li><i class="fa fa-question-circle" aria-hidden="true"></i></i>
                                                    </li>
                                                    <li><span class="head">How do I apply?</span></li>
                                                    <li></li>
                                                </ul>
                                            </a>
                                        </div>

                                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                            data-parent="#accordionExample">
                                            <div class="card-body">
                                                <p>Before you can send us your application, you'll need to pay an
                                                    application fee of £18 for one course choice, or £24 for up to five
                                                    course choices. If you are applying for a course(s) that starts in 2020,
                                                    the application fee is £20 if you’re applying to just one course, or £25
                                                    for multiple courses and for late applications sent after 30 June 2020.
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header" id="headingTow">
                                            <a href="#" data-toggle="collapse" class="collapsed"
                                                data-target="#collapseTow" aria-expanded="true" aria-controls="collapseTow">
                                                <ul>
                                                    <li><i class="fa fa-question-circle" aria-hidden="true"></i></i>
                                                    </li>
                                                    <li><span class="head">What are entry requirements?</span></li>
                                                    <li></li>
                                                </ul>
                                            </a>
                                        </div>

                                        <div id="collapseTow" class="collapse" aria-labelledby="headingTow"
                                            data-parent="#accordionExample">
                                            <div class="card-body">
                                                <p>It is a long established fact that a reader will be distracted by the
                                                    readable content of a page when looking at its layout. The point of
                                                    using Lorem Ipsum is that it has a more-or-less normal distribution
                                                    of letters, as opposed to using 'Content here, content here', making it
                                                    look like readable English.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header" id="headingThree">
                                            <a href="#" data-toggle="collapse" class="collapsed"
                                                data-target="#collapseThree" aria-expanded="false"
                                                aria-controls="collapseThree">
                                                <ul>
                                                    <li><i class="fa fa-question-circle" aria-hidden="true"></i></i>
                                                    </li>
                                                    <li><span class="head">How do I get a reference?</span></li>
                                                    <li></li>
                                                </ul>
                                            </a>
                                        </div>
                                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                            data-parent="#accordionExample">
                                            <div class="card-body">
                                                <p>It is a long established fact that a reader will be distracted by the
                                                    readable content of a page when looking at its layout. The point of
                                                    using Lorem Ipsum is that it has a more-or-less normal distribution
                                                    of letters, as opposed to using 'Content here, content here', making it
                                                    look like readable English.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header" id="headingFive">
                                            <a href="#" data-toggle="collapse" class="collapsed"
                                                data-target="#collapseFive" aria-expanded="false"
                                                aria-controls="collapseFive">
                                                <ul>
                                                    <li><i class="fa fa-question-circle" aria-hidden="true"></i></i>
                                                    </li>
                                                    <li><span class="head">What are entry requirements?</span></li>
                                                    <li></li>
                                                </ul>
                                            </a>
                                        </div>
                                        <div id="collapseFive" class="collapse" aria-labelledby="headingFive"
                                            data-parent="#accordionExample">
                                            <div class="card-body">
                                                <p>It is a long established fact that a reader will be distracted by the
                                                    readable content of a page when looking at its layout. The point of
                                                    using Lorem Ipsum is that it has a more-or-less normal distribution
                                                    of letters, as opposed to using 'Content here, content here', making it
                                                    look like readable English.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingFore">
                                            <a href="#" data-toggle="collapse" class="collapsed"
                                                data-target="#collapseFore" aria-expanded="false"
                                                aria-controls="collapseFore">
                                                <ul>
                                                    <li><i class="fa fa-question-circle" aria-hidden="true"></i></i>
                                                    </li>
                                                    <li><span class="head">What should I include in my personal
                                                            statement?</span></li>
                                                    <li></li>
                                                </ul>
                                            </a>
                                        </div>
                                        <div id="collapseFore" class="collapse" aria-labelledby="headingFore"
                                            data-parent="#accordionExample">
                                            <div class="card-body">
                                                <p>It is a long established fact that a reader will be distracted by the
                                                    readable content of a page when looking at its layout. The point of
                                                    using Lorem Ipsum is that it has a more-or-less normal distribution
                                                    of letters, as opposed to using 'Content here, content here', making it
                                                    look like readable English.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header" id="headingSix">
                                            <a href="#" data-toggle="collapse" class="collapsed"
                                                data-target="#collapseSix" aria-expanded="false"
                                                aria-controls="collapseSix">
                                                <ul>
                                                    <li><i class="fa fa-question-circle" aria-hidden="true"></i></i>
                                                    </li>
                                                    <li><span class="head">What will happen when I’ve sent my
                                                            application?</span></li>
                                                    <li></li>
                                                </ul>
                                            </a>
                                        </div>
                                        <div id="collapseSix" class="collapse" aria-labelledby="headingSix"
                                            data-parent="#accordionExample">
                                            <div class="card-body">
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                    industry. Lorem Ipsum has been the industry's standard dummy text ever
                                                    since the 1500s, when an unknown printer took a galley of type and
                                                    scrambled it to make a type specimen book. It has survived not only five
                                                    centuries,.</p>
                                            </div>
                                        </div>
                                    </div>

                                    {{-- <div class="card">
                                        <div class="card-header" id="headingSix">
                                            <a href="#" data-toggle="collapse" class="collapsed"
                                                data-target="#collapseSix" aria-expanded="false"
                                                aria-controls="collapseSix">
                                                <ul>
                                                    <li><i class="fa fa-question-circle" aria-hidden="true"></i></i>
                                                    </li>
                                                    <li><span class="head">What Information We Collect About You</span>
                                                    </li>
                                                    <li></li>
                                                </ul>
                                            </a>
                                        </div>
                                        <div id="collapseSix" class="collapse" aria-labelledby="headingSix"
                                            data-parent="#accordionExample">
                                            <div class="card-body">
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                    industry. Lorem Ipsum has been the industry's standard dummy text ever
                                                    since the 1500s, when an unknown printer took a galley of type and
                                                    scrambled it to make a type specimen book. It has survived not only five
                                                    centuries,.</p>
                                            </div>
                                        </div>
                                    </div> --}}

                                    <div class="card">
                                        <div class="card-header" id="headingSeven">
                                            <a href="#" data-toggle="collapse" class="collapsed"
                                                data-target="#collapseSeven" aria-expanded="false"
                                                aria-controls="collapseSeven">
                                                <ul>
                                                    <li><i class="fa fa-question-circle" aria-hidden="true"></i></i>
                                                    </li>
                                                    <li><span class="head">Can I get a free trial before I
                                                            purchase?</span></li>
                                                    <li></li>
                                                </ul>
                                            </a>
                                        </div>
                                        <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven"
                                            data-parent="#accordionExample">
                                            <div class="card-body">
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                    industry. Lorem Ipsum has been the industry's standard dummy text ever
                                                    since the 1500s, when an unknown printer took a galley of type and
                                                    scrambled it to make a type specimen book. It has survived not only five
                                                    centuries,.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- curriculum cont -->
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--====== FAQ PART ENDS ======-->
@endsection
