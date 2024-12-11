@props(['formtype' => 'button'])

<{{ $formtype }} {{$attributes->merge(['class' => 'primary-color outline outline-1 outline-gray-600 rounded-full p-2 sm:px-4 sm:py-2 hover:accent-bg hover:secondary-color'])}}>
    {{$slot}}
</{{$formtype}}>