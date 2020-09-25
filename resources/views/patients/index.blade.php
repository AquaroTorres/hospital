<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Pacientes
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">


                <table class="table-auto">
                    <head>
                        <tr>
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
