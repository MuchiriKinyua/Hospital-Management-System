<?php

namespace App\Repositories;

use App\Models\Trail;
use App\Repositories\BaseRepository;

class TrailRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'user_id',
        'action'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Trail::class;
    }
}
