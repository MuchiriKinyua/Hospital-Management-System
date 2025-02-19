<?php

namespace App\Repositories;

use App\Models\Prescription;
use App\Repositories\BaseRepository;

class PrescriptionRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'patient_id',
        'doctor_id',
        'medicine',
        'dosage',
        'duration',
        'instructions'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Prescription::class;
    }
}
