<?php

namespace App\Repositories;

use App\Models\Result;
use App\Repositories\BaseRepository;

class ResultRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'doctor_id',
        'patient_id',
        'test_name',
        'result'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Result::class;
    }
}
