<?php

namespace App\Repositories;

use App\Models\Technician;
use App\Repositories\BaseRepository;

class TechnicianRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'department_id',
        'full_name',
        'speciality',
        'phone',
        'email'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Technician::class;
    }
}
