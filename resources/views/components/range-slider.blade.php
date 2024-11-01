<div
    x-data='LivewireRangeSlider({
        options: {!! json_encode($options) !!},
        models: {!! json_encode($getWireModel($attributes)) !!},
        modifier: "{{ $getWireModelModifier($attributes) }}"
    })'
    @focusout="getValue"
    {{ $attributes }}
    wire:ignore
>
    <div x-ref="range"></div>
    {{ $slot }}
</div>