@extends('layouts.app')

@section('body')
    <h1 class="mb-0">Detail Class</h1>
    <hr />
    <div class="row">
        <!-- <div class="col mb-3">
            <label class="form-label">Class ID</label>
            <input type="text" name="classid" class="form-control" placeholder="Class ID" value="{{ $class->classid }}" readonly>
        </div> -->
        <div class="col mb-3">
            <label class="form-label">Class Name</label>
            <input type="text" name="classname" class="form-control" placeholder="CLass Name" value="{{ $class->classname }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Start Time</label>
            <input type="text" name="starttime" class="form-control" placeholder="Start Time" value="{{ $class->starttime }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">End Time</label>
            <input type="text" name="endtime" class="form-control" placeholder="End Time" value="{{ $class->endtime }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $class->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $class->updated_at }}">
        </div>
    </div>
@endsection