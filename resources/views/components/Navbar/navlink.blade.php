<a {{ $attributes }}
  class="{{ request()->fullUrlIs(url($href)) ? 'bg-gray-800/55 text-white' : 'text-white/60 hover:text-white hover:bg-sky-950/20 ' }} item-list rounded-full px-3 py-2.5">
  {{ $slot }}
</a>
