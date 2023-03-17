<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="form-group">
            <center><label style="font-size: 27px; font-family: sans-serif; font-color: #691c32;"><b></b></label></center><br>
        </div>
        <!-- Email Address -->
        <div>
            <x-text-input id="email" class="block mt-1 w-full" placeholder="Correo Electronico" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>
        <!-- Password -->
        <div class="mt-4">

            <x-text-input id="password" class="block mt-1 w-full" placeholder="Contraseña"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox"  class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ml-2 text-sm" style="font-color: black; font-size:15px;">{{ __('Recuerdame') }}</span>
            </label>
        </div>
        <br>

        <center><div style="font-family: sans-serif;">
            <x-primary-button class="ml-3" style="background-color: #691c32;" >
                {{ __('Iniciar Sesión') }}
            </x-primary-button>
        </div></center>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Olvidaste tu contraseña?') }}
                </a>
            @endif
        </div>
    </form>
</x-guest-layout>
