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
                                    <div class="mb-3 col-md-4">
                                        <label class="form-label" for="inputEventeName">Event Name</label>
                                        <input type="text" name="name" class="form-control" id="inputEventeName"
                                            value="{{ $event->name }}" required placeholder="Event Name">
                                    </div>
                                    <div class="mb-3 col-md-4">
                                        <label class="form-label" for="inputAddress">Link</label>
                                        <input type="text" name="link" class="form-control"
                                            value="{{ $event->link }}" id="inputAddress"  placeholder="Link">
                                    </div>
                                    <div class="mb-3 col-md-4">
                                        <label class="form-label" for="inputPlace">Place</label>
                                        <input type="text" name="place" class="form-control" id="inputPlace" required
                                            value="{{ $event->place }}" placeholder="Place">
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="mb-3 col-md-3">
                                        <label class="form-label" for="inputsDate">Start Date</label>
                                        <input type="date" name="startDate" class="form-control" id="inputsDate" required
                                            value="{{ $event->startDate }}" placeholder="Start Date">
                                    </div>
                                    <div class="mb-3 col-md-3">
                                        <label class="form-label" for="inputfDate">Finish Date</label>
                                        <input type="date" name="finishDate" class="form-control" id="inputfDate"
                                            value="{{ $event->finishDate }}" placeholder="FinishDate">
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
                                <div class="row">
                                    <div class="mb-3 col-md-3">
                                        <input type="checkbox" {{ $event->registration ? 'checked' : '' }}
                                            name="registration" value={{ true }} id="registration">
                                        <label for="registration">Registration</label>
                                    </div>
                                    <div class="mb-3 col-md-3">
                                        <input type="checkbox" {{ $event->countdown ? 'checked' : '' }} name="countdown"
                                            value={{ true }} id="countdown">
                                        <label for="countdown">Countdown</label>
                                    </div>
                                    <div class="mb-3 col-md-3">
                                        <input type="checkbox" {{ $event->available_time ? 'checked' : '' }}
                                            name="available_time" value={{ true }} id="availabletime">
                                        <label for="availabletime">Available Time</label>
                                    </div>
                                    <div class="mb-3 col-md-3">
                                        <input type="checkbox" {{ $event->photo ? 'checked' : '' }} name="photo"
                                            value={{ true }} id="photo">
                                        <label for="photo">Photo</label>
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
