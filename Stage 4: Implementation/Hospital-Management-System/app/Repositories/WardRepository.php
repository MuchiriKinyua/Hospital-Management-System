<?php

namespace App\Repositories;

use App\Models\Ward;
use App\Repositories\BaseRepository;

class WardRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'patient_id',
        'doctor_id',
        'ward_name',
        'room_number',
        'status'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Ward::class;
    }
}
