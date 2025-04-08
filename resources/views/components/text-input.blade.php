@props(['disabled' => false])

@php
    $model = $attributes->get('wire:model');
    $baseClasses = 'block w-full p-2 mt-1 border rounded-md shadow-sm focus:border-blue-900 sm:text-sm';

    if ($model) {
        $borderClass = $errors->has($model) ? 'border-red-900' : 'border-gray-300';
        $baseClasses .= ' ' . $borderClass;
    } else {
        $baseClasses .= ' border-gray-300';
    }
@endphp

<input @disabled($disabled) {{ $attributes->merge(['class' => $baseClasses]) }}>
