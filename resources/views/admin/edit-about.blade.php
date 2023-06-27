@extends('layouts.main')

@section('title', 'Edit About')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Dashboard /</span>About</h4>
        <div class="row">
            <div class="col-md-12">
                 <div class="col-md-6">
                    <div class="card mb-4">
                        <h5 class="card-header">About Details</h5>
                        <div class="card-body">
                            <form action="{{ route('admin.about.update', $about->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Birthday</label>
                                    <input type="text" class="form-control" id="birthday" name="birthday" value="{{ $about->birthday }}"/>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Website</label>
                                    <input type="text" class="form-control" id="website" name="website" value="{{ $about->website }}"/>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Phone</label>
                                    <input type="number" class="form-control" id="phone" name="phone" value="{{ $about->phone }}"/>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">City</label>
                                    <input type="text" class="form-control" id="city" name="city" value="{{ $about->city }}"/>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Age</label>
                                    <input type="text" class="form-control" id="age" name="age" value="{{ $about->age }}"/>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Degree</label>
                                    <input type="text" class="form-control" id="degree" name="degree" value="{{ $about->degree }}"/>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Email</label>
                                    <input type="text" class="form-control" id="email" name="email" value="{{ $about->email }}"/>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlSelect1" class="form-label">Freelance Status</label>
                                    <select class="form-select" id="freelance" name="freelance">
                                        <option value="0" {{ $about->freelance == 0 ? 'selected' : '' }}>Available</option>
                                        <option value="1" {{ $about->freelance == 1 ? 'selected' : '' }}>Unavailable</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">About Description</label>
                                    <textarea class="form-control" id="about" name="about" rows="8" value="{{ $about->about }}">{{ $about->about }}</textarea>
                                </div>
                                    <button type="submit" class="btn btn-primary mt-3">Update</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection