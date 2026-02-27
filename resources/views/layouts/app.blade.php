<!DOCTYPE html>
<html lang="lv">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="description" content="IT Solutions &amp; Business Services Responsive Website">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="icon" href="{{ asset('assets/images/fav-icon/fav-icon.png') }}">

    <link rel="stylesheet" href="{{ asset('css/vendors/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vendors/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vendors/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vendors/flaticon/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vendors/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vendors/bootstrap-icons-1.9.1/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vendors/jquery.fancybox.min.css') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600;700;800&family=Inter:wght@400;500;600;700&display=swap">

  <link rel="stylesheet" href="{{ asset('css/main-LTR.css') }}">
  <link rel="stylesheet" href="{{ asset('css/fix-spacing.css') }}">

    <title>@yield('title', config('app.name', 'Flex-it'))</title>
  </head>
  <body class=" dark-theme ">

    @include('partials.navbar', ['headerClass' => trim($__env->yieldContent('headerClass')) ?: null])

    @yield('content')

    @include('partials.footer')

    <div class="loading-screen" id="loading-screen"><span class="bar top-bar"></span><span class="bar down-bar"></span><span class="progress-line"></span><span class="loading-counter"> </span></div>
    <div class="back-to-top" id="back-to-top"><i class="bi bi-arrow-up icon "></i>
    </div>
    <div class="modal privacy-policy-modal fade" id="privacyPolicyModal" aria-labelledby="PrivacyPolicyModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable modal-xl ">
        <div class="modal-content text-dark">
          <div class="modal-header">
            <h2 class="modal-title" id="PrivacyPolicyModalLabel">Privacy Policy Modal Title</h2>
            <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="content">
              <h4>privacy policy item Title goes here </h4>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores saepe, labore sequi libero nesciunt optio quidem iste, dolorum nostrum ex at. Recusandae ducimus aut autem temporibus tempore rerum, consequuntur doloribus perspiciatis, labore totam dolorem veritatis repellendus omnis illo sint ut?</p>
            </div>
            <div class="content">
              <h4>privacy policy item Title goes here </h4>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores saepe, labore sequi libero nesciunt optio quidem iste, dolorum nostrum ex at. Recusandae ducimus aut autem temporibus tempore rerum, consequuntur doloribus perspiciatis, labore totam dolorem veritatis repellendus omnis illo sint ut?</p>
            </div>
            <div class="content">
              <h4>privacy policy item Title goes here </h4>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores saepe, labore sequi libero nesciunt optio quidem iste, dolorum nostrum ex at. Recusandae ducimus aut autem temporibus tempore rerum, consequuntur doloribus perspiciatis, labore totam dolorem veritatis repellendus omnis illo sint ut?</p>
            </div>
            <div class="content">
              <h4>privacy policy item Title goes here </h4>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores saepe, labore sequi libero nesciunt optio quidem iste, dolorum nostrum ex at. Recusandae ducimus aut autem temporibus tempore rerum, consequuntur doloribus perspiciatis, labore totam dolorem veritatis repellendus omnis illo sint ut?</p>
            </div>
            <div class="content">
              <h4>privacy policy item Title goes here </h4>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores saepe, labore sequi libero nesciunt optio quidem iste, dolorum nostrum ex at. Recusandae ducimus aut autem temporibus tempore rerum, consequuntur doloribus perspiciatis, labore totam dolorem veritatis repellendus omnis illo sint ut?</p>
            </div>
            <div class="content">
              <h4>privacy policy item Title goes here </h4>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores saepe, labore sequi libero nesciunt optio quidem iste, dolorum nostrum ex at. Recusandae ducimus aut autem temporibus tempore rerum, consequuntur doloribus perspiciatis, labore totam dolorem veritatis repellendus omnis illo sint ut?</p>
            </div>
          </div>
          <div class="modal-footer">
            <button class="btn-solid" type="button" data-bs-dismiss="modal" aria-label="Close">Click to close</button>
            <button class="btn-outline" type="button">Do somthing else</button>
          </div>
        </div>
      </div>
    </div>

    <script src="{{ asset('js/vendors/jquery-3.6.1.min.js') }}"></script>
    <script src="{{ asset('js/vendors/appear.min.js') }}"></script>
    <script src="{{ asset('js/vendors/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/vendors/jquery.countTo.js') }}"></script>
    <script src="{{ asset('js/vendors/wow.min.js') }}"></script>
    <script src="{{ asset('js/vendors/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('js/vendors/particles.min.js') }}"></script>
    <script src="{{ asset('js/vendors/vanilla-tilt.min.js') }}"></script>
    <script src="{{ asset('js/vendors/isotope-min.js') }}"></script>
    <script src="{{ asset('js/vendors/jquery.fancybox.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>

  </body>
</html>
