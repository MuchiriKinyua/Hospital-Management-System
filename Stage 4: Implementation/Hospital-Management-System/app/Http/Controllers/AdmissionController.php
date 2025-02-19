<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAdmissionRequest;
use App\Http\Requests\UpdateAdmissionRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\AdmissionRepository;
use Illuminate\Http\Request;
use Flash;

class AdmissionController extends AppBaseController
{
    /** @var AdmissionRepository $admissionRepository*/
    private $admissionRepository;

    public function __construct(AdmissionRepository $admissionRepo)
    {
        $this->admissionRepository = $admissionRepo;
    }

    /**
     * Display a listing of the Admission.
     */
    public function index(Request $request)
    {
        $admissions = $this->admissionRepository->paginate(10);

        return view('admissions.index')
            ->with('admissions', $admissions);
    }

    /**
     * Show the form for creating a new Admission.
     */
    public function create()
    {
        return view('admissions.create');
    }

    /**
     * Store a newly created Admission in storage.
     */
    public function store(CreateAdmissionRequest $request)
    {
        $input = $request->all();

        $admission = $this->admissionRepository->create($input);

        Flash::success('Admission saved successfully.');

        return redirect(route('admissions.index'));
    }

    /**
     * Display the specified Admission.
     */
    public function show($id)
    {
        $admission = $this->admissionRepository->find($id);

        if (empty($admission)) {
            Flash::error('Admission not found');

            return redirect(route('admissions.index'));
        }

        return view('admissions.show')->with('admission', $admission);
    }

    /**
     * Show the form for editing the specified Admission.
     */
    public function edit($id)
    {
        $admission = $this->admissionRepository->find($id);

        if (empty($admission)) {
            Flash::error('Admission not found');

            return redirect(route('admissions.index'));
        }

        return view('admissions.edit')->with('admission', $admission);
    }

    /**
     * Update the specified Admission in storage.
     */
    public function update($id, UpdateAdmissionRequest $request)
    {
        $admission = $this->admissionRepository->find($id);

        if (empty($admission)) {
            Flash::error('Admission not found');

            return redirect(route('admissions.index'));
        }

        $admission = $this->admissionRepository->update($request->all(), $id);

        Flash::success('Admission updated successfully.');

        return redirect(route('admissions.index'));
    }

    /**
     * Remove the specified Admission from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $admission = $this->admissionRepository->find($id);

        if (empty($admission)) {
            Flash::error('Admission not found');

            return redirect(route('admissions.index'));
        }

        $this->admissionRepository->delete($id);

        Flash::success('Admission deleted successfully.');

        return redirect(route('admissions.index'));
    }
}
