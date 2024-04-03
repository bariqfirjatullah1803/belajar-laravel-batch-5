@extends('admin.layouts.app')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Edit Student Data</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{ route('student.index') }}">Student</a></li>
            <li class="breadcrumb-item active">Edit</li>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                Edit
            </div>
            <div class="card-body">
                <form action="{{ route('student.update', $student->id) }}" method="post">
                    @csrf
                    @method('put')
                    <div class="mb-3">
                        <label for="name" class="form-label">Student Name</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                            name="name" value="{{ $student->name }}">
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">Student Address</label>
                        <textarea class="form-control @error('address') is-invalid @enderror" id="address" rows="3" name="address">{{ $student->address }}</textarea>
                        @error('address')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="school_id" class="form-label">School</label>
                        <select class="form-select" id="school_id" name="school_id">
                            @foreach ($schools as $item)
                                <option value="{{ $item->id }}" @selected($item->id == $student->school_id)>{{ $item->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary float-end">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
