@extends('admin.layout.index')

@section('content')
    <main class="content">
        <div class="container-fluid p-0">

            <h1 class="h3 mb-3">Gallery</h1>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex justify-content-between">

                                <h5 class="card-title">Gallery</h5>
                                <a href="{{ route('gallery.create') }}" class="btn btn-primary btn-lg"><i
                                        class="align-middle" data-feather="plus"></i>Add Image</a>
                            </div>
                            @if ($message = Session::get('success'))
                                <div class="alert alert-success">
                                    <p class="text-success">{{ $message }}</p>
                                </div>
                            @endif
                        </div>
                        <div class="card-body">
                            <div class="row">
                                @foreach ($gallery as $gallery)
                                    <div class="col-md-4 mb-4">
                                        <img src="{{ asset('images/gallery') . '/' . $gallery->name }}" alt="image"
                                            style="height: auto; max-width: 100%;" srcset="">
                                        <form action="{{ route('gallery.destroy', $gallery->id) }}" method="POST">
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
