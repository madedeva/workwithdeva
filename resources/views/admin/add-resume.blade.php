@extends('layouts.main')

@section('title', 'Add Resume')

@section('content')          
            
            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Resume/</span> Add Resume</h4>

              <div class="row">
                <div class="col-lg-6">
                  <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                      <h5 class="mb-0">Add Resume</h5>
                    </div>
                    <div class="card-body">
                      <form action="{{ route('admin.resume.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-fullname">Title</label>
                          <input type="text" class="form-control" id="title" name="title" placeholder="Senior Web Developer" />
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-company">Year Start</label>
                          <input type="text" class="form-control" id="year_start" name="year_start" placeholder="Juli 2022" />
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-phone">Year End</label>
                          <input type="text" id="year_end" name="year_end" class="form-control phone-mask" placeholder="Juli 2023"/>
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-phone">Company</label>
                          <input type="text" id="company" name="company" class="form-control phone-mask" placeholder="Hansik by Ferbean"/>
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-message">Message</label>
                          <textarea id="description" name="description" rows="8" class="form-control" placeholder="Write description on your position"></textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="basic-default-message">Type</label>
                            <select class="form-select" id="type" name="type" aria-label="Default select example">
                                <option selected>Select type..</option>
                                <option value="0">Education</option>
                                <option value="1">Experience</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Add Resume</button>
                      </form>
                    </div>
                  </div>
                </div>
            </div>
@endsection