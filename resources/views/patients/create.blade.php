<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          Crear Paciente
        </h2>
    </x-slot>

    <form method="POST" class="form-horizontal" action="{{ route('patient.store') }}">
    @csrf
    <div class="container bg-white border mx-auto my-4">
        <div class="flex justify-star mx-2 mb-0 mt-4 px-2 py-0">
          <p class="text-lg font-semibold">Ingrese información del Paciente:</p>
        </div>

        <div class="flex justify-around shadow-xl border mx-4 mt-0 mb-16 px-2 py-2 rounded-lg">
          <span class="block text-gray-700 px-0 py-2 ml-4 mr-4 my-4">
          		<fieldset class="flex flex-col my-4 mx-4">
          			<label for="forNombre">Nombres</label>
          			<input type="text" size="25" class="py-1 px-1 border rounded-lg" id="name" name="name" required="required">
          		</fieldset>
          		<fieldset class="flex flex-col mb-4 mx-4">
          			<label for="forEdad">Fecha de Nacimiento</label>
          			<input type="date" class="py-1 px-1 border rounded-lg" placeholder="yyyy-mm-dd" name="birthDate" required="required">
          		</fieldset>
          		<fieldset class="flex flex-col mb-4 mx-4">
          			<label for="gender">Género</label>
                <select style="width: 200px;" class="py-2 px-1 border rounded-lg" name="gender" id="gender" required="required">
                  <option value="male">Masculino</option>
                  <option value="female">Femenino</option>
                </select>
          			<!--<input type="text" class="py-1 px-1 border rounded-lg" id="forGenero" name="gender" required="required">-->
          		</fieldset>
          </span>
          <span class="block text-gray-700 px-0 py-2 mr-4 my-4">
            <fieldset class="flex flex-col my-4 mx-4">
        			<label for="allergy">Asignar Alergias:</label>
        			<select style="width: 300px;" size="7" multiple class="custom-select border" name="allergies[]">
        				@foreach($allergies as $allergy)
        					<option value="{{ $allergy->id }}">{{ $allergy->id.' '.$allergy->name }}</option>
        				@endforeach
        			</select>
        			<small class="form-text text-muted">
        				Ctrl + Click para deseleccionar un item o seleccionar más de uno.
        			</small>
        		</fieldset>
          </span>
        </div>
    </div>

    <div class="container bg-transparent mx-auto my-8">
      <div class="flex justify-star mx-0 my-0 px-0 py-0">
        <button type="submit" class="bg-blue-500 border-2 border-blue-500 hover:border-blue-700 text-white font-bold rounded-lg hover:bg-blue-700 mr-12 my-0 py-2 px-4">
          Guardar
        </button>
        <a href="{{ route('patient.index') }}" class="bg-red-500 border-2 border-red-500 hover:border-red-700 text-white font-bold rounded-lg hover:bg-red-700 ml-12 my-0 py-2 px-4">
          Volver
        </a>
      </div>
    </div>
</form>
</x-app-layout>
