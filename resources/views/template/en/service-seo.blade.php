@extends('layouts.app-en')

@section('content')
<section class="d-flex align-items-center page-hero  inner-page-hero " id="page-hero">
  <div class="overlay-photo-image-bg parallax" data-bg-img="{{ asset('assets/images/hero/inner-page-hero.jpg') }}" data-bg-opacity="1"></div>
  <div class="overlay-color" data-bg-opacity=".75"></div>
  <div class="container">
    <div class="hero-text-area centerd">
      <h1 class="hero-title  wow fadeInUp" data-wow-delay=".2s">SEO Services</h1>
      <nav aria-label="breadcrumb ">
        <ul class="breadcrumb wow fadeInUp" data-wow-delay=".6s">
          <li class="breadcrumb-item"><a class="breadcrumb-link" href="{{ route('home.en') }}"><i class="bi bi-house icon "></i>home</a></li>
          <li class="breadcrumb-item"><a class="breadcrumb-link" href="{{ route('services.en') }}">Our Services</a></li>
          <li class="breadcrumb-item active">SEO Services</li>
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
            <i class="flaticon-search font-icon"></i>
          </div>
          <div class="service-info">
            <h2>SEO Services</h2>
            <p class="service-description">Comprehensive search engine optimization strategies to improve your online visibility and drive organic traffic to your website.</p>
            
            <div class="service-features">
              <h4>What We Offer</h4>
              <ul>
                <li>On-Page SEO Optimization</li>
                <li>Technical SEO Audits</li>
                <li>Content Strategy & Optimization</li>
                <li>Link Building Campaigns</li>
                <li>Local SEO Optimization</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 col-lg-6">
        <div class="service-info-box">
          <h4>Service Details</h4>
          <ul class="info-list">
            <li><strong>Duration:</strong> Ongoing</li>
            <li><strong>Starting Price:</strong> From $1,000/month</li>
            <li><strong>Focus:</strong> White-hat techniques</li>
            <li><strong>Support:</strong> Monthly reports</li>
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
          <h4>Digital Marketing</h4>
          <p>Strategic marketing solutions to grow your online presence.</p>
          <a href="{{ route('service-digital-marketing.en') }}" class="read-more">Learn More</a>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection
