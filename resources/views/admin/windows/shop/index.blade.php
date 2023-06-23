@extends('admin.layout.index')

@section('content')
    <main class="content">
        <div class="container-fluid p-0">

            <h1 class="h3 mb-3">Products</h1>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex justify-content-between">

                                <h5 class="card-title">All Products</h5>
                                <a href="{{ route('shop.create') }}" class="btn btn-primary btn-lg"><i
                                        class="align-middle" data-feather="plus"></i>Add Product</a>
                            </div>
                            {{-- <h6 class="card-subtitle text-muted">Add <code>.table-hover</code> to enable a hover state on
                                table rows within a
                                <code>&lt;tbody&gt;</code>.
                            </h6> --}}
                            @if ($message = Session::get('success'))
                                <div class="alert alert-success">
                                    <p class="text-success">{{ $message }}</p>
                                </div>
                            @endif
                        </div>
                        <div class="scroll">

                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Price</th>
                                        {{-- <th>shop</th>
                                    <th>Duaration</th>
                                    <th>Price</th> --}}
                                        <th>Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($shop as $shop)
                                        <tr>
                                            <td>
                                                <img src="{{ asset('images/shop') . '/' . $shop->images[0] }}" width="48"
                                                    height="48" class="rounded-circle me-2" alt="image">
                                                {{ $shop->name }}
                                            </td>
                                            <td>{{ $shop->price }}</td>
                                            {{-- <td>{{ $shop->shopId }}</td>
                                        <td>{{ $shop->duration }}</td>
                                        <td>{{ $shop->price }}</td> --}}
                                            <td class="table-action">
                                                <form action="{{ route('shop.destroy', $shop->id) }}" method="POST">

                                                    <a class="btn btn-primary"
                                                        href="{{ route('shop.edit', $shop->id) }}"><svg
                                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                            class="feather feather-edit-2 align-middle">
                                                            <path
                                                                d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z">
                                                            </path>
                                                        </svg></a>
                                                    {{-- <a href="#"></a>
                                                <a class="btn btn-info"
                                                    href="{{ route('products.show', $course->id) }}">Show</a>
                                                <a class="btn btn-primary"
                                                    href="{{ route('products.edit', $course->id) }}">Edit</a> --}}
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger"><svg
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
                                            </td>
                                            {{-- <td>{{ ++$i }}</td> --}}
                                            {{-- <td>{{ $course->courseName }}</td>
                                        <td>{{ $course->detail }}</td>
                                        <td>
                                            <form action="{{ route('products.destroy', $course->id) }}" method="POST">
                                                <a class="btn btn-info"
                                                    href="{{ route('products.show', $course->id) }}">Show</a>
                                                <a class="btn btn-primary"
                                                    href="{{ route('products.edit', $course->id) }}">Edit</a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                        </td> --}}
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </main>
@endsection
