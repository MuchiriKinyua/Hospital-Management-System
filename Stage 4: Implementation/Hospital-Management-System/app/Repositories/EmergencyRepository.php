<?php

namespace App\Repositories;

use App\Models\Emergency;
use App\Repositories\BaseRepository;

class EmergencyRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'patient_id',
        'full_name',
        'role',
        'phone'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Emergency::class;
    }
}
