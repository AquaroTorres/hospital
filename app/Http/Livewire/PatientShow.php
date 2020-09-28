<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Patient;

class PatientShow extends Component
{
    public $search;

    public function render()
    {
        $patients = Patient::where('name','LIKE','%'.$this->search.'%')->get();
        return view('livewire.patient-show', [
            'patients' => $patients,
        ]);
    }
}
