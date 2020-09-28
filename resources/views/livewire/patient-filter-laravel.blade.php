<div>
    <input size="40" class="border ml-2 my-0 px-2 py-2 rounded-lg" wire:model.debounce.500ms="search" type="text" placeholder="Buscar de Pacientes..."/>

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
</div>
