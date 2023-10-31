@extends('layouts.app')

@section('body')
    <h1 class="mb-0">Edit Class</h1>
    <hr />
    <form action="{{ route('course.update', $course->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <!-- <div class="col mb-3">
                <label class="form-label">Course ID</label>
                <input type="text" name="courseid" class="form-control" placeholder="Course ID" value="{{ $course->courseid }}">
            </div> -->
            <div class="col mb-3">
                <label class="form-label">Course Name</label>
                <input type="text" name="coursename" class="form-control" placeholder="Course Name" value="{{ $course->coursename }}">
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Unit</label>
                <input type="text" name="unit" class="form-control" placeholder="Unit" value="{{ $course->unit }}">
            </div>
            <div class="col mb-3">
                <label class="form-label">Location</label>
                <input type="text" name="location" class="form-control" placeholder="Location" value="{{ $course->location }}">
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection