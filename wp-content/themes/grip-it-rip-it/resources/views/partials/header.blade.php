<header class="site-header">
  <div class="site-header__container">
    <a class="brand" href="{{ home_url('/') }}">
      <img src="/wp-content/themes/grip-it-rip-it/resources/assets/images/header-logo.png" alt="Grip It Rip It Logo" class="site-header__logo">
    </a>
    <nav class="nav-primary">
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
      @endif
    </nav>

    <a href="#footer-nav" class="nav-primary-toggle"><i class="fas fa-bars nav-primary-toggle"></i></a>
  </div>
</header>
