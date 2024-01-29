<div>
    <label for="{{ $name }}" class="block text-sm font-medium mb-2 @error($name) text-red-600 @enderror">
        {{ $label }}
        @if($required)
            <span class="text-red-500">*</span>
        @endif
    </label>
    <div class="relative">
        <input type="{{ $type }}" id="{{ $name }}" name="{{ $name }}" wire:model="{{ $name }}"
               class="py-3 px-4 block w-full rounded-lg text-sm border-gray-200
               @error($name) border-red-500 focus:border-red-500 focus:ring-red-500 @enderror"
        />
        @error($name)
        <div class="absolute inset-y-0 end-0 flex items-center pointer-events-none pe-3">
            <svg class="flex-shrink-0 h-4 w-4 text-red-500" xmlns="http://www.w3.org/2000/svg"
                 width="24" height="24"
                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                 stroke-linejoin="round">
                <circle cx="12" cy="12" r="10"></circle>
                <line x1="12" x2="12" y1="8" y2="12"></line>
                <line x1="12" x2="12.01" y1="16" y2="16"></line>
            </svg>
        </div>
        @enderror
    </div>
    @error($name)
    <p class="text-sm text-red-600 mt-2" id="hs-validation-name-error-helper">{{ $message }}</p>
    @enderror
</div>
