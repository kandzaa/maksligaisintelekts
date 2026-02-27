  
@extends('layouts.app-en')

@section('content')
<section class="d-flex align-items-center page-hero  inner-page-hero " id="page-hero">
  <div class="overlay-photo-image-bg parallax" data-bg-img="{{ asset('assets/images/hero/inner-page-hero.jpg') }}" data-bg-opacity="1"></div>
  <div class="overlay-color" data-bg-opacity=".75"></div>
  <div class="container">
    <div class="hero-text-area centerd">
      <h1 class="hero-title  wow fadeInUp" data-wow-delay=".2s">Our Services</h1>
      <nav aria-label="breadcrumb ">
        <ul class="breadcrumb wow fadeInUp" data-wow-delay=".6s">
          <li class="breadcrumb-item"><a class="breadcrumb-link" href="{{ route('home.en') }}"><i class="bi bi-house icon "></i>home</a></li>
          <li class="breadcrumb-item active">Our Services</li>
        </ul>
      </nav>
    </div>
  </div>
</section>

<section class="services services-boxed mega-section  " id="services">
  <div class="container">
    <div class="sec-heading  ">
      <div class="content-area"><span class=" pre-title       wow fadeInUp " data-wow-delay=".2s">Our Services</span>
        <h2 class=" title    wow fadeInUp" data-wow-delay=".4s"><span class='hollow-text'>Our</span> Services</h2>
        <p class="subtitle   wow fadeInUp " data-wow-delay=".6s">Lorem ipsum dolor sit amet consectetur adipisicing elit Omnis <br>id atque  dignissimos repellat quae ullam.</p>
      </div>
      <div class=" cta-area   wow fadeInUp" data-wow-delay=".8s"><a class="cta-btn btn-solid    ">View All Services <i class="bi bi-arrow-right icon "></i></a></div>
    </div>
    <div class="row gx-4 gy-4 services-row ">  
      <div class="col-12 col-md-6  col-lg-4 mx-auto ">
        <div class="box service-box  wow fadeInUp reveal-start" data-wow-offset="0" data-wow-delay=".1s">
          <div class="service-icon"><i class="flaticon-web-development font-icon"></i></div><span class="service-num hollow-text">1    </span>
          <div class="service-content">
            <h3 class="service-title">Web Development</h3>
            <p class="service-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque repellendus minima reiciendis nobis dolore obcaecati.</p>
          </div><a class="read-more" href="{{ route('service-web-development.en') }}">Read More<i class="bi bi-arrow-right icon "></i></a>
        </div>
      </div>
      <div class="col-12 col-md-6  col-lg-4 mx-auto ">
        <div class="box service-box  wow fadeInUp reveal-start" data-wow-offset="0" data-wow-delay=".2s">
          <div class="service-icon"><i class="flaticon-nanotechnology font-icon"></i></div><span class="service-num hollow-text">2    </span>
          <div class="service-content">
            <h3 class="service-title">Digital Marketing</h3>
            <p class="service-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque repellendus minima reiciendis nobis dolore obcaecati.</p>
          </div><a class="read-more" href="{{ route('service-digital-marketing.en') }}">Read More<i class="bi bi-arrow-right icon "></i></a>
        </div>
      </div>
      <div class="col-12 col-md-6  col-lg-4 mx-auto  ">
        <div class="box service-box  wow fadeInUp reveal-start" data-wow-offset="0" data-wow-delay=".3s">
          <div class="service-icon"><i class="flaticon-web-domain font-icon"></i></div><span class="service-num hollow-text">3    </span>
          <div class="service-content">
            <h3 class="service-title">SaaS Development</h3>
            <p class="service-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque repellendus minima reiciendis nobis dolore obcaecati.</p>
          </div><a class="read-more" href="{{ route('service-saas.en') }}">Read More<i class="bi bi-arrow-right icon "></i></a>
        </div>
      </div>
      <div class="col-12 col-md-6  col-lg-4 mx-auto  ">
        <div class="box service-box  wow fadeInUp reveal-start" data-wow-offset="0" data-wow-delay=".4s">
          <div class="service-icon"><i class="flaticon-profile font-icon"></i></div><span class="service-num hollow-text">4    </span>
          <div class="service-content">
            <h3 class="service-title">App Development</h3>
            <p class="service-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque repellendus minima reiciendis nobis dolore obcaecati.</p>
          </div><a class="read-more" href="{{ route('service-apps.en') }}">Read More<i class="bi bi-arrow-right icon "></i></a>
        </div>
      </div>
      <div class="col-12 col-md-6  col-lg-4 mx-auto  ">
        <div class="box service-box  wow fadeInUp reveal-start" data-wow-offset="0" data-wow-delay=".5s">
          <div class="service-icon"><i class="flaticon-search font-icon"></i></div><span class="service-num hollow-text">5    </span>
          <div class="service-content">
            <h3 class="service-title">SEO Services</h3>
            <p class="service-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque repellendus minima reiciendis nobis dolore obcaecati.</p>
          </div><a class="read-more" href="{{ route('service-seo.en') }}">Read More<i class="bi bi-arrow-right icon "></i></a>
        </div>
      </div>
      <div class="col-12 col-md-6  col-lg-4 mx-auto  ">
        <div class="box service-box  wow fadeInUp  reveal-start" data-wow-offset="0" data-wow-delay=".6s">
          <div class="service-icon"><i class="flaticon-strategy font-icon"></i></div><span class="service-num hollow-text">6    </span>
          <div class="service-content">
            <h3 class="service-title">Data Analysis</h3>
            <p class="service-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque repellendus minima reiciendis nobis dolore obcaecati.</p>
          </div><a class="read-more" href="{{ route('service-data-analysis.en') }}">Read More<i class="bi bi-arrow-right icon "></i></a>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection
  