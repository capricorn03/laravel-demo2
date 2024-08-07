@props(['active' => false])
<!-- props and $attributes are diffrents that why we use $attributes & props both in the component -->
<!-- we can also write the php code inside the blade component like this
@php
   $active = false
@endphp -->


<a class="{{ $active ? 'bg-gray-900 text-white': 'text-gray-300 hover:bg-gray-700 hover:text-white'}} rounded-md px-3 py-2 text-sm font-medium"
   aria-current="{{ $active ? 'page': 'false' }}"
   {{ $attributes }}
>{{ $slot }}</a>


