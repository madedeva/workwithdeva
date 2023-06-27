@extends('layouts.main')

@section('title', 'Add Skills')

@section('content')

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Skilss /</span> Add Skills Data</h4>
        <div class="row">
            <div class="col-md-12">
                 <div class="col-md-6">
                 <div class="card mb-4">
                    <h5 class="card-header">Add Skills</h5>
                    <div class="card-body">
                      <form action="{{ route('admin.skill.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="defaultFormControlInput" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Laravel" aria-describedby="defaultFormControlHelp"/>
                        </div>
                        <div class="mb-3">
                            <label for="defaultFormControlInput" class="form-label">Percentage</label>
                            <input type="text" class="form-control" id="percentage" name="percentage" placeholder="80" aria-describedby="defaultFormControlHelp"/>
                        </div>
                        <div class="mt-4">
                            <button class="btn btn-primary">Add Skill</button>
                            <a href="{{ route('admin.skill') }}" class="btn btn-danger">Cancel</a>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>

@endsection