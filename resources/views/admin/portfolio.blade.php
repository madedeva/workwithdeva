@extends('layouts.main')

@section('title', 'Portfolio')

@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Portfolio /</span> Portfolio Data</h4>
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-12">
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
                        <div class="card-header">
                            <a href="/dashboard/portfolio/add-portfolio" class="btn btn-primary">Add New Portfolio</a>
                        </div>
                    <div class="card-body">
                        <div class="table-responsive text-nowrap">
                            <table class="table">
                                <tr>
                                    <th>Title</th>
                                    <th>Category</th>
                                    <th>Client</th>
                                    <th>Action</th>
                                </tr>
                                @foreach($portfolio as $p)
                                <tr>
                                    <td>{{ $p->title }}</td>
                                    <td>{{ $p->category->name }}</td>
                                    <td>{{ $p->client }}</td>
                                    <td>
                                        <a href="{{ route('admin.portfolio.edit', $p->id) }}" class="btn btn-warning">Edit</a>
                                        <form action="{{ route('admin.portfolio.destroy', $p->id) }}" method="POST" class="d-inline">
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