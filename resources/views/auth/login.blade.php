<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}" class="w-[400px]">
        @csrf
        <div class="relative py-10 sm:max-w-full sm:mx-auto">
            <div
                class="absolute inset-0 bg-gradient-to-r from-cyan-400 to-sky-500 shadow-lg transform skew-y-3 sm:skew-y-0 sm:-rotate-6 sm:rounded-3xl">
            </div>
            <div class="relative px-6 py-12 bg-white shadow-xl sm:rounded-3xl sm:p-16">

                <div class="max-w-md mx-auto">
                    <h1 class="text-3xl font-bold text-center text-gray-800 mb-6">Login</h1>

                    <div class="space-y-6">
                        <!-- Email Field -->
                        <div class="">
                            <label for="email"
                                class="text-sm text-gray-600 transition-all peer-placeholder-shown:top-3.5 peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-focus:top-0 peer-focus:text-sm peer-focus:text-sky-500">
                                Email Address
                            </label>
                            <input id="email" name="email" type="email" autocomplete="off"
                                placeholder="Email address"
                                class="peer h-12 px-4 w-full border-2 rounded-md border-gray-300 text-gray-900 focus:outline-none focus:ring-2 focus:ring-sky-500 focus:border-sky-500 placeholder-transparent" />

                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>

                        <!-- Password Field -->
                        <div class="">
                            <label for="password"
                                class="text-sm text-gray-600 transition-all peer-placeholder-shown:top-3.5 peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-focus:top-0 peer-focus:text-sm peer-focus:text-sky-500">
                                Password
                            </label>
                            <input id="password" name="password" type="password" autocomplete="off"
                                placeholder="Password"
                                class="peer h-12 px-4 w-full border-2 rounded-md border-gray-300 text-gray-900 focus:outline-none focus:ring-2 focus:ring-sky-500 focus:border-sky-500 placeholder-transparent" />
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>
                    </div>

                    <div class="mt-6">
                        <x-primary-button
                            class="w-full py-3 text-white bg-sky-500 rounded-md text-center hover:bg-sky-600 transition">
                            {{ __('Log in') }}
                        </x-primary-button>
                    </div>
                    <div class="flex flex-col items-start justify-center mt-5">
                        <a href="{{ route('register') }}"
                            class="text-sm text-sky-500 mb-3 hover:underline">don't have account?</a>
                    </div>
                </div>
            </div>
        </div>
    </form>
</x-guest-layout>
