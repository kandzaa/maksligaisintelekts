@extends('layouts.app')

@section('content')
<section class="d-flex align-items-center page-hero  inner-page-hero " id="page-hero">
  <div class="overlay-photo-image-bg parallax" data-bg-img="{{ asset('assets/images/hero/inner-page-hero.jpg') }}" data-bg-opacity="1"></div>
  <div class="overlay-color" data-bg-opacity=".75"></div>
  <div class="container">
    <div class="hero-text-area centerd">
      <h1 class="hero-title  wow fadeInUp" data-wow-delay=".2s">Ziņas</h1>
      <nav aria-label="breadcrumb ">
        <ul class="breadcrumb wow fadeInUp" data-wow-delay=".6s">
          <li class="breadcrumb-item"><a class="breadcrumb-link" href="{{ route('home.lv') }}"><i class="bi bi-house icon "></i>home</a></li>
          <li class="breadcrumb-item active">Ziņas</li>
        </ul>
      </nav>
    </div>
  </div>
</section>

<section class="blog blog-home mega-section">
  <div class="container ">
    <div class="row ">
      <div class="col-12 ">
        <div class="posts-grid">
          <div class="row">
            @forelse($news as $item)
              <div class="col-12 col-lg-4">
                <div class="post-box">
                  <a class="post-link" href="{{ route('news.show.lv', $item->slug) }}" title="{{ $item->title_lv }}">
                    <div class="post-img-wrapper">
                      @if($item->image)
                        <img class="parallax-img post-img" loading="lazy" src="{{ asset('assets/images/news/' . $item->image) }}" alt="{{ $item->title_lv }}"/>
                      @else
                        <img class="parallax-img post-img" loading="lazy" src="{{ asset('assets/images/blog/post-images/1.jpg') }}" alt="{{ $item->title_lv }}"/>
                      @endif
                      <span class="post-date">
                        <span class="day">{{ $item->created_at->format('d') }}</span>
                        {{ $item->created_at->format('M') }} {{ $item->created_at->format('Y') }}
                      </span>
                    </div>
                  </a>
                  <div class="post-summary">
                    <div class="post-text">
                      <a class="post-link" href="{{ route('news.show.lv', $item->slug) }}">
                        <h2 class="post-title">{{ $item->title_lv }}</h2>
                      </a>
                      <p class="post-excerpt">{{ Str::limit(strip_tags($item->content_lv), 100) }}</p>
                      <a class="read-more" href="{{ route('news.show.lv', $item->slug) }}" title="{{ $item->title_lv }}">
                        lasīt vairāk<i class="bi bi-arrow-right icon"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            @empty
              <div class="col-12">
                <div class="text-center py-5">
                  <h3 class="text-muted">Pagaidām nav ziņu</h3>
                  <p class="text-muted">Drīzumā šeit parādīs jaunākās ziņas.</p>
                </div>
              </div>
            @endforelse
          </div>
          
          @if($news->hasPages())
            <div class="col-12">
              <nav class="ma-pagination">
                <ul class="pagination justify-content-center">
                  {{ $news->links() }}
                </ul>
              </nav>
            </div>
          @endif
        </div>
      </div>
    </div>
  </div>
</section>
@endsection