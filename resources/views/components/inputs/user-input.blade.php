@props(['type' => '',
        'id' => '',
        'value' => '',
        'placeholder' => '',
        'required' => true,
        'autocomplete' => null])

<input
        {{ $attributes }}
        class="w-full px-3 py-3 sm:py-2 border border-gray-300 rounded-md shadow-sm 
        placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-gym-secondary focus:border-gym-secondary text-sm sm:text-base"
        type="{{ $type }}"
        id="{{ $id }}"
        value="{{ $value }}"
        placeholder="{{ $placeholder }}"
        @if ($required) required @endif
        @if ($autocomplete) autocomplete="{{ $autocomplete }}" @endif
/>