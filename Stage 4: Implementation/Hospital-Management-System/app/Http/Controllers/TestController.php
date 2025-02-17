<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTestRequest;
use App\Http\Requests\UpdateTestRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\TestRepository;
use Illuminate\Http\Request;
use Flash;

class TestController extends AppBaseController
{
    /** @var TestRepository $testRepository*/
    private $testRepository;

    public function __construct(TestRepository $testRepo)
    {
        $this->testRepository = $testRepo;
    }

    /**
     * Display a listing of the Test.
     */
    public function index(Request $request)
    {
        $tests = $this->testRepository->paginate(10);

        return view('tests.index')
            ->with('tests', $tests);
    }

    /**
     * Show the form for creating a new Test.
     */
    public function create()
    {
        return view('tests.create');
    }

    /**
     * Store a newly created Test in storage.
     */
    public function store(CreateTestRequest $request)
    {
        $input = $request->all();

        $test = $this->testRepository->create($input);

        Flash::success('Test saved successfully.');

        return redirect(route('tests.index'));
    }

    /**
     * Display the specified Test.
     */
    public function show($id)
    {
        $test = $this->testRepository->find($id);

        if (empty($test)) {
            Flash::error('Test not found');

            return redirect(route('tests.index'));
        }

        return view('tests.show')->with('test', $test);
    }

    /**
     * Show the form for editing the specified Test.
     */
    public function edit($id)
    {
        $test = $this->testRepository->find($id);

        if (empty($test)) {
            Flash::error('Test not found');

            return redirect(route('tests.index'));
        }

        return view('tests.edit')->with('test', $test);
    }

    /**
     * Update the specified Test in storage.
     */
    public function update($id, UpdateTestRequest $request)
    {
        $test = $this->testRepository->find($id);

        if (empty($test)) {
            Flash::error('Test not found');

            return redirect(route('tests.index'));
        }

        $test = $this->testRepository->update($request->all(), $id);

        Flash::success('Test updated successfully.');

        return redirect(route('tests.index'));
    }

    /**
     * Remove the specified Test from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $test = $this->testRepository->find($id);

        if (empty($test)) {
            Flash::error('Test not found');

            return redirect(route('tests.index'));
        }

        $this->testRepository->delete($id);

        Flash::success('Test deleted successfully.');

        return redirect(route('tests.index'));
    }
}
