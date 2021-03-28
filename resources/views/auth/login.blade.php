<x-guest-layout>

    <x-jet-authentication-card>
        <x-slot name="logo">

            <x-jet-authentication-card-logo/>
            <h2 class="mt-1 text-3xl font-extrabold text-center text-primary leading-9">
                Sign in  your account                
            </h2>
            <p class="mt-1 text-sm text-center text-primary-light leading-5 max-w">
                Or
                <a href="/register" class="font-medium text-primary hover:text-primary-dark focus:outline-none focus:underline transition ease-in-out duration-150">
                    create a new account
                </a>
            </p>

        </x-slot> 
        <x-jet-validation-errors class="mb-4" />
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="flex items-center justify-between mt-6">
                <div class="flex items-center">
                    <label for="remember_me" class="flex items-center">
                        <x-jet-checkbox id="remember_me" name="remember" />
                        <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                    </label>
                </div>

                <div class="text-sm leading-5">
                    @if (Route::has('password.request'))
                        <a class="font-medium text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif
                </div>
            </div>

            <div class="mt-6">
                <span class="block w-full rounded-md shadow-sm">
                    <x-jet-button class="flex justify-center w-full px-4 py-2 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:ring-indigo active:bg-indigo-700 transition duration-150 ease-in-out">
                        {{ __('Sign in') }}
                    </x-jet-button>                    
                </span>
            </div>
        </form>


    </x-jet-authentication-card>

</x-guest-layout>



