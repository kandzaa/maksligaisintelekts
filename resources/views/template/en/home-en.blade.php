@extends('layouts.app-en')

@section('title', 'Māksligais Intelekts - IT Solutions & Artificial Intelligence Development')
@section('meta_description', 'Māksligais Intelekts provides innovative IT solutions, artificial intelligence development, software development and business solutions. Focused on cutting-edge technologies and client requirements.')
@section('meta_keywords', 'artificial intelligence, IT solutions, software development, machine learning, business solutions, technology, AI development, Flex-it')

@section('content')
<section class="page-hero hero-swiper-slider slide-effect  d-flex align-items-center" id="page-hero">
  <div class="particles-js  bubels" id="particles-js"></div>
  <div class="slider swiper-container">
    <div class="swiper-wrapper ">
      <div class="swiper-slide">
        <div class="slide-bg-img" data-bg-img="{{ asset('assets/images/hero/hero-bg-2.jpg') }}">
          <div class="overlay-gradient-color"></div>
        </div>
        <div class="container">
          <div class="hero-text-area  content-always-light   ">
            <div class="row g-0">
              <div class="col-12 col-lg-8 ">
                <div class="row ">
                  <div class="col-12   ">
                    <div class="hero-social-icons mb-3 ">
                      <div class="sc-wrapper dir-row sc-flat">
                        <ul class="sc-list">
                          <li class="sc-item " title="Facebook"><a class="sc-link" href="#0" title="social media icon"><i class="fab fa-facebook-f sc-icon"></i></a></li>
                          <li class="sc-item " title="youtube"><a class="sc-link" href="#0" title="social media icon"><i class="fab fa-youtube sc-icon"></i></a></li>
                          <li class="sc-item " title="instagram"><a class="sc-link" href="#0" title="social media icon"><i class="fab fa-instagram sc-icon"></i></a></li>
                          <li class="sc-item " title="X"><a class="sc-link" href="#0" title="social media icon"><i class="fab fa-x-twitter sc-icon"></i></a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="col-12     ">
                    <div class="pre-title">Digital Marketing             </div>
                    <h1 class="slide-title  ">Digital Marketing For Your growing <span class="featured-text">business</span></h1>
                  </div>
                  <div class="col-10 ">
                    <p class="slide-subtitle ">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempore sint explicabo necessitatibus voluptates labore, dolorum dolorem laboriosam debitis ea delectus.</p>
                  </div>
                  <div class="col-12   ">
                    <div class="cta-links-area ">
                      <a class=" btn-solid cta-link  cta-link-primary  " href="#0">start now</a>
                      <div class="play-btn-row-dir  inverted-colors">
                        <a class="video-link" href="https://www.youtube.com/watch?v=QI4_dGvZ5yE&amp;ab_channel=JUtah" role="button" title="play" data-fancybox="data-fancybox">
                          <div class="play-video-btn">
                            <div class="play-btn"> <i class="fas fa-play icon"></i></div>
                          </div>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="slide-bg-img" data-bg-img="{{ asset('assets/images/hero/hero-bg-1.jpg') }}">
          <div class="overlay-gradient-color "></div>
        </div>
        <div class="container">
          <div class="hero-text-area  content-always-light   ">
            <div class="row g-0">
              <div class="col-12 col-lg-8 ">
                <div class="row ">
                  <div class="col-12   ">
                    <div class="hero-social-icons mb-3 ">
                      <div class="sc-wrapper dir-row sc-flat">
                        <ul class="sc-list">
                          <li class="sc-item " title="Facebook"><a class="sc-link" href="#0" title="social media icon"><i class="fab fa-facebook-f sc-icon"></i></a></li>
                          <li class="sc-item " title="youtube"><a class="sc-link" href="#0" title="social media icon"><i class="fab fa-youtube sc-icon"></i></a></li>
                          <li class="sc-item " title="instagram"><a class="sc-link" href="#0" title="social media icon"><i class="fab fa-instagram sc-icon"></i></a></li>
                          <li class="sc-item " title="X"><a class="sc-link" href="#0" title="social media icon"><i class="fab fa-x-twitter sc-icon"></i></a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="col-12     ">
                    <div class="pre-title">IT solutions             </div>
                    <h1 class="slide-title  ">providing best  services & IT <span class="featured-text">solutions</span></h1>
                  </div>
                  <div class="col-10 ">
                    <p class="slide-subtitle ">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempore sint explicabo necessitatibus voluptates labore, dolorum dolorem laboriosam debitis ea delectus.</p>
                  </div>
                  <div class="col-12   ">
                    <div class="cta-links-area"><a class=" btn-solid cta-link cta-link-primary  " href="#0">start now</a><a class=" btn-outline cta-link  " href="{{ route('contact.en') }}">Contact us      </a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="slide-bg-img" data-bg-img="{{ asset('assets/images/hero/hero-bg-3.jpg') }}">
          <div class="overlay-gradient-color"></div>
        </div>
        <div class="container">
          <div class="hero-text-area  content-always-light   ">
            <div class="row g-0">
              <div class="col-12 col-lg-8 ">
                <div class="row ">
                  <div class="col-12   ">
                    <div class="hero-social-icons mb-3 ">
                      <div class="sc-wrapper dir-row sc-flat">
                        <ul class="sc-list">
                          <li class="sc-item " title="Facebook"><a class="sc-link" href="#0" title="social media icon"><i class="fab fa-facebook-f sc-icon"></i></a></li>
                          <li class="sc-item " title="youtube"><a class="sc-link" href="#0" title="social media icon"><i class="fab fa-youtube sc-icon"></i></a></li>
                          <li class="sc-item " title="instagram"><a class="sc-link" href="#0" title="social media icon"><i class="fab fa-instagram sc-icon"></i></a></li>
                          <li class="sc-item " title="X"><a class="sc-link" href="#0" title="social media icon"><i class="fab fa-x-twitter sc-icon"></i></a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="col-12     ">
                    <div class="pre-title">Data Analysis             </div>
                    <h1 class="slide-title  ">Delivering accurate work by data <span class="featured-text">Analysis!</span></h1>
                  </div>
                  <div class="col-10 ">
                    <p class="slide-subtitle ">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempore sint explicabo necessitatibus voluptates labore, dolorum dolorem laboriosam debitis ea delectus.</p>
                  </div>
                  <div class="col-12   ">
                    <div class="cta-links-area"><a class=" btn-solid cta-link cta-link-primary " href="#0">start now</a><a class=" btn-outline cta-link  " href="{{ route('contact.en') }}">Contact us</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="slides-state h-align  ">
      <div class="slide-num curent-slide  "></div>
      <div class="swiper-pagination"></div>
      <div class="slide-num slides-count  "></div>
    </div>
    <div class="slider-stacked-arrows">
      <div class="swiper-button-prev   ">
        <div class="left-arrow"><i class="bi bi-chevron-left icon "></i>
        </div>
      </div>
      <div class="swiper-button-next  ">
        <div class="right-arrow"><i class="bi bi-chevron-right icon "></i>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="services services-boxed mega-section  " id="services">
  <div class="container">
    <div class="sec-heading  ">
      <div class="content-area"><span class=" pre-title       wow fadeInUp " data-wow-delay=".2s">services</span>
        <h2 class=" title    wow fadeInUp" data-wow-delay=".4s"><span class='hollow-text'>services</span> we offer</h2>
        <p class="subtitle   wow fadeInUp " data-wow-delay=".6s">Lorem ipsum dolor sit amet consectetur adipisicing elit Omnis <br>id atque  dignissimos repellat quae ullam.</p>
      </div>
      <div class=" cta-area   wow fadeInUp" data-wow-delay=".8s"><a class="cta-btn btn-solid" href="{{ route('services.en') }}">see all services <i class="bi bi-arrow-right icon "></i></a></div>
    </div>
    <div class="row gx-4 gy-4 services-row text-center">
      <div class="col-12 col-md-6  col-lg-4 mx-auto ">
        <div class="box service-box  wow fadeInUp reveal-start" data-wow-offset="0" data-wow-delay=".1s">
          <div class="service-icon"><i class="flaticon-web-development font-icon"></i></div><span class="service-num hollow-text">1    </span>
          <div class="service-content">
            <h3 class="service-title">web development</h3>
            <p class="service-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque repellendus minima reiciendis nobis dolore obcaecati.</p>
          </div><a class="read-more" href="{{ route('development.en') }}">read more<i class="bi bi-arrow-right icon "></i></a>
        </div>
      </div>
      <div class="col-12 col-md-6  col-lg-4 mx-auto ">
        <div class="box service-box  wow fadeInUp reveal-start" data-wow-offset="0" data-wow-delay=".2s">
          <div class="service-icon"><i class="flaticon-nanotechnology font-icon"></i></div><span class="service-num hollow-text">2    </span>
          <div class="service-content">
            <h3 class="service-title">Digital Marketing</h3>
            <p class="service-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque repellendus minima reiciendis nobis dolore obcaecati.</p>
          </div><a class="read-more" href="{{ route('service-digital-marketing.en') }}">read more<i class="bi bi-arrow-right icon "></i></a>
        </div>
      </div>
      <div class="col-12 col-md-6  col-lg-4 mx-auto  ">
        <div class="box service-box  wow fadeInUp reveal-start" data-wow-offset="0" data-wow-delay=".3s">
          <div class="service-icon"><i class="flaticon-web-domain font-icon"></i></div><span class="service-num hollow-text">3    </span>
          <div class="service-content">
            <h3 class="service-title">SaaS products </h3>
            <p class="service-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque repellendus minima reiciendis nobis dolore obcaecati.</p>
          </div><a class="read-more" href="{{ route('service-saas.en') }}">read more<i class="bi bi-arrow-right icon "></i></a>
        </div>
      </div>
      <div class="col-12 col-md-6  col-lg-4 mx-auto  ">
        <div class="box service-box  wow fadeInUp reveal-start" data-wow-offset="0" data-wow-delay=".4s">
          <div class="service-icon"><i class="flaticon-profile font-icon"></i></div><span class="service-num hollow-text">4    </span>
          <div class="service-content">
            <h3 class="service-title">Apps development</h3>
            <p class="service-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque repellendus minima reiciendis nobis dolore obcaecati.</p>
          </div><a class="read-more" href="{{ route('development.en') }}">read more<i class="bi bi-arrow-right icon "></i></a>
        </div>
      </div>
      <div class="col-12 col-md-6  col-lg-4 mx-auto  ">
        <div class="box service-box  wow fadeInUp reveal-start" data-wow-offset="0" data-wow-delay=".5s">
          <div class="service-icon"><i class="flaticon-search font-icon"></i></div><span class="service-num hollow-text">5    </span>
          <div class="service-content">
            <h3 class="service-title">SEO services</h3>
            <p class="service-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque repellendus minima reiciendis nobis dolore obcaecati.</p>
          </div><a class="read-more" href="{{ route('service-seo.en') }}">read more<i class="bi bi-arrow-right icon "></i></a>
        </div>
      </div>
      <div class="col-12 col-md-6  col-lg-4 mx-auto  ">
        <div class="box service-box  wow fadeInUp  reveal-start" data-wow-offset="0" data-wow-delay=".6s">
          <div class="service-icon"><i class="flaticon-strategy font-icon"></i></div><span class="service-num hollow-text">6    </span>
          <div class="service-content">
            <h3 class="service-title">data analysis</h3>
            <p class="service-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque repellendus minima reiciendis nobis dolore obcaecati.</p>
          </div><a class="read-more" href="{{ route('service-data-analysis.en') }}">read more<i class="bi bi-arrow-right icon "></i></a>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="stats js-stats-counter mega-section">
  <div class="overlay-photo-image-bg" data-bg-img="{{ asset('assets/images/sections-bg-images/pattern-bg-3.jpg') }}" data-bg-opacity=".2"></div>
  <div class="container">
    <div class="stats-inner">
      <div class="row ">
        <div class="col-12 col-md-6 col-lg-3 stat-box ">
          <div class="stat-box-inner  " data-tilt="data-tilt"><i class="flaticon-project-management stat-icon"></i>
            <p class="stat-num "><span class="counter" data-from="10" data-to="750" data-speed="3000" data-refresh-interval="50"></span><span class="sign">+</span></p><span class="stat-desc">finished projects</span>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3 stat-box ">
          <div class="stat-box-inner  " data-tilt="data-tilt"><i class="flaticon-content-management stat-icon"></i>
            <p class="stat-num "><span class="counter" data-from="0" data-to="23" data-speed="3000" data-refresh-interval="50"></span><span class="sign">+</span></p><span class="stat-desc">Created jobs</span>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3 stat-box ">
          <div class="stat-box-inner  " data-tilt="data-tilt"><i class="flaticon-user stat-icon"></i>
            <p class="stat-num "><span class="counter" data-from="0" data-to="200" data-speed="3000" data-refresh-interval="50"></span><span class="sign">+</span></p><span class="stat-desc">happy customers</span>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3 stat-box ">
          <div class="stat-box-inner  " data-tilt="data-tilt"><i class="flaticon-aim stat-icon"></i>
            <p class="stat-num "><span class="counter" data-from="0" data-to="28" data-speed="3000" data-refresh-interval="50"></span><span class="sign">+</span></p><span class="stat-desc">years Of exprience</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="our-clients  mega-section   wow fadeInUp" id="our-clients" data-wow-delay="0.2s">
  <div class="container">
    <div class="sec-heading   centered ">
      <div class="content-area">
        <h2 class=" title    wow fadeInUp" data-wow-delay=".4s">trusted by over 500 clients around the world</h2>
      </div>
    </div>
    <div class=" clients-logos ">
      <div class="swiper-container">
        <div class="swiper-wrapper clients-logo-wrapper wow fadeIn " data-wow-delay=".02s">
          <div class="swiper-slide">
            <div class="client-logo  "><a href="#0"><img class="img-fluid logo " loading="lazy" src="{{ asset('assets/images/clients-logos/1-white.png') }}" alt=" "></a></div>
          </div>
          <div class="swiper-slide">
            <div class="client-logo "><a href="#0"><img class="img-fluid logo " loading="lazy" src="{{ asset('assets/images/clients-logos/2-white.png') }}" alt=" "></a></div>
          </div>
          <div class="swiper-slide">
            <div class="client-logo "><a href="#0"><img class="img-fluid logo " loading="lazy" src="{{ asset('assets/images/clients-logos/3-white.png') }}" alt=" "></a></div>
          </div>
          <div class="swiper-slide">
            <div class="client-logo "><a href="#0"><img class="img-fluid logo " loading="lazy" src="{{ asset('assets/images/clients-logos/4-white.png') }}" alt=" "></a></div>
          </div>
          <div class="swiper-slide">
            <div class="client-logo "><a href="#0"><img class="img-fluid logo " loading="lazy" src="{{ asset('assets/images/clients-logos/5-white.png') }}" alt=" "></a></div>
          </div>
          <div class="swiper-slide">
            <div class="client-logo "><a href="#0"><img class="img-fluid logo " loading="lazy" src="{{ asset('assets/images/clients-logos/6-white.png') }}" alt=" "></a></div>
          </div>
          <div class="swiper-slide">
            <div class="client-logo "><a href="#0"><img class="img-fluid logo " loading="lazy" src="{{ asset('assets/images/clients-logos/7-white.png') }}" alt=" "></a></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="blog blog-home mega-section  " id="blog">
  <div class="container ">
    <div class="sec-heading  ">
      <div class="content-area"><span class=" pre-title       wow fadeInUp " data-wow-delay=".2s">blog</span>
        <h2 class=" title    wow fadeInUp" data-wow-delay=".4s">latest <span class='hollow-text'>news</span></h2>
      </div>
      <div class=" cta-area  cta-area  wow fadeInUp" data-wow-delay=".8s"><a class="cta-btn btn-solid   cta-btn btn-solid" href="{{ route('blog.en') }}">see all posts<i class="bi bi-arrow-right icon "></i></a></div>
    </div>
    <div class="row ">
      <div class="col-12 ">
        <div class="posts-grid ">
          <div class="row">
            <div class="col-12 col-lg-4 ">
              <div class="post-box">     <a class="post-link" href="#0" title="How litespeed technology works to speed up your site ">
                  <div class="post-img-wrapper  "><img class=" parallax-img   post-img" loading="lazy" src="{{ asset('assets/images/blog/post-images/1.jpg') }}" alt="Litespeed technology for website optimization"/><span class="post-date"><span class="day">05 </span>oct 2022     </span></div></a>
                <div class="post-summary">
                  <div class="post-info"><a class="info post-cat" href="#"> <i class="bi bi-bookmark icon"></i>hosting</a><a class="info post-author" href="#"> <i class=" bi bi-person icon"></i>Allan Moore</a></div>
                  <div class="post-text"><a class="post-link" href="#0">
                      <h2 class="post-title"> How litespeed technology works to speed up your site </h2></a>
                    <p class="post-excerpt">Lorem ipsum dolor sit, amet consectetur adipisicing elit.Iure nulla dolorem, voluptates molestiae</p><a class="read-more" href="#0" title="How litespeed technology works to speed up your site ">read more<i class="bi bi-arrow-right icon "></i></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-lg-4 ">
              <div class="post-box">     <a class="post-link" href="#0" title="give your website a new look and feel with themes">
                  <div class="post-img-wrapper  "><img class=" parallax-img   post-img" loading="lazy" src="{{ asset('assets/images/blog/post-images/2.jpg') }}" alt="Web design themes and website styling"/><span class="post-date"><span class="day">15 </span>sep 2022     </span></div></a>
                <div class="post-summary">
                  <div class="post-info"><a class="info post-cat" href="#"> <i class="bi bi-bookmark icon"></i>web dev</a><a class="info post-author" href="#"> <i class=" bi bi-person icon"></i>mhmd amin</a></div>
                  <div class="post-text"><a class="post-link" href="#0">
                      <h2 class="post-title"> give your website a new look and feel with themes</h2></a>
                    <p class="post-excerpt">Lorem ipsum dolor sit, amet consectetur adipisicing elit.Iure nulla dolorem, voluptates molestiae</p><a class="read-more" href="#0" title="give your website a new look and feel with themes">read more<i class="bi bi-arrow-right icon "></i></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-lg-4 ">
              <div class="post-box">     <a class="post-link" href="#0" title="the role of domain names in SEO world explained ">
                  <div class="post-img-wrapper  "><img class=" parallax-img   post-img" loading="lazy" src="{{ asset('assets/images/blog/post-images/3.jpg') }}" alt="SEO optimization and domain name strategies"/><span class="post-date"><span class="day">27 </span>aug 2022     </span></div></a>
                <div class="post-summary">
                  <div class="post-info"><a class="info post-cat" href="#"> <i class="bi bi-bookmark icon"></i>SEO</a><a class="info post-author" href="#"> <i class=" bi bi-person icon"></i>yusuf amin</a></div>
                  <div class="post-text"><a class="post-link" href="#0">
                      <h2 class="post-title"> the role of domain names in SEO world explained </h2></a>
                    <p class="post-excerpt">Lorem ipsum dolor sit, amet consectetur adipisicing elit.Iure nulla dolorem, voluptates molestiae</p><a class="read-more" href="#0" title="the role of domain names in SEO world explained ">read more<i class="bi bi-arrow-right icon "></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection
