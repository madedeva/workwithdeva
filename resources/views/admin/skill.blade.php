@extends('layouts.main')

@section('title', 'Skills')

@section('content')

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Skilss /</span> Skills Data</h4>
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-6">
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
                 <div class="col-md-6">
                    <div class="card mb-4">
                        <!-- card header add skills button -->
                        <div class="card-header">
                            <a href="/dashboard/skill/add-skill" class="btn btn-primary">Add Skills</a>
                        </div>
                        <!-- card body -->
                    <div class="card-body">
                        <div class="table-responsive text-nowrap">
                            <table class="table">
                                <tr>
                                    <th>Skill Name</th>
                                    <th>Percentage</th>
                                    <th>Action</th>
                                </tr>
                                @foreach ($skills as $sk)
                                <tr>
                                    <td>{{ $sk->name }}</td>
                                    <td>{{ $sk->percentage }}</td>
                                    <td>
                                        <a href="{{ route('admin.skill.edit', $sk->id) }}" class="btn btn-primary">Edit</a>
                                        <form action="{{ route('admin.skill.destroy', $sk->id) }}" method="POST" class="d-inline">
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