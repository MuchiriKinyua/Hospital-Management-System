<?php

namespace App\Repositories;

use App\Models\Staff;
use App\Repositories\BaseRepository;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

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


    public function paginate(int $perPage, array $columns = ['*']): LengthAwarePaginator
    {
        return Staff::paginate($perPage, $columns);
    }
    

}
