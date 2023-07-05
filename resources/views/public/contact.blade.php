@extends('public.layouts.guest-main')

@section('title', 'Contact Me')

@section('content')

<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d987.4799911999129!2d115.110453!3d-8.109632!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd190bc3529bd6d%3A0xbfed357583af0819!2sJl.%20Pulau%20Seribu%2C%20Penarukan%2C%20Kec.%20Buleleng%2C%20Kabupaten%20Buleleng%2C%20Bali%2081119!5e0!3m2!1sen!2sid!4v1687419143468!5m2!1sen!2sid" style="border:0; width: 100%; height: 270px;" allowfullscreen frameboder="0"></iframe>
        </div>

        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>Jalan Pulau Seribu, Penarukan, Singaraja</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>deva.kerti@gmail.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>0815-2997-4101</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            @if (session('error'))
              <div class="alert alert-danger mt-3">{{ session('error') }}</div>
            @elseif (session('success'))
              <div class="alert alert-success mt-3">{{ session('success') }}</div>
            @endif

            <form class="contact-form" action="{{ route('public.message.store') }}" method="POST">
              @csrf
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" id="message" name="message" rows="5" placeholder="Message" required></textarea>
              </div>

              <div class="text-center btn-send"><button type="submit">Send Message</button></div>

            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

@endsection