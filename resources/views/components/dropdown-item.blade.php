@php

$class = 'block text-left px-3 text-sm leading-6 hover:bg-blue-500 focus:bg-blue-500 hover:text-white focus:text-white';
@endphp
{{-- {{ $active ? ($class .= $active) : $class }} --}}
<a href={{ $href }} class="{{ $class }}">{{ $slot }}</a>
