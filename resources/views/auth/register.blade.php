@extends('layouts.layout')

@section('contant')
    @include('partials.page_banner')
    <section class="signup pt-105 pb-120 gray-bg">
        <div class="container">
            <div class="col-md-8 offset-md-2">
                <div class="signup-content">
                    {{-- <form method="post" id="signup-form" class="signup-form" action="{{ route('login') }}">
                        @csrf
                        <h2 class="form-title pb-20">Register Now</h2>

                        @if ($errors->has('email'))
                            <span class="text-danger text-left mb-4">You entered an incorrect username or password. Please
                                try
                                again </span>
                        @endif
                        <div class="form-group">
                            <input type="email" class="form-input" name="email" id="email" placeholder="Your Email"
                                value="{{ old('email') }}" required />
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-input" name="password" id="password"
                                placeholder="Password" />
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="main-btn register-submit"
                                value="Login" />
                        </div>
                    </form> --}}
                    <form method="post" id="signup-form" class="signup-form" action="{{ route('login') }}">
                        @csrf
                        <h2 class="form-title pb-20">Register Now</h2>

                        @if ($errors->has('email'))
                            <span class="text-danger text-left mb-4">You entered an incorrect username or password. Please
                                try
                                again </span>
                        @endif
                        <!-- One "tab" for each step in the form: -->
                        <div class="tab">
                            <div class="form-group">
                                <input type="email" class="form-input" name="email" id="email" placeholder="Your Email"
                                    value="{{ old('email') }}" required />
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-input" name="email" id="email" placeholder="Your Email"
                                    value="{{ old('email') }}" required />
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-input" name="email" id="email" placeholder="Your Email"
                                    value="{{ old('email') }}" required />
                            </div>
                            {{-- <p><input placeholder="First name..." oninput="this.className = ''" name="fname"></p>
                            <p><input placeholder="Last name..." oninput="this.className = ''" name="lname"></p> --}}
                        </div>
                        <div class="tab">
                            <div class="form-group">
                                <input type="email" class="form-input" name="email" id="email" placeholder="Your Email"
                                    value="{{ old('email') }}" required />
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-input" name="email" id="email" placeholder="Your Email"
                                    value="{{ old('email') }}" required />
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-input" name="email" id="email" placeholder="Your Email"
                                    value="{{ old('email') }}" required />
                            </div>
                        </div>
                        <div class="tab">
                            <div class="form-group">
                                <input type="email" class="form-input" name="email" id="email" placeholder="Your Email"
                                    value="{{ old('email') }}" required />
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-input" name="email" id="email" placeholder="Your Email"
                                    value="{{ old('email') }}" required />
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-input" name="email" id="email" placeholder="Your Email"
                                    value="{{ old('email') }}" required />
                            </div>
                        </div>
                        <div class="tab">
                            <div class="form-group">
                                <input type="email" class="form-input" name="email" id="email" placeholder="Your Email"
                                    value="{{ old('email') }}" required />
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-input" name="email" id="email" placeholder="Your Email"
                                    value="{{ old('email') }}" required />
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-input" name="email" id="email" placeholder="Your Email"
                                    value="{{ old('email') }}" required />
                            </div>
                        </div>
                        <div style="overflow:auto;">
                            <div style="float:right;">
                                <div class="form-group">
                                    <input type="submit" name="submit" id="prevBtn" onclick="nextPrev(-1)" class="main-btn register-submit"
                                        value="Previous" />
                                        <input type="submit" name="submit" id="nextBtn" onclick="nextPrev(1)" class="main-btn register-submit"
                                        value="Next" />
                                </div>
                                {{-- <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                                <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button> --}}
                            </div>
                        </div>
                        <!-- Circles which indicates the steps of the form: -->
                        <div style="text-align:center;margin-top:40px;">
                            <span class="step"></span>
                            <span class="step"></span>
                            <span class="step"></span>
                            <span class="step"></span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
