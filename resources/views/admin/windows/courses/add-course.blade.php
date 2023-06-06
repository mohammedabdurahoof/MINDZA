@extends('admin.layout.index')

@section('content')
    <main class="content">
        <div class="container-fluid p-0">

            <h1 class="h3 mb-3">Add Course</h1>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Add Course</h5>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label" for="courseName">Course Name</label>
                                        <input type="text" class="form-control" id="courseName"
                                            placeholder="Course Name">
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label" for="inputTeacher">Teacher</label>
                                        <select id="inputTeacher" class="form-control">
                                            <option selected="">Choose...</option>
                                            <option>...</option>
                                        </select>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="mb-3 col-md-4">
                                        <label class="form-label" for="inputCategory">Category</label>
                                        <select id="inputCategory" class="form-control">
                                            <option selected="">Choose...</option>
                                            <option>...</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label class="form-label" for="inputDuaration">Duaration</label>
                                        <div class="input-group ">
                                            <input type="number" id="inputDuaration" class="form-control"
                                                placeholder="Duaration ">
                                            <span class="input-group-text">Days</span>
                                        </div>
                                    </div>
                                    <div class="mb-3 col-md-4">
                                        <label class="form-label" for="inputPrice">Price</label>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text">$</span>
                                            <input type="number" id="inputPrice" class="form-control" placeholder="Price">
                                            <span class="input-group-text">.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="col-form-label text-sm-end">Course Summery</label>
                                    <textarea class="form-control" placeholder="Course Summery" rows="5"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="col-form-label text-sm-end">Requrements</label>
                                    <textarea class="form-control" placeholder="Requrements" rows="5"></textarea>
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