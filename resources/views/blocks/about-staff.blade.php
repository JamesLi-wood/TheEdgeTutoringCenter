{{--
  Title: About Staff
  Description: Displays information about staff members.
  Category: formatting
  Icon: admin-comments
  Keywords: testimonial quote
  Mode: edit
  PostTypes: page post
--}}

@php
  $staff = get_field("staff");
@endphp

<blockquote data-{{ $block['id'] }}>
  <div class="carousel m-auto my-8 w-4/5 bg-blue-500 p-5">
    @foreach ($staff as $item)
      <div class="carousel-contents flex flex-row">
        <img src={{ $item["picture"]["url"] }} alt="Staff Image" class="mr-5">
        
        <div>
          <p>{{ $item["description"] }}</p>

          <p class="mt-4">
            <span class="border-b">Skills</span><br>
            @foreach ($item["skills"] as $skill)
              {{ $skill["subject"] }}
            @endforeach
          </p>
        </div>
      </div>
    @endforeach
  </div>
</blockquote>

<style>
  .carousel-contents {
    display: flex !important;
  }
  
  .carousel-contents > img {
    width: 30%;
    object-fit: contain;
    aspect-ratio: 1 / 1;
  }

  @media (max-width: 800px) {
    .carousel {
      width: 100%;
      margin: auto;
    }

    .carousel-contents {
      align-items: center;
      flex-direction: column;
    }

    .carousel-contents > img {
      margin: auto;
      aspect-ratio: auto;
      margin-bottom: 1rem;
    }

    .carousel-contents > div > p {
      text-align: center;
    }
  }
</style>

<script>
  $(document).ready(function () {
    $('.carousel').slick();
  });
</script>