<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public $table = 'orders';

    public $fillable = [
        'supplier_id',
        'order_date',
        'amount'
    ];

    protected $casts = [
        'order_date' => 'datetime',
        'amount' => 'string'
    ];

    public static array $rules = [
        'supplier_id' => 'nullable',
        'order_date' => 'nullable',
        'amount' => 'nullable|string|max:100',
        'created_at' => 'required',
        'updated_at' => 'required'
    ];

    public function supplier(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Supplier::class, 'supplier_id');
    }
}
