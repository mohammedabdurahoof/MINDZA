@extends('admin.layout.index')

@section('content')
    <main class="content">
        <div class="container-fluid p-0">

            <h1 class="h3 mb-3">Edit Banner</h1>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Edit Banner</h5>
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
                            <form method="POST" action="{{ route('banner.update', $banner->id) }}" enctype="multipart/form-data">
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
                                                <a download="event-preview.jpg"
                                                    href="{{ asset('assets/admin/img/preview/banner-preview.jpg') }}"
                                                    title="ImageName"></a>
                                            </div>
                                            <img id="imagePreview" class="avatar-preview"
                                                src="{{ asset('images/banner') . '/' . $banner->image }}"
                                                alt="">
                                            {{-- <div class="avatar-preview">
                                            <div id="imagePreview"
                                                style="background-image: url({{ asset('assets/admin/img/preview/gallary-preview.jpg') }});">
                                            </div>
                                        </div> --}}
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="row">
                                            <div class="mb-3 col-12">
                                                <label class="form-label" for="inputTitle">Title</label>
                                                <input type="text" name="title" value="{{$banner->title}}" class="form-control"
                                                    id="inputTitle" required placeholder="Title">
                                            </div>
                                            <div class="mb-3">
                                                <label class="col-form-label text-sm-end">Description</label>
                                                <textarea class="form-control" maxlength="250" name="description" placeholder="Description" rows="5" required>{{$banner->description}}</textarea>
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label class="form-label" for="inputReadMoreLink">Read More Link</label>
                                                <input type="text" name="readMoreLink" class="form-control" value="{{$banner->readMoreLink}}"
                                                    id="inputReadMoreLink" required placeholder="Read More Link">
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label class="form-label" for="inputGetStartedLink">Get Started Link</label>
                                                <input type="text" name="getStartedLink" class="form-control" value="{{$banner->getStartedLink}}"
                                                    id="inputGetStartedLink" required placeholder="Get Started Link">
                                            </div>

                                        </div>
                                    </div>
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
