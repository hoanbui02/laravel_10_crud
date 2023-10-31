@extends('layouts.app')

@section('body')
    <h1 class="mb-0">Add Class</h1>
    <hr />
    <form action="{{ route('class.store') }}" method="POST">
        @csrf
        <div class="row mb-3">
            <!-- <div class="col">
                <input type="text" name="classid" class="form-control" placeholder="Class ID">
            </div> -->
            <div class="col">
                <input type="text" name="classname" class="form-control" placeholder="Class Name">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="starttime" class="form-control" placeholder="Start Time">
            </div>
            <div class="col">
                <input type="text" name="endtime" class="form-control" placeholder="End Time">
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection