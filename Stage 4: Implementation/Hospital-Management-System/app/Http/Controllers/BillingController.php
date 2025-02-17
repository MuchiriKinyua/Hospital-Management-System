<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateBillingRequest;
use App\Http\Requests\UpdateBillingRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\BillingRepository;
use Illuminate\Http\Request;
use Flash;

class BillingController extends AppBaseController
{
    /** @var BillingRepository $billingRepository*/
    private $billingRepository;

    public function __construct(BillingRepository $billingRepo)
    {
        $this->billingRepository = $billingRepo;
    }

    /**
     * Display a listing of the Billing.
     */
    public function index(Request $request)
    {
        $billings = $this->billingRepository->paginate(10);

        return view('billings.index')
            ->with('billings', $billings);
    }

    /**
     * Show the form for creating a new Billing.
     */
    public function create()
    {
        return view('billings.create');
    }

    /**
     * Store a newly created Billing in storage.
     */
    public function store(CreateBillingRequest $request)
    {
        $input = $request->all();

        $billing = $this->billingRepository->create($input);

        Flash::success('Billing saved successfully.');

        return redirect(route('billings.index'));
    }

    /**
     * Display the specified Billing.
     */
    public function show($id)
    {
        $billing = $this->billingRepository->find($id);

        if (empty($billing)) {
            Flash::error('Billing not found');

            return redirect(route('billings.index'));
        }

        return view('billings.show')->with('billing', $billing);
    }

    /**
     * Show the form for editing the specified Billing.
     */
    public function edit($id)
    {
        $billing = $this->billingRepository->find($id);

        if (empty($billing)) {
            Flash::error('Billing not found');

            return redirect(route('billings.index'));
        }

        return view('billings.edit')->with('billing', $billing);
    }

    /**
     * Update the specified Billing in storage.
     */
    public function update($id, UpdateBillingRequest $request)
    {
        $billing = $this->billingRepository->find($id);

        if (empty($billing)) {
            Flash::error('Billing not found');

            return redirect(route('billings.index'));
        }

        $billing = $this->billingRepository->update($request->all(), $id);

        Flash::success('Billing updated successfully.');

        return redirect(route('billings.index'));
    }

    /**
     * Remove the specified Billing from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $billing = $this->billingRepository->find($id);

        if (empty($billing)) {
            Flash::error('Billing not found');

            return redirect(route('billings.index'));
        }

        $this->billingRepository->delete($id);

        Flash::success('Billing deleted successfully.');

        return redirect(route('billings.index'));
    }
}
