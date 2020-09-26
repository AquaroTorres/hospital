<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Pacientes
        </h2>
    </x-slot>
    @livewire('patient-show')
    
    <div class="container border mx-auto my-4">
        <div class="border mx-4 my-4 px-2 py-2 rounded-lg">
          <span class="block text-gray-700 text-center bg-gray-300 px-4 py-2">
            h1:Testiando Tailwind h1=h2
          </span>
          <span class="block text-gray-700 text-center bg-gray-300 px-4 py-2 mt-2">
            h2:Testiando Tailwind h1=h2
          </span>
          <span class="block text-center px-4 py-2 mt-2">
            <button class="bg-blue-500 border-2 border-blue-500 hover:border-blue-700 text-white font-bold mx-4 py-2 px-4 rounded-lg hover:bg-blue-700">
              Botón 1
            </button>
            <button class="bg-red-500 border-2 border-red-500 hover:border-red-700 text-white font-bold mx-4 py-2 px-4 rounded-lg hover:bg-red-700">
              Botón 2
            </button>
            <button class="bg-transparent border-2 border-blue-500 rounded-lg hover:bg-blue-500 text-blue-700 font-bold hover:text-white mx-4 py-2 px-4">
              Botón 3
            </button>
          </span>
        </div>
        <div class="border mx-4 my-4 px-4 py-4">
            <div class="overflow-y-scroll h-80 flex justify-center">
                <table class="table-auto">
                    <thead>
                        <tr>
                            <th class="px-4 py-2 font-bold">Index</th>
                            <th class="px-4 py-2 font-bold">Nombre</th>
                            <th class="px-4 py-2 font-bold">Edad</th>
                            <th class="px-4 py-2 font-bold">Genero</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($patients as $patient)
                            @if ($loop->index % 2 == 0)
                            <tr>
                                <td class="border px-4 py-2">{{ $loop->index }}</td>
                                <td class="border px-4 py-2">{{ $patient->name }}</td>
                                <td class="border px-4 py-2">{{ $patient->age }}</td>
                                <td class="border px-4 py-2">{{ $patient->gender }}</td>
                            </tr>
                            @else
                            <tr class="bg-gray-200">
                                <td class="border px-4 py-2">{{ $loop->index }}</td>
                                <td class="border px-4 py-2">{{ $patient->name }}</td>
                                <td class="border px-4 py-2">{{ $patient->age }}</td>
                                <td class="border px-4 py-2">{{ $patient->gender }}</td>
                            </tr>
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</x-app-layout>
