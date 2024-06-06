<footer id="footer" class="relative flex flex-row items-center justify-between bg-blue-500 px-16 py-4">
  <nav class="absolute left-0 right-0 ml-auto mr-auto flex w-2/5 justify-center">
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
  <div class="flex w-full flex-row items-center justify-between">
    <img src="" alt="Company Logo" />
    <div>
      <div>(123)-456-7890</div>
      <div>123 STATE ST</div>
      <div>ST ZIP-CODE</div>
    </div>
  </div>
</footer>