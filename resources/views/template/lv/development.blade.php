@extends('layouts.app')

@section('content')
<section class="d-flex align-items-center page-hero  inner-page-hero " id="page-hero">
  <div class="overlay-photo-image-bg parallax" data-bg-img="{{ asset('assets/images/hero/inner-page-hero.jpg') }}" data-bg-opacity="1"></div>
  <div class="overlay-color" data-bg-opacity=".75"></div>
  <div class="container">
    <div class="hero-text-area centerd">
      <h1 class="hero-title  wow fadeInUp" data-wow-delay=".2s">MI izstrāde</h1>
      <nav aria-label="breadcrumb ">
        <ul class="breadcrumb wow fadeInUp" data-wow-delay=".6s">
          <li class="breadcrumb-item"><a class="breadcrumb-link" href="{{ route('home.lv') }}"><i class="bi bi-house icon "></i>home</a></li>
          <li class="breadcrumb-item active">MI izstrāde</li>
        </ul>
      </nav>
    </div>
  </div>
</section>

<section class="services services-boxed mega-section  " id="services">
  <div class="container">
    <div class="sec-heading  ">
      <div class="content-area"><span class=" pre-title       wow fadeInUp " data-wow-delay=".2s">MI izstrāde</span>
        <h2 class=" title    wow fadeInUp" data-wow-delay=".4s"><span class='hollow-text'>Mākslīgā intelekta</span> pakalpojumi</h2>
        <p class="subtitle   wow fadeInUp " data-wow-delay=".6s">Lorem ipsum dolor sit amet consectetur adipisicing elit Omnis <br>id atque  dignissimos repellat quae ullam.</p>
      </div>
      </div>
    <div class="row gx-4 gy-4 services-row ">  
      @forelse($developments as $index => $development)
        <div class="col-12 col-md-6  col-lg-4 mx-auto ">
          <div class="box service-box  wow fadeInUp reveal-start" data-wow-offset="0" data-wow-delay="{{ $index * 0.1 }}s">
            @if($development->image)
              <div class="service-icon">
                <img src="{{ asset('assets/images/developments/' . $development->image) }}" alt="{{ $development->title_lv }}" style="width: 60px; height: 60px; object-fit: cover; border-radius: 8px;">
              </div>
            @elseif($development->icon_class)
              <div class="service-icon"><i class="{{ $development->icon_class }} font-icon"></i></div>
            @else
              <div class="service-icon"><i class="flaticon-web-development font-icon"></i></div>
            @endif
            <span class="service-num hollow-text">{{ $index + 1 }}</span>
            <div class="service-content">
              <h3 class="service-title">{{ $development->title_lv }}</h3>
              <p class="service-text">{{ Str::limit($development->description_lv ?: strip_tags($development->content_lv), 120) }}</p>
            </div>
            <a class="read-more" href="{{ route('development.show.lv', $development->slug) }}">Lasīt vairāk<i class="bi bi-arrow-right icon "></i></a>
          </div>
        </div>
      @empty
        <div class="col-12 text-center">
          <p style="color: rgba(255, 255, 255, 0.6);">Pašlaik nav pieejami MI izstrādes pakalpojumi.</p>
        </div>
      @endforelse
    </div>
  </div>
</section>


<!-- testimonials -->
<section class="testimonials testimonials-1-col   has-dark-bg  mega-section " id="testimonials-img-bg">
  <div class="overlay-photo-image-bg parallax " data-bg-img="{{ asset('assets/images/sections-bg-images/1.jpg') }}" data-bg-opacity=".25"> </div>
  <div class="container">
    <div class="sec-heading  centered ">
      <div class="content-area"><span class=" pre-title       wow fadeInUp " data-wow-delay=".2s">testimonials</span>
        <h2 class=" title    wow fadeInUp" data-wow-delay=".4s">clients <span class='hollow-text'>testimonials</span></h2>
      </div>
    </div>
    <div class="row d-flex align-items-center">
      <div class="col-12 col-md-10  mx-auto">
        <div class="swiper-container  wow fadeInUp  " data-wow-delay="0.2s">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="testmonial-card d-flex align-items-center justify-content-center">
                <div class="testimonial-content">
                  <div class="customer-img "><img class="img-fluid " loading="lazy" src="{{ asset('assets/images/testimonials/1.png') }}" alt="First Slide "></div>
                  <div class="customer-testimonial">
                    <div class="content">
                      <p class="testimonial-text "> ipsum dolor sit amet consectetur adipisicing elit. Quod, id sequi aut qui est ab, corporis quis maiores reiciendis explicabo odio tenetur nulla sint vel.</p>
                    </div>
                  </div>
                  <div class="customer-info ">
                    <div class="customer-details">
                      <p class="customer-name">Yusuf amin</p>
                      <p class="customer-role">founder</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="testmonial-card d-flex align-items-center justify-content-center">
                <div class="testimonial-content">
                  <div class="customer-img "><img class="img-fluid " loading="lazy" src="{{ asset('assets/images/testimonials/2.png') }}" alt="First Slide "></div>
                  <div class="customer-testimonial">
                    <div class="content">
                      <p class="testimonial-text "> ipsum dolor sit amet consectetur adipisicing elit. Quod, id sequi aut qui est ab, corporis quis maiores reiciendis explicabo odio tenetur nulla sint vel.</p>
                    </div>
                  </div>
                  <div class="customer-info ">
                    <div class="customer-details">
                      <p class="customer-name">fouad osman</p>
                      <p class="customer-role">officer</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="testmonial-card d-flex align-items-center justify-content-center">
                <div class="testimonial-content">
                  <div class="customer-img "><img class="img-fluid " loading="lazy" src="{{ asset('assets/images/testimonials/3.png') }}" alt="First Slide "></div>
                  <div class="customer-testimonial">
                    <div class="content">
                      <p class="testimonial-text "> ipsum dolor sit amet consectetur adipisicing elit. Quod, id sequi aut qui est ab, corporis quis maiores reiciendis explicabo odio tenetur nulla sint vel.            </p>
                    </div>
                  </div>
                  <div class="customer-info ">
                    <div class="customer-details">
                      <p class="customer-name">fairouz mhmd</p>
                      <p class="customer-role">manager</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-button-prev">
            <div class="left-arrow"><i class="bi bi-chevron-left icon "></i>
            </div>
          </div>
          <div class="swiper-button-next">
            <div class="right-arrow"><i class="bi bi-chevron-right icon "></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="take-action elf-section has-dark-bg" id="take-action">
  <div class="overlay-photo-image-bg  " data-bg-img="{{ asset('assets/images/sections-bg-images/2.jpg') }}" data-bg-opacity=".25"> </div>
  <div class="cta-wrapper">
    <div class="container">
      <div class="sec-heading  centered mb-0 ">
        <div class="content-area"><span class=" pre-title       wow fadeInUp " data-wow-delay=".2s">Kontakti</span>
          <h2 class=" title    wow fadeInUp" data-wow-delay=".4s">Sazinieties ar mums</h2>
          <p class="subtitle   wow fadeInUp " data-wow-delay=".6s">Sazinieties ar mums, lai uzzinātu vairāk par mūsu pakalpojumiem un iespējām.</p>
        </div>
      </div>
      <div class=" see-more-area wow fadeInUp" data-wow-delay="0.8s"><a class=" btn-solid cta-link" href="{{ route('contact.lv') }}">Sazinieties ar mums</a></div>
    </div>
  </div>
</section>

@endsection
