{{--
  Title: Homepage Grid
  Description: Displays a 3 row grid with images and text
  Category: formatting
  Icon: admin-comments
  Keywords: testimonial quote
  Mode: edit
  PostTypes: page post
--}}

@php
  $grid = get_field('grid');
@endphp

<blockquote data-{{ $block['id'] }}>
  <div class="grid-container mx-16 my-6 grid grid-cols-3 gap-5 bg-blue-500 p-10">
    @foreach ($grid as $item)
      <div class="grid-item">
        <img src="{{ $item['image']['url'] }}" alt="Grid Image">
        <p class="px-6 py-3 text-center">{{ $item['description'] }}</p>
      </div>
    @endforeach
  </div> 
</blockquote>

<style>
  .grid-item {
    background-color: black;
  }
  
  .grid-item > img {
    aspect-ratio: 1 / 1;
    object-fit: cover;
  }
  
  .grid-item > p {
    font-size: clamp(1.1rem, 2vw, 1.4rem);
  }
  
  @media (max-width: 820px) {
    .grid-container {
      grid-template-columns: repeat(2, minmax(0, 1fr));
    }
  }
  
  @media (max-width: 600px) {
    .grid-container {
      grid-template-columns: repeat(1, minmax(0, 1fr));
      margin: 0;
      padding: 0 1.25rem 2.5rem 1.25rem;
    }
  }
</style>
  