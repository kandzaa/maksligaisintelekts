@extends('layouts.app-en')

@section('content')
<section class="d-flex align-items-center page-hero  inner-page-hero " id="page-hero">
  <div class="overlay-photo-image-bg parallax" data-bg-img="{{ asset('assets/images/hero/inner-page-hero.jpg') }}" data-bg-opacity="1"></div>
  <div class="overlay-color" data-bg-opacity=".75"></div>
  <div class="container">
    <div class="hero-text-area centerd">
      <h1 class="hero-title  wow fadeInUp" data-wow-delay=".2s">App Development</h1>
      <nav aria-label="breadcrumb ">
        <ul class="breadcrumb wow fadeInUp" data-wow-delay=".6s">
          <li class="breadcrumb-item"><a class="breadcrumb-link" href="{{ route('home.en') }}"><i class="bi bi-house icon "></i>home</a></li>
          <li class="breadcrumb-item"><a class="breadcrumb-link" href="{{ route('services.en') }}">Our Services</a></li>
          <li class="breadcrumb-item active">App Development</li>
        </ul>
      </nav>
    </div>
  </div>
</section>

<section class="service-detail mega-section">
  <div class="container">
    <div class="row">
      <div class="col-12 col-lg-6">
        <div class="service-detail-content">
          <div class="service-icon-large">
            <i class="flaticon-profile font-icon"></i>
          </div>
          <div class="service-info">
            <h2>App Development</h2>
            <p class="service-description">Native and cross-platform mobile applications designed for optimal performance and user experience across all devices.</p>
            
            <div class="service-features">
              <h4>What We Offer</h4>
              <ul>
                <li>iOS App Development</li>
                <li>Android App Development</li>
                <li>Cross-Platform Solutions</li>
                <li>App Store Optimization</li>
                <li>Maintenance & Updates</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 col-lg-6">
        <div class="service-info-box">
          <h4>Service Details</h4>
          <ul class="info-list">
            <li><strong>Duration:</strong> 6-12 weeks</li>
            <li><strong>Starting Price:</strong> From $5,000</li>
            <li><strong>Technology:</strong> Native & Hybrid</li>
            <li><strong>Support:</strong> 6 months included</li>
          </ul>
        </div>
        <div class="cta-box">
          <a href="{{ route('contact.en') }}" class="btn-solid">Get Quote</a>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="related-services mega-section">
  <div class="container">
    <h3 class="section-title">Related Services</h3>
    <div class="row">
      <div class="col-12 col-md-6 col-lg-4">
        <div class="related-service-card">
          <h4>Web Development</h4>
          <p>Custom web applications tailored to your business needs.</p>
          <a href="{{ route('service-web-development.en') }}" class="read-more">Learn More</a>
        </div>
      </div>
      <div class="col-12 col-md-6 col-lg-4">
        <div class="related-service-card">
          <h4>SaaS Products</h4>
          <p>Cloud-based solutions for modern businesses.</p>
          <a href="{{ route('service-saas.en') }}" class="read-more">Learn More</a>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection
