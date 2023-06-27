@extends('layouts.main')

@section('title', 'Dashboard')

@section('content')

          <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row">
              <div class="col-lg-12 mb-4 order-0">
                <div class="card">
                  <div class="d-flex align-items-end row">
                    <div class="col-sm-7">
                      <div class="card-body">
                        <h5 class="card-title text-primary">Welcome back, {{ Auth::user()->name }}!</h5>
                        <p class="mb-4">
                        You login to the system as <span class="fw-bold">Admin</span>. Don't forget to do something amazing today.
                        </p>

                        <a href="/dashboard/profile" class="btn btn-sm btn-outline-primary">View Profile</a>
                      </div>
                    </div>
                    <div class="col-sm-5 text-center text-sm-left">
                      <div class="card-body pb-0 px-0 px-md-4">
                        <img src="../assets/img/illustrations/man-with-laptop-light.png" height="140"
                          alt="View Badge User" data-app-dark-img="illustrations/man-with-laptop-dark.png"
                          data-app-light-img="illustrations/man-with-laptop-light.png" />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-3 col-md-12 col-6 mb-4">
                <div class="card">
                  <div class="card-body">
                    <div class="card-title d-flex align-items-start justify-content-between">
                      <div class="avatar flex-shrink-0">
                        <img src="../assets/img/icons/unicons/user-check-solid-24.png" alt="chart success" class="rounded" />
                      </div>
                      <div class="dropdown">
                        <button class="btn p-0" type="button" id="cardOpt3" data-bs-toggle="dropdown"
                          aria-haspopup="true" aria-expanded="false">
                          <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                          <a class="dropdown-item" href="/dashboard/skill">View More</a>
                        </div>
                      </div>
                    </div>
                    <span class="fw-semibold d-block mb-1">Skills</span>
                    <h3 class="card-title mb-2">{{ $skill }}</h3>
                  </div>
                </div>
              </div>

              <div class="col-lg-3 col-md-12 col-6 mb-4">
                <div class="card">
                  <div class="card-body">
                    <div class="card-title d-flex align-items-start justify-content-between">
                      <div class="avatar flex-shrink-0">
                        <img src="../assets/img/icons/unicons/cc-success.png" alt="chart success" class="rounded" />
                      </div>
                      <div class="dropdown">
                        <button class="btn p-0" type="button" id="cardOpt3" data-bs-toggle="dropdown"
                          aria-haspopup="true" aria-expanded="false">
                          <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                          <a class="dropdown-item" href="/dashboard/resume">View More</a>
                        </div>
                      </div>
                    </div>
                    <span class="fw-semibold d-block mb-1">Resume</span>
                    <h3 class="card-title mb-2">{{ $resume }}</h3>
                  </div>
                </div>
              </div>

              <div class="col-lg-3 col-md-12 col-6 mb-4">
                <div class="card">
                  <div class="card-body">
                    <div class="card-title d-flex align-items-start justify-content-between">
                      <div class="avatar flex-shrink-0">
                        <img src="../assets/img/icons/unicons/cc-warning.png" alt="chart success" class="rounded" />
                      </div>
                      <div class="dropdown">
                        <button class="btn p-0" type="button" id="cardOpt3" data-bs-toggle="dropdown"
                          aria-haspopup="true" aria-expanded="false">
                          <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                          <a class="dropdown-item" href="/dashboard/portfolio">View More</a>
                        </div>
                      </div>
                    </div>
                    <span class="fw-semibold d-block mb-1">Portfolio</span>
                    <h3 class="card-title mb-2">{{ $portfolio }}</h3>
                  </div>
                </div>
              </div>

              <div class="col-lg-3 col-md-12 col-6 mb-4">
                <div class="card">
                  <div class="card-body">
                    <div class="card-title d-flex align-items-start justify-content-between">
                      <div class="avatar flex-shrink-0">
                        <img src="../assets/img/icons/unicons/wallet-info.png" alt="chart success" class="rounded" />
                      </div>
                      <div class="dropdown">
                        <button class="btn p-0" type="button" id="cardOpt3" data-bs-toggle="dropdown"
                          aria-haspopup="true" aria-expanded="false">
                          <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                          <a class="dropdown-item" href="/dashboard/category">View More</a>
                        </div>
                      </div>
                    </div>
                    <span class="fw-semibold d-block mb-1">Portfolio Caregory</span>
                    <h3 class="card-title mb-2">{{ $category }}</h3>
                  </div>
                </div>
              </div>
            </div>
          </div>

@endsection