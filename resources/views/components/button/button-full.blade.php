<div>
    <button type="{{ $type }}" class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-semibold
     rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50
      disabled:pointer-events-none {{ $customClass }}" wire:click="{{ $action }}" wire:loading.attr="disabled">
        {{ $label }}
    </button>
</div>
