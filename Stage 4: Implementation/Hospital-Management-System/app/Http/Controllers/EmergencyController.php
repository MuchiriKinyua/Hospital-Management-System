<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateEmergencyRequest;
use App\Http\Requests\UpdateEmergencyRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\EmergencyRepository;
use Illuminate\Http\Request;
use Flash;

class EmergencyController extends AppBaseController
{
    /** @var EmergencyRepository $emergencyRepository*/
    private $emergencyRepository;

    public function __construct(EmergencyRepository $emergencyRepo)
    {
        $this->emergencyRepository = $emergencyRepo;
    }

    /**
     * Display a listing of the Emergency.
     */
    public function index(Request $request)
    {
        $emergencies = $this->emergencyRepository->paginate(10);

        return view('emergencies.index')
            ->with('emergencies', $emergencies);
    }

    /**
     * Show the form for creating a new Emergency.
     */
    public function create()
    {
        return view('emergencies.create');
    }

    /**
     * Store a newly created Emergency in storage.
     */
    public function store(CreateEmergencyRequest $request)
    {
        $input = $request->all();

        $emergency = $this->emergencyRepository->create($input);

        Flash::success('Emergency saved successfully.');

        return redirect(route('emergencies.index'));
    }

    /**
     * Display the specified Emergency.
     */
    public function show($id)
    {
        $emergency = $this->emergencyRepository->find($id);

        if (empty($emergency)) {
            Flash::error('Emergency not found');

            return redirect(route('emergencies.index'));
        }

        return view('emergencies.show')->with('emergency', $emergency);
    }

    /**
     * Show the form for editing the specified Emergency.
     */
    public function edit($id)
    {
        $emergency = $this->emergencyRepository->find($id);

        if (empty($emergency)) {
            Flash::error('Emergency not found');

            return redirect(route('emergencies.index'));
        }

        return view('emergencies.edit')->with('emergency', $emergency);
    }

    /**
     * Update the specified Emergency in storage.
     */
    public function update($id, UpdateEmergencyRequest $request)
    {
        $emergency = $this->emergencyRepository->find($id);

        if (empty($emergency)) {
            Flash::error('Emergency not found');

            return redirect(route('emergencies.index'));
        }

        $emergency = $this->emergencyRepository->update($request->all(), $id);

        Flash::success('Emergency updated successfully.');

        return redirect(route('emergencies.index'));
    }

    /**
     * Remove the specified Emergency from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $emergency = $this->emergencyRepository->find($id);

        if (empty($emergency)) {
            Flash::error('Emergency not found');

            return redirect(route('emergencies.index'));
        }

        $this->emergencyRepository->delete($id);

        Flash::success('Emergency deleted successfully.');

        return redirect(route('emergencies.index'));
    }
}
