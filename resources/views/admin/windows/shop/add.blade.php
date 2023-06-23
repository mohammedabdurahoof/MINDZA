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
                                    <div class="col-12 col-md-4">
                                        <div class="avatar-upload">
                                            <div class="avatar-edit">
                                                <input name="image" type='file' id="imageUpload"
                                                    accept=".png, .jpg, .jpeg" required />
                                                <label for="imageUpload"></label>
                                            </div>
                                            <div class="avatar-download">
                                                <a download="shop-preview.jpg"
                                                    href="{{ asset('assets/admin/img/preview/shop-main-preview.jpg') }}"
                                                    title="ImageName"></a>
                                            </div>
                                            <img id="imagePreview" class="avatar-preview"
                                                src="{{ asset('assets/admin/img/preview/shop-main-preview.jpg') }}"
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
                                        <label class="form-label" for="ProductName">Product Name</label>
                                        <input type="text" name="name" class="form-control" id="ProductName" required
                                            placeholder="Product Name">
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label" for="inputPrice">Price</label>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text">₹</span>
                                            <input type="number" value="0" name="price" id="inputPrice"
                                                class="form-control" required placeholder="Price">
                                            <span class="input-group-text">.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-md-3">
                                        <div class="avatar-upload">
                                            <div class="avatar-edit">
                                                <input name="image1" type='file' id="imageUpload1"
                                                    accept=".png, .jpg, .jpeg" required />
                                                <label for="imageUpload1"></label>
                                            </div>
                                            <div class="avatar-download">
                                                <a download="shop-preview.jpg"
                                                    href="{{ asset('assets/admin/img/preview/shop-sub-preview.jpg') }}"
                                                    title="ImageName"></a>
                                            </div>
                                            <img id="imagePreview1" class="avatar-preview"
                                                src="{{ asset('assets/admin/img/preview/shop-sub-preview.jpg') }}"
                                                alt="">
                                            {{-- <div class="avatar-preview">
                                            <div id="imagePreview"
                                                style="background-image: url({{ asset('assets/admin/img/preview/shop-preview.jpg') }});">
                                            </div>
                                        </div> --}}
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-3">
                                        <div class="avatar-upload">
                                            <div class="avatar-edit">
                                                <input name="image2" type='file' id="imageUpload2"
                                                    accept=".png, .jpg, .jpeg" required />
                                                <label for="imageUpload2"></label>
                                            </div>
                                            <div class="avatar-download">
                                                <a download="shop-preview.jpg"
                                                    href="{{ asset('assets/admin/img/preview/shop-sub-preview.jpg') }}"
                                                    title="ImageName"></a>
                                            </div>
                                            <img id="imagePreview2" class="avatar-preview"
                                                src="{{ asset('assets/admin/img/preview/shop-sub-preview.jpg') }}"
                                                alt="">
                                            {{-- <div class="avatar-preview">
                                            <div id="imagePreview"
                                                style="background-image: url({{ asset('assets/admin/img/preview/shop-preview.jpg') }});">
                                            </div>
                                        </div> --}}
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-3">
                                        <div class="avatar-upload">
                                            <div class="avatar-edit">
                                                <input name="image3" type='file' id="imageUpload3"
                                                    accept=".png, .jpg, .jpeg" required />
                                                <label for="imageUpload3"></label>
                                            </div>
                                            <div class="avatar-download">
                                                <a download="shop-preview.jpg"
                                                    href="{{ asset('assets/admin/img/preview/shop-sub-preview.jpg') }}"
                                                    title="ImageName"></a>
                                            </div>
                                            <img id="imagePreview3" class="avatar-preview"
                                                src="{{ asset('assets/admin/img/preview/shop-sub-preview.jpg') }}"
                                                alt="">
                                            {{-- <div class="avatar-preview">
                                            <div id="imagePreview"
                                                style="background-image: url({{ asset('assets/admin/img/preview/shop-preview.jpg') }});">
                                            </div>
                                        </div> --}}
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-3">
                                        <div class="avatar-upload">
                                            <div class="avatar-edit">
                                                <input name="image4" type='file' id="imageUpload4"
                                                    accept=".png, .jpg, .jpeg" required />
                                                <label for="imageUpload4"></label>
                                            </div>
                                            <div class="avatar-download">
                                                <a download="shop-preview.jpg"
                                                    href="{{ asset('assets/admin/img/preview/shop-sub-preview.jpg') }}"
                                                    title="ImageName"></a>
                                            </div>
                                            <img id="imagePreview4" class="avatar-preview"
                                                src="{{ asset('assets/admin/img/preview/shop-sub-preview.jpg') }}"
                                                alt="">
                                            {{-- <div class="avatar-preview">
                                            <div id="imagePreview"
                                                style="background-image: url({{ asset('assets/admin/img/preview/shop-preview.jpg') }});">
                                            </div>
                                        </div> --}}
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="col-form-label text-sm-end">Description</label>
                                    <textarea class="form-control" name="description" placeholder="Description" rows="5" required></textarea>
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
