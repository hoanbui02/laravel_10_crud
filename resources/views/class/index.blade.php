@extends('layouts.app')

@section('body')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">List Class</h1>
        <a href="{{ route('class.create') }}" class="btn btn-primary">Add Class</a>
    </div>
    <hr />
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <table class="table table-hover">
        <thead class="table-primary">
            <tr>
                <th>#</th>
                <!-- <th>Class ID</th> -->
                <th>Class Name</th>
                <th>Start Time</th>
                <th>End Time</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @if($class->count() > 0)
                @foreach($class as $rs)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <!-- <td class="align-middle">{{ $rs->classid }}</td> -->
                        <td class="align-middle">{{ $rs->classname }}</td>
                        <td class="align-middle">{{ $rs->starttime }}</td>
                        <td class="align-middle">{{ $rs->endtime }}</td>
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('class.show', $rs->id) }}" type="button" class="btn btn-secondary">Detail</a>
                                <a href="{{ route('class.edit', $rs->id) }}" type="button" class="btn btn-warning">Edit</a>
                                <form action="{{ route('class.destroy', $rs->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger m-0">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td class="text-center" colspan="5">Class not found</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection