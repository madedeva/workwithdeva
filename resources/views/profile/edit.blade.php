@extends('layouts.main')

@section('title', 'Account Settings')

@section('content')

        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Account Settings /</span> Account</h4>
            <div class="row">
              <div class="col-md-6">
                <!-- alert success -->
                @if (session('status'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                  <strong>Success!</strong> {{ session('status') }}
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="card mb-4">
                  <h5 class="card-header">Profile Details</h5>
                  <!-- Account -->
                  <hr class="my-0" />
                  <div class="card-body">
                    <form action="{{ route('profile.update') }}" id="formAccountSettings" method="POST">
                      @csrf
                      @method('patch')
                      <div class="row">
                        <div class="mb-3 col-md-12">
                          <label for="firstName" class="form-label">Account Name</label>
                          <input class="form-control" type="text" id="name" name="name"
                            value="{{ Auth::user()->name }}" autofocus />
                          <label for="email" class="form-label mt-3">E-mail</label>
                          <input class="form-control" type="text" id="email" name="email" value="{{ Auth::user()->email }}"
                            placeholder="deva.kerti@gmail.com" />
                        </div>
                      </div>
                      <div class="mt-2">
                        <button type="submit" class="btn btn-primary me-2">Update account</button>
                      </div>
                    </form>
                  </div>
                  <!-- Change password -->
                  <hr class="my-0" />
                  <div class="card-body">
                    <form id="formAccountSettings" action="{{ route('password.update') }}" method="POST">
                    @csrf
                    @method('put')
                      <div class="row">
                        <div class="mb-3 col-md-12">
                          <label for="current_password" class="form-label">Current Password</label>
                          <input class="form-control" type="password" id="current_password" name="current_password" autofocus />
                          <label for="password" class="form-label mt-3">New Password</label>
                          <input class="form-control" type="password" id="password" name="password" autofocus />
                          <label for="password_confirmation" class="form-label mt-3">Confirm Password</label>
                          <input class="form-control" type="password" id="password_confirmation" name="password_confirmation" autofocus />
                        </div>
                      </div>
                      <div class="mt-2">
                        <button type="submit" class="btn btn-primary me-2">Update password</button>
                      </div>
                    </form>
                  </div>
                  <!-- /Account -->
                </div>
                <div class="card">
                  <h5 class="card-header">Delete Account</h5>
                  <div class="card-body">
                    <div class="mb-3 col-12">
                      <div class="alert alert-warning">
                        <h6 class="alert-heading fw-bold mb-1">Are you sure you want to delete your account?</h6>
                        <p class="mb-0">Once you delete your account, there is no going back. Please be certain.</p>
                      </div>
                    </div>
                    <!-- delete account -->
                    <form action="{{ route('profile.destroy') }}" method="POST">
                      @csrf
                      @method('delete')
                      <div class="mb-3 col-12">
                        <label for="password" class="form-label">Password</label>
                        <input class="form-control" type="password" id="password" name="password" placeholder="Type your password to confirm" autofocus/>
                      </div>
                      <div class="mt-2">
                        <button type="submit" class="btn btn-danger me-2">Delete account</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>

@endsection