<?php

namespace App\Repositories;

use App\Models\Billing;
use App\Repositories\BaseRepository;

class BillingRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'patient_id',
        'appointment_id',
        'amount',
        'payment_status',
        'payment_method',
        'invoice_date'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Billing::class;
    }
}
