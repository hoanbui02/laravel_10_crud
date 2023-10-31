@extends('layouts.app')

@section('body')
    <h1 class="mb-0">Add Course</h1>
    <hr />
    <form action="{{ route('course.store') }}" method="POST">
        @csrf
        <div class="row mb-3">
            <!-- <div class="col">
                <input type="text" name="courseid" class="form-control" placeholder="Course ID">
            </div> -->
            <div class="col">
                <input type="text" name="coursename" class="form-control" placeholder="Course Name">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="unit" class="form-control" placeholder="Unit">
            </div>
            <div class="col">
                <input type="text" name="location" class="form-control" placeholder="Location">
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection