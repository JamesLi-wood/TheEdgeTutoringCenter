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
      <div class="carousel-contents">
        <img src={{ $item["picture"]["url"] }} alt="Staff Image" class="mr-5 self-start object-contain">
        
        <div>
          <p class="clamp">{{ $item["description"] }}</p>

          <p class="clamp mt-4">
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
    flex-direction: row;
  }
  
  .carousel-contents > img {
    width: 30%;
    aspect-ratio: 1 / 1;
  }

  .slick-arrow {
    background-color: red !important;
    height: 40px;
    width: 40px;
  }

  .slick-prev {
    margin-left: -30px;
    border-radius: 15px 25px 15px 25px;
  }

  .slick-prev::before {
    content: "🡨";
  }

  .slick-next {
    margin-right: -30px;
    border-radius: 25px 15px 25px 15px;
  }

  .slick-next::before {
    content: "🡪";
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

    .slick-arrow {
      display: none !important;
    }
  }
</style>

<script>
  $(document).ready(function () {
    $('.carousel').slick();
  });
</script>