<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateWardRequest;
use App\Http\Requests\UpdateWardRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\WardRepository;
use Illuminate\Http\Request;
use Flash;

class WardController extends AppBaseController
{
    /** @var WardRepository $wardRepository*/
    private $wardRepository;

    public function __construct(WardRepository $wardRepo)
    {
        $this->wardRepository = $wardRepo;
    }

    /**
     * Display a listing of the Ward.
     */
    public function index(Request $request)
    {
        $wards = $this->wardRepository->paginate(10);

        return view('wards.index')
            ->with('wards', $wards);
    }

    /**
     * Show the form for creating a new Ward.
     */
    public function create()
    {
        return view('wards.create');
    }

    /**
     * Store a newly created Ward in storage.
     */
    public function store(CreateWardRequest $request)
    {
        $input = $request->all();

        $ward = $this->wardRepository->create($input);

        Flash::success('Ward saved successfully.');

        return redirect(route('wards.index'));
    }

    /**
     * Display the specified Ward.
     */
    public function show($id)
    {
        $ward = $this->wardRepository->find($id);

        if (empty($ward)) {
            Flash::error('Ward not found');

            return redirect(route('wards.index'));
        }

        return view('wards.show')->with('ward', $ward);
    }

    /**
     * Show the form for editing the specified Ward.
     */
    public function edit($id)
    {
        $ward = $this->wardRepository->find($id);

        if (empty($ward)) {
            Flash::error('Ward not found');

            return redirect(route('wards.index'));
        }

        return view('wards.edit')->with('ward', $ward);
    }

    /**
     * Update the specified Ward in storage.
     */
    public function update($id, UpdateWardRequest $request)
    {
        $ward = $this->wardRepository->find($id);

        if (empty($ward)) {
            Flash::error('Ward not found');

            return redirect(route('wards.index'));
        }

        $ward = $this->wardRepository->update($request->all(), $id);

        Flash::success('Ward updated successfully.');

        return redirect(route('wards.index'));
    }

    /**
     * Remove the specified Ward from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $ward = $this->wardRepository->find($id);

        if (empty($ward)) {
            Flash::error('Ward not found');

            return redirect(route('wards.index'));
        }

        $this->wardRepository->delete($id);

        Flash::success('Ward deleted successfully.');

        return redirect(route('wards.index'));
    }
}
