<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pharmacy extends Model
{
    public $table = 'pharmacies';

    public $fillable = [
        'medicine_name',
        'category',
        'price',
        'stock_quantity',
        'expiration_date'
    ];

    protected $casts = [
        'medicine_name' => 'string',
        'category' => 'string',
        'price' => 'string',
        'stock_quantity' => 'string',
        'expiration_date' => 'date'
    ];

    public static array $rules = [
        'medicine_name' => 'nullable|string|max:100',
        'category' => 'nullable|string|max:100',
        'price' => 'nullable|string|max:50',
        'stock_quantity' => 'nullable|string|max:20',
        'expiration_date' => 'nullable',
        'created_at' => 'required',
        'updated_at' => 'required'
    ];

    
}
