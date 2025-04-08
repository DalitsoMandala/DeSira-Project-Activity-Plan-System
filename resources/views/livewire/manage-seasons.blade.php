<div>
    {{-- Because she competes with no one, no one can compete with her. --}}
    <div class="p-6 overflow-hidden bg-white shadow-md rounded-xl md:max-w-2xl">
        <!-- Success Message -->
        @if ($successMessage)
            <div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 3000)"
                class="p-4 mb-4 text-green-700 bg-green-100 border-l-4 border-green-500 rounded">
                <p>{{ $successMessage }}</p>
            </div>
        @endif

        <h2 class="mb-6 text-2xl font-bold text-gray-800">
            {{ $isEditing ? 'Edit Season' : 'Create New Season' }}
        </h2>

        <form wire:submit.prevent="save" class="space-y-6">
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700">Season Name *</label>

                <x-text-input wire:model='name' placeholder="e.g. Year 1" />
                @error('name')
                    <x-error-msg>{{ $message }}</x-error-msg>
                @enderror
            </div>


            <div>
                <label for="name" class="block text-sm font-medium text-gray-700">Description *</label>
                <x-text-input wire:model='description' placeholder="e.g. 2021/2022" />
                @error('description')
                    <x-error-msg>{{ $message }}</x-error-msg>
                @enderror
            </div>


            <div class="flex items-center justify-end space-x-4">
                @if ($isEditing)
                    <button type="button" wire:click="resetForm"
                        class="px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Cancel
                    </button>
                @endif

                <x-primary-button type="submit">
                    {{ $isEditing ? 'Update Season' : 'Create Season' }}
                </x-primary-button>


            </div>
        </form>
    </div>

    <div class="mt-8">
        <livewire:season-table />

    </div>
</div>
