<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTechnicianRequest;
use App\Http\Requests\UpdateTechnicianRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\TechnicianRepository;
use Illuminate\Http\Request;
use Flash;

class TechnicianController extends AppBaseController
{
    /** @var TechnicianRepository $technicianRepository*/
    private $technicianRepository;

    public function __construct(TechnicianRepository $technicianRepo)
    {
        $this->technicianRepository = $technicianRepo;
    }

    /**
     * Display a listing of the Technician.
     */
    public function index(Request $request)
    {
        $technicians = $this->technicianRepository->paginate(10);

        return view('technicians.index')
            ->with('technicians', $technicians);
    }

    /**
     * Show the form for creating a new Technician.
     */
    public function create()
    {
        return view('technicians.create');
    }

    /**
     * Store a newly created Technician in storage.
     */
    public function store(CreateTechnicianRequest $request)
    {
        $input = $request->all();

        $technician = $this->technicianRepository->create($input);

        Flash::success('Technician saved successfully.');

        return redirect(route('technicians.index'));
    }

    /**
     * Display the specified Technician.
     */
    public function show($id)
    {
        $technician = $this->technicianRepository->find($id);

        if (empty($technician)) {
            Flash::error('Technician not found');

            return redirect(route('technicians.index'));
        }

        return view('technicians.show')->with('technician', $technician);
    }

    /**
     * Show the form for editing the specified Technician.
     */
    public function edit($id)
    {
        $technician = $this->technicianRepository->find($id);

        if (empty($technician)) {
            Flash::error('Technician not found');

            return redirect(route('technicians.index'));
        }

        return view('technicians.edit')->with('technician', $technician);
    }

    /**
     * Update the specified Technician in storage.
     */
    public function update($id, UpdateTechnicianRequest $request)
    {
        $technician = $this->technicianRepository->find($id);

        if (empty($technician)) {
            Flash::error('Technician not found');

            return redirect(route('technicians.index'));
        }

        $technician = $this->technicianRepository->update($request->all(), $id);

        Flash::success('Technician updated successfully.');

        return redirect(route('technicians.index'));
    }

    /**
     * Remove the specified Technician from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $technician = $this->technicianRepository->find($id);

        if (empty($technician)) {
            Flash::error('Technician not found');

            return redirect(route('technicians.index'));
        }

        $this->technicianRepository->delete($id);

        Flash::success('Technician deleted successfully.');

        return redirect(route('technicians.index'));
    }
}
