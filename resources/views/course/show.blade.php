@extends('layouts.app')

@section('body')
    <h1 class="mb-0">Detail Course</h1>
    <hr />
    <div class="row">
        <!-- <div class="col mb-3">
            <label class="form-label">Course ID</label>
            <input type="text" name="courseid" class="form-control" placeholder="Course ID" value="{{ $course->courseid }}" readonly>
        </div> -->
        <div class="col mb-3">
            <label class="form-label">Course Name</label>
            <input type="text" name="coursename" class="form-control" placeholder="Course Name" value="{{ $course->coursename }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Unit</label>
            <input type="text" name="unit" class="form-control" placeholder="Unit" value="{{ $course->unit }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Location</label>
            <input type="text" name="location" class="form-control" placeholder="Location" value="{{ $course->location }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $course->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $course->updated_at }}" readonly>
        </div>
    </div>
@endsection