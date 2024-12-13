<x-guest-layout>
    <div class="flex flex-col items-center justify-center max-w-2xl gap-8 p-10 mx-auto mt-12 shadow-lg bg-gradient-to-r from-teal-500 to-teal-700 rounded-xl">
        <h1 class="text-5xl font-bold tracking-tight text-white">Remedycation Stash</h1>

        @if (Route::has('login'))
            <nav class="flex mt-6 space-x-8">
                @auth
                    <a
                        href="{{ url('/dashboard') }}"
                        class="px-8 py-3 text-white transition-all duration-200 transform bg-teal-600 rounded-lg shadow-md hover:scale-105 hover:bg-teal-700 focus:outline-none focus:ring-2 focus:ring-teal-500"
                    >
                        Dashboard
                    </a>
                @else
                    <a
                        href="{{ route('login') }}"
                        class="px-8 py-3 text-white transition-all duration-200 transform bg-gray-600 rounded-lg shadow-md hover:scale-105 hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-teal-500"
                    >
                        Log in
                    </a>
                    @if (Route::has('register'))
                        <a
                            href="{{ route('register') }}"
                            class="px-8 py-3 text-white transition-all duration-200 transform bg-gray-600 rounded-lg shadow-md hover:scale-105 hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-teal-500"
                        >
                            Register
                        </a>
                    @endif
                @endauth
            </nav>
        @endif
    </div>
</x-guest-layout>
