<div>
    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden shadow-lg bg-gradient-to-r from-green-200 via-green-400 to-green-500 dark:bg-green-800 sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{-- Create content --}}
                    <div class="flex flex-col gap-y-6">
                        <div class="flex flex-col gap-y-2">
                            <h1 class="text-2xl font-bold text-green-900">Medication Information</h1>
                            <p class="text-sm text-gray-500">Fill out this form to create a new medication</p>
                        </div>

                        {{-- Create Medication Form --}}
                        <form wire:submit="addMedication">
                            <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
                                <div>
                                    <label for="name" class="block mb-2 text-sm font-bold text-green-800 dark:text-white">Name</label>
                                    <input
                                        type="text"
                                        id="name"
                                        wire:model.blur="form.name"
                                        class="block w-full px-4 py-3 text-sm rounded-lg border-green-300 focus:border-green-500 focus:ring-green-500 dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-green-600
                                        @error('form.name')
                                            text-red-900 focus:ring-red-500 focus:border-red-500 border-red-300
                                        @enderror"
                                    >
                                    @error('form.name')
                                        <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div>
                                    <label for="description" class="block mb-2 text-sm font-bold text-green-800 dark:text-white">Description</label>
                                    <input
                                        type="text"
                                        id="description"
                                        wire:model.blur="form.description"
                                        class="block w-full px-4 py-3 text-sm rounded-lg border-green-300 focus:border-green-500 focus:ring-green-500 dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-green-600
                                        @error('form.description')
                                            text-red-900 focus:ring-red-500 focus:border-red-500 border-red-300
                                        @enderror"
                                    >
                                    @error('form.description')
                                        <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div>
                                    <label for="category_id" class="block mb-2 text-sm font-bold text-green-800 dark:text-white">Category</label>
                                    <select
                                        id="category_id"
                                        wire:model.live="form.category_id"
                                        class="block w-full px-4 py-3 text-sm rounded-lg border-green-300 pe-9 focus:border-green-500 focus:ring-green-500 dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-green-600
                                        @error('form.category_id')
                                            text-red-900 focus:ring-red-500 focus:border-red-500 border-red-300
                                        @enderror"
                                    >
                                        <option value="">Select a category</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('form.category_id')
                                        <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div>
                                    <label for="segment" class="block mb-2 text-sm font-bold text-green-800 dark:text-white">Segment</label>
                                    <select
                                        id="segment"
                                        wire:model.live="form.segment_id"
                                        wire:key="{{ $form->category_id }}"
                                        class="block w-full px-4 py-3 text-sm rounded-lg border-green-300 pe-9 focus:border-green-500 focus:ring-green-500 dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-green-600
                                        @error('form.segment_id')
                                            text-red-900 focus:ring-red-500 focus:border-red-500 border-red-300
                                        @enderror"
                                    >
                                        <option value="">Select a Segment</option>
                                        @foreach ($segments as $segment)
                                            <option value="{{ $segment->id }}">{{ $segment->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('form.segment_id')
                                        <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
                                    @enderror
                                </div>

                            </div>

                            <div class="flex justify-end mt-6 gap-x-4">
                                <a href="{{ route('medications.index') }}" class="inline-flex items-center px-6 py-3 text-sm font-medium text-white bg-green-600 rounded-lg shadow-md hover:bg-green-700 focus:outline-none focus:bg-green-700 disabled:opacity-50">
                                    Cancel
                                </a>
                                <button type="submit" class="px-6 py-3 text-sm font-medium text-white bg-green-700 rounded-lg shadow-md hover:bg-green-800 focus:outline-none focus:bg-green-800 disabled:opacity-50">
                                    Save
                                </button>
                            </div>
                        </form>
                        {{-- End of Create Medication Form --}}
                    </div>
                    {{-- End of Create content --}}
                </div>
            </div>
        </div>
    </div>
</div>
