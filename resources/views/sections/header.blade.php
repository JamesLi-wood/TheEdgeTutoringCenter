<!-- Desktop Header -->
<header class="hidden h-16 flex-row items-center justify-between bg-blue-500 px-16 md:flex">
  <img src="" alt="Company Logo" />
  @if (has_nav_menu('primary_navigation'))
    <nav id="desktop-nav" class="flex h-full items-center">
      <ul class="flex h-full gap-6">
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
</header>

<!-- Mobile Header -->
<header class="flex h-16 flex-row items-center justify-center bg-blue-500 px-16 md:hidden">
  <img src="" alt="Company Logo" />
  <div id="sidebar-contents" class="absolute bottom-0 left-0 right-0 top-0 mt-10 flex flex-row transition-transform duration-500">
    @if (has_nav_menu('primary_navigation'))
    <nav id="mobile-nav" class="flex w-4/5 flex-col items-center bg-blue-800">
      <ul class="mt-7 flex w-4/5 flex-col gap-4 border border-l-0 border-r-0 border-white py-5">
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
    <button id="sidebar-button"></button>
  </div>
</header>

<script>
  document.getElementById("sidebar-button").addEventListener("click", function() {
    document.getElementById("sidebar-contents").classList.toggle("hidden-content");
  });
</script>