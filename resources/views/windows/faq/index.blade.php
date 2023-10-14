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
                                                    <li><span class="head">What is MINDZA?</span></li>
                                                    <li></li>
                                                </ul>
                                            </a>
                                        </div>

                                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                            data-parent="#accordionExample">
                                            <div class="card-body">
                                                <p>Mindza School of Happiness is an online platform dedicated to providing
                                                    high-quality psychology education and resources. We offer a range of
                                                    courses, articles, and tools to help individuals better understand and
                                                    apply psychology in their lives.
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
                                                    <li><span class="head">Who can benefit from your institution?</span>
                                                    </li>
                                                    <li></li>
                                                </ul>
                                            </a>
                                        </div>

                                        <div id="collapseTow" class="collapse" aria-labelledby="headingTow"
                                            data-parent="#accordionExample">
                                            <div class="card-body">
                                                <p>Our resources are designed to benefit a wide audience, including
                                                    students, professionals, and anyone interested in psychology. Whether
                                                    you're pursuing a career in psychology or simply seeking personal
                                                    growth, our offerings can be tailored to meet your needs.
                                                </p>
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
                                                    <li><span class="head">Are your courses accredited or
                                                            certified?</span></li>
                                                    <li></li>
                                                </ul>
                                            </a>
                                        </div>
                                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                            data-parent="#accordionExample">
                                            <div class="card-body">
                                                <p>Yes, our courses are developed and led by experienced and certified
                                                    psychologists. Upon successful completion of our accredited programs,
                                                    you will receive a certification that can be valuable for your career or
                                                    personal development.</p>
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
                                                    <li><span class="head"> Can I access the content from anywhere in the
                                                            world?
                                                        </span></li>
                                                    <li></li>
                                                </ul>
                                            </a>
                                        </div>
                                        <div id="collapseFive" class="collapse" aria-labelledby="headingFive"
                                            data-parent="#accordionExample">
                                            <div class="card-body">
                                                <p> Absolutely! Our online platform allows learners from around the world to
                                                    access our courses and resources at their convenience. All you need is
                                                    an internet connection.
                                                </p>
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
                                                    <li><span class="head"> How flexible are your online courses?</span>
                                                    </li>
                                                    <li></li>
                                                </ul>
                                            </a>
                                        </div>
                                        <div id="collapseFore" class="collapse" aria-labelledby="headingFore"
                                            data-parent="#accordionExample">
                                            <div class="card-body">
                                                <p>Our courses are designed with flexibility in mind. You can study at your
                                                    own pace and choose the schedule that suits you best. We understand that
                                                    our learners have diverse commitments and strive to accommodate them.
                                                </p>
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
                                                    <li><span class="head">Is there a community or support system for
                                                            learners?</span></li>
                                                    <li></li>
                                                </ul>
                                            </a>
                                        </div>
                                        <div id="collapseSix" class="collapse" aria-labelledby="headingSix"
                                            data-parent="#accordionExample">
                                            <div class="card-body">
                                                <p>Yes, we have a vibrant online community where learners can engage in
                                                    discussions, share experiences, and network with others who share their
                                                    interests. Additionally, our support team is readily available to assist
                                                    with any questions or concerns.</p>
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
                                                    <li><span class="head">What makes your institution unique in the
                                                            field of psychology education?</span></li>
                                                    <li></li>
                                                </ul>
                                            </a>
                                        </div>
                                        <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven"
                                            data-parent="#accordionExample">
                                            <div class="card-body">
                                                <p>We stand out through our commitment to evidence-based learning,
                                                    personalized support, and practical applications of psychology. Our
                                                    courses are regularly updated to reflect the latest research and
                                                    developments in the field.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header" id="headingEight">
                                            <a href="#" data-toggle="collapse" class="collapsed"
                                                data-target="#collapseEight" aria-expanded="false"
                                                aria-controls="collapseEight">
                                                <ul>
                                                    <li><i class="fa fa-question-circle" aria-hidden="true"></i></i>
                                                    </li>
                                                    <li><span class="head">How can I get started with your
                                                            institution?</span>
                                                    </li>
                                                    <li></li>
                                                </ul>
                                            </a>
                                        </div>
                                        <div id="collapseEight" class="collapse" aria-labelledby="headingEight"
                                            data-parent="#accordionExample">
                                            <div class="card-body">
                                                <p>Getting started is easy! Simply visit our website, browse our course
                                                    offerings, and enroll in the program that aligns with your goals. You
                                                    can start learning and growing right away.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header" id="headingNine">
                                            <a href="#" data-toggle="collapse" class="collapsed"
                                                data-target="#collapseNine" aria-expanded="false"
                                                aria-controls="collapseNine">
                                                <ul>
                                                    <li><i class="fa fa-question-circle" aria-hidden="true"></i></i>
                                                    </li>
                                                    <li><span class="head">Do you offer financial assistance or
                                                            scholarships?</span>
                                                    </li>
                                                    <li></li>
                                                </ul>
                                            </a>
                                        </div>
                                        <div id="collapseNine" class="collapse" aria-labelledby="headingNine"
                                            data-parent="#accordionExample">
                                            <div class="card-body">
                                                <p> We understand the importance of accessibility. While we may not offer
                                                    scholarships directly, we do provide flexible payment options and
                                                    occasionally run promotions to make our courses more accessible to a
                                                    wider audience.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header" id="headingTen">
                                            <a href="#" data-toggle="collapse" class="collapsed"
                                                data-target="#collapseTen" aria-expanded="false"
                                                aria-controls="collapseTen">
                                                <ul>
                                                    <li><i class="fa fa-question-circle" aria-hidden="true"></i></i>
                                                    </li>
                                                    <li><span class="head"> How can I contact your institution for
                                                            further inquiries?</span>
                                                    </li>
                                                    <li></li>
                                                </ul>
                                            </a>
                                        </div>
                                        <div id="collapseTen" class="collapse" aria-labelledby="headingTen"
                                            data-parent="#accordionExample">
                                            <div class="card-body">
                                                <p>You can reach out to our dedicated support team through our website's
                                                    contact page or email us at [your contact email]. We're here to assist
                                                    you with any questions or assistance you may need.</p>
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
