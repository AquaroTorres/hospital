<div>
    <input size="40" class="border ml-2 my-0 px-2 py-2 rounded-lg" wire:model.debounce.500ms="searchf" type="text" placeholder="Buscar de Pacientes..."/>

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
            @if( $patients['total'] > 0)
                @foreach($patients['entry'] as $key => $patient)
                    <tr>
                        <td class="px-4 py-2">{{ ++$key }}</td>
                        <td class="px-4 py-2">{{ implode(' ',$patient['resource']['name'][0]['given']) }} {{ $patient['resource']['name'][0]['family'] }}</td>
                        <td class="px-4 py-2">{{ $patient['resource']['birthDate'] }}</td>
                        <td class="px-4 py-2">{{ $patient['resource']['gender'] }}</td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
</div>
