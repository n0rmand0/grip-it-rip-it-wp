@php($image = get_field('hero_image') )
<header class="hero" style="background-image: url({{$image['url']}})">

</header>
<div class="hero__title">
  <h1>@php(the_title())</h1>
</div>

<div class="l-section">

  <div class="l-container">

  @if ( have_rows('section') )

    @php
      while ( have_rows('section') ) : the_row();
    @endphp
      <div class="flip-split">
        <div class="flip-split__content">
          {{the_sub_field('section_content')}}
        </div>

        <div class="flip-split__image">
          @php($image = get_sub_field('section_image') )
          <img src="{{$image['url']}}" alt="{{$image['alt']}}">
        </div>
      </div>

    @php
     endwhile;
    @endphp

  @endif


  </div>
</div>
