<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateNurseRequest;
use App\Http\Requests\UpdateNurseRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\NurseRepository;
use Illuminate\Http\Request;
use Flash;

class NurseController extends AppBaseController
{
    /** @var NurseRepository $nurseRepository*/
    private $nurseRepository;

    public function __construct(NurseRepository $nurseRepo)
    {
        $this->nurseRepository = $nurseRepo;
    }

    /**
     * Display a listing of the Nurse.
     */
    public function index(Request $request)
    {
        $nurses = $this->nurseRepository->paginate(10);

        return view('nurses.index')
            ->with('nurses', $nurses);
    }

    /**
     * Show the form for creating a new Nurse.
     */
    public function create()
    {
        return view('nurses.create');
    }

    /**
     * Store a newly created Nurse in storage.
     */
    public function store(CreateNurseRequest $request)
    {
        $input = $request->all();

        $nurse = $this->nurseRepository->create($input);

        Flash::success('Nurse saved successfully.');

        return redirect(route('nurses.index'));
    }

    /**
     * Display the specified Nurse.
     */
    public function show($id)
    {
        $nurse = $this->nurseRepository->find($id);

        if (empty($nurse)) {
            Flash::error('Nurse not found');

            return redirect(route('nurses.index'));
        }

        return view('nurses.show')->with('nurse', $nurse);
    }

    /**
     * Show the form for editing the specified Nurse.
     */
    public function edit($id)
    {
        $nurse = $this->nurseRepository->find($id);

        if (empty($nurse)) {
            Flash::error('Nurse not found');

            return redirect(route('nurses.index'));
        }

        return view('nurses.edit')->with('nurse', $nurse);
    }

    /**
     * Update the specified Nurse in storage.
     */
    public function update($id, UpdateNurseRequest $request)
    {
        $nurse = $this->nurseRepository->find($id);

        if (empty($nurse)) {
            Flash::error('Nurse not found');

            return redirect(route('nurses.index'));
        }

        $nurse = $this->nurseRepository->update($request->all(), $id);

        Flash::success('Nurse updated successfully.');

        return redirect(route('nurses.index'));
    }

    /**
     * Remove the specified Nurse from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $nurse = $this->nurseRepository->find($id);

        if (empty($nurse)) {
            Flash::error('Nurse not found');

            return redirect(route('nurses.index'));
        }

        $this->nurseRepository->delete($id);

        Flash::success('Nurse deleted successfully.');

        return redirect(route('nurses.index'));
    }
}
