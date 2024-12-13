<div class="relative">
    <x-slot name="header">
        <h2 class="text-lg font-semibold leading-tight text-green-800 dark:text-green-400">
            {{ __('Medication List') }}
        </h2>
    </x-slot>
    <div class="py-2">
        <div class="mx-auto max-w-7xl sm:px-4 lg:px-6">
            {{-- Search Component --}}
            <div class="mb-3">
                <x-search placeholder="Find your magical cure here... or whatever" wire:model.live.debounce.400="search" />
            </div>
            {{-- End of Search --}}

            <div class="shadow-md bg-gradient-to-br from-green-100 to-green-200 sm:rounded-lg">
                <div class="p-4 text-green-900 dark:text-neutral-100">
                    <div class="flex flex-col">
                        <div class="overflow-x-auto">
                            <table class="w-full border border-collapse border-green-300 divide-y divide-green-400">
                                <thead class="bg-green-300">
                                    <tr>
                                        <th class="px-4 py-2 text-xs font-medium text-green-900 uppercase text-start">ID</th>
                                        <th class="px-4 py-2 text-xs font-medium text-green-900 uppercase text-start">Name</th>
                                        <th class="px-4 py-2 text-xs font-medium text-green-900 uppercase text-start">Description</th>
                                        <th class="px-4 py-2 text-xs font-medium text-green-900 uppercase text-start">Categories</th>
                                        <th class="px-4 py-2 text-xs font-medium text-green-900 uppercase text-start">Segments</th>
                                        <th class="px-4 py-2 text-xs font-medium text-green-900 uppercase text-end">Action</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-green-50">
                                    @foreach($medications as $medication)
                                    <tr class="hover:bg-green-200">
                                        <td class="px-4 py-2 text-sm font-medium text-green-900 whitespace-nowrap">{{ $medication->id }}</td>
                                        <td class="px-4 py-2 text-sm text-green-900 whitespace-nowrap">{{ $medication->name }}</td>
                                        <td class="px-4 py-2 text-sm text-green-900 whitespace-nowrap">{{ $medication->description }}</td>
                                        <td class="px-4 py-2 text-sm text-green-900 whitespace-nowrap">{{ $medication->category->name }}</td>
                                        <td class="px-4 py-2 text-sm text-green-900 whitespace-nowrap">{{ $medication->segment->name }}</td>

                                       <td class="flex justify-end px-4 py-3 text-sm font-medium whitespace-nowrap gap-x-3">
                                            <!-- Edit Button -->
                                            <a href="{{ route('medications.edit', $medication->id) }}"
                                               wire:navigate
                                               class="px-3 py-1.5 text-xs font-bold text-green-900 bg-green-200 rounded-full shadow-sm transition-transform duration-300 ease-in-out hover:bg-green-300 hover:scale-105 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-1">
                                                Edit
                                            </a>

                                            <!-- Delete Button -->
                                            <button wire:click="delete({{ $medication->id }})"
                                                    wire:confirm="Are you sure? Because once you click this, there's no going back... except, you know, for the *undo* button."
                                                    type="button"
                                                    class="px-3 py-1.5 text-xs font-bold text-red-900 bg-red-200 rounded-full shadow-sm transition-transform duration-300 ease-in-out hover:bg-red-300 hover:scale-105 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-1">
                                                Delete
                                            </button>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="flex items-center justify-between my-2">
                        <!-- Pagination (slightly moved to the right) -->
                        <div class="flex justify-end w-full mr-3">
                            {{ $medications->links(data: ['scrollTo' => false]) }}
                        </div>

                        <!-- Add Medication Button (improved style) -->
                        <div class="flex justify-end ml-3">
                            <a href="{{ route('medications.create') }}" wire:navigate class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-green-600 rounded-lg shadow-md hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500">
                                <span class="mr-2 text-lg font-semibold">+</span> Add Medication
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
