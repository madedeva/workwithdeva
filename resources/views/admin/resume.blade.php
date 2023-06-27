@extends('layouts.main')

@section('title', 'Resume')

@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Resume /</span> Resume Data</h4>
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-12">
                    <!-- add success alert -->
                    @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                    @endif
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                 <div class="col-md-12">
                    <div class="card mb-4">
                        <!-- card header add skills button -->
                        <div class="card-header">
                            <a href="/dashboard/resume/add-resume" class="btn btn-primary">Add New Resume</a>
                        </div>
                        <!-- card body -->
                    <div class="card-body">
                        <div class="table-responsive text-nowrap">
                            <table class="table">
                                <tr>
                                    <th>Title</th>
                                    <th>Company</th>
                                    <th>Type</th>
                                    <th>Action</th>
                                </tr>
                                @foreach ($resume as $res)
                                <tr>
                                    <td>{{ $res->title }}</td>
                                    <td>{{ $res->company }}</td>
                                    <!-- <td>{{ $res->type }}</td> -->
                                    <td>
                                        @if ($res->type == 0)
                                            Education
                                        @else
                                            Experience
                                        @endif
                                    <td>
                                        <a href="{{ route('admin.resume.edit', $res->id) }}" class="btn btn-primary">Edit</a>
                                        <form action="{{ route('admin.resume.destroy', $res->id) }}" method="POST" class="d-inline">
                                            @method('delete')
                                            @csrf
                                            <button class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection