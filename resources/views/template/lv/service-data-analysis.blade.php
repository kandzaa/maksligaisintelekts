@extends('layouts.app')

@section('content')
<section class="d-flex align-items-center page-hero  inner-page-hero " id="page-hero">
  <div class="overlay-photo-image-bg parallax" data-bg-img="assets/images/hero/inner-page-hero.jpg" data-bg-opacity="1"></div>
  <div class="overlay-color" data-bg-opacity=".75"></div>
  <div class="container">
    <div class="hero-text-area centerd">
      <h1 class="hero-title  wow fadeInUp" data-wow-delay=".2s">Datu Analīze</h1>
      <nav aria-label="breadcrumb ">
        <ul class="breadcrumb wow fadeInUp" data-wow-delay=".6s">
          <li class="breadcrumb-item"><a class="breadcrumb-link" href="{{ route('home.lv') }}"><i class="bi bi-house icon "></i>Sākums</a></li>
          <li class="breadcrumb-item"><a class="breadcrumb-link" href="{{ route('services.lv') }}">MI Pielietojums</a></li>
          <li class="breadcrumb-item active">Datu Analīze</li>
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
          <h2 class="section-title">Profesionāli Datu Analīžu Pakalpojumi</h2>
          <p class="service-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque repellendus minima reiciendis nobis dolore obcaecati. We create comprehensive data analysis solutions that help your business grow and succeed online.</p>
          
          <h3 class="subsection-title">Mūsu Piedāvājumi</h3>
          <ul class="service-features">
            <li>Data Mining</li>
            <li>Predictive Analytics</li>
            <li>Business Intelligence</li>
            <li>Data Visualization</li>
            <li>Statistical Analysis</li>
            <li>Reporting & Dashboards</li>
          </ul>
          
          <h3 class="subsection-title">Our Process</h3>
          <p class="process-description">We follow a systematic approach to ensure your data analysis projects meet your business goals and exceed your expectations.</p>
        </div>
      </div>
      <div class="col-12 col-lg-4">
        <div class="service-sidebar">
          <div class="service-info-box">
            <h4>Service Details</h4>
            <ul class="info-list">
              <li><strong>Duration:</strong> 4-8 weeks</li>
              <li><strong>Starting Price:</strong> From $3,000</li>
              <li><strong>Tools:</strong> Modern analytics stack</li>
              <li><strong>Support:</strong> 3 months included</li>
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
          <h4>SEO Services</h4>
          <p>Improve your search engine rankings and drive organic traffic.</p>
          <a href="{{ route('service-seo.lv') }}" class="read-more">Learn More</a>
        </div>
      </div>
      <div class="col-12 col-md-6 col-lg-4">
        <div class="related-service-card">
          <h4>SaaS Products</h4>
          <p>Scalable software solutions for your business needs.</p>
          <a href="{{ route('service-saas.lv') }}" class="read-more">Learn More</a>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
