<section class="d-flex align-items-center page-hero  inner-page-hero " id="page-hero">
  <div class="overlay-photo-image-bg parallax" data-bg-img="{{ asset('assets/images/hero/inner-page-hero.jpg') }}" data-bg-opacity="1"></div>
  <div class="overlay-color" data-bg-opacity=".75"></div>
  <div class="container">
    <div class="hero-text-area centerd">
      <h1 class="hero-title  wow fadeInUp" data-wow-delay=".2s">Blog</h1>
      <nav aria-label="breadcrumb ">
        <ul class="breadcrumb wow fadeInUp" data-wow-delay=".6s">
          <li class="breadcrumb-item"><a class="breadcrumb-link" href="{{ route('home.en') }}"><i class="bi bi-house icon "></i>home</a></li>
          <li class="breadcrumb-item active">blog</li>
        </ul>
      </nav>
    </div>
  </div>
</section>

<section class="blog blog-home mega-section">
  <div class="container ">
    <div class="row ">
      <div class="col-12 ">
        <div class="blog-posts">
          <article class="blog-post wow fadeInUp" data-wow-delay=".2s">
            <div class="post-thumbnail">
              <img src="{{ asset('assets/images/blog/blog-1.jpg') }}" alt="Blog Post 1">
            </div>
            <div class="post-content">
              <div class="post-meta">
                <span class="post-date">March 15, 2024</span>
                <span class="post-category">Technology</span>
              </div>
              <h3 class="post-title"><a href="#">Latest Web Development Trends</a></h3>
              <p class="post-excerpt">Discover the latest trends in web development and how they can benefit your business...</p>
              <a href="#" class="read-more">Read More</a>
            </div>
          </article>
          
          <article class="blog-post wow fadeInUp" data-wow-delay=".4s">
            <div class="post-thumbnail">
              <img src="{{ asset('assets/images/blog/blog-2.jpg') }}" alt="Blog Post 2">
            </div>
            <div class="post-content">
              <div class="post-meta">
                <span class="post-date">March 10, 2024</span>
                <span class="post-category">Digital Marketing</span>
              </div>
              <h3 class="post-title"><a href="#">SEO Best Practices for 2024</a></h3>
              <p class="post-excerpt">Learn the essential SEO strategies to improve your website's search rankings...</p>
              <a href="#" class="read-more">Read More</a>
            </div>
          </article>
          
          <article class="blog-post wow fadeInUp" data-wow-delay=".6s">
            <div class="post-thumbnail">
              <img src="{{ asset('assets/images/blog/blog-3.jpg') }}" alt="Blog Post 3">
            </div>
            <div class="post-content">
              <div class="post-meta">
                <span class="post-date">March 5, 2024</span>
                <span class="post-category">Cloud Solutions</span>
              </div>
              <h3 class="post-title"><a href="#">The Future of SaaS Applications</a></h3>
              <p class="post-excerpt">Explore how SaaS applications are transforming modern business operations...</p>
              <a href="#" class="read-more">Read More</a>
            </div>
          </article>
        </div>
      </div>
    </div>
  </div>
</section>
