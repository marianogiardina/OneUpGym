@props(['href'])

{{-- Button component for custom styling --}}

<a href="{{$href}}" {{ $attributes->merge(['class' => 'px-4 py-2 rounded text-white bg-blue-500 font-medium rounded-lg text-sm px-5 py-2.5  focus:outline-none']) }}>
    {{$slot}}
</a>
