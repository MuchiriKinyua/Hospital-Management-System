<?php

namespace App\Repositories;

use App\Models\Patient;
use App\Repositories\BaseRepository;

class PatientRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'full_name',
        'dob',
        'gender',
        'phone',
        'email',
        'address',
        'blood_type',
        'allergies',
        'medical_history'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Patient::class;
    }
}
