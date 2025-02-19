<?php

namespace App\Repositories;

use App\Models\Admission;
use App\Repositories\BaseRepository;

class AdmissionRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'ward_id',
        'patient_id',
        'admitted_by',
        'reason',
        'admission_date',
        'discharge_date'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Admission::class;
    }
}
