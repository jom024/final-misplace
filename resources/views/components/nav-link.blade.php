@props(['ref' => '#'])
<a {{ $attributes->merge(['class' => (request()->is($ref)) 
? 'text-md font-semibold nav-link bg-teal-900 rounded-lg text-white'
:'text-md font-semibold nav-link hover:bg-green-200 rounded-lg'])}}>
    {{ $slot }}
</a>
