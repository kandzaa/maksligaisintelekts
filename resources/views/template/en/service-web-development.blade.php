@extends('layouts.app-en')

@section('meta_description')
Professional web development services including custom websites, web applications, and e-commerce solutions. We build responsive, fast, and SEO-friendly websites.
@stop

@section('content')
<section class="d-flex align-items-center page-hero  inner-page-hero " id="page-hero">
  <div class="overlay-photo-image-bg parallax" data-bg-img="{{ asset('assets/images/hero/inner-page-hero.jpg') }}" data-bg-opacity="1"></div>
  <div class="overlay-color" data-bg-opacity=".75"></div>
  <div class="container">
    <div class="hero-text-area centerd">
      <h1 class="hero-title  wow fadeInUp" data-wow-delay=".2s">Web Development</h1>
      <nav aria-label="breadcrumb ">
        <ul class="breadcrumb wow fadeInUp" data-wow-delay=".6s">
          <li class="breadcrumb-item"><a class="breadcrumb-link" href="{{ route('home.en') }}"><i class="bi bi-house icon "></i>home</a></li>
          <li class="breadcrumb-item"><a class="breadcrumb-link" href="{{ route('services.en') }}">Our Services</a></li>
          <li class="breadcrumb-item active">Web Development</li>
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
            <i class="flaticon-web-development font-icon"></i>
          </div>
          <div class="service-info">
            <h2>Web Development</h2>
            <p class="service-description">Custom web applications built with modern technologies to deliver exceptional user experiences and business results.</p>
            
            <div class="service-features">
              <h4>What We Offer</h4>
              <ul>
                <li>Responsive Web Design</li>
                <li>E-commerce Solutions</li>
                <li>Custom Web Applications</li>
                <li>CMS Development</li>
                <li>Web Portal Development</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 col-lg-6">
        <div class="service-info-box">
          <h4>Service Details</h4>
          <ul class="info-list">
            <li><strong>Duration:</strong> 4-12 weeks</li>
            <li><strong>Starting Price:</strong> From $3,000</li>
            <li><strong>Technology:</strong> Modern frameworks</li>
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
          <h4>Digital Marketing</h4>
          <p>Comprehensive digital marketing strategies to grow your online presence.</p>
          <a href="{{ route('service-digital-marketing.en') }}" class="read-more">Learn More</a>
        </div>
      </div>
      <div class="col-12 col-md-6 col-lg-4">
        <div class="related-service-card">
          <h4>App Development</h4>
          <p>Custom mobile and web applications for your business needs.</p>
          <a href="{{ route('service-apps.en') }}" class="read-more">Learn More</a>
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
