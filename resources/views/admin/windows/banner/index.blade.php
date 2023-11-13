@extends('admin.layout.index')

@section('content')
    <main class="content">
        <div class="container-fluid p-0">

            <h1 class="h3 mb-3">Banner</h1>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex justify-content-between">

                                <h5 class="card-title">Banner</h5>
                                <a href="{{ route('banner.create') }}" class="btn btn-primary btn-lg"><i class="align-middle"
                                        data-feather="plus"></i>Add Banner</a>
                            </div>
                            @if ($message = Session::get('success'))
                                <div class="alert alert-success">
                                    <p class="text-success">{{ $message }}</p>
                                </div>
                            @endif
                        </div>
                        <div class="card-body">
                            <div class="row">
                                @foreach ($banner as $banner)
                                    <div class="col-md-4 mb-4">
                                        <img src="{{ asset('images/banner') . '/' . $banner->image }}" alt="image"
                                            style="height: auto; max-width: 100%;" srcset="">
                                        <h1>{{ $banner->title }}</h1>
                                        <p>{{ $banner->description }}</p>
                                        <form action="{{ route('banner.destroy', $banner->id) }}" method="POST">
                                            <a class="btn btn-primary mt-2" href="{{ route('banner.edit', $banner->id) }}"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-edit-2 align-middle">
                                                    <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z">
                                                    </path>
                                                </svg></a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger mt-2"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-trash align-middle">
                                                    <polyline points="3 6 5 6 21 6"></polyline>
                                                    <path
                                                        d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                    </path>
                                                </svg></button>
                                        </form>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </main>
@endsection
