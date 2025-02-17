<?php

namespace App\Repositories;

use App\Models\Pharmacy;
use App\Repositories\BaseRepository;

class PharmacyRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'medicine_name',
        'category',
        'price',
        'stock_quantity',
        'expiration_date'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Pharmacy::class;
    }
}
