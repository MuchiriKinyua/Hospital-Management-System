<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateInsuranceRequest;
use App\Http\Requests\UpdateInsuranceRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\InsuranceRepository;
use Illuminate\Http\Request;
use Flash;

class InsuranceController extends AppBaseController
{
    /** @var InsuranceRepository $insuranceRepository*/
    private $insuranceRepository;

    public function __construct(InsuranceRepository $insuranceRepo)
    {
        $this->insuranceRepository = $insuranceRepo;
    }

    /**
     * Display a listing of the Insurance.
     */
    public function index(Request $request)
    {
        $insurances = $this->insuranceRepository->paginate(10);

        return view('insurances.index')
            ->with('insurances', $insurances);
    }

    /**
     * Show the form for creating a new Insurance.
     */
    public function create()
    {
        return view('insurances.create');
    }

    /**
     * Store a newly created Insurance in storage.
     */
    public function store(CreateInsuranceRequest $request)
    {
        $input = $request->all();

        $insurance = $this->insuranceRepository->create($input);

        Flash::success('Insurance saved successfully.');

        return redirect(route('insurances.index'));
    }

    /**
     * Display the specified Insurance.
     */
    public function show($id)
    {
        $insurance = $this->insuranceRepository->find($id);

        if (empty($insurance)) {
            Flash::error('Insurance not found');

            return redirect(route('insurances.index'));
        }

        return view('insurances.show')->with('insurance', $insurance);
    }

    /**
     * Show the form for editing the specified Insurance.
     */
    public function edit($id)
    {
        $insurance = $this->insuranceRepository->find($id);

        if (empty($insurance)) {
            Flash::error('Insurance not found');

            return redirect(route('insurances.index'));
        }

        return view('insurances.edit')->with('insurance', $insurance);
    }

    /**
     * Update the specified Insurance in storage.
     */
    public function update($id, UpdateInsuranceRequest $request)
    {
        $insurance = $this->insuranceRepository->find($id);

        if (empty($insurance)) {
            Flash::error('Insurance not found');

            return redirect(route('insurances.index'));
        }

        $insurance = $this->insuranceRepository->update($request->all(), $id);

        Flash::success('Insurance updated successfully.');

        return redirect(route('insurances.index'));
    }

    /**
     * Remove the specified Insurance from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $insurance = $this->insuranceRepository->find($id);

        if (empty($insurance)) {
            Flash::error('Insurance not found');

            return redirect(route('insurances.index'));
        }

        $this->insuranceRepository->delete($id);

        Flash::success('Insurance deleted successfully.');

        return redirect(route('insurances.index'));
    }
}
