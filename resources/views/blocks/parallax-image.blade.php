{{--
  Title: Parallax Image
  Description: Displays a parallax image along with an optional text at the middle.
  Category: formatting
  Icon: admin-comments
  Keywords: testimonial quote
  Mode: edit
  PostTypes: page post
--}}

@php
  $image = get_field('image');
  $title = get_field("title");
@endphp

<blockquote data-{{ $block['id'] }}>
  <div class="parallax flex w-full items-center justify-center">
    @if ($title)
      <p class="clamp bg-black p-3 font-bold">{{ $title }}</p>  
    @endif
  </div>
</blockquote>

<style>
  .parallax {
    background-image : url({{ $image['url'] }});
    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
    background-attachment: fixed;
    height: 30rem;
  }
</style>