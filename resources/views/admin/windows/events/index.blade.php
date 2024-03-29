@extends('admin.layout.index')

@section('content')
    <main class="content">
        <div class="container-fluid p-0">

            <h1 class="h3 mb-3">Events</h1>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex justify-content-between">

                                <h5 class="card-title">All Events</h5>
                                <a href="{{ route('events.create') }}" class="btn btn-primary btn-lg"><i class="align-middle"
                                        data-feather="plus"></i>Add Event</a>
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
                                        <th>Date</th>
                                        <th>Start Time</th>
                                        <th>Finish Time</th>
                                        <th>Place</th>
                                        <th>Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($events as $event)
                                        <tr>
                                            <td>
                                                <img src="{{ asset('images/events') . '/' . $event->image }}" width="48"
                                                    height="48" class="rounded-circle me-2" alt="image">
                                                    <a href='{{ route('events.show', $event->id) }}'>{{ $event->name }}</a>
                                            </td>
                                            <td>{{ $event->date }}</td>
                                            <td>{{ $event->startTime }}</td>
                                            <td>{{ $event->finishTime }}</td>
                                            <td>{{ $event->place }}</td>
                                            <td class="table-action">
                                                <form action="{{ route('events.destroy', $event->id) }}" method="POST">

                                                    <a class="btn btn-primary"
                                                        href="{{ route('events.edit', $event->id) }}"><svg
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
