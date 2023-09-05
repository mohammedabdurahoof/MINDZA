<div class="form-group float-right mt-3">
    <input type="submit" name="submit" id="add-course-btn"
        class="main-btn register-submit" value="Add Course" />
       
</div>
<form action="" id="add-course-form">
    <div class="form-group" style="overflow: visible; margin-bottom: 5rem;">
        <select class="form-control" name="course" id="exampleFormControlSelect1"
            required>
            <option selected value="">choose a course</option>
            @foreach ($courses as $course)
                <option value="{{ $course->id }}"
                    {{ Session::get('value.course') == $course->id ? 'selected' : '' }}>
                    {{ $course->courseName }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group float-right mt-3">
        <input type="submit" name="submit" id="submit"
            class="main-btn register-submit" value="Register" />
    </div>
</form>
<div style="height: 7.5rem;"></div>
