<form>
    <p class="mb-4">
        <x-button class="bg-blue-400 hover:bg-blue-500" wire:click="$set('showModal', true)">Yes, Delete</x-button>
    </p>

    @if($showModal)
        <x-confirmation-modal>
            <x-slot name="title">
                Are You Sure?
            </x-slot>
            <x-slot name="body">
                Continuing will delete your account permanently.
            </x-slot>
            <x-slot name="footer">
                <x-button class="bg-gray-400 hover:bg-gray-500" wire:click="$set('showModal', false)">Cancel</x-button>
                <x-button class="bg-blue-400 hover:bg-blue-500" wire:click="handle">Continue</x-button>
            </x-slot>
        </x-confirmation-modal>
    @endif
</form>
