<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Patient;

class PatientFilterLaravel extends Component
{
    public $search;

    public function render()
    {
        return view('livewire.patient-filter-laravel', [
            'patients' => Patient::where('name','LIKE','%'.$this->search.'%')->get()
        ]);
    }
}
