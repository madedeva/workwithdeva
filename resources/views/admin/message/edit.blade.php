@extends('layouts.main')

@section('title', 'View Messages')

@section('content')

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Messages /</span> Message Details</h4>
        <div class="row">
            <div class="col-md-12">
                 <div class="col-md-6">
                    <div class="card mb-4">
                        <div class="card-header">
                            <h5>Name: {{ $message->name }}</h5>
                            <div class="card-subtitle text-muted mb-3"><a href="mailto:{{ $message->email }}">Email: {{ $message->email }}</a></div>
                            <h5 class="mt-4">Subject: {{ $message->subject }}</h5>
                            <p><b>Message:</b> {{ $message->message }}</p>
                        </div>
                        <div class="card-body">
                            <p class="card-text"><small class="text-muted">{{ $message->created_at->format('d M Y') }}</small></p>
                            <form action="{{ route('admin.message.update', $message->id) }}" method="POST">
                                @method('put')
                                @csrf
                                <input type="hidden" name="status" value="1">

                                @if ($message->status == 0)
                                <button class="btn btn-primary">Mark as Read</button>
                                @endif

                                <a href="{{ route('admin.message.index') }}" class="btn btn-danger">Back</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection