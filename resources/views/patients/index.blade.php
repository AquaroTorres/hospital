<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Pacientes
        </h2>
        <button class="bg-blue-500 border-2 border-blue-500 hover:border-blue-700 text-white font-bold py-2 px-2 rounded-lg hover:bg-blue-700" onclick="window.location.href='{{ route('patient.create') }}'">
          Crear Paciente
        </button>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 grid grid-cols-2 gap-4">

            <div>

                <p class="text-lg font-bold my-8">Pacientes Laravel</p>

                <table class="table-auto my-8">
                    <thead class="border">
                        <tr>
                            <th class="px-4 py-2 font-bold">Index</th>
                            <th class="px-4 py-2 font-bold">Nombre</th>
                            <th class="px-4 py-2 font-bold">F.Nacimiento</th>
                            <th class="px-4 py-2 font-bold">Genero</th>
                        </tr>
                    </thead>
                    <tbody class="border">
                        @foreach($patients as $key => $patient)
                            <tr>
                                <td class="px-4 py-2">{{ ++$key }}</td>
                                <td class="px-4 py-2">{{ $patient->name }}</td>
                                <td class="px-4 py-2">{{ $patient->birthDate }}</td>
                                <td class="px-4 py-2">{{ $patient->gender }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                <p class="text-lg font-bold my-8">Livewire Laravel</p>
                @livewire('patient-filter-laravel')

            </div>

            <div>
                <p class="text-lg font-bold my-8">Pacientes Fhir</p>

                <table class="table-auto my-8">
                    <thead class="border">
                        <tr>
                            <th class="px-4 py-2 font-bold">Index</th>
                            <th class="px-4 py-2 font-bold">Nombre</th>
                            <th class="px-4 py-2 font-bold">F.Nacimiento</th>
                            <th class="px-4 py-2 font-bold">Genero</th>
                        </tr>
                    </thead>
                    <tbody class="border">
                        @foreach($patientsFhir as $key => $patient)
                            <tr>
                                <td class="px-4 py-2">{{ ++$key }}</td>
                                <td class="px-4 py-2">{{ implode(' ',$patient['resource']['name'][0]['given']) }} </td>
                                <td class="px-4 py-2">{{ $patient['resource']['birthDate'] }}</td>
                                <td class="px-4 py-2">{{ $patient['resource']['gender'] }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                <p class="text-lg font-bold my-8">Livewire Fhir</p>
                @livewire('patient-filter-fhir')
            </div>
        </div>
    </div>
</x-app-layout>
