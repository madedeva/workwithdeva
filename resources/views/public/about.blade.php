@extends('public.layouts.guest-main')

@section('title', 'About Me')

@section('content')

<!-- ======= About Section ======= -->
<section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>About</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">
          <div class="col-lg-4">
            <img src="assets/img/deva.png" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content">
            <h3>Junior Web Developer &amp; Graphic Designer</h3>
            <p class="fst-italic">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p>
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-rounded-right"></i> <strong>Birthday:</strong> {{ $about->birthday }}</li>
                  <li><i class="bi bi-rounded-right"></i> <strong>Website:</strong> {{ $about->website }}</li>
                  <li><i class="bi bi-rounded-right"></i> <strong>Phone:</strong> {{ $about->phone }}</li>
                  <li><i class="bi bi-rounded-right"></i> <strong>City:</strong> {{ $about->city }}</li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-rounded-right"></i> <strong>Age:</strong> {{ $about->age }}</li>
                  <li><i class="bi bi-rounded-right"></i> <strong>Lastest Education:</strong> {{ $about->degree }}</li>
                  <li><i class="bi bi-rounded-right"></i> <strong>Email:</strong> {{ $about->email }}</li>
                  <li><i class="bi bi-rounded-right"></i> <strong>Freelance:</strong> 
                    @if($about->freelance == 0)
                      Available
                    @else
                      Not Available
                    @endif
                  </li>
                </ul>
              </div>
            </div>
            <p>
              {{ $about->about }}
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Skills Section ======= -->
    <section id="skills" class="skills">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Skills</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
            consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit
            in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row skills-content">
          <div class="col-lg-6">
            @foreach ($skill_first as $skill)
            <div class="progress">
              <span class="skill">{{ $skill->name }} <i class="val">{{ $skill->percentage }}%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="{{ $skill->percentage }}" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
            @endforeach
          </div>
          <div class="col-lg-6">
            @foreach ($skill_last as $skill)
            <div class="progress">
              <span class="skill">{{ $skill->name }} <i class="val">{{ $skill->percentage }}%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="{{ $skill->percentage }}" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </section><!-- End Skills Section -->

@endsection