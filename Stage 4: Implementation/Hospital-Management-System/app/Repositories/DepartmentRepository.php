<?php

namespace App\Repositories;

use App\Models\Department;
use App\Repositories\BaseRepository;

class DepartmentRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'doctor_id',
        'name'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Department::class;
    }
}
