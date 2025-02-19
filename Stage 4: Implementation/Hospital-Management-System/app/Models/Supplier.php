<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    public $table = 'suppliers';

    public $fillable = [
        'full_name',
        'contact',
        'address'
    ];

    protected $casts = [
        'full_name' => 'string',
        'contact' => 'string',
        'address' => 'string'
    ];

    public static array $rules = [
        'full_name' => 'nullable|string|max:100',
        'contact' => 'nullable|string|max:50',
        'address' => 'nullable|string|max:100',
        'created_at' => 'required',
        'updated_at' => 'required'
    ];

    public function orders(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\Order::class, 'supplier_id');
    }
}
