<x-app-layout>
    <x-slot name="header">
        <nav class="font-semibold text-xl text-gray-800 leading-tight" aria-label="Breadcrumb">
            <ol class="list-none p-0 inline-flex">
                {{-- <li class="flex items-center">
                  <a href="#">Home</a>
                  <svg class="fill-current w-3 h-3 mx-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"/></svg>
                </li> --}}
                <li class="flex items-center">
                    <a href="{{ route('citas.index') }}">Citas</a>
                    <svg class="fill-current w-3 h-3 mx-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"/></svg>
                </li>
                <li>
                    <a href="#" class="text-gray-500" aria-current="page">Crear cita</a>
                </li>
            </ol>
        </nav>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="font-semibold text-lg px-6 py-4 bg-white border-b border-gray-200">
                    Información de la cita
                </div>
                <div class="p-6 bg-white border-b border-gray-200">
                    <!-- Validation Errors -->
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />
                    <form method="POST" action="{{ route('citas.store') }}">
                        @csrf
                        
                        <!-- Fecha Hora Inicion -->
                        <div class="mt-4">
                            <x-label for="fechaHoraInicio" :value="__('Fecha Hora Inicio')" />

                            <x-input id="fechaHoraInicio" class="block mt-1 w-full"
                                     type="datetime-local"
                                     name="fechaHoraInicio"
                                     :value="old('fechaHoraInicio')"
                                     required />
                        </div>
                        <!-- Fecha Hora Fin -->
                        <div class="mt-4">
                             <x-label for="fechaHoraFin" :value="__('Fecha Hora Fin')" />

                            <x-input id="fechaHoraFin" class="block mt-1 w-full"
                                        type="datetime-local"
                                        name="fechaHoraFin"
                                        :value="old('fechaHoraFin')"
                                        required />
                                        

                        </div>
                        <div class="mt-4">
                            <x-label for="familiar_id" :value="__('Familiar')" />

                            @isset($familiar)
                                <x-input id="familiar_id" class="block mt-1 w-full"
                                         type="hidden"
                                         name="familiar_id"
                                         :value="$familiar->id"
                                         required />
                                <x-input class="block mt-1 w-full"
                                         type="text"
                                         disabled
                                         value="{{$familiar->user->name}}"
                                          />
                            @else
                            <x-select id="familiar_id" name="familiar_id" required>
                                <option value="">{{__('Elige un familiar')}}</option>
                                @foreach ($familiars as $familiar)
                                    <option value="{{$familiar->id}}" @if (old('familiar_id') == $familiar->id) selected @endif>{{$familiar->user->name}}</option>
                                @endforeach
                            </x-select>
                            @endisset
                        </div>
                        
                        <div class="mt-4">
                            <x-label for="profesional_id" :value="__('Profesional')" />

                            @isset($profesional)
                                <x-input id="profesional_id" class="block mt-1 w-full"
                                         type="hidden"
                                         name="profesional_id"
                                         :value="$profesional->id"
                                         required />
                                <x-input class="block mt-1 w-full"
                                         type="text"
                                         disabled
                                         value="{{$profesional->user->name}}"
                                          />
                            @else
                                <x-select id="profesional_id" name="profesional_id" required>
                                    <option value="">{{__('Elige un profesional')}}</option>
                                    @foreach ($profesionals as $profesional)
                                        <option value="{{$profesional->id}}" @if (old('profesional_id') == $profesional->id) selected @endif>{{$profesional->user->name}}</option>
                                    @endforeach
                                </x-select>
                            @endisset
                        </div>
                        <!-- Descripcion -->
                        <div class="mt-4">
                            <x-label for="descripcion" :value="__('Descripcion')" />

                            <x-input id="descripcion" class="block mt-1 w-full"
                                     type="text"
                                     name="descripcion"
                                     :value="old('descripcion')"
                                     required />
                        </div>
                        <!-- Observaciones -->
                        <div class="mt-4">
                            <x-label for="observaciones" :value="__('Observaciones')" />

                            <x-input id="observaciones" class="block mt-1 w-full"
                                     type="text"
                                     name="observaciones"
                                     :value="old('observaciones')"
                                     required />
                        </div>
                        <div class="flex items-center justify-end mt-4">
                            <x-button type="button" class="bg-red-800 hover:bg-red-700">
                                <a href={{route('citas.index')}}>
                                    {{ __('Cancelar') }}
                                </a>
                            </x-button>
                            <x-button class="ml-4">
                                {{ __('Guardar') }}
                            </x-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
