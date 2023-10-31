@extends('layouts.app')

@section('body')
    <h1 class="mb-0">Edit Class</h1>
    <hr />
    <form action="{{ route('class.update', $class->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <!-- <div class="col mb-3">
                <label class="form-label">Class ID</label>
                <input type="text" name="classid" class="form-control" placeholder="Class ID" value="{{ $class->classid }}">
            </div> -->
            <div class="col mb-3">
                <label class="form-label">Class Name</label>
                <input type="text" name="classname" class="form-control" placeholder="Class Name" value="{{ $class->classname }}">
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Start Time</label>
                <input type="text" name="starttime" class="form-control" placeholder="Start Time" value="{{ $class->starttime }}">
            </div>
            <div class="col mb-3">
                <label class="form-label">End Time</label>
                <input type="text" name="endtime" class="form-control" placeholder="End Time" value="{{ $class->endtime }}">
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection