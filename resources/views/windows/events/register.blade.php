@extends('layouts.layout')

@section('contant')
    @include('partials.page_banner')
    <section class="signup pt-105 pb-120 gray-bg">
        <div class="container">
            <div class="col-md-8 offset-md-2">
                <div class="signup-content">
                    <form method="post" id="signup-form" class="signup-form" action="/event-register"
                        enctype="multipart/form-data">
                        @csrf
                        <h2 class="form-title pb-20">Book Your Seat</h2>
                        @if (session()->has('success'))
                            <span class="text-success text-left mb-4">{{ session()->get('success') }}</span>
                        @endif
                        @if ($errors->any())
                            <span class="text-danger text-left mb-4">{{ implode('', $errors->all(':message')) }}</span>
                        @endif
                        @if ($event->photo)
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
                        @endif
                        <div class="form-group">
                            <input type="text" class="form-input" name="name" id="name" placeholder="Your Name"
                                value="{{ old('name') }}" required />
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-input" name="email" id="email" placeholder="Your Email"
                                value="{{ old('email') }}" required />
                        </div>
                        <div class="form-group">
                            <input type="tel" class="form-input" name="phone" id="phone"
                                placeholder="Your Mobile Number" value="{{ old('phone') }}" required />
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="address" id="address"
                                placeholder="Your Address" value="{{ old('address') }}" required />
                        </div>
                        <input type="hidden" name="event" value="{{$event->id}}">
                        @if ($event->available_time)
                            <div class="form-group">
                                <h6 class="mb-3">Choose your available time:</h6>
                                <input type="time" class="form-input" name="time" id="name"
                                    placeholder="Choose your available time" value="{{ old('time') }}" required />
                            </div>
                        @endif
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
