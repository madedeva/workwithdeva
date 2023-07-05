@extends('public.layouts.guest-main')

@section('title', 'Welcome')

@section('content')

<!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container position-relative text-center text-lg-start" data-aos="zoom-in" data-aos-delay="100">
      <div class="row">

        <div class="col-lg-6">
          <h1>Work with <span>Deva</span></h1>
          <h2>Junior Web Developer & Graphic Designer from Bali</h2>
          <p class="mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat ut similique doloribus fugiat in fuga nemo itaque provident deleniti, exercitationem iusto earum maiores reprehenderit culpa perferendis necessitatibus? Rem, est eum.</p>
          <div class="btns">
            <a href="/about" class="btn-about">About Me</a>
            <a href="/download-cv" class="btn-download">Download CV</a>
          </div>
        </div>

        <div class="col-lg-6 d-flex align-items-center justify-content-center position-relative" data-aos="zoom-in" data-aos-delay="200">
          <img src="../assets/img/coding.svg" class="img-fluid" alt="" width="75%">
        </div>

      </div>
    </div>
  </section>
<!-- End Hero -->

@endsection