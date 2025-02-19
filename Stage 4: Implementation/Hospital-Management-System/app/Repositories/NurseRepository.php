<?php

namespace App\Repositories;

use App\Models\Nurse;
use App\Repositories\BaseRepository;

class NurseRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'department_id',
        'doctor_id',
        'full_name',
        'phone',
        'email'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Nurse::class;
    }
}
