@php
  // Company Logo
  $image = wp_get_attachment_image_src(343);
@endphp

<footer id="footer" class="items-center bg-blue-500 px-16 py-4 border">
  <a href="{{ home_url('/homepage') }}">
    <img src={{ $image[0] }} alt="Company Logo" class="a h-32 object-contain" />
  </a>
  
  @if (has_nav_menu('primary_navigation'))
    <nav class="b mx-3 flex justify-center">
      <ul class="flex flex-row flex-wrap gap-4">
        {!! wp_nav_menu([
          'theme_location' => 'primary_navigation',
          'container' => null,
          'echo' => false,
          'items_wrap' => '%3$s',
          'walker' => new Nav_Walker
        ]) !!}
      </ul>
    </nav>
  @endif

  <div class="c flex flex-col justify-self-end">
    <div>(718) 836-3343</div>
    <div>9008 5th Ave</div>
    <div>NY 11209</div>
  </div>
</footer>