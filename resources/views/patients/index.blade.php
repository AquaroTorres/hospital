<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Pacientes
        </h2>
    </x-slot>

    <div class="container border mx-auto my-4">
        <div class="border mx-4 my-4 px-2 py-2 rounded-lg">
          <span class="block text-gray-700 text-center bg-gray-300 px-4 py-2">
            h1:Testiando Tailwind h1=h2
          </span>
          <span class="block text-gray-700 text-center bg-gray-300 px-4 py-2 mt-2">
            h2:Testiando Tailwind h1=h2
          </span>
          <span class="block text-gray-700 text-center bg-gray-300 px-4 py-2 mt-2">
            <button class="bg-blue-500 text-white font-bold py-2 px-4 rounded hover:bg-blue-700">
              Botón
            </button>
          </span>
        </div>
        <div class="border mx-4 my-4 px-2 py-2">
                <table class="table-auto">
                    <head>
                        <tr class="text-center">
                            <td class="border px-4 py-2 font-bold">Nombre</td>
                            <td class="border px-4 py-2 font-bold">Edad</td>
                            <td class="border px-4 py-2 font-bold">Genero</td>
                        </tr>
                    </head>
                    <body>
                        @foreach($patients as $patient)
                        <tr>
                            <td class="border px-4 py-2">{{ $patient->name }}</td>
                            <td class="border px-4 py-2">{{ $patient->age }}</td>
                            <td class="border px-4 py-2">{{ $patient->gender }}</td>
                        </tr>
                        @endforeach
                    </body>
                </table>
        </div>
    </div>

</x-app-layout>
