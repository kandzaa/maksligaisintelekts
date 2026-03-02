@extends('layouts.app-en')

@section('content')
<section class="d-flex align-items-center page-hero  inner-page-hero " id="page-hero">
  <div class="overlay-photo-image-bg parallax" data-bg-img="{{ asset('assets/images/hero/inner-page-hero.jpg') }}" data-bg-opacity="1"></div>
  <div class="overlay-color" data-bg-opacity=".75"></div>
  <div class="container">
    <div class="hero-text-area centerd">
      <h1 class="hero-title  wow fadeInUp" data-wow-delay=".2s">{{ $service->title_en }}</h1>
      <nav aria-label="breadcrumb ">
        <ul class="breadcrumb wow fadeInUp" data-wow-delay=".6s">
          <li class="breadcrumb-item"><a class="breadcrumb-link" href="{{ route('home.en') }}"><i class="bi bi-house icon "></i>home</a></li>
          <li class="breadcrumb-item"><a class="breadcrumb-link" href="{{ route('services.en') }}">services</a></li>
          <li class="breadcrumb-item active">{{ $service->title_en }}</li>
        </ul>
      </nav>
    </div>
  </div>
</section>

<section class="service-detail mega-section" id="service-detail" style="padding: 100px 0;">
  <div class="container">
    <div class="row">
      <div class="col-lg-8">
        <div class="service-content-wrapper">
          @if($service->image)
            <div class="service-image mb-4">
              <img src="{{ asset('assets/images/services/' . $service->image) }}" alt="{{ $service->title_en }}" class="img-fluid rounded" style="max-height: 400px; width: 100%; object-fit: cover;">
            </div>
          @endif
          
          <div class="service-description mb-4">
            @if($service->description_en)
              <p class="lead" style="color: rgba(255, 255, 255, 0.9); font-size: 1.2rem;">{{ $service->description_en }}</p>
            @endif
          </div>
          
          <div class="service-main-content">
            <div class="content-text" style="color: rgba(255, 255, 255, 0.8); line-height: 1.8;">
              {!! $service->content_en !!}
            </div>
          </div>
          
          @if($service->price)
            <div class="service-price-box mt-5 p-4" style="background: #1a1a1a; border: 1px solid #2a2a2a; border-radius: 8px;">
              <h4 style="color: #00d4ff; margin-bottom: 10px;">Price</h4>
              <p style="color: #ffffff; font-size: 1.5rem; font-weight: 600;">{{ $service->price }}</p>
            </div>
          @endif
        </div>
      </div>
      
      <div class="col-lg-4">
        <div class="service-sidebar">
          <div class="sidebar-box p-4 mb-4" style="background: #1a1a1a; border: 1px solid #2a2a2a; border-radius: 8px;">
            <h4 style="color: #ffffff; margin-bottom: 20px;">Contact Us</h4>
            <p style="color: rgba(255, 255, 255, 0.8); margin-bottom: 20px;">Interested in this service? Contact us and we'll prepare a personalized offer for you.</p>
            <a href="{{ route('contact.en') }}" class="btn btn-primary w-100" style="background: linear-gradient(135deg, #4a90e2 0%, #357abd 100%); border: none; border-radius: 6px; padding: 12px 20px; font-weight: 500;">
              <i class="fas fa-envelope me-2"></i> Contact Us
            </a>
          </div>
          
          <div class="sidebar-box p-4" style="background: #1a1a1a; border: 1px solid #2a2a2a; border-radius: 8px;">
            <h4 style="color: #ffffff; margin-bottom: 20px;">Other Services</h4>
            <div class="other-services">
              @php
                $otherServices = \App\Models\Service::where('published', true)->where('id', '!=', $service->id)->take(3)->get();
              @endphp
              @forelse($otherServices as $otherService)
                <div class="service-item mb-3 pb-3" style="border-bottom: 1px solid #2a2a2a;">
                  <h5 style="color: #ffffff; margin-bottom: 5px;">{{ $otherService->title_en }}</h5>
                  <p style="color: rgba(255, 255, 255, 0.6); font-size: 0.9rem; margin-bottom: 10px;">{{ Str::limit($otherService->description_en ?: strip_tags($otherService->content_en), 80) }}</p>
                  <a href="{{ route('services.show.en', $otherService->slug) }}" class="btn btn-sm" style="color: #00d4ff; text-decoration: none; font-weight: 500;">
                    Learn More <i class="fas fa-arrow-right ms-1"></i>
                  </a>
                </div>
              @empty
                <p style="color: rgba(255, 255, 255, 0.6);">No other services available.</p>
              @endforelse
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="take-action elf-section has-dark-bg" id="take-action">
  <div class="overlay-photo-image-bg  " data-bg-img="assets/images/sections-bg-images/2.jpg" data-bg-opacity=".25"> </div>
  <div class="cta-wrapper">
    <div class="container">
      <div class="sec-heading  centered mb-0 ">
        <div class="content-area"><span class=" pre-title       wow fadeInUp " data-wow-delay=".2s">Contact</span>
          <h2 class=" title    wow fadeInUp" data-wow-delay=".4s">Get in Touch</h2>
          <p class="subtitle   wow fadeInUp " data-wow-delay=".6s">Lorem ipsum dolor sit amet consectetur adipisicing elit Omnis <br>id atque  dignissimos repellat quae ullam.</p>
        </div>
      </div>
      <div class=" see-more-area wow fadeInUp" data-wow-delay="0.8s"><a href="{{ route('contact.en') }}" class="btn-solid">Get Quote</a></div>
    </div>
  </div>
</section>
@endsection
