@props(['active'=> false])


<div class="flex">
    <a  class="{{ $active ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}  block rounded-md  px-3 py-2 text-sm font-medium text-white"
    aria-current="{{ $active ? 'page' : 'false'}}"
    {{ $attributes}}
    >{{ $slot }}</a>
</div>