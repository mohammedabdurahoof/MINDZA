@extends('layouts.layout')

@section('contant')
@include('partials.page_banner')
<section class="signup pt-105 pb-120 gray-bg">
    <div class="container">
        <div class="col-md-8 offset-md-2">
            <div class="signup-content">
                <form method="post" id="signup-form" class="signup-form" action="{{ route('login') }}">
                    @csrf
                    <h2 class="form-title pb-20">Login</h2>
                    <!-- Session Status -->
                    <x-auth-session-status class="mb-4" :status="session('status')" />

                    <!-- Validation Errors -->
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />
                    <div class="form-group">
                        <input type="email" class="form-input" name="email" id="email" placeholder="Your Email" :value="old('email')" required autofocus/>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-input" name="password" id="password" placeholder="Password" />
                        <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="submit" id="submit" class="main-btn register-submit" value="Sign up" />
                    </div>
                </form>
                <p class="loginhere">
                    Have already an account ? <a href="#" class="loginhere-link">Login here</a>
                </p>
            </div>
        </div>
    </div>
</section>
@endsection