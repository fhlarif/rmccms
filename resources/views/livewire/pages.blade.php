<div class="p-6">
    <div>
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
    </div>
    <x-jet-button wire:click='createShowModal'>
        {{ __('Create') }}
    </x-jet-button>

    {{-- Modal Form --}}

    <x-jet-dialog-modal wire:model="modalFormVisible">
        <x-slot name="title">
            {{ __('Save Page') }}
        </x-slot>

        <x-slot name="content">

            {{-- The form elements goes here --}}

            <div>
                <div class="md:grid md:grid-cols-3 md:gap-6">
                    <div class="md:col-span-1">
                        <div class="px-4 sm:px-0">
                            <h3 class="text-lg font-medium leading-6 text-gray-900">Page</h3>
                            <p class="mt-1 text-sm text-gray-600">
                                This information will be displayed publicly so be careful what you share.
                            </p>
                        </div>
                    </div>
                    <div class="mt-5 md:mt-0 md:col-span-2">



                        <div class="col-span-6 sm:col-span-3">
                            <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                            <input wire:model.defer='title' type="text" name="title" id="title"
                                autocomplete="given-name"
                                class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            @error('title')
                                <x-jet-input-error for="title" class="mt-2" />
                            @enderror
                        </div>

                        {{-- <div class="col-span-3 sm:col-span-2">
                            <label for="company_website" class="block text-sm font-medium text-gray-700">
                                Website
                            </label>
                            <div class="flex mt-1 rounded-md shadow-sm">
                                <span
                                    class="inline-flex items-center px-3 text-sm text-gray-500 border border-r-0 border-gray-300 rounded-l-md bg-gray-50">
                                    http://
                                </span>
                                <input type="text" name="company_website" id="company_website"
                                    class="flex-1 block w-full border-gray-300 rounded-none focus:ring-indigo-500 focus:border-indigo-500 rounded-r-md sm:text-sm"
                                    placeholder="www.example.com">
                            </div>
                        </div> --}}

                        <div class="col-span-6 sm:col-span-3">
                            <label for="category" class="block text-sm font-medium text-gray-700">Category</label>
                            <select wire:model.defer='category' id="category" name="category" autocomplete="category"
                                class="block w-full px-3 py-2 mt-1 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                <option></option>
                                <option>United States</option>
                                <option>Canada</option>
                                <option>Mexico</option>
                            </select>
                            @error('category')
                                <x-jet-input-error for="category" class="mt-2" />
                            @enderror
                        </div>

                        <div class="col-span-6 sm:col-span-3">
                            <label for="active" class="block text-sm font-medium text-gray-700">Active</label>
                            <select wire:model.defer='active' id="active" name="active" autocomplete="active"
                                class="block w-full px-3 py-2 mt-1 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                <option></option>
                                <option>Yes</option>
                                <option>No</option>
                            </select>
                            @error('active')
                                <x-jet-input-error for="active" class="mt-2" />
                            @enderror
                        </div>
                    </div>
                </div>
                <div wire:ignore>
                    <label for="body" class="block text-sm font-medium text-gray-700">
                        Content
                    </label>
                    <div class="mt-1">
                        <div wire:ignore>
                            <trix-editor class="formatted-content" x-ref="trix" wire:model.debounce.999999ms="body"
                                wire:key="uniqueKey"></trix-editor>
                        </div>
                    </div>
                </div>
                @error('body')
                    <x-jet-input-error for="body" class="mt-2" />
                @enderror

        </x-slot>

        <x-slot name="footer">
            <x-jet-secondary-button wire:click="$toggle('modalFormVisible')" wire:loading.attr="disabled">
                {{ __('Cancel') }}
            </x-jet-secondary-button>

            <x-jet-button class="ml-2" wire:click="createpage" wire:loading.attr="disabled">
                {{ __('Save') }}
            </x-jet-button>
        </x-slot>
    </x-jet-dialog-modal>
</div>
