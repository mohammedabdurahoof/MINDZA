<div class="title">
    <h6>Edit Student</h6>
</div>
<form method="POST" id="signup-form" class="signup-form"
    action="{{ route('students.update', $student->id) }}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    {{-- <h2 class="form-title pb-20">Register Now</h2> --}}
    @if ($errors->any())
        <span
            class="text-danger text-left mb-4">{{ implode('', $errors->all(':message')) }}</span>
    @endif
    <div class="avatar-upload">
        <div class="avatar-edit">
            <input type="file" name="image" id="imageUpload"
                accept=".png, .jpg, .jpeg" />
            <label for="imageUpload"></label>
        </div>
        <div class="avatar-preview">
            <div id="imagePreview"
                style="background-image: url({{ asset('images/student') . '/' . $student->image }});">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-md-4">
            <div class="form-group">
                <input type="text" class="form-input" name="name"
                    id="name" placeholder="Your Name"
                    value="{{ $student->name }}" required />
            </div>
        </div>
        <div class="col-12 col-md-8">
            <div class="form-group">
                <input type="email" class="form-input" name="email"
                    id="email" disabled placeholder="Your Email"
                    value="{{ $student->email }}" required />
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12 col-md-6">
            <div class="form-group">
                <input type="tel" class="form-input" name="phone"
                    id="phone" placeholder="Your Mobile Number"
                    value="{{ $student->phone }}" required />
            </div>
        </div>
        <div class="col-12 col-md-6">
            <div class="form-group">
                <input type="text" class="form-input" name="address"
                    id="address" placeholder="Your Address"
                    value="{{ $student->address }}" required />
            </div>
        </div>
    </div>

    <h6 class="mb-3">Select your Gender:</h6>
    <div class="row justify-content-around">
        <div class="form-group">
            <input type="radio" name="gender" id="male"
                placeholder="Your Gender"
                {{ $student->gender == 'Male' ? 'checked' : '' }} value="Male"
                required />
            <label for="male"><b>Male</b></label><br>
        </div>
        <div class="form-group">
            <input type="radio" name="gender" id="female"
                placeholder="Your Gender"
                {{ $student->gender == 'Female' ? 'checked' : '' }} value="Female"
                required />
            <label for="female"><b>Female</b></label><br>
        </div>
        <div class="form-group">
            <input type="radio" name="gender" id="other"
                placeholder="Your Gender" value="Other" required
                {{ $student->gender == 'Other' ? 'checked' : '' }} />

            <label for="other"><b>Other</b></label><br>
        </div>
    </div>
    <div class="form-group">
        <input type="submit" name="submit" id="submit"
            class="main-btn register-submit" value="Edit" />
    </div>

</form>
