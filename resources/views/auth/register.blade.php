<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class="relative py-10 sm:max-w-full sm:mx-auto">
            <div
                class="absolute inset-0 bg-gradient-to-r from-cyan-400 to-sky-500 shadow-lg transform skew-y-3 sm:skew-y-0 sm:-rotate-6 sm:rounded-3xl">
            </div>
            <div class="relative px-6 py-12 bg-white shadow-xl sm:rounded-3xl sm:p-16">

                <div class="max-w-md mx-auto">
                    <h1 class="text-3xl font-bold text-center text-gray-800 mb-6">Register</h1>
                    <div class="space-y-6">
                        <div class="">
                            <label for="name"
                                class="text-sm text-gray-600 transition-all peer-placeholder-shown:top-3.5 peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-focus:top-0 peer-focus:text-sm peer-focus:text-sky-500">
                                Name
                            </label>
                            <input id="name" name="name" type="text" autocomplete="off"
                                placeholder="Full Name"
                                class="peer h-12 px-4 w-full border-2 rounded-md border-gray-300 text-gray-900 focus:outline-none focus:ring-2 focus:ring-sky-500 focus:border-sky-500 placeholder-transparent" />

                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>
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
                        <div class="">
                            <label for="password_confirmation"
                                class="text-sm text-gray-600 transition-all peer-placeholder-shown:top-3.5 peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-focus:top-0 peer-focus:text-sm peer-focus:text-sky-500">
                                Password Confirmation
                            </label>
                            <input id="password_confirmation" name="password_confirmation" type="password"
                                autocomplete="off" placeholder="Password Confirmation"
                                class="peer h-12 px-4 w-full border-2 rounded-md border-gray-300 text-gray-900 focus:outline-none focus:ring-2 focus:ring-sky-500 focus:border-sky-500 placeholder-transparent" />
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>
                    </div>

                    <div class="mt-6">
                        <x-primary-button
                            class="w-full py-3 text-white bg-sky-500 rounded-md text-center hover:bg-sky-600 transition">
                            {{ __('Register') }}
                        </x-primary-button>
                    </div>
                    <div class="flex items-center justify-end mt-4">
                        <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                            href="{{ route('login') }}">
                            {{ __('Already registered?') }}
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </form>
</x-guest-layout>
