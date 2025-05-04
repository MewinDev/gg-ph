@props([
  'color' => 'blue',
  'disabled' => false,
  'extraClass' => '',
])

@php

  $classes = "mt-1 block w-full text-sm text-gray-900 border border-$color-300 rounded-md cursor-pointer bg-$color-50 dark:text-gray-400 focus:outline-none dark:bg-$color-700 dark:border-gray-600 dark:placeholder-$color-400";

  $finalClasses = "$classes $extraClass";

@endphp

<input {{ $attributes }} @if($disabled) disabled @endif class="{{ $finalClasses }}" />
