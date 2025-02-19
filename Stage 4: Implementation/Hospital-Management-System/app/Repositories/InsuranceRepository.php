<?php

namespace App\Repositories;

use App\Models\Insurance;
use App\Repositories\BaseRepository;

class InsuranceRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'patient_id',
        'provider_name',
        'policy_number',
        'coverage_details'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Insurance::class;
    }
}
