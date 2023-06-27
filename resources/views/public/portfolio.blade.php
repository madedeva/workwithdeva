@extends('public.layouts.guest-main')

@section('title', 'Portfolio')

@section('content')

<!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Portfolio</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".App">App</li>
              <li data-filter=".Design">Design</li>
              <li data-filter=".Web">Web</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

          @foreach($portfolio as $p)
          <div class="col-lg-4 col-md-6 portfolio-item {{ $p->category->name }}">
            <div class="portfolio-wrap">
              <img src="{{ asset('img/'.$p->image) }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>{{ $p->title }}</h4>
                <p>{{ $p->category->name }}</p>
                <div class="portfolio-links">
                  <a href="{{ asset('img/'.$p->image) }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="{{ $p->title }}"><i class="bx bx-plus"></i></a>
                  <a href="{{ route('portfolio.details', $p->id) }}" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>
          @endforeach

        </div>
      </div>
    </section>
    <!-- End Portfolio Section -->

@endsection