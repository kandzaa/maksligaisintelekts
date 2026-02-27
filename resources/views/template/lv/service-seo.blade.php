@extends('layouts.app')

@section('content')
<section class="d-flex align-items-center page-hero  inner-page-hero " id="page-hero">
  <div class="overlay-photo-image-bg parallax" data-bg-img="assets/images/hero/inner-page-hero.jpg" data-bg-opacity="1"></div>
  <div class="overlay-color" data-bg-opacity=".75"></div>
  <div class="container">
    <div class="hero-text-area centerd">
      <h1 class="hero-title  wow fadeInUp" data-wow-delay=".2s">SEO Pakalpojumi</h1>
      <nav aria-label="breadcrumb ">
        <ul class="breadcrumb wow fadeInUp" data-wow-delay=".6s">
          <li class="breadcrumb-item"><a class="breadcrumb-link" href="{{ route('home.lv') }}"><i class="bi bi-house icon "></i>Sākums</a></li>
          <li class="breadcrumb-item"><a class="breadcrumb-link" href="{{ route('services.lv') }}">MI Pielietojums</a></li>
          <li class="breadcrumb-item active">SEO Pakalpojumi</li>
        </ul>
      </nav>
    </div>
  </div>
</section>

<section class="service-detail mega-section">
  <div class="container">
    <div class="row">
      <div class="col-12 col-lg-8">
        <div class="service-content">
          <h2 class="section-title">Profesionāli SEO Pakalpojumi</h2>
          <p class="service-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque repellendus minima reiciendis nobis dolore obcaecati. We create comprehensive SEO strategies that help your business grow and succeed online.</p>
          
          <h3 class="subsection-title">Mūsu Piedāvājumi</h3>
          <ul class="service-features">
            <li>On-Page SEO</li>
            <li>Off-Page SEO</li>
            <li>Technical SEO</li>
            <li>Content Optimization</li>
            <li>Local SEO</li>
            <li>Analytics & Reporting</li>
          </ul>
          
          <h3 class="subsection-title">Our Process</h3>
          <p class="process-description">We follow a systematic approach to ensure your SEO campaigns meet your business goals and exceed your expectations.</p>
        </div>
      </div>
      <div class="col-12 col-lg-4">
        <div class="service-sidebar">
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
            <a href="{{ route('contact.lv') }}" class="btn-solid">Get Quote</a>
          </div>
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
          <p>Custom websites designed to convert visitors into customers.</p>
          <a href="{{ route('service-web-development.lv') }}" class="read-more">Learn More</a>
        </div>
      </div>
      <div class="col-12 col-md-6 col-lg-4">
        <div class="related-service-card">
          <h4>Digital Marketing</h4>
          <p>Comprehensive digital marketing strategies to grow your online presence.</p>
          <a href="{{ route('service-digital-marketing.lv') }}" class="read-more">Learn More</a>
        </div>
      </div>
      <div class="col-12 col-md-6 col-lg-4">
        <div class="related-service-card">
          <h4>Data Analysis</h4>
          <p>Comprehensive data analysis and insights for your business.</p>
          <a href="{{ route('service-data-analysis.lv') }}" class="read-more">Learn More</a>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
