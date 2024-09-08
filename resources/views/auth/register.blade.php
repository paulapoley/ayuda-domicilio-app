<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf
            <input type="hidden" value="2" name="tipo_usuario_id">

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Nombre:')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Apellidos -->
            <div>
                <x-label for="apellidos" :value="__('Apellidos:')" />

                <x-input id="apellidos" class="block mt-1 w-full" type="text" name="apellidos" :value="old('apellidos')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email:')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Confirm Email -->
            <div class="mt-4">
                <x-label for="email_confirmation" :value="__('Confirm Email')" />

                <x-input id="email_confirmation" class="block mt-1 w-full"
                                type="email"
                                name="email_confirmation" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Contraseña:')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirmar contraseña:')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>
            <!-- Genero -->
            <div class="mt-4">
                <x-label for="genero" :value="__('Género:')" />

                <x-select id="genero" name="genero" required>
                    <option value="">{{__('Elige una opción')}}</option>
                    <option value="2" @if (old('genero') == 2) selected @endif>{{__('No binario')}}</option>
                    <option value="1" @if (old('genero') == 1) selected @endif>{{__('Masculino')}}</option>
                    <option value="0" @if (old('genero') == 0) selected @endif>{{__('Femenino')}}</option>
                </x-select>
            </div>

            <!-- dni -->
            <div>
                <x-label for="dni" :value="__('Dni:')" />

                <x-input id="dni" class="block mt-1 w-full" type="text" name="dni" :value="old('dni')" required autofocus />
            </div>

            <!-- Direccion -->
            <div>
                <x-label for="direccion" :value="__('Dirección:')" />

                <x-input id="direccion" class="block mt-1 w-full" type="text" name="direccion" :value="old('direccion')" required autofocus />
            </div>
            

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('¿Ya registrado?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Registrar') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
