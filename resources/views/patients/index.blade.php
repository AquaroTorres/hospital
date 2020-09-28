<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Pacientes
        </h2>
    </x-slot>

    @livewire('patient-show')


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
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
                    @foreach($fpatients as $key => $patient)

                        <tr>
                            <td class="border px-4 py-2">{{ ++$key }}</td>
                            <td class="border px-4 py-2">{{ implode(' ',$patient['resource']['name'][0]['given']) }} {{ $patient['resource']['name'][0]['family'] }}</td>
                            <td class="border px-4 py-2">{{ $patient['resource']['birthDate'] }}</td>
                            <td class="border px-4 py-2">{{ $patient['resource']['gender'] }}</td>
                        </tr>

                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</x-app-layout>
