@extends('public.layouts.guest-main')

@section('title', 'Resume')

@section('content')

<!-- ======= Resume Section ======= -->
<section id="resume" class="resume">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Resume</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">
          <div class="col-lg-6">
            <h3 class="resume-title">Education</h3>
            @foreach($resume_education as $education)
            <div class="resume-item">
              <h4>{{$education->title}}</h4>
              <h5>{{$education->year_start}} - {{$education->year_end}}</h5>
              <p><em>{{$education->company}}</em></p>
              <p>{{$education->description}}</p>
            </div>
            @endforeach
          </div>
          <div class="col-lg-6">
            <h3 class="resume-title">Experience</h3>
            @foreach($resume_experience as $experience)
            <div class="resume-item">
              <h4>{{$experience->title}}</h4>
              <h5>{{$experience->year_start}} - {{$experience->year_end}}</h5>
              <p><em>{{$experience->company}}</em></p>
              <p>{{$experience->description}}</p>
            </div>
            @endforeach
          </div>
        </div>

      </div>
    </section><!-- End Resume Section -->

@endsection