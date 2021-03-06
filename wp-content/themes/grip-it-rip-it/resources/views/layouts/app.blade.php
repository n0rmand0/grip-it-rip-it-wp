<!doctype html>
<html @php(language_attributes())>
  @include('partials.head')
  <body @php(body_class())>
    @php(do_action('get_header'))
    @include('partials.header')

    @yield('content')
    {{-- @if (App\display_sidebar())
      <aside class="sidebar">
        @include('partials.sidebar')
      </aside>
    @endif --}}

    @php(do_action('get_footer'))
    @include('partials.footer')
    @php(wp_footer())

    <div class="contact-us">
      <div class="contact-us__overlay">
        <i class="fas fa-times contact-us__close"></i>
        <h2>Contact Us</h2>
        @php
          echo do_shortcode('[wpforms id="111" title="false" description="false"]');
        @endphp
      </div>
    </div>

  </body>
</html>
