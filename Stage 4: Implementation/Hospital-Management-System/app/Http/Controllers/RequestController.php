<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateRequestRequest;
use App\Http\Requests\UpdateRequestRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\RequestRepository;
use Illuminate\Http\Request;
use Flash;

class RequestController extends AppBaseController
{
    /** @var RequestRepository $requestRepository*/
    private $requestRepository;

    public function __construct(RequestRepository $requestRepo)
    {
        $this->requestRepository = $requestRepo;
    }

    /**
     * Display a listing of the Request.
     */
    public function index(Request $request)
    {
        $requests = $this->requestRepository->paginate(10);

        return view('requests.index')
            ->with('requests', $requests);
    }

    /**
     * Show the form for creating a new Request.
     */
    public function create()
    {
        return view('requests.create');
    }

    /**
     * Store a newly created Request in storage.
     */
    public function store(CreateRequestRequest $request)
    {
        $input = $request->all();

        $request = $this->requestRepository->create($input);

        Flash::success('Request saved successfully.');

        return redirect(route('requests.index'));
    }

    /**
     * Display the specified Request.
     */
    public function show($id)
    {
        $request = $this->requestRepository->find($id);

        if (empty($request)) {
            Flash::error('Request not found');

            return redirect(route('requests.index'));
        }

        return view('requests.show')->with('request', $request);
    }

    /**
     * Show the form for editing the specified Request.
     */
    public function edit($id)
    {
        $request = $this->requestRepository->find($id);

        if (empty($request)) {
            Flash::error('Request not found');

            return redirect(route('requests.index'));
        }

        return view('requests.edit')->with('request', $request);
    }

    /**
     * Update the specified Request in storage.
     */
    public function update($id, UpdateRequestRequest $request)
    {
        $request = $this->requestRepository->find($id);

        if (empty($request)) {
            Flash::error('Request not found');

            return redirect(route('requests.index'));
        }

        $request = $this->requestRepository->update($request->all(), $id);

        Flash::success('Request updated successfully.');

        return redirect(route('requests.index'));
    }

    /**
     * Remove the specified Request from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $request = $this->requestRepository->find($id);

        if (empty($request)) {
            Flash::error('Request not found');

            return redirect(route('requests.index'));
        }

        $this->requestRepository->delete($id);

        Flash::success('Request deleted successfully.');

        return redirect(route('requests.index'));
    }
}
