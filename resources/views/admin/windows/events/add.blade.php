@extends('admin.layout.index')

@section('content')
    <main class="content">
        <div class="container-fluid p-0">

            <h1 class="h3 mb-3">Add Event</h1>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Add Event</h5>
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
                            <form method="POST" action="{{ route('events.store') }}" enctype="multipart/form-data">
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
                                                <a download="event-preview.jpg"
                                                    href="{{ asset('assets/admin/img/preview/event-preview.jpg') }}"
                                                    title="ImageName"></a>
                                            </div>
                                            <img id="imagePreview" class="avatar-preview"
                                                src="{{ asset('assets/admin/img/preview/event-preview.jpg') }}"
                                                alt="">
                                            {{-- <div class="avatar-preview">
                                            <div id="imagePreview"
                                                style="background-image: url({{ asset('assets/admin/img/preview/event-preview.jpg') }});">
                                            </div>
                                        </div> --}}
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label" for="inputEventeName">Event Name</label>
                                        <input type="text" name="name" class="form-control" id="inputEventeName"
                                            required placeholder="Event Name">
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label" for="inputAddress">Address</label>
                                        <input type="text" name="address" class="form-control" id="inputAddress" required
                                            placeholder="Address">
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="mb-3 col-md-3">
                                        <label class="form-label" for="inputPlace">Place</label>
                                        <input type="text" name="place" class="form-control" id="inputPlace" required
                                            placeholder="Place">
                                    </div>
                                    <div class="mb-3 col-md-3">
                                        <label class="form-label" for="inputDate">Date</label>
                                        <input type="date" name="date" class="form-control" id="inputDate" required
                                            placeholder="Date">
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label class="form-label" for="inputStartTime">Start Time</label>
                                        <div class="input-group ">
                                            <input type="time" name="startTime" id="inputStartTime" class="form-control"
                                                required placeholder="Start Time ">
                                        </div>
                                    </div>
                                    <div class="mb-3 col-md-3">
                                        <label class="form-label" for="inputFinishTime">Finish Time</label>
                                        <div class="input-group mb-3">
                                            <input type="time" value="0" name="finishTime" id="inputFinishTime"
                                                class="form-control" required placeholder="Finish Time">
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
