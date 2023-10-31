@extends('layouts.layout')

@section('contant')
    @include('partials.page_banner')
    <section id="teachers-single" class="pt-70 pb-120 gray-bg">
        <div class="container">
            @if ($errors->any())
                <div class=" mt-3 alert alert-danger alert-dismissible fade show" role="alert">
                    {{ implode('', $errors->all(':message')) }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif

            @if ($message = Session::get('success'))
                <div class=" mt-3 alert alert-success alert-dismissible fade show" role="alert">
                    {{ $message }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-8">
                    <div class="teachers-left mt-50">
                        <div class="hero">
                            <img src="{{ asset('images/teacher') . '/' . $teacher->image }}" alt="teacher">
                        </div>
                        <div class="name">
                            <h6>{{ $teacher->name }}</h6>
                            <span>{{ $teacher->position }} |</span>
                            <span>{{ $teacher->email }}</span>
                        </div>
                        {{-- <div class="social">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus-square"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
                            </ul>
                        </div> --}}
                        {{-- <div class="description">
                            <p>{{ $teacher ?? ''->description }}</p>
                </div> --}}
                        <div>
                            {{-- <input type="submit" 
        class="main-btn" style ='width:100%'  value="Logout" /> --}}
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a class="main-btn" style='width:100%' href="route('logout')"
                                    onclick="event.preventDefault();
                        this.closest('form').submit();">Log
                                    out</a>
                            </form>
                        </div>

                    </div>
                    <!-- teachers left -->
                </div>
                <div class="col-lg-8">
                    <div class="teachers-right mt-50">

                        <!-- nav -->
                        <div class="card p-5">
                            <div class="row">
                                <div class="curriculum-cont" style="width: 100%;">
                                    <a class="mb-3" href="/teacher/dashboard">Dashboard</a>
                                    <div class="title d-flex justify-content-between mb-3 align-items-center">
                                        <h6>{{ !empty($lecture) ? 'Edit' : 'Add' }} Lecture</h6>
                                        <a type="button" class="main-btn"
                                            href="{{ route('teacher.lecture', !empty($lecture) ? $lecture->courseId : $course->id) }}">
                                            Back To Lecture
                                        </a>
                                    </div>


                                    <form
                                        action="{{ !empty($lecture) ? route('lecture.update', $lecture->id) : route('lecture.store') }}"
                                        method='POST' enctype="multipart/form-data">
                                        @csrf

                                        @if ($lecture)
                                            @method('PUT')
                                        @endif
                                        <div class="modal-body">
                                            @if ($errors->any())
                                                <span
                                                    class="text-danger text-left mb-4">{{ implode('', $errors->all(':message')) }}</span>
                                            @endif
                                            <div class="form-group">
                                                <input type="hidden"
                                                    value="{{ !empty($lecture) ? $lecture->courseId : $course->id }}"
                                                    name="courseId">
                                                <label for="recipient-name" class="col-form-label">Lecture
                                                    Name</label>
                                                <input type="text" class="form-control" id="recipient-name" required
                                                    name="name" value="{{ !empty($lecture) ? $lecture->name : '' }}"
                                                    placeholder="Enter Lecture Name">
                                            </div>
                                            <div class="form-group">
                                                <label for="message-text" class="col-form-label">Description</label>
                                                <textarea class="form-control" id="message-text" required placeholder="Enter Description" name="description">{{ !empty($lecture) ? $lecture->description : '' }}</textarea>
                                            </div>

                                            <div class="form-group">
                                                <label for="recipient-name" class="col-form-label">Link</label>
                                                <input type="text" class="form-control" id="recipient-name"
                                                    name="link" placeholder="Enter Link"
                                                    value="{{ !empty($lecture) ? ($lecture->link ? $lecture->link : '') : '' }}">
                                            </div>
                                            <div class="row">

                                                <div class="form-group col-md-6">
                                                    <label for="recipient-name" class="col-form-label">Image</label>

                                                    <div class="avatar-upload" style="margin: 0">
                                                        <div class="avatar-edit">
                                                            <input name="image" type='file' id="imageUpload1"
                                                                accept=".png, .jpg, .jpeg" />
                                                            <label for="imageUpload1"></label>
                                                        </div>
                                                        <div class="avatar-download">
                                                            <a download="shop-preview.jpg"
                                                                href="{{ asset('assets/admin/img/preview/shop-sub-preview.jpg') }}"
                                                                title="ImageName"></a>
                                                        </div>
                                                        <img id="imagePreview1" class="avatar-preview no-border-radius"
                                                            src="{{ !empty($lecture) ? ($lecture->image ? asset('images/lecture') . '/' . $lecture->image : asset('assets/admin/img/preview/shop-sub-preview.jpg')) : asset('assets/admin/img/preview/shop-sub-preview.jpg') }}"
                                                            alt="">
                                                    </div>
                                                </div>

                                                <div class="form-group col-md-6">
                                                    <label for="recipient-name" class="col-form-label">Video</label>

                                                    <div class="avatar-upload" style="margin: 0">
                                                        <div class="avatar-edit">
                                                            <input name="video" type='file' id="imageUpload2"
                                                                accept="video/*" />
                                                            <label for="imageUpload2"></label>
                                                        </div>
                                                        <div class="avatar-download">
                                                            <a download="shop-preview.jpg"
                                                                href="{{ asset('assets/admin/img/preview/shop-sub-preview.jpg') }}"
                                                                title="ImageName"></a>
                                                        </div>
                                                        <video id="imagePreview2" width="auto" height="auto" controls>
                                                            <source id=""
                                                                src="{{ !empty($lecture) ? ($lecture->video ? asset('video/lecture') . '/' . $lecture->video : '') : '' }}"
                                                                type="video/mp4">
                                                            Your browser does not support the video tag.
                                                        </video>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="main-btn float-right"
                                            onClick="this.form.submit(); this.disabled=true; this.value='Sending…'; ">{{ !empty($lecture) ? 'Edit' : 'Add' }}
                                            Lecture</button>
                                    </form>
                                </div>

                                <!-- curriculum cont -->
                            </div>
                        </div>
                        <!-- tab content -->
                    </div>
                    <!-- teachers right -->
                </div>
            </div>
            <!-- row -->
        </div>
        <!-- container -->
    </section>
@endsection
