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
        $patients = Patient::all();

        $token = $this->getToken();
        //$token = 'ya29.a0AfH6SMCRP4OxfDlXuwWUMi6LffCw3t6DcxeRIkiMDUtMs_LDVaOyI02oI6I6wD2DPA6Q_7vQ-R-OWaiCrVW3cscVM498Lt-axa_3V5_B_W2IMyE0IBs5LUbDFRYMumul4w8SZoN5bfY9cTGlPjl5QyXVDlUwaHWROZ0';
        $url = 'https://healthcare.googleapis.com/v1/projects/interconector/locations/us-central1/datasets/chile/fhirStores/eslabon/fhir/Patient';

        $response = Http::withToken($token)->get($url);
        $fpatients = $response->json()['entry'];


        return view('patients.index')
            ->withPatients($patients)
            ->withFpatients($fpatients);
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
        //
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
