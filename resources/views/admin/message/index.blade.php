@extends('layouts.main')

@section('title', 'Messages')

@section('content')

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Messages /</span> Messages Data</h4>
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
                            <h5>Message List</h5>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive text-nowrap">
                                <table class="table">
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Subject</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                    @foreach ($messages as $message)
                                    <tr>
                                        <td>{{ $message->name }}</td>
                                        <td>{{ $message->email }}</td>
                                        <td>{{ $message->subject }}</td>
                                        @if ($message->status == 0)
                                        <td><span class="badge bg-danger">Unread</span></td>
                                        @else
                                        <td><span class="badge bg-success">Read</span></td>
                                        @endif
                                        <td>
                                            <a href="{{ route('admin.message.edit', $message->id) }}" class="btn btn-primary">View</a>
                                            <form action="{{ route('admin.message.destroy', $message->id) }}" method="POST" class="d-inline">
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