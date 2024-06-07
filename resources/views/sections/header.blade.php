<header id="header" class="flex min-h-16 flex-row items-center justify-between bg-blue-500 px-16">
  <img src="" alt="Company Logo" />
  <div id="sidebar-contents" class="w-full">
    @if (has_nav_menu('primary_navigation'))
      <nav id="nav">
        <ul class="flex flex-row flex-wrap justify-end gap-3">
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

    <button id="sidebar-button" class="hidden"></button>
  </div>
</header>

<script>
  document.getElementById("sidebar-button").addEventListener("click", function() {
    document.getElementById("sidebar-contents").classList.toggle("hidden-content");
  });
</script>

