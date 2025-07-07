@props(['active' => false])

<a {{ $attributes }}
    class="{{ $active ? 'bg-yellow-500 text-sm text-white shadow' : 'text-gray-900 hover:bg-yellow-500 hover:text-white text-sm leading-6 font-semibold' }} rounded-md px-3 py-1 text-sm font-semibold"
    aria-current="{{ $active ? 'page' : false }}">{{ $slot }}</a>
