@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-sm text-gray-700 dark:text-gray-300 mb-3 px-4']) }}>
    {{ $value ?? $slot }}
</label>
