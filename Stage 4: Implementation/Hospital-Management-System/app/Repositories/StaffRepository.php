<?php

namespace App\Repositories;

use App\Models\Staff;
use App\Repositories\BaseRepository;

class StaffRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'full_name',
        'role',
        'phone',
        'email',
        'salary',
        'shift'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Staff::class;
    }
}
