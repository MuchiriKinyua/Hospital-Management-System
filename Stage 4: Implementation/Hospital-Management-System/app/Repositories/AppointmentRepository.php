<?php

namespace App\Repositories;

use App\Models\Appointment;
use App\Repositories\BaseRepository;

class AppointmentRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'name',
        'email',
        'phone',
        'doctor',
        'date',
        'message',
        'status',
        'user_id'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Appointment::class;
    }
}
