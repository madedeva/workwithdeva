@extends('layouts.main')

@section('title', 'About System')

@section('content')

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">About /</span> About System</h4>
        <div class="row">
            <div class="col-md-6">
                <div class="col-md">
                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img class="card-img card-img-left" src="../assets/img/logo.png" alt="Card image">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">About System Information</h5>
                                    <p class="card-text">This website was created using the Laravel Framework 9.0. Visit my github repository for this project <a href="https://github.com/madedeva/WorkWithDeva">here.</a> Laravel Framework Documentation <a href="https://laravel.com/docs/9.x">here.</a></p>
                                    <p class="card-text">Author: Work with Deva. <i><b>Version 1.0.0</b></i></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection