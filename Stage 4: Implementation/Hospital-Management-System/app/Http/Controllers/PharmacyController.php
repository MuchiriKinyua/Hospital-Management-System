<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePharmacyRequest;
use App\Http\Requests\UpdatePharmacyRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\PharmacyRepository;
use Illuminate\Http\Request;
use Flash;

class PharmacyController extends AppBaseController
{
    /** @var PharmacyRepository $pharmacyRepository*/
    private $pharmacyRepository;

    public function __construct(PharmacyRepository $pharmacyRepo)
    {
        $this->pharmacyRepository = $pharmacyRepo;
    }

    /**
     * Display a listing of the Pharmacy.
     */
    public function index(Request $request)
    {
        $pharmacies = $this->pharmacyRepository->paginate(10);

        return view('pharmacies.index')
            ->with('pharmacies', $pharmacies);
    }

    /**
     * Show the form for creating a new Pharmacy.
     */
    public function create()
    {
        return view('pharmacies.create');
    }

    /**
     * Store a newly created Pharmacy in storage.
     */
    public function store(CreatePharmacyRequest $request)
    {
        $input = $request->all();

        $pharmacy = $this->pharmacyRepository->create($input);

        Flash::success('Pharmacy saved successfully.');

        return redirect(route('pharmacies.index'));
    }

    /**
     * Display the specified Pharmacy.
     */
    public function show($id)
    {
        $pharmacy = $this->pharmacyRepository->find($id);

        if (empty($pharmacy)) {
            Flash::error('Pharmacy not found');

            return redirect(route('pharmacies.index'));
        }

        return view('pharmacies.show')->with('pharmacy', $pharmacy);
    }

    /**
     * Show the form for editing the specified Pharmacy.
     */
    public function edit($id)
    {
        $pharmacy = $this->pharmacyRepository->find($id);

        if (empty($pharmacy)) {
            Flash::error('Pharmacy not found');

            return redirect(route('pharmacies.index'));
        }

        return view('pharmacies.edit')->with('pharmacy', $pharmacy);
    }

    /**
     * Update the specified Pharmacy in storage.
     */
    public function update($id, UpdatePharmacyRequest $request)
    {
        $pharmacy = $this->pharmacyRepository->find($id);

        if (empty($pharmacy)) {
            Flash::error('Pharmacy not found');

            return redirect(route('pharmacies.index'));
        }

        $pharmacy = $this->pharmacyRepository->update($request->all(), $id);

        Flash::success('Pharmacy updated successfully.');

        return redirect(route('pharmacies.index'));
    }

    /**
     * Remove the specified Pharmacy from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $pharmacy = $this->pharmacyRepository->find($id);

        if (empty($pharmacy)) {
            Flash::error('Pharmacy not found');

            return redirect(route('pharmacies.index'));
        }

        $this->pharmacyRepository->delete($id);

        Flash::success('Pharmacy deleted successfully.');

        return redirect(route('pharmacies.index'));
    }
}
