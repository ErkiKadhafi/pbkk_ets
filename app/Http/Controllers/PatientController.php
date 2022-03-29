<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use App\Http\Requests\StorePatientRequest;
use App\Http\Requests\UpdatePatientRequest;
use App\Models\Doctor;
use App\Models\Human;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Patient::all();
        return view('home', ['patients' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $person = Human::all();
        $doctors = Doctor::all();
        return view('formPatient', ['person' => $person, 'doctors' => $doctors]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePatientRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate(([
            'patient' => "required",
            'doctor' => 'required',
            'health_condition' => 'required',
            'temperature' => 'required|numeric|between:35,45.5',
            'image' => "required|image|mimes:jpg,png,jpeg|max:2056",
        ]));
        
        $imgName = $request->file('image')->getClientOriginalName();
        // dd($imgName->getClientOriginalName());

        $request->file('image')->storeAs('public/img', $imgName);
        Patient::create([
            'human_id' => $request->patient,
            'doctor_id' => $request->doctor,
            'condition' => $request->health_condition,
            'temperature' => $request->temperature,
            'img' => $imgName,
        ]);
        return redirect()->route('index')->with('success', 'Data pasien telah disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function show(Patient $patient)
    {
        // dd($patient);
        return view('detailPatient', ['patient' => $patient]);
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
     * @param  \App\Http\Requests\UpdatePatientRequest  $request
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePatientRequest $request, Patient $patient)
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
