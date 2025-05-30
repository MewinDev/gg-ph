@props([
  'color' => 'blue',
  'disabled' => false,
  'extraClass' => '',
  'options' => [], // Array of options for the select input
  'value' => '',
  'label' => 'Here',
])

@php
  $classes = "mt-1 disabled:cursor-not-allowed disabled:opacity-50 border border-$color-300 text-gray-900 placeholder-$color-700 text-sm rounded-lg focus:ring-$color-500 bg-gray-50 dark:bg-gray-700 focus:border-$color-500 block w-full p-2.5 dark:text-white dark:placeholder-$color-500 dark:border-$color-600";

  $finalClasses = "$classes $extraClass";
@endphp

<select {{ $attributes }} @if($disabled) disabled @endif class="{{ $finalClasses }}">
  <option value="">Select {{ $label }}</option>
  @foreach ($options as $key => $name)
    <option value="{{ $key }}" @if($value == $key) selected @endif>
      {{ ucfirst($name) }}
    </option>
  @endforeach
</select>
