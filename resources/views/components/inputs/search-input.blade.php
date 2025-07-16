@props([
    
    'placeholder' => '',
])

<div>
    <input 
        {{$attributes}}
        type="text" 
        placeholder="{{$placeholder}}"
        class="w-full pl-10 pr-4 py-3 border border-gray-200 rounded-lg shadow-sm bg-white
            placeholder-gray-400 text-gray-700 focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-teal-500 
            text-sm transition-all duration-200"
    />
    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
        <svg class="h-4 w-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
        </svg>
    </div>
</div>