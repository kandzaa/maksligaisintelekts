@extends('layouts.app')

@section('content')
<section class="d-flex align-items-center page-hero  inner-page-hero " id="page-hero">
  <div class="overlay-photo-image-bg parallax" data-bg-img="assets/images/hero/inner-page-hero.jpg" data-bg-opacity="1"></div>
  <div class="overlay-color" data-bg-opacity=".75"></div>
  <div class="container">
    <div class="hero-text-area centerd">
      <h1 class="hero-title  wow fadeInUp" data-wow-delay=".2s">MI Pielietojums </h1>
      <nav aria-label="breadcrumb ">
        <ul class="breadcrumb wow fadeInUp" data-wow-delay=".6s">
          <li class="breadcrumb-item"><a class="breadcrumb-link" href="{{ route('home.lv') }}"><i class="bi bi-house icon "></i>home</a></li>
          <li class="breadcrumb-item active">MI Pielietojums</li>
        </ul>
      </nav>
    </div>
  </div>
</section>

<section class="services services-boxed mega-section  " id="services">
  <div class="container">
    <div class="sec-heading  ">
      <div class="content-area"><span class=" pre-title       wow fadeInUp " data-wow-delay=".2s">MI Pielietojums</span>
        <h2 class=" title    wow fadeInUp" data-wow-delay=".4s"><span class='hollow-text'>Mūsu</span> piedāvājumi</h2>
        <p class="subtitle   wow fadeInUp " data-wow-delay=".6s">Lorem ipsum dolor sit amet consectetur adipisicing elit Omnis <br>id atque  dignissimos repellat quae ullam.</p>
      </div>
      {{-- <div class=" cta-area   wow fadeInUp" data-wow-delay=".8s"><a class="cta-btn btn-solid    ">Skatīt visus pakalpojumus <i class="bi bi-arrow-right icon "></i></a></div> --}}
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
              <h3 class="service-title">{{ $service->title_lv }}</h3>
              <p class="service-text">{{ Str::limit($service->description_lv ?: strip_tags($service->content_lv), 120) }}</p>
              @if($service->price)
                <div class="service-price" style="color: #00d4ff; font-weight: 600; margin-top: 10px;">{{ $service->price }}</div>
              @endif
            </div>
            <a class="read-more" href="{{ route('services.show.lv', $service->slug) }}">Lasīt vairāk<i class="bi bi-arrow-right icon "></i></a>
          </div>
        </div>
      @empty
        <div class="col-12 text-center">
          <p style="color: rgba(255, 255, 255, 0.6);">Pašlaik nav pieejami pakalpojumi.</p>
        </div>
      @endforelse
    </div>
  </div>
</section>


<section class="faq mega-section" id="faq">
  <div class="shape-top-left"></div>
  <div class="shape-bottom-right"></div>
  <div class="pattern-top-end-dir"></div>
  <div class="pattern-bottom-start-dir"></div>
  <div class="container">
    <div class="sec-heading  centered ">
      <div class="content-area"><span class=" pre-title       wow fadeInUp " data-wow-delay=".2s">FAQs</span>
        <h2 class=" title    wow fadeInUp" data-wow-delay=".4s"><span class='hollow-text'>Biežākie </span> jautājumi </h2>
      </div>
    </div>
    <div class="faq-accordion " id="accordion">
      <div class="row">
        <div class="col-12 col-lg-6">
          <div class="card mb-2">
            <div class="card-header " id="heading-1">
              <h5 class="mb-0 faq-title">
                <button class="btn btn-link  faq-btn  collapsed " data-bs-toggle="collapse" data-bs-target="#collapse-1" aria-expanded="true" aria-controls="collapse-1">
Vai jūsu pakalpojums ir viegli lietojams?</button>
              </h5>
            </div>
            <div class="collapse " id="collapse-1" aria-labelledby="collapse-1" data-bs-parent="#accordion">
              <div class="card-body">
                <p class="faq-answer">mhmd, Anim pariatur cliche reprehenderit, enim eiusmod high life
          accusamus terry richardson ad squid. 3 wolf moon officia
          aute,
          non cupidatat skateboard dolor brunch. Food truck quinoa
          nesciunt
          laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put
          a
          bird on it squid single-origin coffee nulla assumenda
          shoreditch
          et. Nihil anim keffiyeh helvetica, craft beer labore wes
          anderson
          cred nesciunt sapiente ea proident. Ad vegan excepteur
          butcher
          vice lomo. Leggings occaecat craft beer farm-to-table. </p>
              </div>
            </div>
          </div>
          <div class="card mb-2">
            <div class="card-header " id="heading-2">
              <h5 class="mb-0 faq-title">
                <button class="btn btn-link  faq-btn  collapsed " data-bs-toggle="collapse" data-bs-target="#collapse-2" aria-expanded="true" aria-controls="collapse-2">
Vai es saņemšu nākotnē atjauninājumus?</button>
              </h5>
            </div>
            <div class="collapse " id="collapse-2" aria-labelledby="collapse-2" data-bs-parent="#accordion">
              <div class="card-body">
                <p class="faq-answer">mhmd, Anim pariatur cliche reprehenderit, enim eiusmod high life
          accusamus terry richardson ad squid. 3 wolf moon officia
          aute,
          non cupidatat skateboard dolor brunch. Food truck quinoa
          nesciunt
          laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put
          a
          bird on it squid single-origin coffee nulla assumenda
          shoreditch
          et. Nihil anim keffiyeh helvetica, craft beer labore wes
          anderson
          cred nesciunt sapiente ea proident. Ad vegan excepteur
          butcher
          vice lomo. Leggings occaecat craft beer farm-to-table. </p>
              </div>
            </div>
          </div>
          <div class="card mb-2">
            <div class="card-header " id="heading-3">
              <h5 class="mb-0 faq-title">
                <button class="btn btn-link  faq-btn  collapsed " data-bs-toggle="collapse" data-bs-target="#collapse-3" aria-expanded="true" aria-controls="collapse-3">
                  Vai šie pakalpojumi darbojas manā valstī?</button>
              </h5>
            </div>
            <div class="collapse " id="collapse-3" aria-labelledby="collapse-3" data-bs-parent="#accordion">
              <div class="card-body">
                <p class="faq-answer">mhmd, Anim pariatur cliche reprehenderit, enim eiusmod high life
          accusamus terry richardson ad squid. 3 wolf moon officia
          aute,
          non cupidatat skateboard dolor brunch. Food truck quinoa
          nesciunt
          laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put
          a
          bird on it squid single-origin coffee nulla assumenda
          shoreditch
          et. Nihil anim keffiyeh helvetica, craft beer labore wes
          anderson
          cred nesciunt sapiente ea proident. Ad vegan excepteur
          butcher
          vice lomo. Leggings occaecat craft beer farm-to-table. </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-6">
          <div class="card mb-2">
            <div class="card-header " id="heading-4">
              <h5 class="mb-0 faq-title">
                <button class="btn btn-link  faq-btn  collapsed " data-bs-toggle="collapse" data-bs-target="#collapse-4" aria-expanded="true" aria-controls="collapse-4">
                  Cik es maksāšu?</button>
              </h5>
            </div>
            <div class="collapse " id="collapse-4" aria-labelledby="collapse-4" data-bs-parent="#accordion">
              <div class="card-body">
                <p class="faq-answer">mhmd, Anim pariatur cliche reprehenderit, enim eiusmod high life
          accusamus terry richardson ad squid. 3 wolf moon officia
          aute,
          non cupidatat skateboard dolor brunch. Food truck quinoa
          nesciunt
          laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put
          a
          bird on it squid single-origin coffee nulla assumenda
          shoreditch
          et. Nihil anim keffiyeh helvetica, craft beer labore wes
          anderson
          cred nesciunt sapiente ea proident. Ad vegan excepteur
          butcher
          vice lomo. Leggings occaecat craft beer farm-to-table. </p>
              </div>
            </div>
          </div>
          <div class="card mb-2">
            <div class="card-header " id="heading-5">
              <h5 class="mb-0 faq-title">
                <button class="btn btn-link  faq-btn  collapsed " data-bs-toggle="collapse" data-bs-target="#collapse-5" aria-expanded="true" aria-controls="collapse-5">
                  Vai ir citi maksājumi?</button>
              </h5>
            </div>
            <div class="collapse " id="collapse-5" aria-labelledby="collapse-5" data-bs-parent="#accordion">
              <div class="card-body">
                <p class="faq-answer">mhmd, Anim pariatur cliche reprehenderit, enim eiusmod high life
          accusamus terry richardson ad squid. 3 wolf moon officia
          aute,
          non cupidatat skateboard dolor brunch. Food truck quinoa
          nesciunt
          laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put
          a
          bird on it squid single-origin coffee nulla assumenda
          shoreditch
          et. Nihil anim keffiyeh helvetica, craft beer labore wes
          anderson
          cred nesciunt sapiente ea proident. Ad vegan excepteur
          butcher
          vice lomo. Leggings occaecat craft beer farm-to-table. </p>
              </div>
            </div>
          </div>
          <div class="card mb-2">
            <div class="card-header " id="heading-6">
              <h5 class="mb-0 faq-title">
                <button class="btn btn-link  faq-btn  collapsed " data-bs-toggle="collapse" data-bs-target="#collapse-6" aria-expanded="true" aria-controls="collapse-6">
                  Kā es varu parakstīt līgumu?</button>
              </h5>
            </div>
            <div class="collapse " id="collapse-6" aria-labelledby="collapse-6" data-bs-parent="#accordion">
              <div class="card-body">
                <p class="faq-answer">mhmd, Anim pariatur cliche reprehenderit, enim eiusmod high life
          accusamus terry richardson ad squid. 3 wolf moon officia
          aute,
          non cupidatat skateboard dolor brunch. Food truck quinoa
          nesciunt
          laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put
          a
          bird on it squid single-origin coffee nulla assumenda
          shoreditch
          et. Nihil anim keffiyeh helvetica, craft beer labore wes
          anderson
          cred nesciunt sapiente ea proident. Ad vegan excepteur
          butcher
          vice lomo. Leggings occaecat craft beer farm-to-table. </p>
              </div>
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
        <div class="content-area"><span class=" pre-title       wow fadeInUp " data-wow-delay=".2s">Kontakti</span>
          <h2 class=" title    wow fadeInUp" data-wow-delay=".4s">Sazinieties ar mums</h2>
          <p class="subtitle   wow fadeInUp " data-wow-delay=".6s">Lorem ipsum dolor sit amet consectetur adipisicing elit Omnis <br>id atque  dignissimos repellat quae ullam.</p>
        </div>
      </div>
      <div class=" see-more-area wow fadeInUp" data-wow-delay="0.8s"><a href="{{ route('contact.lv') }}" class="btn-solid">Saņemt piedāvājumu</a></div>
    </div>
  </div>
</section>
@endsection