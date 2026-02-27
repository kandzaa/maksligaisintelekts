@extends('layouts.app-en')

@section('content')
<section class="d-flex align-items-center page-hero  inner-page-hero " id="page-hero">
  <div class="overlay-photo-image-bg parallax" data-bg-img="assets/images/hero/inner-page-hero.jpg" data-bg-opacity="1"></div>
  <div class="overlay-color" data-bg-opacity=".75"></div>
  <div class="container">
    <div class="hero-text-area centerd">
      <h1 class="hero-title  wow fadeInUp" data-wow-delay=".2s">Contact</h1>
      <nav aria-label="breadcrumb ">
        <ul class="breadcrumb wow fadeInUp" data-wow-delay=".6s">
          <li class="breadcrumb-item"><a class="breadcrumb-link" href="{{ route('home.en') }}"><i class="bi bi-house icon "></i>home</a></li>
          <li class="breadcrumb-item active">contact</li>
        </ul>
      </nav>
    </div>
  </div>
</section>

<section class="locations mega-section" id="locations">
  <div class="container">
    <div class="sec-heading  centered ">
      <div class="content-area"><span class=" pre-title       wow fadeInUp " data-wow-delay=".2s">locations</span>
        <h2 class=" title    wow fadeInUp" data-wow-delay=".4s">Find Us</h2>
        <p class=" subtitle   wow fadeInUp " data-wow-delay=".6s">Lorem ipsum dolor sit amet consectetur adipisicing elit Omnis <br>id atque  dignissimos repellat quae ullam.</p>
      </div>
    </div>
    <div class="locations-content">
      <div class="row">
        <div class="col-12 col-md-6 col-lg-4">
          <div class="location-box wow fadeInUp" data-wow-delay=".2s">
            <div class="location-icon"><i class="bi bi-geo-alt icon"></i></div>
            <div class="location-content">
              <h3 class="location-title">Main Office</h3>
              <p class="location-desc">123 Business Street<br>Riga, Latvia</p>
              <p class="location-contact">Phone: +371 123 4567<br>Email: info@flex-it.lv</p>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4">
          <div class="location-box wow fadeInUp" data-wow-delay=".4s">
            <div class="location-icon"><i class="bi bi-building icon"></i></div>
            <div class="location-content">
              <h3 class="location-title">Development Center</h3>
              <p class="location-desc">45 Tech Avenue<br>Riga, Latvia</p>
              <p class="location-contact">Phone: +371 987 6543<br>Email: dev@flex-it.lv</p>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4">
          <div class="location-box wow fadeInUp" data-wow-delay=".6s">
            <div class="location-icon"><i class="bi bi-headset icon"></i></div>
            <div class="location-content">
              <h3 class="location-title">Support Center</h3>
              <p class="location-desc">78 Support Lane<br>Riga, Latvia</p>
              <p class="location-contact">Phone: +371 246 8135<br>Email: support@flex-it.lv</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="contact-form mega-section" id="contact-form">
  <div class="container">
    <div class="sec-heading  centered ">
      <div class="content-area"><span class=" pre-title       wow fadeInUp " data-wow-delay=".2s">contact us</span>
        <h2 class=" title    wow fadeInUp" data-wow-delay=".4s">Get in Touch</h2>
        <p class=" subtitle   wow fadeInUp " data-wow-delay=".6s">Lorem ipsum dolor sit amet consectetur adipisicing elit Omnis <br>id atque  dignissimos repellat quae ullam.</p>
      </div>
    </div>
    <div class="contact-form-wrapper">
      <div class="row">
        <div class="col-12 col-lg-8">
          <form class="contact-form" method="POST" action="{{ route('contact.en') }}">
            @csrf
            <div class="row">
              <div class="col-12 col-md-6">
                <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" id="name" name="name" class="form-control" required>
                </div>
              </div>
              <div class="col-12 col-md-6">
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" id="email" name="email" class="form-control" required>
                </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                  <label for="subject">Subject</label>
                  <input type="text" id="subject" name="subject" class="form-control" required>
                </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                  <label for="message">Message</label>
                  <textarea id="message" name="message" class="form-control" rows="5" required></textarea>
                </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                  <button type="submit" class="btn-solid">Send Message</button>
                </div>
              </div>
            </div>
          </form>
        </div>
        <div class="col-12 col-lg-4">
          <div class="contact-info">
            <h3>Contact Information</h3>
            <div class="info-item">
              <div class="info-icon"><i class="bi bi-envelope icon"></i></div>
              <div class="info-text">
                <strong>Email:</strong><br>info@flex-it.lv
              </div>
            </div>
            <div class="info-item">
              <div class="info-icon"><i class="bi bi-telephone icon"></i></div>
              <div class="info-text">
                <strong>Phone:</strong><br>+371 123 4567
              </div>
            </div>
            <div class="info-item">
              <div class="info-icon"><i class="bi bi-geo-alt icon"></i></div>
              <div class="info-text">
                <strong>Address:</strong><br>123 Business Street<br>Riga, Latvia
              </div>
            </div>
            <div class="info-item">
              <div class="info-icon"><i class="bi bi-clock icon"></i></div>
              <div class="info-text">
                <strong>Hours:</strong><br>Mon-Fri: 9AM-6PM<br>Sat-Sun: Closed
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection
