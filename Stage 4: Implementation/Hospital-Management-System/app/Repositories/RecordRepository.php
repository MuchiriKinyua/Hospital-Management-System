<?php

namespace App\Repositories;

use App\Models\Record;
use App\Repositories\BaseRepository;

class RecordRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'patient_id',
        'doctor_id',
        'diagnosis',
        'treatment_plan',
        'prescription',
        'visit_date'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Record::class;
    }
}
