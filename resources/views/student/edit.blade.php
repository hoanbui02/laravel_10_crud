@extends('layouts.app')

@section('body')
    <h1 class="mb-0">Edit Student</h1>
    <hr />
    <form action="{{ route('student.update', $student->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Name</label>
                <input type="text" name="name" class="form-control" placeholder="Name" value="{{ $student->name }}">
            </div>
            <div class="col mb-3">
                <label class="form-label">Phone</label>
                <input type="text" name="phone" class="form-control" placeholder="Phone" value="{{ $student->phone }}">
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Address</label>
                <input type="text" name="address" class="form-control" placeholder="Address" value="{{ $student->address }}">
            </div>
            <div class="col mb-3">
                <label class="form-label">Mail</label>
                <input type="text" name="mail" class="form-control" placeholder="Mail" value="{{ $student->mail }}">
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Class ID</label>
                <input type="text" name="classid" class="form-control" placeholder="Class ID" value="{{ $student->classid }}">
            </div>
            <div class="col mb-3">
                <label class="form-label">Course ID</label>
                <input type="text" name="courseid" class="form-control" placeholder="Course ID" value="{{ $student->courseid }}">
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection