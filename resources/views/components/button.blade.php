@if (!isset($to))
    <button {{ $attributes->merge(['class' => 'btn']) }}>

        {{ $slot }}
        
    </button>
@else
    <a href="{{ $to }}" {{ $attributes->merge(['class' => 'btn']) }}>

        {{ $slot }}
        
    </a>
@endif