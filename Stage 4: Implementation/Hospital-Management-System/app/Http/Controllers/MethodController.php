<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateMethodRequest;
use App\Http\Requests\UpdateMethodRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\MethodRepository;
use Illuminate\Http\Request;
use Flash;

class MethodController extends AppBaseController
{
    /** @var MethodRepository $methodRepository*/
    private $methodRepository;

    public function __construct(MethodRepository $methodRepo)
    {
        $this->methodRepository = $methodRepo;
    }

    /**
     * Display a listing of the Method.
     */
    public function index(Request $request)
    {
        $methods = $this->methodRepository->paginate(10);

        return view('methods.index')
            ->with('methods', $methods);
    }

    /**
     * Show the form for creating a new Method.
     */
    public function create()
    {
        return view('methods.create');
    }

    /**
     * Store a newly created Method in storage.
     */
    public function store(CreateMethodRequest $request)
    {
        $input = $request->all();

        $method = $this->methodRepository->create($input);

        Flash::success('Method saved successfully.');

        return redirect(route('methods.index'));
    }

    /**
     * Display the specified Method.
     */
    public function show($id)
    {
        $method = $this->methodRepository->find($id);

        if (empty($method)) {
            Flash::error('Method not found');

            return redirect(route('methods.index'));
        }

        return view('methods.show')->with('method', $method);
    }

    /**
     * Show the form for editing the specified Method.
     */
    public function edit($id)
    {
        $method = $this->methodRepository->find($id);

        if (empty($method)) {
            Flash::error('Method not found');

            return redirect(route('methods.index'));
        }

        return view('methods.edit')->with('method', $method);
    }

    /**
     * Update the specified Method in storage.
     */
    public function update($id, UpdateMethodRequest $request)
    {
        $method = $this->methodRepository->find($id);

        if (empty($method)) {
            Flash::error('Method not found');

            return redirect(route('methods.index'));
        }

        $method = $this->methodRepository->update($request->all(), $id);

        Flash::success('Method updated successfully.');

        return redirect(route('methods.index'));
    }

    /**
     * Remove the specified Method from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $method = $this->methodRepository->find($id);

        if (empty($method)) {
            Flash::error('Method not found');

            return redirect(route('methods.index'));
        }

        $this->methodRepository->delete($id);

        Flash::success('Method deleted successfully.');

        return redirect(route('methods.index'));
    }
}
