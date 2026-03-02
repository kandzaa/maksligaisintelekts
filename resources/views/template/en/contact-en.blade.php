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
      <div class="content-area"><span class=" pre-title       wow fadeInUp " data-wow-delay=".2s">Contact</span>
        <h2 class=" title    wow fadeInUp" data-wow-delay=".4s">Our <span class='hollow-text'>Contacts</span></h2>
       </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-12 col-md-6 col-lg-4  location-box wow fadeInUp" data-wow-delay="0.4s">
        <div class="location-box-inner">
          <div class="location-icon"><i class="flaticon-location font-icon"></i></div>
          <div class="location-content">
           </div>
          <div class="location-contact-info">
            <div class="contact-info-card"><i class="bi bi-envelope icon"></i><a class="text-lowercase  info" href="mailto:info@māksligaisintelekts.lv">info@māksligaisintelekts.lv</a></div>
            <div class="contact-info-card"><i class="bi bi-phone icon"></i><a class="info" href="tel:28634568">28634568  </a></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>



<section class="contact-form-section mega-section" id="contact-form-section" style="background-color: #0a1628; padding: 100px 0;">
  <div class="container">
    <div class="sec-heading centered">
      <div class="content-area">
        <h2 class="title wow fadeInUp" data-wow-delay=".2s" style="color: #fff; font-size: 48px; margin-bottom: 60px;">
          Have Any Questions? Let's Answer Them
        </h2>
      </div>
    </div>
    <div class="contact-form-wrapper wow fadeInUp" data-wow-delay="0.4s">
      @if(session('success'))
        <div class="alert alert-success" style="background: rgba(76, 175, 80, 0.2); border: 1px solid rgba(76, 175, 80, 0.3); color: #4CAF50; padding: 15px; border-radius: 8px; margin-bottom: 20px;">
          {{ session('success') }}
        </div>
      @endif
      
      @if(session('error'))
        <div class="alert alert-danger" style="background: rgba(244, 67, 54, 0.2); border: 1px solid rgba(244, 67, 54, 0.3); color: #f44336; padding: 15px; border-radius: 8px; margin-bottom: 20px;">
          {{ session('error') }}
        </div>
      @endif
      
      @if($errors->any())
        <div class="alert alert-danger" style="background: rgba(244, 67, 54, 0.2); border: 1px solid rgba(244, 67, 54, 0.3); color: #f44336; padding: 15px; border-radius: 8px; margin-bottom: 20px;">
          <ul style="margin: 0; padding-left: 20px;">
            @foreach($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
      @endif
      
      <form class="contact-form" action="{{ route('contact.en.post') }}" method="post">
        @csrf
        <div class="row gx-4 gy-4">
          <div class="col-12 col-md-6">
            <div class="input-group">
              <label class="form-label" for="name" style="color: #fff; margin-bottom: 10px; display: block;">Name <span style="color: #ff0000;">*</span></label>
              <input class="form-input" type="text" name="name" id="name" required="required" 
                style="background-color: transparent; border: 1px solid #2a3f5f; padding: 15px 20px; color: #fff; border-radius: 8px; width: 100%;">
            </div>
          </div>
          <div class="col-12 col-md-6">
            <div class="input-group">
              <label class="form-label" for="email" style="color: #fff; margin-bottom: 10px; display: block;">E-Mail <span style="color: #ff0000;">*</span></label>
              <input class="form-input" type="email" name="email" id="email" required="required"
                style="background-color: transparent; border: 1px solid #2a3f5f; padding: 15px 20px; color: #fff; border-radius: 8px; width: 100%;">
            </div>
          </div>
          <div class="col-12">
            <div class="input-group">
              <label class="form-label" for="subject" style="color: #fff; margin-bottom: 10px; display: block;">Subject <span style="color: #ff0000;">*</span></label>
              <input class="form-input" type="text" name="subject" id="subject" required="required"
                style="background-color: transparent; border: 1px solid #2a3f5f; padding: 15px 20px; color: #fff; border-radius: 8px; width: 100%;">
            </div>
          </div>
          <div class="col-12">
            <div class="input-group">
              <label class="form-label" for="message" style="color: #fff; margin-bottom: 10px; display: block;">Your Message <span style="color: #ff0000;">*</span></label>
              <textarea class="form-textarea" name="message" id="message" rows="6" required="required"
                style="background-color: transparent; border: 1px solid #2a3f5f; padding: 15px 20px; color: #fff; border-radius: 8px; width: 100%; resize: vertical;"></textarea>
            </div>
          </div>
          <div class="col-12">
            <div class="form-submit-btn" style="margin-top: 20px;">
              <button class="btn-solid" type="submit" 
                style="background-color: #00d4ff; color: #0a1628; padding: 18px 40px; border: none; border-radius: 30px; font-weight: 600; font-size: 16px; cursor: pointer; transition: all 0.3s;">
                Send Your Message
              </button>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</section>

@endsection