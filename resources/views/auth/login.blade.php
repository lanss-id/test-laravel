<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mt-12" :status="session('status')" />

    <div class="w-full">
        <div class="flex flex-col justify-center max-w-lg mx-auto">
            <h1 class="text-2xl font-semibold text-center mb-12">Login</h1>
            <form method="POST" action="{{ route('login') }}">
                @csrf
        
                <!-- Email Address -->
                <div>
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>
        
                <!-- Password -->
                <div class="mt-4">
                    <x-input-label for="password" :value="__('Password')" />
        
                    <x-text-input id="password" class="block mt-1 w-full"
                                    type="password"
                                    name="password"
                                    required autocomplete="current-password" />
        
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>
        
                <div class="flex flex-col justify-center mt-6">
                    <x-primary-button >
                        <p class="mx-auto text-lg">Sign In</p>
                    </x-primary-button>
                </div>
            </form>
            <a href="{{ route('register') }}" class="text-center mt-4 border-b-4 text-red-700 font-semibold border-red-700 w-fit mx-auto">
                Create Account
            </a>
        </div>
    </div>
</x-guest-layout>
