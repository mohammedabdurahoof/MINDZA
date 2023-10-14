@foreach ($selectedCourses as $course)
    <div class="row">
        <div class="curriculum-cont" style="width: 100%;">
            <div class="title d-flex justify-content-between mb-3 align-items-center">
                <h6>{{ $course->courseName }}</h6>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                    Add Lecture
                </button>
                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Add Lecture</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form action="{{ route('teacher.addLecture') }}" method='POST'
                                enctype="multipart/form-data">
                                @csrf
                                <div class="modal-body">
                                    @if ($errors->any())
                                        <span
                                            class="text-danger text-left mb-4">{{ implode('', $errors->all(':message')) }}</span>
                                    @endif
                                    <div class="form-group">
                                        <input type="hidden" value="{{ $course->id }}" name="courseId">
                                        <label for="recipient-name" class="col-form-label">Lecture Name</label>
                                        <input type="text" class="form-control" id="recipient-name" required
                                            name="name" placeholder="Enter Lecture Name">
                                    </div>
                                    <div class="form-group">
                                        <label for="message-text" class="col-form-label">Description</label>
                                        <textarea class="form-control" id="message-text" required placeholder="Enter Description" name="description"></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label for="recipient-name" class="col-form-label">Link</label>
                                        <input type="text" class="form-control" id="recipient-name" name="link"
                                            placeholder="Enter Link">
                                    </div>

                                    <div class="form-group">
                                        <label for="recipient-name" class="col-form-label">Image</label>

                                        <div class="avatar-upload" style="margin: 0">
                                            <div class="avatar-edit">
                                                <input name="image" type='file' id="imageUpload1"
                                                    accept=".png, .jpg, .jpeg" />
                                                <label for="imageUpload1"></label>
                                            </div>
                                            <div class="avatar-download">
                                                <a download="shop-preview.jpg"
                                                    href="{{ asset('assets/admin/img/preview/shop-sub-preview.jpg') }}"
                                                    title="ImageName"></a>
                                            </div>
                                            <img id="imagePreview1" class="avatar-preview no-border-radius"
                                                src="{{ asset('assets/admin/img/preview/shop-sub-preview.jpg') }}"
                                                alt="">
                                            {{-- <div class="avatar-preview">
                                        <div id="imagePreview"
                                            style="background-image: url({{ asset('assets/admin/img/preview/shop-preview.jpg') }});">
                                        </div>
                                    </div> --}}
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="recipient-name" class="col-form-label">Video</label>

                                        <div class="avatar-upload" style="margin: 0">
                                            <div class="avatar-edit">
                                                <input name="video" type='file' id="imageUpload2"
                                                    accept="video/*" />
                                                <label for="imageUpload2"></label>
                                            </div>
                                            <div class="avatar-download">
                                                <a download="shop-preview.jpg"
                                                    href="{{ asset('assets/admin/img/preview/shop-sub-preview.jpg') }}"
                                                    title="ImageName"></a>
                                            </div>
                                            <video id="imagePreview2" width="320" height="240" controls>
                                                <source id="" src="movie.mp4" type="video/mp4">
                                                Your browser does not support the video tag.
                                            </video>
                                            {{-- <img id="imagePreview2" class="avatar-preview no-border-radius"
                                                src="{{ asset('assets/admin/img/preview/shop-sub-preview.jpg') }}"
                                                alt=""> --}}
                                            {{-- <div class="avatar-preview">
                                        <div id="imagePreview"
                                            style="background-image: url({{ asset('assets/admin/img/preview/shop-preview.jpg') }});">
                                        </div>
                                    </div> --}}
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary"
                                        onClick="this.form.submit(); this.disabled=true; this.value='Sending…'; ">Add
                                        Lecture</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="accordion" id="accordionExample">
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <a href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                            aria-controls="collapseOne">
                            <ul>
                                <li><i class="fa fa-file-o"></i></li>
                                <li><span class="lecture">Lecture 1.1</span></li>
                                <li><span class="head">What is javascript</span></li>
                                <li><span class="time d-none d-md-block"><i class="fa fa-clock-o"></i> <span>
                                            00.30.00</span></span>
                                </li>
                            </ul>
                        </a>
                    </div>

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                        data-parent="#accordionExample">
                        <div class="card-body">
                            <p>Ut quis scelerisque risus, et viverra nisi. Phasellus
                                ultricies
                                luctus augue, eget maximus felis laoreet quis.
                                Maecenasbibendum
                                tempor eros.</p>
                        </div>
                    </div>
                </div>


            </div>
        </div>

        <!-- curriculum cont -->
    </div>
@endforeach
