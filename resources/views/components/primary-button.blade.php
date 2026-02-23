
<button
    {{ $attributes->merge(['class' => 'px-4 py-2 rounded-md transition-colors duration-200']) }}
    style="background-color:#22c55e; color:white;"
>
    {{ $slot }}
</button>
