<header class="hero hero--tall">

<div class="showcase-container">
  <div class="showcase">
      <div class="showcase__box"><div class="showcase__image"></div></div>
      <div class="showcase__bg"></div>

      <div class="showcase__box"><div class="showcase__image"></div></div>
      <div class="showcase__box"><div class="showcase__image"></div></div>
      <div class="showcase__bg"></div>
  </div>
</div>
</header>

<div class="l-section">
  <div class="l-container l-pad">
    <div class="l-full">
      <h1>@php( the_field('main_headline') )</h1>
      <div class="l-2-column">
        @php( the_field('main_content') )
      </div>
    </div>
  </div>

  <div class="callout-bg"></div>
  <div class="l-container callout-container">
    <div class="callout">
      <div class="callout__box">
        @php($image = get_field('callout_1_image') )
        <div class="callout__box__image" style="background-image: url({{$image['url']}})"></div>
      </div>
      <div class="callout__content">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, <em>quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</em></p>
      </div>
    </div>
    <div class="callout">
      <div class="callout__box">
        @php($image = get_field('callout_2_image') )
        <div class="callout__box__image" style="background-image: url({{$image['url']}})"></div>
      </div>
      <div class="callout__content">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, <em>quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</em></p>
      </div>
    </div>
    <div class="callout">
      <div class="callout__box">
        @php($image = get_field('callout_3_image') )
        <div class="callout__box__image" style="background-image: url({{$image['url']}})"></div>

      </div>
      <div class="callout__content">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, <em>quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</em></p>
      </div>
    </div>
  </div>
</div>
