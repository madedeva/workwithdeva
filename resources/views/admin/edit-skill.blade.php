@extends('layouts.main')

@section('title', 'Edit Skills')

@section('content')

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Skilss /</span> Edit Skills Data</h4>
        <div class="row">
            <div class="col-md-12">
                 <div class="col-md-6">
                 <div class="card mb-4">
                    <h5 class="card-header">Edit Skills</h5>
                    <div class="card-body">
                      <form action="{{ route('admin.skill.update', $skill->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="defaultFormControlInput" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Laravel" aria-describedby="defaultFormControlHelp" value="{{ $skill->name }}"/>
                        </div>
                        <div class="mb-3">
                            <label for="defaultFormControlInput" class="form-label">Percentage</label>
                            <input type="text" class="form-control" id="percentage" name="percentage" placeholder="80" aria-describedby="defaultFormControlHelp" value="{{ $skill->percentage }}"/>
                        </div>
                        <div class="mt-4">
                            <button class="btn btn-primary">Update Skill</button>
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