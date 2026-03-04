@extends('layouts.app')

@section('title', $news->title_lv . ' - Māksligais Intelekts')
@section('meta_description', Str::limit(strip_tags($news->content_lv), 160))
@section('meta_keywords', $news->title_lv . ', jaunumi, māksligais intelekts, ziņas')

@section('headerClass', 'inner-page-header')

@section('content')
<section class="d-flex align-items-center page-hero  inner-page-hero " id="page-hero">
  <div class="overlay-photo-image-bg parallax" data-bg-img="assets/images/hero/inner-page-hero.jpg" data-bg-opacity="1"></div>
  <div class="overlay-color" data-bg-opacity=".75"></div>
  <div class="container">
    <div class="hero-text-area centerd">
      <h1 class="hero-title  wow fadeInUp" data-wow-delay=".2s">{{ $news->title_lv }}</h1>
      <nav aria-label="breadcrumb ">
        <ul class="breadcrumb wow fadeInUp" data-wow-delay=".6s">
          <li class="breadcrumb-item"><a class="breadcrumb-link" href="{{ route('home.lv') }}"><i class="bi bi-house icon "></i>home</a></li>
          <li class="breadcrumb-item"><a class="breadcrumb-link" href="{{ route('blog.lv') }}">blogs</a></li>
          <li class="breadcrumb-item active">{{ $news->title_lv }}</li>
        </ul>
      </nav>
    </div>
  </div>
</section>

<section class="blog-single mega-section" id="blog-single" style="padding: 100px 0;">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 mx-auto">
        <div class="blog-single-content">
          @if($news->image)
            <div class="blog-image mb-4">
              <img src="{{ asset('assets/images/news/' . $news->image) }}" alt="{{ $news->title_lv }}" class="img-fluid rounded" style="max-height: 400px; width: 100%; object-fit: cover;">
            </div>
          @endif
          
          <div class="blog-meta mb-4" style="color: rgba(255, 255, 255, 0.6); font-size: 0.9rem;">
            <i class="fas fa-calendar me-2"></i>{{ $news->created_at->format('d. M. Y') }}
            @if($news->updated_at->ne($news->created_at))
              <span class="ms-3"><i class="fas fa-edit me-1"></i> Atjaunināts: {{ $news->updated_at->format('d. M. Y') }}</span>
            @endif
          </div>
          
          <div class="blog-content">
            <div class="content-text" style="color: rgba(255, 255, 255, 0.8); line-height: 1.8; font-size: 1.1rem;">
              {!! $news->content_lv !!}
            </div>
          </div>
          
          <div class="blog-footer mt-5 pt-4" style="border-top: 1px solid #2a2a2a;">
            <div class="row align-items-center">
              <div class="col-md-6">
                <div class="author-info" style="color: rgba(255, 255, 255, 0.6);">
                  <i class="fas fa-user me-2"></i>
                  <span>Māksligais Intelekts komanda</span>
                </div>
              </div>
              <div class="col-md-6 text-md-end">
                <div class="social-share" style="color: rgba(255, 255, 255, 0.6);">
                  <small>Dalīties:</small>
                  <a href="#" class="ms-2" style="color: rgba(255, 255, 255, 0.6);"><i class="fab fa-facebook"></i></a>
                  <a href="#" class="ms-2" style="color: rgba(255, 255, 255, 0.6);"><i class="fab fa-twitter"></i></a>
                  <a href="#" class="ms-2" style="color: rgba(255, 255, 255, 0.6);"><i class="fab fa-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <div class="navigation-links mt-5">
          <div class="row">
            <div class="col-6">
              {{-- Previous link can be added here --}}
            </div>
            <div class="col-6 text-end">
              <a href="{{ route('blog.lv') }}" class="btn btn-outline-secondary" style="border-color: rgba(255, 255, 255, 0.2); color: rgba(255, 255, 255, 0.8);">
                <i class="fas fa-arrow-left me-2"></i> Atgriezties uz rakstiem
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="related-posts mega-section" id="related-posts" style="padding: 80px 0 100px;">
  <div class="container">
    <div class="sec-heading centered mb-5">
      <div class="content-area">
        <h2 class="title" style="color: #ffffff;">Saistītie raksti</h2>
      </div>
    </div>
    
    <div class="row">
      @php
        $relatedNews = \App\Models\News::where('published', true)
            ->where('id', '!=', $news->id)
            ->inRandomOrder()
            ->take(3)
            ->get();
      @endphp
      
      @forelse($relatedNews as $related)
        <div class="col-md-4 mb-4">
          <div class="related-post-card" style="background: #1a1a1a; border: 1px solid #2a2a2a; border-radius: 8px; padding: 1.5rem; height: 100%;">
            @if($related->image)
              <div class="related-post-image mb-3">
                <img src="{{ asset('assets/images/news/' . $related->image) }}" alt="{{ $related->title_lv }}" class="img-fluid rounded" style="width: 100%; height: 150px; object-fit: cover;">
              </div>
            @endif
            <h5 style="color: #ffffff; margin-bottom: 1rem;">
              <a href="{{ route('news.show.lv', $related->slug) }}" style="color: #ffffff; text-decoration: none;">
                {{ Str::limit($related->title_lv, 60) }}
              </a>
            </h5>
            <p style="color: rgba(255, 255, 255, 0.6); font-size: 0.9rem; margin-bottom: 1rem;">
              {{ Str::limit(strip_tags($related->content_lv), 100) }}
            </p>
            <div class="related-post-meta" style="color: rgba(255, 255, 255, 0.5); font-size: 0.8rem;">
              <i class="fas fa-calendar me-1"></i>{{ $related->created_at->format('d. M. Y') }}
            </div>
          </div>
        </div>
      @empty
        <div class="col-12 text-center">
          <p style="color: rgba(255, 255, 255, 0.6);">Nav saistītu rakstu.</p>
        </div>
      @endforelse
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
