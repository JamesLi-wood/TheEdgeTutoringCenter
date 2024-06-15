{{--
  Title: Homepage Hero
  Description: Displays a description and images that alternate.
  Category: formatting
  Icon: admin-comments
  Keywords: testimonial quote
  Mode: edit
  PostTypes: page post
--}}

@php
  $description = get_field('description');
  $gallery = get_field('gallery');
@endphp

<blockquote data-{{ $block['id'] }}>
  <div class="hero mx-16 my-8 flex flex-row items-center gap-5 bg-blue-500 p-10">
    <p class="w-full text-center">{{ $description }}</p>
   
    <div class="img-alternate">
      @foreach ($gallery as $item)
        <img src="{{ $item['url'] }}" alt="Alternating Images">
      @endforeach
    </div>
  </div>
</blockquote>

<style>
  .hero > p {
    font-size: clamp(1.2rem, 1.5vw, 2rem);
  }

  .img-alternate {
    height: 20rem;
    width: clamp(25rem, 40%, 60%);
  }

  .img-alternate img {
    height: 20rem !important;
    object-fit: contain;
  }

  @media (max-width: 800px) {
    .hero {
      margin: 0;
      width: 100%;
      flex-direction: column-reverse;
    }

    .hero > p {
      text-align: initial;
    }
  }
</style>

<script>
  $(document).ready(function () {
    $('.img-alternate').slick({
      autoplay: true, 
      autoplaySpeed: 2000, 
      fade: true, 
      speed: 500,
      cssEase: 'linear',
      swipe: false,
      pauseOnHover: false,
      pauseOnFocus: false, 
      prevArrow:'',
      nextArrow: '', 
    });
  });
</script>