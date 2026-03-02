  
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
       </div>
    <div class="row gx-4 gy-4 services-row ">  
      @forelse($services as $index => $service)
        <div class="col-12 col-md-6  col-lg-4 mx-auto ">
          <div class="box service-box  wow fadeInUp reveal-start" data-wow-offset="0" data-wow-delay="{{ $index * 0.1 }}s">
            @if($service->image)
              <div class="service-icon">
                <img src="{{ asset('assets/images/services/' . $service->image) }}" alt="{{ $service->title_en }}" style="width: 60px; height: 60px; object-fit: cover; border-radius: 8px;">
              </div>
            @else
              <div class="service-icon"><i class="flaticon-web-development font-icon"></i></div>
            @endif
            <span class="service-num hollow-text">{{ $index + 1 }}</span>
            <div class="service-content">
              <h3 class="service-title">{{ $service->title_en }}</h3>
              <p class="service-text">{{ Str::limit($service->description_en ?: strip_tags($service->content_en), 120) }}</p>
              @if($service->price)
                <div class="service-price" style="color: #00d4ff; font-weight: 600; margin-top: 10px;">{{ $service->price }}</div>
              @endif
            </div>
            <a class="read-more" href="{{ route('services.show.en', $service->slug) }}">Read More<i class="bi bi-arrow-right icon "></i></a>
          </div>
        </div>
      @empty
        <div class="col-12 text-center">
          <p style="color: rgba(255, 255, 255, 0.6);">No services available at the moment.</p>
        </div>
      @endforelse
    </div>
  </div>
</section>

@endsection
  