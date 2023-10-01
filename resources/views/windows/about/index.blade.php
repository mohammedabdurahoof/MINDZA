@extends('layouts.layout')

@section('contant')
    @include('partials.page_banner')

    <section id="about-page" class="pt-70 pb-110">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="section-title mt-50">
                        <h5>About us</h5>
                        <h2>Welcome to Mindza </h2>
                    </div>
                    <!-- section title -->
                    <div class="about-cont">
                        <p>Mindza is a hypothetical School of Happiness that focuses on the development of positive mental
                            health and well-being. The goal of Mindza is to provide individuals with the tools, techniques,
                            and strategies they need to achieve greater levels of happiness, resilience, and fulfillment in
                            their lives.<br> <br>
                            At Mindza, students can expect to learn about various aspects of positive psychology, including
                            mindfulness, gratitude, positive relationships, and emotional intelligence. The school likely
                            offers a variety of courses, workshops, and seminars that are taught by experienced instructors
                            who specialize in the science of happiness.<br> <br>

                            {{-- In addition to formal coursework, Mindza may also provide opportunities for experiential
                            learning, such as community service, volunteer work, or other activities that promote positive
                            social connections and a sense of purpose. The school may also offer one-on-one coaching or
                            counseling services to help students develop their personal strengths and overcome
                            challenges.<br> <br>
                            Overall, Mindza is a place where individuals can come to develop a greater sense of
                            self-awareness, cultivate positive mental health, and learn practical skills for achieving
                            greater levels of happiness and fulfillment in their personal and professional lives.</p> --}}
                    </div>
                </div>
                <!-- about cont -->
                <div class="col-lg-7">
                    <div class="about-image mt-50">
                        <img src="{{ asset('assets/images/about/about-2.jpg') }}" alt="About">
                    </div>
                    <!-- about image -->
                </div>
            </div>
            <!-- row -->
            <div class="about-items pt-60">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 col-sm-10">
                        <div class="about-single-items mt-30">
                            <span>01</span>
                            <h4>Why Choose us</h4>
                            <p>Mindza School is led by experienced and certified psychologists who bring a wealth of knowledge to our courses and programs.

                                Institution offers flexible online learning options that fit into your schedule, allowing you to access valuable psychological resources from anywhere.
                                
                                The programs are designed to cater to the unique needs and goals of each learner, ensuring personalized support and guidance.
                                
                                The School focuses on real-world applications of psychology, equipping you with skills that can be immediately put into practice in your personal and professional life.</p>
                        </div>
                        <!-- about single -->
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-10">
                        <div class="about-single-items mt-30">
                            <span>02</span>
                            <h4>Our Mission</h4>
                            <p>Our mission at Mindza is to empower individuals with the knowledge, skills, and insights of psychology to enhance their mental well-being, personal growth, and professional development. We are dedicated to fostering a supportive online community, delivering evidence-based education, and promoting positive change in individuals' lives. Through accessible, flexible learning experiences, we aim to unlock the potential within each mind, fostering resilience, empathy, and a deeper understanding of the human psyche.</p>
                        </div>
                        <!-- about single -->
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-10">
                        <div class="about-single-items mt-30">
                            <span>03</span>
                            <h4>Our visions</h4>
                            <p>Our vision at Mindza is to revolutionize the way individuals perceive and engage with psychology. We aspire to create a world where accessible, evidence-based psychological knowledge empowers people to lead healthier, more fulfilling lives. By offering cutting-edge online education and resources, we aim to foster a global community of informed and emotionally resilient individuals who can positively impact themselves and society as a whole.</p>
                        </div>
                        <!-- about single -->
                    </div>
                </div>
                <!-- row -->
            </div>
            <!-- about items -->
        </div>
        <!-- container -->
    </section>

    <!--====== ABOUT PART ENDS ======-->

    <!--====== COUNTER PART START ======-->

    @include('windows.home.partials.counter')


    <!--====== COUNTER PART ENDS ======-->

    <!--====== TEACHERS PART START ======-->

    @include('windows.home.partials.teachers')

    <!-- container -->
@endsection
