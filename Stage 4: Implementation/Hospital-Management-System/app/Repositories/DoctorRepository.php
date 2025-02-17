<?php

namespace App\Repositories;

use App\Models\Doctor;
use App\Repositories\BaseRepository;

class DoctorRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'name',
        'phone',
        'room',
        'speciality',
        'image'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Doctor::class;
    }
}
