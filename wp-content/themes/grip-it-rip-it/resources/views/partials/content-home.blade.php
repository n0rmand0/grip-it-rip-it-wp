<header class="hero hero--tall">

<div class="showcase-container">
  <div class="showcase">
      <div class="showcase__box">
        @php($image = get_field('showcase_image1') )
        <div class="showcase__image" style="background-image: url({{$image['url']}})"></div>
      </div>
      <div class="showcase__bg"></div>

      <div class="showcase__box">
        @php($image = get_field('showcase_image2') )
        <div class="showcase__image" style="background-image: url({{$image['url']}})"></div>
      </div>
      <div class="showcase__box">
        @php($image = get_field('showcase_image3') ) 
        <div class="showcase__image" style="background-image: url({{$image['url']}})"></div>
      </div>
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
        @php($image = get_field('course_design_image') )
        <div class="callout__box__image" style="background-image: url({{$image['url']}})"></div>
      </div>
      <div class="callout__content">
        <h3>Course Design</h3>
        {{the_field('course_design_content')}}
        <a href="/course-design" class="button">Learn more</a>
      </div>
    </div>
    <div class="callout">
      <div class="callout__box">
        @php($image = get_field('events_image') )
        <div class="callout__box__image" style="background-image: url({{$image['url']}})"></div>
      </div>
      <div class="callout__content">
        <h3>Events</h3>
        {{the_field('events_content')}}
        <a href="/events" class="button">Learn more</a>

      </div>
    </div>
    <div class="callout">
      <div class="callout__box">
        @php($image = get_field('instruction_image') )
        <div class="callout__box__image" style="background-image: url({{$image['url']}})"></div>
      </div>
      <div class="callout__content">
        <h3>Instruction</h3>
        {{the_field('instruction_content')}}
        <a href="/instruction" class="button">Learn more</a>

      </div>
    </div>
  </div>
</div>
