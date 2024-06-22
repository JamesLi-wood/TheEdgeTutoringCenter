{{--
  Title: Parallax Image
  Description: Displays parallax image. Make sure to use a wide image.
  Category: formatting
  Icon: admin-comments
  Keywords: testimonial quote
  Mode: edit
  PostTypes: page post
--}}

@php
  $image = get_field('image');
@endphp

<blockquote data-{{ $block['id'] }}>
  <div class="parallax"></div>
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