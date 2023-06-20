@extends('admin.layout.index')

@section('content')
    <main class="content">
        <div class="container-fluid p-0">

            <h1 class="h3 mb-3">Edit Event</h1>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Edit Event</h5>
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li class="text-danger">{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('events.update', $event->id) }}"
                                enctype="multipart/form-data">
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
                                                    href="{{ asset('assets/admin/img/preview/event-preview.jpg') }}"
                                                    title="ImageName"></a>
                                            </div>
                                            <img id="imagePreview" class="avatar-preview"
                                                src="{{ asset('images/events') . '/' . $event->image }}" alt="">
                                            {{-- <div class="avatar-preview">
                                            <div id="imagePreview"
                                                style="background-image: url({{asset('images/events').'/'.$event->image}});">
                                            </div>
                                        </div> --}}
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label" for="inputEventeName">Event Name</label>
                                        <input type="text" name="name" class="form-control" id="inputEventeName"
                                            value="{{ $event->name }}" required placeholder="Event Name">
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label" for="inputAddress">Address</label>
                                        <input type="text" name="address" class="form-control" id="inputAddress" required
                                            value="{{ $event->address }}" placeholder="Address">
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="mb-3 col-md-3">
                                        <label class="form-label" for="inputPlace">Place</label>
                                        <input type="text" name="place" class="form-control" id="inputPlace" required
                                            value="{{ $event->place }}" placeholder="Place">
                                    </div>
                                    <div class="mb-3 col-md-3">
                                        <label class="form-label" for="inputDate">Date</label>
                                        <input type="date" name="date" class="form-control" id="inputDate" required
                                            value="{{ $event->date }}" placeholder="Date">
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label class="form-label" for="inputStartTime">Start Time</label>
                                        <div class="input-group ">
                                            <input type="time" name="startTime" id="inputStartTime" class="form-control"
                                                value="{{ $event->startTime }}" required placeholder="Start Time ">
                                        </div>
                                    </div>
                                    <div class="mb-3 col-md-3">
                                        <label class="form-label" for="inputFinishTime">Finish Time</label>
                                        <div class="input-group mb-3">
                                            <input type="time" name="finishTime" id="inputFinishTime"
                                                value="{{ $event->finishTime }}" class="form-control" required
                                                placeholder="Finish Time">
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="col-form-label text-sm-end">Description</label>
                                    <textarea class="form-control" name="description" placeholder="Description" rows="5" required>{{ $event->description }}</textarea>
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
