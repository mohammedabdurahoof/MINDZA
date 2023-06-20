@extends('admin.layout.index')

@section('content')
    <main class="content">
        <div class="container-fluid p-0">

            <h1 class="h3 mb-3">Add Product</h1>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Add Product</h5>
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
                            <form method="POST" action="{{ route('shop.store') }}" enctype="multipart/form-data">
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
                                                <a download="shop-preview.jpg"
                                                    href="{{ asset('assets/admin/img/preview/shop-preview.jpg') }}"
                                                    title="ImageName"></a>
                                            </div>
                                            <img id="imagePreview" class="avatar-preview"
                                                src="{{ asset('assets/admin/img/preview/shop-preview.jpg') }}"
                                                alt="">
                                            {{-- <div class="avatar-preview">
                                            <div id="imagePreview"
                                                style="background-image: url({{ asset('assets/admin/img/preview/shop-preview.jpg') }});">
                                            </div>
                                        </div> --}}
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label" for="shopName">shop Name</label>
                                        <input type="text" name="name" class="form-control" id="shopName" required
                                            placeholder="shop Name">
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label" for="inputPosition">Position</label>
                                        <input type="text" name="position" class="form-control" id="inputPosition"
                                            required placeholder="Position">
                                    </div>

                                </div>

                                <div class="mb-3">
                                    <label class="col-form-label text-sm-end">Description</label>
                                    <textarea class="form-control" name="description" placeholder="Description" rows="5" required></textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="col-form-label text-sm-end">About</label>
                                    <textarea class="form-control" name="about" placeholder="About" rows="5" required></textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="col-form-label text-sm-end">Achievements</label>
                                    <textarea class="form-control" name="achievements" placeholder="Achievements" rows="5" required></textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="col-form-label text-sm-end">Objective</label>
                                    <textarea class="form-control" name="objective" placeholder="Objective" rows="5" required></textarea>
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