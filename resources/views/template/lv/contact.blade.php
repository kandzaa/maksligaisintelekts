@extends('layouts.app')

@section('content')
<section class="d-flex align-items-center page-hero  inner-page-hero " id="page-hero">
  <div class="overlay-photo-image-bg parallax" data-bg-img="assets/images/hero/inner-page-hero.jpg" data-bg-opacity="1"></div>
  <div class="overlay-color" data-bg-opacity=".75"></div>
  <div class="container">
    <div class="hero-text-area centerd">
      <h1 class="hero-title  wow fadeInUp" data-wow-delay=".2s">Kontakti </h1>
      <nav aria-label="breadcrumb ">
        <ul class="breadcrumb wow fadeInUp" data-wow-delay=".6s">
          <li class="breadcrumb-item"><a class="breadcrumb-link" href="{{ route('home.lv') }}"><i class="bi bi-house icon "></i>home</a></li>
          <li class="breadcrumb-item active">Kontakti</li>
        </ul>
      </nav>
    </div>
  </div>
</section>

<section class="locations mega-section" id="locations">
  <div class="container">
    <div class="sec-heading  centered ">
      <div class="content-area"><span class=" pre-title       wow fadeInUp " data-wow-delay=".2s">lokācijas</span>
        <h2 class=" title    wow fadeInUp" data-wow-delay=".4s">mūsu <span class='hollow-text'>lokācijas</span></h2>
        <p class="subtitle   wow fadeInUp " data-wow-delay=".6s">Lorem ipsum dolor sit amet consectetur adipisicing elit Omnis <br>id atque  dignissimos repellat quae ullam.</p>
      </div>
    </div>
    <div class="row locations-row">
      <div class="col-12 col-md-6 col-lg-4  location-box wow fadeInUp" data-wow-delay="0.2s">
        <div class="location-box-inner">
          <div class="location-icon"><i class="flaticon-location font-icon"></i></div>
          <div class="location-content">
            <h3 class="location-title">Alexandria</h3>
            <p class="location-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque repellendus minima reiciendis nobis dolore obcaecati.</p>
          </div>
          <div class="location-contact-info">
            <div class="contact-info-card"><i class="bi bi-envelope icon"></i><a class="text-lowercase  info" href="mailto:alexandria@support.com">alexandria@support.com</a></div>
            <div class="contact-info-card"><i class="bi bi-geo-alt icon"></i><span class="text-lowercase  info">5 Xyz st., Abc, alexandria, egypt.</span></div>
            <div class="contact-info-card"><i class="bi bi-phone icon"></i><a class="info" href="tel:+20123456789">+20123456789  </a></div>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-6 col-lg-4  location-box wow fadeInUp" data-wow-delay="0.4s">
        <div class="location-box-inner">
          <div class="location-icon"><i class="flaticon-location font-icon"></i></div>
          <div class="location-content">
            <h3 class="location-title">Cairo</h3>
            <p class="location-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque repellendus minima reiciendis nobis dolore obcaecati.</p>
          </div>
          <div class="location-contact-info">
            <div class="contact-info-card"><i class="bi bi-envelope icon"></i><a class="text-lowercase  info" href="mailto:cairo@support.com">cairo@support.com</a></div>
            <div class="contact-info-card"><i class="bi bi-geo-alt icon"></i><span class="text-lowercase  info">5 Xyz st., Abc, cairo, egypt.</span></div>
            <div class="contact-info-card"><i class="bi bi-phone icon"></i><a class="info" href="tel:+20123456789">+20123456789  </a></div>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-6 col-lg-4  location-box wow fadeInUp" data-wow-delay="0.6s">
        <div class="location-box-inner">
          <div class="location-icon"><i class="flaticon-location font-icon"></i></div>
          <div class="location-content">
            <h3 class="location-title">New York</h3>
            <p class="location-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque repellendus minima reiciendis nobis dolore obcaecati.</p>
          </div>
          <div class="location-contact-info">
            <div class="contact-info-card"><i class="bi bi-envelope icon"></i><a class="text-lowercase  info" href="mailto:newyork@support.com">newyork@support.com</a></div>
            <div class="contact-info-card"><i class="bi bi-geo-alt icon"></i><span class="text-lowercase  info">5 Xyz st., Abc, new york, USA.</span></div>
            <div class="contact-info-card"><i class="bi bi-phone icon"></i><a class="info" href="tel:+20123456789">+20123456789  </a></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="map-section mega-section" id="map-section">
  <div class="container">
    <div class="sec-heading  centered ">
      <div class="content-area"><span class=" pre-title       wow fadeInUp " data-wow-delay=".2s">karte</span>
        <h2 class=" title    wow fadeInUp" data-wow-delay=".4s">atrodi mūs <span class='hollow-text'>kartē</span></h2>
        <p class="subtitle   wow fadeInUp " data-wow-delay=".6s">Lorem ipsum dolor sit amet consectetur adipisicing elit Omnis <br>id atque  dignissimos repellat quae ullam.</p>
      </div>
    </div>
    <div class="map-wrapper wow fadeInUp" data-wow-delay="0.8s">
      <div class="map-container">
        <iframe class="map-iframe" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d317718.69319292053!2d-0.3817765050863085!3d51.528307984912544!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a00baf21de75%3A0x52963a5addd52a99!2sLondon%2C%20UK!5e0!3m2!1sen!2seg!4v1613762954590!5m2!1sen!2seg" loading="lazy"></iframe>
      </div>
    </div>
  </div>
</section>

<section class="contact-form-section mega-section" id="contact-form-section">
  <div class="container">
    <div class="sec-heading  centered ">
      <div class="content-area"><span class=" pre-title       wow fadeInUp " data-wow-delay=".2s">Kontakti</span>
        <h2 class=" title    wow fadeInUp" data-wow-delay=".4s">nosūti mums <span class='hollow-text'>ziņu</span></h2>
        <p class="subtitle   wow fadeInUp " data-wow-delay=".6s">Lorem ipsum dolor sit amet consectetur adipisicing elit Omnis <br>id atque  dignissimos repellat quae ullam.</p>
      </div>
    </div>
    <div class="contact-form-wrapper wow fadeInUp" data-wow-delay="0.8s">
      <form class="contact-form" action="#" method="post">
        <div class="row gx-4 gy-4">
          <div class="col-12 col-md-6">
            <div class="input-group">
              <label class="form-label" for="name">Vārds</label>
              <input class="form-input" type="text" name="name" id="name" placeholder="Jūsu vārds" required="required">
            </div>
          </div>
          <div class="col-12 col-md-6">
            <div class="input-group">
              <label class="form-label" for="email">E-pasts</label>
              <input class="form-input" type="email" name="email" id="email" placeholder="Jūsu e-pasts" required="required">
            </div>
          </div>
          <div class="col-12 col-md-6">
            <div class="input-group">
              <label class="form-label" for="phone">Tālrunis</label>
              <input class="form-input" type="tel" name="phone" id="phone" placeholder="Jūsu tālrunis" required="required">
            </div>
          </div>
          <div class="col-12 col-md-6">
            <div class="input-group">
              <label class="form-label" for="subject">Temats</label>
              <input class="form-input" type="text" name="subject" id="subject" placeholder="Jūsu temats" required="required">
            </div>
          </div>
          <div class="col-12">
            <div class="input-group">
              <label class="form-label" for="message">Ziņa</label>
              <textarea class="form-textarea" name="message" id="message" rows="5" placeholder="Jūsu ziņa" required="required"></textarea>
            </div>
          </div>
          <div class="col-12">
            <div class="form-submit-btn">
              <button class="btn-solid" type="submit">Nosūtīt ziņu</button>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</section>
@endsection