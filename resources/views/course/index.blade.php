@extends('layouts.app')

@section('body')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">List Course</h1>
        <a href="{{ route('course.create') }}" class="btn btn-primary">Add Course</a>
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
                <!-- <th>Course ID</th> -->
                <th>Course Name</th>
                <th>Unit</th>
                <th>Location</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @if($course->count() > 0)
                @foreach($course as $rs)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <!-- <td class="align-middle">{{ $rs->courseid }}</td> -->
                        <td class="align-middle">{{ $rs->coursename }}</td>
                        <td class="align-middle">{{ $rs->unit }}</td>
                        <td class="align-middle">{{ $rs->location }}</td>
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('course.show', $rs->id) }}" type="button" class="btn btn-secondary">Detail</a>
                                <a href="{{ route('course.edit', $rs->id) }}" type="button" class="btn btn-warning">Edit</a>
                                <form action="{{ route('course.destroy', $rs->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
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
                    <td class="text-center" colspan="5">Course not found</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection