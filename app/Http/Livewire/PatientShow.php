<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Patient;

class PatientShow extends Component
{
    public $search;
    
    public function render()
    {
        return view('livewire.patient-show', [
            'users' => Patient::where('name','LIKE','%'.$this->search.'%')->get(),
        ]);
    }
}
