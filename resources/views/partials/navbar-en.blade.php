<header class=" page-header {{ str_contains($headerClass ?? '', 'inner-page-header') ? '' : 'content-always-light' }} header-basic {{ $headerClass ?? '' }}" id="page-header">
  <div class="header-search-box">
    <div class="close-search"></div>
  </div>
  <div class="container">
    <nav class="menu-navbar">
      <div class="header-logo">
        <a class="logo-link" href="{{ route('home.en') }}">
          <img class="logo-img light-logo" loading="lazy" src="{{ asset('assets/images/logo/logo-light.png') }}" alt="logo"/>
          <img class="logo-img  dark-logo" loading="lazy" src="{{ asset('assets/images/logo/logo-dark.png') }}" alt="logo"/>
        </a>
      </div>
      <div class="links menu-wrapper ">
        <ul class="list-js links-list">
          <li class="menu-item">
            <a class="menu-link {{ request()->routeIs('home.en') ? 'active' : '' }}" href="{{ route('home.en') }}">Home</a>
          </li>
          <li class="menu-item">
            <a class="menu-link {{ request()->routeIs('services.en') ? 'active' : '' }}" href="{{ route('services.en') }}">AI Services</a>
          </li>
          <li class="menu-item">
            <a class="menu-link {{ request()->routeIs('blog.en') ? 'active' : '' }}" href="{{ route('blog.en') }}">AI News</a>
          </li>
          <li class="menu-item">
            <a class="menu-link {{ request()->routeIs('development.en') ? 'active' : '' }}" href="{{ route('development.en') }}">AI Development</a>
          </li>
          <li class="menu-item">
            <a class="menu-link {{ request()->routeIs('contact.en') ? 'active' : '' }}" href="{{ route('contact.en') }}">Contacts</a>
          </li>
        </ul>
      </div>
      <div class="controls-box">
        <div class="control  menu-toggler"><span></span><span></span><span></span></div>
        @include('partials.language-switcher')
        <div class="mode-switcher ">
          <div class="switch-inner go-light " title="Switch To Light Mode "><i class="bi bi-sun icon "></i></div>
          <div class="switch-inner go-dark" title="Switch To Dark Mode "><i class="bi bi-moon icon "></i></div>
        </div>
      </div>
    </nav>
  </div>
</header>
