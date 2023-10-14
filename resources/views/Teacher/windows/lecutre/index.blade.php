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
                                <a class="main-btn" style ='width:100%' href="route('logout')"
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
                                    <div class="title d-flex justify-content-between mb-3 align-items-center">
                                        <h6>{{ $course->courseName }}</h6>
                                        <button type="button" class="btn btn-primary" data-toggle="modal"
                                            data-target="#exampleModalCenter">
                                            Add Lecture
                                        </button>
                                        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                                            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLongTitle">Add Lecture</h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <form action="{{ route('teacher.addLecture') }}" method='POST'
                                                        enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="modal-body">
                                                            @if ($errors->any())
                                                                <span
                                                                    class="text-danger text-left mb-4">{{ implode('', $errors->all(':message')) }}</span>
                                                            @endif
                                                            <div class="form-group">
                                                                <input type="hidden" value="{{ $course->id }}"
                                                                    name="courseId">
                                                                <label for="recipient-name" class="col-form-label">Lecture
                                                                    Name</label>
                                                                <input type="text" class="form-control"
                                                                    id="recipient-name" required name="name"
                                                                    placeholder="Enter Lecture Name">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="message-text"
                                                                    class="col-form-label">Description</label>
                                                                <textarea class="form-control" id="message-text" required placeholder="Enter Description" name="description"></textarea>
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="recipient-name"
                                                                    class="col-form-label">Link</label>
                                                                <input type="text" class="form-control"
                                                                    id="recipient-name" name="link"
                                                                    placeholder="Enter Link">
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="recipient-name"
                                                                    class="col-form-label">Image</label>

                                                                <div class="avatar-upload" style="margin: 0">
                                                                    <div class="avatar-edit">
                                                                        <input name="image" type='file'
                                                                            id="imageUpload1" accept=".png, .jpg, .jpeg" />
                                                                        <label for="imageUpload1"></label>
                                                                    </div>
                                                                    <div class="avatar-download">
                                                                        <a download="shop-preview.jpg"
                                                                            href="{{ asset('assets/admin/img/preview/shop-sub-preview.jpg') }}"
                                                                            title="ImageName"></a>
                                                                    </div>
                                                                    <img id="imagePreview1"
                                                                        class="avatar-preview no-border-radius"
                                                                        src="{{ asset('assets/admin/img/preview/shop-sub-preview.jpg') }}"
                                                                        alt="">
                                                                    {{-- <div class="avatar-preview">
                                                                <div id="imagePreview"
                                                                    style="background-image: url({{ asset('assets/admin/img/preview/shop-preview.jpg') }});">
                                                                </div>
                                                            </div> --}}
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="recipient-name"
                                                                    class="col-form-label">Video</label>

                                                                <div class="avatar-upload" style="margin: 0">
                                                                    <div class="avatar-edit">
                                                                        <input name="video" type='file'
                                                                            id="imageUpload2" accept="video/*" />
                                                                        <label for="imageUpload2"></label>
                                                                    </div>
                                                                    <div class="avatar-download">
                                                                        <a download="shop-preview.jpg"
                                                                            href="{{ asset('assets/admin/img/preview/shop-sub-preview.jpg') }}"
                                                                            title="ImageName"></a>
                                                                    </div>
                                                                    <video id="imagePreview2" width="320"
                                                                        height="240" controls>
                                                                        <source id="" src="movie.mp4"
                                                                            type="video/mp4">
                                                                        Your browser does not support the video tag.
                                                                    </video>
                                                                    {{-- <img id="imagePreview2" class="avatar-preview no-border-radius"
                                                                        src="{{ asset('assets/admin/img/preview/shop-sub-preview.jpg') }}"
                                                                        alt=""> --}}
                                                                    {{-- <div class="avatar-preview">
                                                                <div id="imagePreview"
                                                                    style="background-image: url({{ asset('assets/admin/img/preview/shop-preview.jpg') }});">
                                                                </div>
                                                            </div> --}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-primary"
                                                                onClick="this.form.submit(); this.disabled=true; this.value='Sending…'; ">Add
                                                                Lecture</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion" id="accordionExample">
                                        @foreach ($lectures as $lecture)
                                            <div class="card">
                                                <div class="card-header" id="heading{{ $loop->index }}">
                                                    <a href="#" data-toggle="collapse"
                                                        data-target="#collapse{{ $loop->index }}" class="collapsed"
                                                        aria-expanded="true" aria-controls="collapse{{ $loop->index }}">
                                                        <ul>
                                                            <li><i class="fa fa-file-o"></i></li>
                                                            <li><span class="lecture">Lecture
                                                                    {{ $loop->index + 1 }}</span>
                                                            </li>
                                                            <li><span class="head">{{ $lecture->name }}</span></li>
                                                            <li><span class="time d-none d-md-block"><i
                                                                        class="fa fa-clock-o"></i> <span>
                                                                        00.30.00</span></span>
                                                            </li>
                                                        </ul>
                                                    </a>
                                                </div>

                                                <div id="collapse{{ $loop->index }}" class="collapse"
                                                    aria-labelledby="heading{{ $loop->index }}"
                                                    data-parent="#accordionExample">
                                                    <div class="card-body">
                                                        <p>{{ $lecture->description }}</p>
                                                        <br>
                                                        <a href="{{ $lecture->link }}">{{ $lecture->link }}</a>
                                                        <br>
                                                        <br>
                                                        <br>
                                                        <div class="row">
                                                            @if ($lecture->image)
                                                                <div class="col-md-6">
                                                                    <img style="width: 100%" src="{{ asset('images/lecture') . '/' . $lecture->image }}"
                                                                        alt="">
                                                                </div>
                                                            @endif
                                                            @if ($lecture->video)
                                                                <div class="col-md-6">
                                                                    <video id="imagePreview2" width="auto"
                                                                        height="auto" controls style="width: 100%">
                                                                        <source id=""
                                                                            src="{{ asset('video/lecture') . '/' . $lecture->video }}"
                                                                            type="video/mp4">
                                                                        Your browser does not support the video tag.
                                                                    </video>
                                                                </div>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach


                                    </div>
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
