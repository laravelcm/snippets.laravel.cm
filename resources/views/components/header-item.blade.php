@isset($link)
    <a
        href="{{ $link }}"
        @isset($blank) target="_blank" @endisset
        {{ $attributes->merge(['class' => 'inline-flex items-center md:w-full px-4 py-2 border border-transparent shadow-sm text-sm font-medium rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2']) }}
    >
        @svg($icon, '-ml-0.5 mr-2 h-5 w-5')
        {{ $label }}
    </a>
@else
    <button type="{{ $type }}" {{ $attributes->merge(['class' => 'inline-flex items-center md:w-full px-4 py-2 border border-transparent shadow-sm text-sm font-medium rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2']) }}>
        @svg($icon, '-ml-0.5 mr-2 h-4 w-4')
        {{ $label }}
    </button>
@endisset
