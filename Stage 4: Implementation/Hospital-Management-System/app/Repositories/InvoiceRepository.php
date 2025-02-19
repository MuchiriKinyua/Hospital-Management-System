<?php

namespace App\Repositories;

use App\Models\Invoice;
use App\Repositories\BaseRepository;

class InvoiceRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'billing_id',
        'patient_id',
        'service',
        'amount',
        'issued_by'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Invoice::class;
    }
}
