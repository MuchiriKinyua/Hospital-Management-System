<?php

namespace App\Repositories;

use App\Models\Schedule;
use App\Repositories\BaseRepository;

class ScheduleRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'doctor_id',
        'available_days',
        'start_time',
        'end_time'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Schedule::class;
    }
}
