@extends('layouts.app')

@section('body')
<h1 class="mb-0">Add Student</h1>
<hr />
<form action="{{ route('student.store') }}" method="POST">
    @csrf
    <div class="row mb-3">
        <div class="col">
            <input type="text" name="name" class="form-control" placeholder="Name">
        </div>
        <div class="col">
            <input type="text" name="phone" class="form-control" placeholder="Phone">
        </div>
    </div>
    <div class="row mb-3">
        <div class="col">
            <input type="text" name="address" class="form-control" placeholder="Address">
        </div>
        <div class="col">
            <input type="text" name="mail" class="form-control" placeholder="Mail">
        </div>
    </div>
    <div class="row mb-3">
        <!-- <div class="col">
                <input type="text" name="classid" class="form-control" placeholder="Class ID">
            </div> -->
        <div class="col">
            <select name="classid" data-required="1" class="form-control">
                @foreach ($classes as $class)
                <option value="{{ $class->id }}"> {{ $class->label }}</option>
                @endforeach
            </select>
        </div>
        <!-- <div class="col">
            <input type="text" name="courseid" class="form-control" placeholder="Course ID">
        </div> -->
        <div class="col">
            <select name="courseid" data-required="1" class="form-control">
                @foreach ($courses as $course)
                <option value="{{ $course->id }}"> {{ $course->label }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="row">
        <div class="d-grid">
            <button class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
@endsection