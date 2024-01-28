<div>
    <button type="{{ $type }}"
            class="rounded-lg border border-blue-600 bg-blue-600 px-5 py-2.5 text-center text-sm
            font-medium text-white shadow-sm transition-all hover:border-blue-700 hover:bg-blue-700
            focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 {{ $customClass }}"
            wire:click="{{ $action }}">
        {{ $label }}
    </button>
</div>
