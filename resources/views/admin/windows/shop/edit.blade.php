@extends('admin.layout.index')

@section('content')
    <main class="content">
        <div class="container-fluid p-0">

            <h1 class="h3 mb-3">Edit Teacher</h1>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Edit Teacher</h5>
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li class="text-danger">{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('teachers.update', $teacher->id) }}"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-12 col-md-6">
                                        <div class="avatar-upload">
                                            <div class="avatar-edit">
                                                <input name="image" type='file' id="imageUpload"
                                                    accept=".png, .jpg, .jpeg" />
                                                <label for="imageUpload"></label>
                                            </div>
                                            <div class="avatar-download">
                                                <a download="teacher-preview.jpg"
                                                    href="{{ asset('assets/admin/img/preview/teacher-preview.jpg') }}"
                                                    title="ImageName"></a>
                                            </div>
                                            <img id="imagePreview" class="avatar-preview"
                                                src="{{ asset('images/teacher') . '/' . $teacher->image }}" alt="">
                                            {{-- <div class="avatar-preview">
                                            <div id="imagePreview"
                                                style="background-image: url({{ asset('images/teacher') . '/' . $teacher->image }});">
                                            </div>
                                        </div> --}}
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label" for="TeacherName">Teacher Name</label>
                                        <input type="text" name="name" value="{{ $teacher->name }}"
                                            class="form-control" id="TeacherName" required placeholder="Teacher Name">
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label" for="inputPosition">Position</label>
                                        <input type="text" name="position" class="form-control"
                                            value="{{ $teacher->position }}" id="inputPosition" required
                                            placeholder="Position">
                                    </div>

                                </div>

                                <div class="mb-3">
                                    <label class="col-form-label text-sm-end">Description</label>
                                    <textarea class="form-control" name="description" placeholder="Description" rows="5" required>{{ $teacher->description }}</textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="col-form-label text-sm-end">About</label>
                                    <textarea class="form-control" name="about" placeholder="About" rows="5" required>{{ $teacher->about }}</textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="col-form-label text-sm-end">Achievements</label>
                                    <textarea class="form-control" name="achievements" placeholder="Achievements" rows="5" required>{{ $teacher->achievements }}</textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="col-form-label text-sm-end">Objective</label>
                                    <textarea class="form-control" name="objective" placeholder="Objective" rows="5" required>{{ $teacher->objective }}</textarea>
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
