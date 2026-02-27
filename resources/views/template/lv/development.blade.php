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
      <div class="col-12 col-md-6  col-lg-4 mx-auto ">
        <div class="box service-box  wow fadeInUp reveal-start" data-wow-offset="0" data-wow-delay=".1s">
          <div class="service-icon"><i class="flaticon-web-development font-icon"></i></div><span class="service-num hollow-text">1    </span>
          <div class="service-content">
            <h3 class="service-title">web izstrāde</h3>
            <p class="service-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque repellendus minima reiciendis nobis dolore obcaecati.</p>
          </div><a class="read-more" href="#0">read more<i class="bi bi-arrow-right icon "></i></a>
        </div>
      </div>
      <div class="col-12 col-md-6  col-lg-4 mx-auto ">
        <div class="box service-box  wow fadeInUp reveal-start" data-wow-offset="0" data-wow-delay=".2s">
          <div class="service-icon"><i class="flaticon-profile font-icon"></i></div><span class="service-num hollow-text">2    </span>
          <div class="service-content">
            <h3 class="service-title">Aplikāciju izstrāde</h3>
            <p class="service-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque repellendus minima reiciendis nobis dolore obcaecati.</p>
          </div><a class="read-more" href="#0">read more<i class="bi bi-arrow-right icon "></i></a>
        </div>
      </div>
      <div class="col-12 col-md-6  col-lg-4 mx-auto  ">
        <div class="box service-box  wow fadeInUp reveal-start" data-wow-offset="0" data-wow-delay=".3s">
          <div class="service-icon"><i class="flaticon-strategy font-icon"></i></div><span class="service-num hollow-text">3    </span>
          <div class="service-content">
            <h3 class="service-title">Programmatūras izstrāde</h3>
            <p class="service-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque repellendus minima reiciendis nobis dolore obcaecati.</p>
          </div><a class="read-more" href="#0">read more<i class="bi bi-arrow-right icon "></i></a>
        </div>
      </div>
      <div class="col-12 col-md-6  col-lg-4 mx-auto  ">
        <div class="box service-box  wow fadeInUp reveal-start" data-wow-offset="0" data-wow-delay=".4s">
          <div class="service-icon"><i class="flaticon-nanotechnology font-icon"></i></div><span class="service-num hollow-text">4    </span>
          <div class="service-content">
            <h3 class="service-title">API izstrāde</h3>
            <p class="service-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque repellendus minima reiciendis nobis dolore obcaecati.</p>
          </div><a class="read-more" href="#0">read more<i class="bi bi-arrow-right icon "></i></a>
        </div>
      </div>
      <div class="col-12 col-md-6  col-lg-4 mx-auto  ">
        <div class="box service-box  wow fadeInUp reveal-start" data-wow-offset="0" data-wow-delay=".5s">
          <div class="service-icon"><i class="flaticon-web-domain font-icon"></i></div><span class="service-num hollow-text">5    </span>
          <div class="service-content">
            <h3 class="service-title">Datubāžu izstrāde</h3>
            <p class="service-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque repellendus minima reiciendis nobis dolore obcaecati.</p>
          </div><a class="read-more" href="#0">read more<i class="bi bi-arrow-right icon "></i></a>
        </div>
      </div>
      <div class="col-12 col-md-6  col-lg-4 mx-auto  ">
        <div class="box service-box  wow fadeInUp  reveal-start" data-wow-offset="0" data-wow-delay=".6s">
          <div class="service-icon"><i class="flaticon-search font-icon"></i></div><span class="service-num hollow-text">6    </span>
          <div class="service-content">
            <h3 class="service-title">DevOps services</h3>
            <p class="service-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque repellendus minima reiciendis nobis dolore obcaecati.</p>
          </div><a class="read-more" href="#0">read more<i class="bi bi-arrow-right icon "></i></a>
        </div>
      </div>
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
