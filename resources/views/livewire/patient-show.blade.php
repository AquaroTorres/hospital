<div class="container bg-white border mx-auto my-4">

    <div class="flex justify-star mx-2 mb-0 mt-4 px-2 py-0">
      <p class="text-lg font-semibold">Listado de Pacientes:</p>
    </div>

    <div class="border shadow-xl mx-4 mt-0 mb-16 px-4 py-8 rounded-lg">
      <div class="flex justify-center bg-white mx-0 mb-4 px-0 py-0">
        <button class="bg-blue-500 border-2 border-blue-500 hover:border-blue-700 text-white font-bold py-2 px-2 rounded-lg hover:bg-blue-700" onclick="window.location.href='{{ route('patient.create') }}'">
          Crear Paciente
        </button>
        <input size="40" class="border ml-2 my-0 px-2 py-2 rounded-lg" wire:model="search" type="text" placeholder="Buscar de Pacientes..."/>
      </div>

        <div class="overflow-y-scroll h-80 flex justify-center">
            <table class="table-auto text-left">
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
                            <td class="px-4 py-2">{{ $loop->index }}</td>
                            <td class="px-4 py-2">{{ $patient->name }}</td>
                            <td class="px-4 py-2">{{ $patient->age }}</td>
                            <td class="px-4 py-2">{{ $patient->gender }}</td>
                        </tr>
                        @else
                        <tr class="bg-gray-200">
                            <td class="px-4 py-2">{{ $loop->index }}</td>
                            <td class="px-4 py-2">{{ $patient->name }}</td>
                            <td class="px-4 py-2">{{ $patient->age }}</td>
                            <td class="px-4 py-2">{{ $patient->gender }}</td>
                        </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
