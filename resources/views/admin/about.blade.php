@extends('layouts.main')

@section('title', 'About')

@section('content')

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">About /</span> About Info</h4>
        @if (session('success'))
            <div class="row">
                <div class="col-md-6">
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                </div>
            </div>
        @endif
        <div class="row">
            <div class="col-md-12">
                <!-- Form controls -->
                 <div class="col-md-6">
                    <div class="card mb-4">
                        <h5 class="card-header">About Details</h5>
                        <div class="card-body">
                            @foreach ($about as $about)
                            <ul class="list-group list-group-flush mb-4">
                                <li class="list-group-item"><b>Birthday:</b> {{ $about->birthday }}</li>
                                <li class="list-group-item"><b>Website:</b> {{ $about->website }}</li>
                                <li class="list-group-item"><b>Phone:</b> {{ $about->phone }}</li>
                                <li class="list-group-item"><b>City:</b> {{ $about->city }}</li>
                                <li class="list-group-item"><b>Age:</b> {{ $about->age }}</li>
                                <li class="list-group-item"><b>Degree:</b> {{ $about->degree }}</li>
                                <li class="list-group-item"><b>Email:</b> {{ $about->email }}</li>
                                <li class="list-group-item"><b>Freelance:</b>
                                    @if($about->freelance == 0)
                                        Available
                                    @else
                                        Unavailable
                                    @endif
                                </li>
                                <li class="list-group-item"><b>Description:</b> {{ $about->about }}</li>
                            </ul>
                            @endforeach
                            <a href="{{ route('admin.about.edit', $about->id) }}" class="btn btn-primary">Update</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection