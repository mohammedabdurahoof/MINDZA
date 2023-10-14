<div class="title">
    <h6>Edit Teacher</h6>
</div>
<form method="POST" id="signup-form" class="signup-form" action="{{ route('teacher.update', $teacher->id) }}"
    enctype="multipart/form-data">
    @csrf
    @method('PUT')
    {{-- <h2 class="form-title pb-20">Register Now</h2> --}}
    @if ($errors->any())
        <span class="text-danger text-left mb-4">{{ implode('', $errors->all(':message')) }}</span>
    @endif
    <div class="avatar-upload">
        <div class="avatar-edit">
            <input type="file" name="image" id="imageUpload" accept=".png, .jpg, .jpeg" />
            <label for="imageUpload"></label>
        </div>
        <div class="avatar-preview">
            <div id="imagePreview"
                style="background-image: url({{ asset('images/teacher') . '/' . $teacher->image }});">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-md-4">
            <div class="form-group">
                <input type="text" class="form-input" name="name" id="name" placeholder="Your Name"
                    value="{{ $teacher->name }}" required />
            </div>
        </div>
        <div class="col-12 col-md-8">
            <div class="form-group">
                <input type="email" class="form-input" name="email" id="email" disabled placeholder="Your Email"
                    value="{{ $teacher->email }}" required />

                <input type="hidden" class="form-input" name="position" id="position"  placeholder="Your position"
                    value="{{ $teacher->position }}" required />
            </div>
        </div>
    </div>
    <div class="mb-3">
        <label class="col-form-label text-sm-end">Description</label>
        <textarea class="form-control" name="description" placeholder="Description" rows="5" required>{{ $teacher->description }}</textarea>
    </div>
    <div class="mb-3">
        <label class="col-form-label text-sm-end">About</label>
        <textarea class="form-control" name="about" placeholder="About" rows="5" required>{{ $teacher->about }}</textarea>
    </div>
    <div class="mb-3">
        <label class="col-form-label text-sm-end">Achievements</label>
        <textarea class="form-control" name="achievements" placeholder="Achievements" rows="5" required>{{ $teacher->achievements }}</textarea>
    </div>
    <div class="mb-3">
        <label class="col-form-label text-sm-end">Objective</label>
        <textarea class="form-control" name="objective" placeholder="Objective" rows="5" required>{{ $teacher->objective }}</textarea>
    </div>


    <div class="form-group">
        <input type="submit" name="submit" id="submit" class="main-btn register-submit" value="Edit" />
    </div>

</form>
