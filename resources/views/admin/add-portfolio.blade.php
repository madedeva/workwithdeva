@extends('layouts.main')

@section('title', 'Add Portfolio')

@section('content')          
            
            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Portfolio/</span> Add Portfolio</h4>

              <div class="row">
                <div class="col-lg-6">
                  <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                      <h5 class="mb-0">Add Portfolio</h5>
                    </div>
                    <div class="card-body">
                      <form action="{{ route('admin.portfolio.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="formFileMultiple" class="form-label">Image Thumbnail</label>
                            <input class="form-control" type="file" id="image" name="image" multiple="">
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-fullname">Portfolio Title</label>
                          <input type="text" class="form-control" id="title" name="title" placeholder="Senior Web Developer" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="basic-default-company">Category</label>
                            <select class="form-select" id="category_id" name="category_id" aria-label="Default select example">
                                <option selected="">Select category..</option>
                                @foreach($category as $c)
                                <option value="{{ $c->id }}">{{ $c->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-phone">Client</label>
                          <input type="text" id="client" name="client" class="form-control phone-mask" placeholder="Hansik by Ferbean"/>
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-phone">Project Date</label>
                          <input class="form-control" type="date" value="2023-06-27" id="project_date" name="project_date">
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-phone">Project Url</label>
                          <input type="text" id="project_url" name="project_url" class="form-control phone-mask" placeholder="https://www.work-with-deva.my.id"/>
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-message">Portfolio Description</label>
                          <textarea id="description" name="description" rows="8" class="form-control" placeholder="Write description on your position"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Add Portfolio</button>
                      </form>
                    </div>
                  </div>
                </div>
            </div>
@endsection