<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePrescriptionRequest;
use App\Http\Requests\UpdatePrescriptionRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\PrescriptionRepository;
use Illuminate\Http\Request;
use Flash;

class PrescriptionController extends AppBaseController
{
    /** @var PrescriptionRepository $prescriptionRepository*/
    private $prescriptionRepository;

    public function __construct(PrescriptionRepository $prescriptionRepo)
    {
        $this->prescriptionRepository = $prescriptionRepo;
    }

    /**
     * Display a listing of the Prescription.
     */
    public function index(Request $request)
    {
        $prescriptions = $this->prescriptionRepository->paginate(10);

        return view('prescriptions.index')
            ->with('prescriptions', $prescriptions);
    }

    /**
     * Show the form for creating a new Prescription.
     */
    public function create()
    {
        return view('prescriptions.create');
    }

    /**
     * Store a newly created Prescription in storage.
     */
    public function store(CreatePrescriptionRequest $request)
    {
        $input = $request->all();

        $prescription = $this->prescriptionRepository->create($input);

        Flash::success('Prescription saved successfully.');

        return redirect(route('prescriptions.index'));
    }

    /**
     * Display the specified Prescription.
     */
    public function show($id)
    {
        $prescription = $this->prescriptionRepository->find($id);

        if (empty($prescription)) {
            Flash::error('Prescription not found');

            return redirect(route('prescriptions.index'));
        }

        return view('prescriptions.show')->with('prescription', $prescription);
    }

    /**
     * Show the form for editing the specified Prescription.
     */
    public function edit($id)
    {
        $prescription = $this->prescriptionRepository->find($id);

        if (empty($prescription)) {
            Flash::error('Prescription not found');

            return redirect(route('prescriptions.index'));
        }

        return view('prescriptions.edit')->with('prescription', $prescription);
    }

    /**
     * Update the specified Prescription in storage.
     */
    public function update($id, UpdatePrescriptionRequest $request)
    {
        $prescription = $this->prescriptionRepository->find($id);

        if (empty($prescription)) {
            Flash::error('Prescription not found');

            return redirect(route('prescriptions.index'));
        }

        $prescription = $this->prescriptionRepository->update($request->all(), $id);

        Flash::success('Prescription updated successfully.');

        return redirect(route('prescriptions.index'));
    }

    /**
     * Remove the specified Prescription from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $prescription = $this->prescriptionRepository->find($id);

        if (empty($prescription)) {
            Flash::error('Prescription not found');

            return redirect(route('prescriptions.index'));
        }

        $this->prescriptionRepository->delete($id);

        Flash::success('Prescription deleted successfully.');

        return redirect(route('prescriptions.index'));
    }
}
