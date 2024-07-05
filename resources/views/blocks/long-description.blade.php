{{--
  Title: Long Description
  Description: Display descriptions that has up to 3 sections.
  Category: formatting
  Icon: admin-comments
  Keywords: testimonial quote
  Mode: edit
  PostTypes: page post
--}}

@php
 $descriptions = get_field("descriptions");
@endphp

<blockquote data-{{ $block['id'] }}>
  <div class="flex flex-col bg-blue-500 p-6">
    <div class="flex justify-between">
      @for ($i = 0; $i <= 1; $i++)
        @if (isset($descriptions[$i]))
          <p class="border-2 p-3 clamp">{{$descriptions[$i]["text"]}}</p> 
        @endif
      @endfor
    </div>
    
    @if (isset($descriptions[2]))
      <div class="self-center">
        <p class="p-3 clamp">{{$descriptions[2]["text"]}}</p>
      </div>
    @endif
  </div>
</blockquote>
