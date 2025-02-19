<?php

namespace App\Repositories;

use App\Models\Performance;
use App\Repositories\BaseRepository;

class PerformanceRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'doctor_id',
        'patient_count',
        'avg_consultation_time'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Performance::class;
    }
}
