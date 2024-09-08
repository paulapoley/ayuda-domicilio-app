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
                    <a href="#" class="text-gray-500" aria-current="page">Ver cita</a>
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
                        @csrf
                        @method('put')
                        <div class="mt-4">
                            <x-label for="fechaHoraInicio" :value="__('Fecha y hora')" />

                            <x-input id="fechaHoraInicio" class="block mt-1 w-full"
                                     type="datetime-local"
                                     name="fechaHoraInicio"
                                     disabled
                                     :value="$cita->fechaHoraInicio->format('Y/m/d\TH:i:s')"
                                     required />
                        </div>
                        <div class="mt-4">
                            <x-label for="fechaHoraFin" :value="__('Fecha y hora')" />

                            <x-input id="fechaHoraFin" class="block mt-1 w-full"
                                     type="datetime-local"
                                     name="fechaHoraFin"
                                     disabled
                                     :value="$cita->fechaHoraFin->format('Y/m/d\TH:i:s')"
                                     required />
                        </div>
                        <div class="mt-4">
                            <x-label for="familiar_id" :value="__('Familiar')" />

                                <x-input class="block mt-1 w-full"
                                         type="text"
                                         disabled
                                         value="{{$cita->familiar->user->name}}"
                                />

                        </div>
                        <div class="mt-4">
                            <x-label for="profesional_id" :value="__('Profesional')" />
                                <x-input class="block mt-1 w-full"
                                         type="text"
                                         disabled
                                         value="{{$cita->profesional->user->name}}"
                                />
                        </div>
                        <div class="mt-4">
                            <x-label for="descripcion" :value="__('Descripcion')" />

                            <x-input id="descripcion" class="block mt-1 w-full"
                                     type="text"
                                     name="descripcion"
                                     disabled
                                     :value="$cita->descripcion"
                                     required />
                        </div>
                        <div class="mt-4">
                            <x-label for="observaciones" :value="__('Observaciones')" />

                            <x-input id="observaciones" class="block mt-1 w-full"
                                     type="text"
                                     name="observaciones"
                                     disabled
                                     :value="$cita->observaciones"
                                     required />
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <x-button type="button" class="bg-red-800 hover:bg-red-700">
                                <a href={{route('citas.index')}}>
                                    {{ __('Volver') }}
                                </a>
                            </x-button>
                        </div>
                </div>
            </div>
        </div>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="font-semibold text-lg px-6 py-4 bg-white border-b border-gray-200">
                    servicios
                </div>
                {{--<div class="flex items-center mt-4 ml-2">
                    <form method="GET" action="{{ route('servicios.create') }}">
                        <x-button type="subit" class="ml-4">
                            {{ __('Crear Servicio') }}
                        </x-button>
                    </form>
                </div>--}}
                <div class="p-6 bg-white border-b border-gray-200">
                    <table class="min-w-max w-full table-auto">
                        <thead>
                        <tr class="bg-gray-200 text-gray-900 uppercase text-sm leading-normal">
                            <th class="py-3 px-6 text-left">servicio</th>
                            <th class="py-3 px-6 text-left">fechaInicio</th>
                            <th class="py-3 px-6 text-left">fechaFin</th>
                            <th class="py-3 px-6 text-left">observaciones</th>
                            <th class="py-3 px-6 text-center">duracion</th>
                                                 

                        </tr>
                        </thead>
                        <tbody class="text-gray-600 text-sm font-light">
                        @foreach ($cita->servicios as $servicio)
                            <tr class="border-b border-gray-200 hover:bg-gray-100">
                                <td class="py-3 px-6 text-left whitespace-nowrap">
                                    <div class="flex items-center">
                                        <span class="font-medium">{{$servicio->nombre}}</span>
                                    </div>
                                </td>
                                <td class="py-3 px-6 text-center whitespace-nowrap">
                                    <div class="flex items-center">
                                        <span class="font-medium">{{$servicio->pivot->fechaInicio->format('Y/m/d')}} </span>
                                    </div>
                                </td>
                                <td class="py-3 px-6 text-center whitespace-nowrap">
                                    <div class="flex items-center">
                                        <span class="font-medium">{{$servicio->pivot->fechaFin->format('Y/m/d')}} </span>
                                    </div>
                                </td>
                                <td class="py-3 px-6 text-center whitespace-nowrap">
                                    <div class="flex items-center">
                                        <span class="font-medium">{{$servicio->pivot->observaciones}} </span>
                                    </div>
                                </td>
                                <td class="py-3 px-6 text-center whitespace-nowrap">
                                    <div class="flex items-center">
                                        <span class="font-medium">{{$servicio->pivot->duracion}} </span>
                                    </div>
                                </td>
                                {{--<td class="py-3 px-6 text-center">
                                    <div class="flex item-center justify-end">

                                        <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                            <a href="{{route('servicios.edit', $servicio->id)}}">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                                </svg>
                                            </a>
                                        </div>
                                        <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                            <form id="delete-form-{{$servicio->id}}" method="POST" action="{{ route( $servicio->id) }}">
                                                @csrf
                                                @method('delete')
                                                <a class="cursor-pointer" onclick="getElementById('delete-form-{{$servicio->id}}').submit();">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                    </svg>
                                                </a>
                                            </form>

                                        </div>
                                    </div>
                                </td>--}}
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
