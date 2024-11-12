<x-guest-layout>
    <section class="flex gap-20 h-[100vh] bg-gray-100">

        <!-- Left Image Section -->
        <div class="4">
            <img src="{{ asset('storage/images/products/item2.png') }}" class="w-[40vw] h-[100vh] object-cover" alt="logo">
        </div>

        <!-- Right Form Section -->
        <div class="p-6 pt-20 w-[40vw] h-[80vh]">
            <h2 class="text-4xl font-semibold text-center text-[#5a4d3d] mb-6 font-serif pb-10">Log in to Your Account</h2>

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email Input -->
                <div class="mb-4">
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input id="email" type="email" name="email" :value="old('email')" required autofocus class="block mt-1 w-full p-3 border border-[#5a4d3d] bg-[#FCF8F3] text-[#5a4d3d] rounded-md shadow-md" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-500" />
                </div>

                <!-- Password Input -->
                <div class="mb-4">
                    <x-input-label for="password" :value="__('Password')" />
                    <x-text-input id="password" type="password" name="password" required autocomplete="current-password" class="block mt-1 w-full p-3 border border-[#5a4d3d] bg-[#FCF8F3] text-[#5a4d3d] rounded-md shadow-md" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-500" />
                </div>

                <!-- Remember Me Checkbox -->
                <div class="block mt-4  items-center">
                    <label for="remember_me" class="text-[#5a4d3d]">
                        <input id="remember_me" type="checkbox" name="remember" class="form-checkbox" />
                        <span class="ml-2">{{ __('Remember me') }}</span>
                    </label>
                </div>

                <!-- Submit Button -->
                <div class="flex items-center justify-end mt-6">
                    <x-primary-button >
                        {{ __('Log in') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </section>
</x-guest-layout>
