@extends('layouts.main')

@section('title', 'Add Category')

@section('content')

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Category /</span> Add New Category</h4>
        <div class="row">
            <div class="col-md-12">
                 <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-body">
                            <form action="{{ route('admin.category.store') }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="defaultFormControlInput" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="name" name="name" aria-describedby="defaultFormControlHelp"/>
                                </div>
                                <div class="mb-3">
                                    <button type="submit" class="btn btn-primary">Add Category</button>
                                    <a href="{{ route('admin.category') }}" class="btn btn-danger">Cancel</a>
                                </div>
                            </form>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </div>
</div>

@endsection