<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePatientRequest;
use App\Http\Requests\UpdatePatientRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\PatientRepository;
use Illuminate\Http\Request;
use Flash;

class PatientController extends AppBaseController
{
    /** @var PatientRepository $patientRepository*/
    private $patientRepository;

    public function __construct(PatientRepository $patientRepo)
    {
        $this->patientRepository = $patientRepo;
    }

    /**
     * Display a listing of the Patient.
     */
    public function index(Request $request)
    {
        $patients = $this->patientRepository->paginate(10);

        return view('patients.index')
            ->with('patients', $patients);
    }

    /**
     * Show the form for creating a new Patient.
     */
    public function create()
    {
        return view('patients.create');
    }


    /**
     * Display the specified Patient.
     */
    public function show($id)
    {
        $patient = $this->patientRepository->find($id);

        if (empty($patient)) {
            Flash::error('Patient not found');

            return redirect(route('patients.index'));
        }

        return view('patients.show')->with('patient', $patient);
    }

    /**
     * Show the form for editing the specified Patient.
     */
    public function edit($id)
    {
        $patient = $this->patientRepository->find($id);

        if (empty($patient)) {
            Flash::error('Patient not found');

            return redirect(route('patients.index'));
        }

        return view('patients.edit')->with('patient', $patient);
    }

    public function store(CreatePatientRequest $request)
{
    $input = $request->all();

    // Handle image upload
    if ($request->hasFile('image')) {
        $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $imageName);
        $input['image'] = $imageName;
    }

    $patient = $this->patientRepository->create($input);

    Flash::success('Patient saved successfully.');

    return redirect(route('patients.index'));
}

public function update($id, UpdatePatientRequest $request)
{
    $patient = $this->patientRepository->find($id);

    if (empty($patient)) {
        Flash::error('Patient not found');
        return redirect(route('patients.index'));
    }

    $input = $request->all();

    // Handle image upload
    if ($request->hasFile('image')) {
        $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        // Delete old image
        if ($patient->image && file_exists(public_path('images/' . $patient->image))) {
            unlink(public_path('images/' . $patient->image));
        }

        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $imageName);
        $input['image'] = $imageName;
    }

    $patient = $this->patientRepository->update($input, $id);

    Flash::success('Patient updated successfully.');

    return redirect(route('patients.index'));
}


    /**
     * Remove the specified Patient from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $patient = $this->patientRepository->find($id);

        if (empty($patient)) {
            Flash::error('Patient not found');

            return redirect(route('patients.index'));
        }

        $this->patientRepository->delete($id);

        Flash::success('Patient deleted successfully.');

        return redirect(route('patients.index'));
    }
}
