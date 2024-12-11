@props(['ref' => '/'])

<a {{$attributes->merge(['class' => (request()->is($ref)) 
? 'block rounded-md px-3 py-2 text-base font-medium bg-teal-900 text-teal-100' 
: 'block rounded-md px-3 py-2 text-base font-medium text-teal-900 hover:bg-gray-400 hover:text-teal-100'])}}>
    {{$slot}}
</a>
