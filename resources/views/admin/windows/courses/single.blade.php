@extends('admin.layout.index')

@section('content')
    <main class="content">
        <div class="container-fluid p-0">

            <h1 class="h3 mb-3">Students</h1>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex justify-content-between">

                                <h5 class="card-title">{{$course->courseName}}</h5>
                                
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
                                        <th>Phone</th>
                                        <th>Email</th>
                                        <th>Gender</th>
                                        <th>Address</th>
                                        <th>Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($students as $student)
                                        <tr>
                                            <td>
                                                <img src="{{ asset('images/student') . '/' . $student->image }}" width="48"
                                                    height="48" class="rounded-circle me-2" alt="image">
                                                <a>{{ $student->name }}<a/>
                                            </td>
                                            <td>{{ $student->phone }}</td>
                                            <td>{{ $student->email }}</td>
                                            <td>{{ $student->gender }}</td>
                                            <td>{{ $student->address }}</td>
                                            <td class="table-action">
                                                    <form action="{{ route('courses.cofrim') }}" method="POST">
                                                    @csrf
                                                    <input type='hidden' name="studentId" value={{$student->id}} />
                                                    <input type='hidden' name="courseId" value={{$course->id}} />
                                                    @foreach ($student->courses as $item)
                                                @if ($item['id'] == $course->id)
                                                    
                                            <button {{$item['status'] == 'confirmed' ? 'disabled' :''}} type="submit" class="btn btn-primary">Confirm</button>
                                                @endif
                                            @endforeach
                                                    
                                                </form>
                                                    
                                            </td>
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
