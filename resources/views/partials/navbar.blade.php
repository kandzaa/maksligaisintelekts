<header class=" page-header {{ str_contains($headerClass ?? '', 'inner-page-header') ? '' : 'content-always-light' }} header-basic {{ $headerClass ?? '' }}" id="page-header">
  <div class="header-search-box">
    <div class="close-search"></div>
    <form class="nav-search search-form" role="search" method="get" action="#">
      <div class="search-wrapper">
        <label class="search-lbl">Search for:</label>
        <input class="search-input" type="search" placeholder="Search..." name="searchInput" autofocus="autofocus"/>
        <button class="search-btn" type="submit"><i class="bi bi-search icon"></i></button>
      </div>
    </form>
  </div>
  <div class="container">
    <nav class="menu-navbar">
      <div class="header-logo">
        <a class="logo-link" href="{{ route('home.lv') }}">
          <img class="logo-img light-logo" loading="lazy" src="{{ asset('assets/images/logo/logo-light.png') }}" alt="logo"/>
          <img class="logo-img  dark-logo" loading="lazy" src="{{ asset('assets/images/logo/logo-dark.png') }}" alt="logo"/>
        </a>
      </div>
      <div class="links menu-wrapper ">
        <ul class="list-js links-list">
          <li class="menu-item">
            <a class="menu-link {{ request()->routeIs('home.lv') ? 'active' : '' }}" href="{{ route('home.lv') }}">Sākums</a>
          </li>
          <li class="menu-item">
            <a class="menu-link {{ request()->routeIs('services.lv') ? 'active' : '' }}" href="{{ route('services.lv') }}">MI Pielietojums</a>
          </li>
          <li class="menu-item">
            <a class="menu-link {{ request()->routeIs('blog.lv') ? 'active' : '' }}" href="{{ route('blog.lv') }}">MI ziņas vai jaunumi</a>
          </li>
          <li class="menu-item">
            <a class="menu-link {{ request()->routeIs('development.lv') ? 'active' : '' }}" href="{{ route('development.lv') }}">MI Izstrāde</a>
          </li>
          <li class="menu-item">
            <a class="menu-link {{ request()->routeIs('contact.lv') ? 'active' : '' }}" href="{{ route('contact.lv') }}">Kontakti</a>
          </li>
        </ul>
      </div>
      <div class="controls-box">
        <div class="control  menu-toggler"><span></span><span></span><span></span></div>
        <div class="control header-search-btn"><i class="bi bi-search icon"></i></div>
        @include('partials.language-switcher')
        <div class="mode-switcher ">
          <div class="switch-inner go-light " title="Switch To Light Mode "><i class="bi bi-sun icon "></i></div>
          <div class="switch-inner go-dark" title="Switch To Dark Mode "><i class="bi bi-moon icon "></i></div>
        </div>
      </div>
    </nav>
  </div>
</header>
