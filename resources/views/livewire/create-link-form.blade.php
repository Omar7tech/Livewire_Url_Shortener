<div class="flex justify-center">
    <fieldset class="border border-gray-300 p-4 rounded-lg w-full max-w-md">
        <legend class="text-lg font-semibold px-2">Paste or Type the Full URL Here</legend>
        <div class="flex gap-2 mt-2">
            <input wire:model.live="url" type="url" class="input input-bordered w-full" id="url-input"
                placeholder="Enter URL" required />
            <button wire:click="save" wire:loading.attr="disabled"
                class="btn btn-accent"
                :disabled="!$wire.isValid">
                Shorten
                <span wire:loading class="loading loading-spinner loading-xs"></span>
            </button>
        </div>
        @error('url')
            <div class="mt-2">
                <div role="alert" class="alert alert-error alert-soft">
                    <span>{{ $message }}</span>
                </div>
            </div>
        @enderror
    </fieldset>
</div>
