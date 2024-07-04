{{--
  Title: Contact Us
  Description: Displays contact information as well as a map of company location.
  Category: formatting
  Icon: admin-comments
  Keywords: testimonial quote
  Mode: edit
  PostTypes: page post
--}}

@php
  $location = get_field("location");
  $email = get_field("email");
  $number = get_field("number");
@endphp

<blockquote data-{{ $block['id'] }}>
  <div class="contact-info mx-16 my-6 flex flex-row bg-blue-500">
    <iframe src={{ $location }} width="50%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    <div class="flex w-1/2 flex-col items-center justify-evenly">
      @if ($email)
        <div class="text-center">
          <p class="clamp mb-1 border-b-2">EMAIL</p>
          <p class="clamp">{{ $email }}</p>
        </div>  
      @endif
      
      @if ($number)
        <div class="text-center">
          <p class="clamp mb-1 border-b-2">PHONE NUMBER</p>
          <p class="clamp">{{ $number }}</p>
        </div>  
      @endif
    </div>
  </div>
</blockquote>

<style>
  @media (max-width: 800px) {
    .contact-info {
      flex-direction: column-reverse;
      margin: 0;
    }

    .contact-info > iframe {
      width: 100%;
    }

    .contact-info > div {
      flex-direction: row;
      width: 100%;
      padding: 3rem 0 3rem 0;
    }
  }
</style>