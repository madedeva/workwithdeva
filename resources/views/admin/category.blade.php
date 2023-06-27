@extends('layouts.main')

@section('title', 'Category')

@section('content')

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Category /</span> Portfolio Category</h4>
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-4">
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
                 <div class="col-md-4">
                    <div class="card mb-4">
                        <!-- card header add skills button -->
                        <div class="card-header">
                            <a href="/dashboard/category/add-category" class="btn btn-primary">Add New Category</a>
                        </div>
                        <!-- card body -->
                    <div class="card-body">
                        <div class="table-responsive text-nowrap">
                            <table class="table">
                                <tr>
                                    <th>Category Name</th>
                                    <th>Action</th>
                                </tr>
                                @foreach ($categories as $cat)
                                <tr>
                                    <td>{{ $cat->name }}</td>
                                    <td>
                                        <a href="{{ route('admin.category.edit', $cat->id) }}" class="btn btn-primary">Edit</a>
                                        <form action="{{ route('admin.category.destroy', $cat->id) }}" method="POST" class="d-inline">
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