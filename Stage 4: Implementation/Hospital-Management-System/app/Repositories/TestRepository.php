<?php

namespace App\Repositories;

use App\Models\Test;
use App\Repositories\BaseRepository;

class TestRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'patient_id',
        'doctor_id',
        'test_name',
        'test_result',
        'test_date',
        'status'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Test::class;
    }
}
