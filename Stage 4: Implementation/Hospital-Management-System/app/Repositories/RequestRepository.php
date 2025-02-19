<?php

namespace App\Repositories;

use App\Models\Request;
use App\Repositories\BaseRepository;

class RequestRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'equipment',
        'issue',
        'reported_by',
        'status'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Request::class;
    }
}
