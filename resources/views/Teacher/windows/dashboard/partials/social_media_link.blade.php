<div class="title">
    <h6>Social media links</h6>
</div>
<form method="POST" id="signup-form" class="signup-form" action="{{ route('teacher.link', $teacher->id) }}"
    enctype="multipart/form-data">
    @csrf
    @method('PUT')
    {{-- <h2 class="form-title pb-20">Register Now</h2> --}}
    @if ($errors->any())
        <span class="text-danger text-left mb-4">{{ implode('', $errors->all(':message')) }}</span>
    @endif
    <div class="row mt-3">
        <div class="col-12">
            <div class="form-group">
                <label for="facebook">Facebook</label>
                <input type="text" class="form-input" name="facebook" id="facebook" placeholder="Facebook"
                    value="{{ $teacher->facebook }}" required />
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <label for="instagram">Instagram</label>
                <input type="text" class="form-input" name="instagram" id="instagram" placeholder="Instagram"
                    value="{{ $teacher->instagram }}" required />
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <label for="whatsapp">Whatsapp</label>
                <input type="text" class="form-input" name="whatsapp" id="whatsapp" placeholder="Whatsapp"
                    value="{{ $teacher->whatsapp }}" required />
            </div>
        </div>
    </div>
    <div class="form-group">
        <input type="submit" name="submit" id="submit" class="main-btn register-submit" value="Submit" />
    </div>

</form>
