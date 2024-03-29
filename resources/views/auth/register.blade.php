@extends('layouts.layout')

@section('contant')
    @include('partials.page_banner')
    <section class="signup pt-105 pb-120 gray-bg">
        <div class="container">
            <div class="col-md-8 offset-md-2">
                <div class="signup-content">
                    <form method="post" id="signup-form" class="signup-form" action="{{ route('register') }}"
                        enctype="multipart/form-data">
                        @csrf
                        <h2 class="form-title pb-20">Register Now</h2>
                        @if ($errors->any())
                            <span class="text-danger text-left mb-4">{{ implode('', $errors->all(':message')) }}</span>
                        @endif
                        <div class="avatar-upload">
                            <div class="avatar-edit">
                                <input type="file" name="image" id="imageUpload" accept=".png, .jpg, .jpeg" />
                                <label for="imageUpload"></label>
                            </div>
                            <div class="avatar-preview">
                                <div id="imagePreview"
                                    style="background-image: url({{ asset('assets/images/avatar.jpg') }});">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="name" id="name" placeholder="Your Name"
                                value="{{ Session::get('value.name') ? Session::get('value.name') : old('name') }}"
                                required />
                            <input type="hidden" value="student" name="type">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-input" name="email" id="email" placeholder="Your Email"
                                value="{{ Session::get('value.email') ? Session::get('value.email') : old('email') }}"
                                required />
                        </div>
                        <div class="form-group">
                            <input type="tel" class="form-input" name="phone" id="phone"
                                placeholder="Your Mobile Number"
                                value="{{ Session::get('value.phone') ? Session::get('value.phone') : old('phone') }}"
                                required />
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="address" id="address"
                                placeholder="Your Address" value="{{ old('address') }}" required />
                        </div>
                        <div class="form-group" style="overflow: visible; margin-bottom: 5rem;">
                            <select class="form-control" name="course" id="exampleFormControlSelect1" required>
                                <option selected value="">choose a course</option>
                                @foreach ($course as $course)
                                    <option value="{{ $course->id }}"
                                        {{ Session::get('value.course') == $course->id ? 'selected' : '' }}>
                                        {{ $course->courseName }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class=""></div>
                        <div class="form-group" style="overflow: visible">
                            <input type="password" class="form-input" name="password" id="password"
                                placeholder="Password" />
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-input" name="password_confirmation"
                                id="password_confirmation" placeholder="Confirm Password" required />
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                        </div>
                        <h6 class="mb-3">Select your Gender:</h6>
                        <div class="row justify-content-around">
                            <div class="form-group">
                                <input type="radio" name="gender" id="male" placeholder="Your Gender" value="Male"
                                    required />
                                <label for="male"><b>Male</b></label><br>
                            </div>
                            <div class="form-group">
                                <input type="radio" name="gender" id="female" placeholder="Your Gender" value="Female"
                                    required />
                                <label for="female"><b>Female</b></label><br>
                            </div>
                            <div class="form-group">
                                <input type="radio" name="gender" id="other" placeholder="Your Gender" value="Other"
                                    required />
                                <label for="other"><b>Other</b></label><br>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="submit" onclick="var e=this;setTimeout(function(){e.disabled=true;},0);return true;" name="submit" id="submit" class="main-btn register-submit"
                                value="Register" />
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </section>
@endsection
