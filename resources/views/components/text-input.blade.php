@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-300 focus:border-red-700 focus:ring-red-700 rounded-md shadow-sm']) !!}>
