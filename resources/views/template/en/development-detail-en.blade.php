@extends('layouts.app-en')

@section('content')
<section class="d-flex align-items-center page-hero  inner-page-hero " id="page-hero">
  <div class="overlay-photo-image-bg parallax" data-bg-img="{{ asset('assets/images/hero/inner-page-hero.jpg') }}" data-bg-opacity="1"></div>
  <div class="overlay-color" data-bg-opacity=".75"></div>
  <div class="container">
    <div class="hero-text-area centerd">
      <h1 class="hero-title  wow fadeInUp" data-wow-delay=".2s">{{ $development->title_en }}</h1>
      <nav aria-label="breadcrumb ">
        <ul class="breadcrumb wow fadeInUp" data-wow-delay=".6s">
          <li class="breadcrumb-item"><a class="breadcrumb-link" href="{{ route('home.en') }}"><i class="bi bi-house icon "></i>home</a></li>
          <li class="breadcrumb-item"><a class="breadcrumb-link" href="{{ route('development.en') }}">AI Development</a></li>
          <li class="breadcrumb-item active">{{ $development->title_en }}</li>
        </ul>
      </nav>
    </div>
  </div>
</section>

<section class="service-detail mega-section" id="service-detail">
  <div class="container">
    <div class="row">
      <div class="col-12 col-lg-8">
        <div class="service-content-area">
          @if($development->image)
            <div class="service-image wow fadeInUp">
              <img src="{{ asset('assets/images/developments/' . $development->image) }}" alt="{{ $development->title_en }}" class="img-fluid">
            </div>
          @endif
          
          <div class="service-description wow fadeInUp">
            {!! $development->content_en !!}
          </div>
        </div>
      </div>
      <div class="col-12 col-lg-4">
        <div class="service-sidebar">
          <div class="service-info-box wow fadeInUp">
            <h3>Project Information</h3>
            <p>Interested in this service? Get in touch with us to discuss your project requirements.</p>
            <a href="{{ route('contact.en') }}" class="btn-solid">Contact Us</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection
