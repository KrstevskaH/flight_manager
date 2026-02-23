<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest transition ease-in-out duration-150',]) }}
        style="background-color:#dc2626; color:white;"
        onmouseover="this.style.backgroundColor='#ef4444'"
        onmouseout="this.style.backgroundColor='#dc2626'">
    {{ $slot }}
</button>