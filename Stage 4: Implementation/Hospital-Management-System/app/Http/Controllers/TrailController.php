<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTrailRequest;
use App\Http\Requests\UpdateTrailRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\TrailRepository;
use Illuminate\Http\Request;
use Flash;

class TrailController extends AppBaseController
{
    /** @var TrailRepository $trailRepository*/
    private $trailRepository;

    public function __construct(TrailRepository $trailRepo)
    {
        $this->trailRepository = $trailRepo;
    }

    /**
     * Display a listing of the Trail.
     */
    public function index(Request $request)
    {
        $trails = $this->trailRepository->paginate(10);

        return view('trails.index')
            ->with('trails', $trails);
    }

    /**
     * Show the form for creating a new Trail.
     */
    public function create()
    {
        return view('trails.create');
    }

    /**
     * Store a newly created Trail in storage.
     */
    public function store(CreateTrailRequest $request)
    {
        $input = $request->all();

        $trail = $this->trailRepository->create($input);

        Flash::success('Trail saved successfully.');

        return redirect(route('trails.index'));
    }

    /**
     * Display the specified Trail.
     */
    public function show($id)
    {
        $trail = $this->trailRepository->find($id);

        if (empty($trail)) {
            Flash::error('Trail not found');

            return redirect(route('trails.index'));
        }

        return view('trails.show')->with('trail', $trail);
    }

    /**
     * Show the form for editing the specified Trail.
     */
    public function edit($id)
    {
        $trail = $this->trailRepository->find($id);

        if (empty($trail)) {
            Flash::error('Trail not found');

            return redirect(route('trails.index'));
        }

        return view('trails.edit')->with('trail', $trail);
    }

    /**
     * Update the specified Trail in storage.
     */
    public function update($id, UpdateTrailRequest $request)
    {
        $trail = $this->trailRepository->find($id);

        if (empty($trail)) {
            Flash::error('Trail not found');

            return redirect(route('trails.index'));
        }

        $trail = $this->trailRepository->update($request->all(), $id);

        Flash::success('Trail updated successfully.');

        return redirect(route('trails.index'));
    }

    /**
     * Remove the specified Trail from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $trail = $this->trailRepository->find($id);

        if (empty($trail)) {
            Flash::error('Trail not found');

            return redirect(route('trails.index'));
        }

        $this->trailRepository->delete($id);

        Flash::success('Trail deleted successfully.');

        return redirect(route('trails.index'));
    }
}
