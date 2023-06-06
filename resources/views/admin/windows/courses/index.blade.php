@extends('admin.layout.index')

@section('content')
    <main class="content">
        <div class="container-fluid p-0">

            <h1 class="h3 mb-3">Courses</h1>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex justify-content-between">

                                <h5 class="card-title">All Courses</h5>
                                <a href="/admin/add-course" class="btn btn-primary btn-lg"><i class="align-middle" data-feather="plus"></i>Add Course</a>
                            </div>
                            {{-- <h6 class="card-subtitle text-muted">Add <code>.table-hover</code> to enable a hover state on
                                table rows within a
                                <code>&lt;tbody&gt;</code>.
                            </h6> --}}
                        </div>
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Phone Number</th>
                                    <th>Date of Birth</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <img src="img/avatars/avatar-5.jpg" width="48" height="48"
                                            class="rounded-circle me-2" alt="Avatar"> Vanessa
                                        Tucker
                                    </td>
                                    <td>864-348-0485</td>
                                    <td>June 21, 1961</td>
                                    <td class="table-action">
                                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-edit-2 align-middle">
                                                <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
                                            </svg></a>
                                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-trash align-middle">
                                                <polyline points="3 6 5 6 21 6"></polyline>
                                                <path
                                                    d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                </path>
                                            </svg></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <img src="img/avatars/avatar-2.jpg" width="48" height="48"
                                            class="rounded-circle me-2" alt="Avatar"> William
                                        Harris
                                    </td>
                                    <td>914-939-2458</td>
                                    <td>May 15, 1948</td>
                                    <td class="table-action">
                                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-edit-2 align-middle">
                                                <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
                                            </svg></a>
                                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-trash align-middle">
                                                <polyline points="3 6 5 6 21 6"></polyline>
                                                <path
                                                    d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                </path>
                                            </svg></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <img src="img/avatars/avatar-3.jpg" width="48" height="48"
                                            class="rounded-circle me-2" alt="Avatar"> Sharon
                                        Lessman
                                    </td>
                                    <td>704-993-5435</td>
                                    <td>September 14, 1965</td>
                                </tr>
                                <tr>
                                    <td>
                                        <img src="img/avatars/avatar-4.jpg" width="48" height="48"
                                            class="rounded-circle me-2" alt="Avatar"> Christina
                                        Mason
                                    </td>
                                    <td>765-382-8195</td>
                                    <td>April 2, 1971</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </main>
@endsection
