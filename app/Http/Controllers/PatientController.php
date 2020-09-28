<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use App\Models\Allergy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
Use App\Traits\GoogleToken;


class PatientController extends Controller
{
    use GoogleToken;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /* Obtener pacientes desde Fhir */
        $token = $this->getToken();
        $url = 'https://healthcare.googleapis.com/v1/projects/interconector/locations/us-central1/datasets/chile/fhirStores/eslabon/fhir/Patient';
        $response = Http::withToken($token)->get($url);
        $patientsFhir = $response->json()['entry'];

        /* Obtener pacientes desde laravel */
        $patients = Patient::all();

        return view('patients.index')
            ->withPatients($patients)
            ->withPatientsFhir($patientsFhir);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $allergies = Allergy::all();
        return view('patients.create', compact('allergies'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $token = $this->getToken();
        $url = 'https://healthcare.googleapis.com/v1/projects/interconector/locations/us-central1/datasets/chile/fhirStores/eslabon/fhir/Patient';

        $data = [
            'name' => [
                0 => [
                    'use' => 'official',
                    'family' => 'Parga',
                    'given' => [0 => 'Lorena', 1 => 'Joanna'],
                ],
            ],
            'gender' => 'female',
            'birthDate' => '1988-12-05',
            'resourceType' => 'Patient',
        ];

        $response = Http::withToken($token)->post($url, $data);


        return redirect()->route('patient.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function show(Patient $patient)
    {
        return view('patients.show',compact('patient'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function edit(Patient $patient)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Patient $patient)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function destroy(Patient $patient)
    {
        //
    }
}
