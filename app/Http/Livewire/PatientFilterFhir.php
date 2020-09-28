<?php

namespace App\Http\Livewire;

use Livewire\Component;
Use App\Traits\GoogleToken;
use Illuminate\Support\Facades\Http;

class PatientFilterFhir extends Component
{
    use GoogleToken;

    public $searchf;
    public $url = 'https://healthcare.googleapis.com/v1/projects/interconector/locations/us-central1/datasets/chile/fhirStores/eslabon/fhir/Patient?family:contains=';

    public function render()
    {
        $response = Http::withToken($this->getToken())->get($this->url.$this->searchf);
        $patients = $response->json();
        return view('livewire.patient-filter-fhir',['patients' => $patients]);
    }
}
