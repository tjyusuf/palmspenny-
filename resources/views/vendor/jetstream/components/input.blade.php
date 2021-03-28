@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-200 focus:border-primary-light focus:ring focus:ring-gray-50 focus:ring-opacity-50 rounded-md shadow-sm']) !!}>
