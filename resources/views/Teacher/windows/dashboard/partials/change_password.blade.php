<div class="title pt-15 pb-15">
    <h6>Change Password</h6>
</div>

<form action="{{ route('teacher.changePassword') }}" method="post">
    @csrf
    @method('PUT')
    <div class="form-group" style="overflow: visible">
        <input type="password" class="form-input" name="password" id="password"
            placeholder="New Password" />
        <span toggle="#password"
            class="zmdi zmdi-eye field-icon toggle-password"></span>
    </div>
    <div class="form-group">
        <input type="password" class="form-input" name="password_confirmation"
            id="password_confirmation" placeholder="Confirm Password" required />
        <span toggle="#password"
            class="zmdi zmdi-eye field-icon toggle-password"></span>
    </div>
    <div class="form-group">
        <input type="submit" name="submit" id="submit"
            class="main-btn register-submit" value="Change" />
    </div>
</form>
