@extends('admin.layout.index')

@section('content')
    <main class="content">
        <div class="container-fluid p-0">

            <h1 class="h3 mb-3">Add Course</h1>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Add Course</h5>
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li class="text-denger">{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('courses.store') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-12 col-md-6">
                                        <div class="avatar-upload">
                                            <div class="avatar-edit">
                                                <input name="image" type='file' id="imageUpload"
                                                    accept=".png, .jpg, .jpeg" required />
                                                <label for="imageUpload"></label>
                                            </div>
                                            <div class="avatar-download">
                                                <a download="course-preview.jpg"
                                                    href="{{ asset('assets/admin/img/preview/course-preview.jpg') }}"
                                                    title="ImageName"></a>
                                            </div>
                                            <img id="imagePreview" class="avatar-preview"
                                                src="{{ asset('assets/admin/img/preview/course-preview.jpg') }}"
                                                alt="">
                                            {{-- <div class="avatar-preview">
                                                <div id="imagePreview"
                                                    style="background-image: url({{ asset('assets/admin/img/preview/course.jpg') }});">
                                                </div>
                                            </div> --}}
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label" for="courseName">Course Name</label>
                                        <input type="text" name="courseName" class="form-control" id="courseName"
                                            required placeholder="Course Name">
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label" for="inputTeacher">Teacher</label>
                                        <select id="inputTeacher" name="teacherId" class="form-control">
                                            <option selected="" value="null">Choose...</option>
                                            @foreach ($teachers as $teacher)
                                                <option value="{{$teacher->id}}" >{{$teacher->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="mb-3 col-md-4">
                                        <label class="form-label" for="inputCategory">Category</label>
                                        <input type="text" name="category" class="form-control" id="inputCategory"
                                            required placeholder="Category">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label class="form-label" for="inputDuaration">Duration</label>
                                        <div class="input-group ">
                                            <input type="number" name="duration" id="inputDuaration" class="form-control"
                                                required placeholder="Duaration ">
                                            <span class="input-group-text">Days</span>
                                        </div>
                                    </div>
                                    <div class="mb-3 col-md-4">
                                        <label class="form-label" for="inputPrice">Price</label>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text">₹</span>
                                            <input type="number" value="0" name="price" id="inputPrice"
                                                class="form-control" required placeholder="Price">
                                            <span class="input-group-text">.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="col-form-label text-sm-end">Course Summery</label>
                                    <textarea class="form-control" name="courseSummery" placeholder="Course Summery" rows="5" required></textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="col-form-label text-sm-end">Requirements</label>
                                    <textarea class="form-control" name="requirements" placeholder="Requirements" rows="5" required></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </main>
@endsection
