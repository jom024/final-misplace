@props(['formtype' => 'button'])


<{{$formtype}} {{$attributes->merge(['class' => 'primary-bg secondary-color rounded-full p-2 sm:px-4 sm:py-2 hover:accent-bg hover:secondary-color'])}}>
    {{$slot}}
</{{$formtype}}>