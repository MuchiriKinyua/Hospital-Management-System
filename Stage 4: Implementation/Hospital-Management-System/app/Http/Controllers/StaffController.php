<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateStaffRequest;
use App\Http\Requests\UpdateStaffRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\StaffRepository;
use Illuminate\Http\Request;
use Flash;

class StaffController extends AppBaseController
{
    /** @var StaffRepository $staffRepository*/
    private $staffRepository;

    public function __construct(StaffRepository $staffRepo)
    {
        $this->staffRepository = $staffRepo;
    }

    /**
     * Display a listing of the Staff.
     */
    public function index(Request $request)
    {
        $staff = $this->staffRepository->paginate(10);

        return view('staff.index')
            ->with('staff', $staff);
    }

    /**
     * Show the form for creating a new Staff.
     */
    public function create()
    {
        return view('staff.create');
    }

    /**
     * Store a newly created Staff in storage.
     */
    public function store(CreateStaffRequest $request)
    {
        $input = $request->all();

        $staff = $this->staffRepository->create($input);

        Flash::success('Staff saved successfully.');

        return redirect(route('staff.index'));
    }

    /**
     * Display the specified Staff.
     */
    public function show($id)
    {
        $staff = $this->staffRepository->find($id);

        if (empty($staff)) {
            Flash::error('Staff not found');

            return redirect(route('staff.index'));
        }

        return view('staff.show')->with('staff', $staff);
    }

    /**
     * Show the form for editing the specified Staff.
     */
    public function edit($id)
    {
        $staff = $this->staffRepository->find($id);

        if (empty($staff)) {
            Flash::error('Staff not found');

            return redirect(route('staff.index'));
        }

        return view('staff.edit')->with('staff', $staff);
    }

    /**
     * Update the specified Staff in storage.
     */
    public function update($id, UpdateStaffRequest $request)
    {
        $staff = $this->staffRepository->find($id);

        if (empty($staff)) {
            Flash::error('Staff not found');

            return redirect(route('staff.index'));
        }

        $staff = $this->staffRepository->update($request->all(), $id);

        Flash::success('Staff updated successfully.');

        return redirect(route('staff.index'));
    }

    /**
     * Remove the specified Staff from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $staff = $this->staffRepository->find($id);

        if (empty($staff)) {
            Flash::error('Staff not found');

            return redirect(route('staff.index'));
        }

        $this->staffRepository->delete($id);

        Flash::success('Staff deleted successfully.');

        return redirect(route('staff.index'));
    }
}
