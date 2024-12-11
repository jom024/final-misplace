@props(['type' => 'text'])

<input type="{{$type}}"
                    {{$attributes->merge(["class" => "bg-white text-sm rounded-full block w-4/6 outline outline-1 outline-gray-600 px-4 py-2"])}}>