<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePerformanceRequest;
use App\Http\Requests\UpdatePerformanceRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\PerformanceRepository;
use Illuminate\Http\Request;
use Flash;

class PerformanceController extends AppBaseController
{
    /** @var PerformanceRepository $performanceRepository*/
    private $performanceRepository;

    public function __construct(PerformanceRepository $performanceRepo)
    {
        $this->performanceRepository = $performanceRepo;
    }

    /**
     * Display a listing of the Performance.
     */
    public function index(Request $request)
    {
        $performances = $this->performanceRepository->paginate(10);

        return view('performances.index')
            ->with('performances', $performances);
    }

    /**
     * Show the form for creating a new Performance.
     */
    public function create()
    {
        return view('performances.create');
    }

    /**
     * Store a newly created Performance in storage.
     */
    public function store(CreatePerformanceRequest $request)
    {
        $input = $request->all();

        $performance = $this->performanceRepository->create($input);

        Flash::success('Performance saved successfully.');

        return redirect(route('performances.index'));
    }

    /**
     * Display the specified Performance.
     */
    public function show($id)
    {
        $performance = $this->performanceRepository->find($id);

        if (empty($performance)) {
            Flash::error('Performance not found');

            return redirect(route('performances.index'));
        }

        return view('performances.show')->with('performance', $performance);
    }

    /**
     * Show the form for editing the specified Performance.
     */
    public function edit($id)
    {
        $performance = $this->performanceRepository->find($id);

        if (empty($performance)) {
            Flash::error('Performance not found');

            return redirect(route('performances.index'));
        }

        return view('performances.edit')->with('performance', $performance);
    }

    /**
     * Update the specified Performance in storage.
     */
    public function update($id, UpdatePerformanceRequest $request)
    {
        $performance = $this->performanceRepository->find($id);

        if (empty($performance)) {
            Flash::error('Performance not found');

            return redirect(route('performances.index'));
        }

        $performance = $this->performanceRepository->update($request->all(), $id);

        Flash::success('Performance updated successfully.');

        return redirect(route('performances.index'));
    }

    /**
     * Remove the specified Performance from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $performance = $this->performanceRepository->find($id);

        if (empty($performance)) {
            Flash::error('Performance not found');

            return redirect(route('performances.index'));
        }

        $this->performanceRepository->delete($id);

        Flash::success('Performance deleted successfully.');

        return redirect(route('performances.index'));
    }
}
