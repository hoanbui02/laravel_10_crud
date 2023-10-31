@extends('layouts.app')

@section('body')
    <h1 class="mb-0">Detail Student</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Name</label>
            <input type="text" name="name" class="form-control" placeholder="Name" value="{{ $student->name }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Phone</label>
            <input type="text" name="phone" class="form-control" placeholder="Phone" value="{{ $student->phone }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Address</label>
            <input type="text" name="address" class="form-control" placeholder="Address" value="{{ $student->address }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Mail</label>
            <input type="text" name="mail" class="form-control" placeholder="Mail" value="{{ $student->mail }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Class ID</label>
            <input type="text" name="classid" class="form-control" placeholder="Class ID" value="{{ $student->classid }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Course ID</label>
            <input type="text" name="courseid" class="form-control" placeholder="Course ID" value="{{ $student->courseid }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $student->created_at }}" readonly>
        </div> 
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $student->updated_at }}" readonly>
        </div>
    </div>
@endsection