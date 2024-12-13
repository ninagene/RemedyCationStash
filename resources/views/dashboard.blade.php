<x-app-layout>
    <div class="bg-gradient-to-r from-green-300 to-green-400">
        <div class="max-w-5xl mx-auto text-center sm:px-6 lg:px-8">
            <div class="p-6 bg-white rounded-lg shadow-lg dark:bg-gray-800"> <!-- Reduced padding -->
                <!-- Call-to-Action Button at the top -->


                <!-- Funny Quotes Section -->
                <div class="space-y-6">
                    <h2 class="text-2xl font-semibold leading-tight text-green-700 dark:text-green-400">
                        {{ __('Welcome to Remedycation Inventory') }}
                    </h2>

                    <div class="p-6 bg-green-100 rounded-lg shadow-sm">
                        <blockquote class="text-xl font-semibold text-green-800 dark:text-green-700">
                            "I’m not a doctor, but I’m pretty sure you need more coffee... and maybe a pill."
                        </blockquote>
                    </div>
                    <div class="p-6 bg-green-100 rounded-lg shadow-sm">
                        <blockquote class="text-xl font-semibold text-green-800 dark:text-green-700">
                            "Without meds, my thoughts are like popcorn—endless and everywhere!"
                        </blockquote>
                    </div>
                    <div class="p-6 bg-green-100 rounded-lg shadow-sm">
                        <blockquote class="text-xl font-semibold text-green-800 dark:text-green-700">
                            "Medicine: Because sometimes, 'just sleep it off' doesn’t cut it."
                        </blockquote>
                    </div>
                    <div class="p-6 bg-green-100 rounded-lg shadow-sm">
                        <blockquote class="text-xl font-semibold text-green-800 dark:text-green-700">
                            "Don’t worry, I’ve got your back... and your medicine cabinet."
                        </blockquote>
                    </div>
                    <div class="mb-4">
                        <a href="{{ route('medications.index') }}" class="inline-block px-6 py-3 font-semibold text-white transition duration-300 bg-green-600 rounded-lg shadow-md hover:bg-green-700">
                            Explore Medication Inventory
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
