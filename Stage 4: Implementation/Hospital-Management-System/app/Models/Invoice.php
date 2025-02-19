<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    public $table = 'invoices';

    public $fillable = [
        'billing_id',
        'patient_id',
        'service',
        'amount',
        'issued_by'
    ];

    protected $casts = [
        'service' => 'string',
        'amount' => 'string',
        'issued_by' => 'string'
    ];

    public static array $rules = [
        'billing_id' => 'nullable',
        'patient_id' => 'nullable',
        'service' => 'nullable|string|max:600',
        'amount' => 'nullable|string|max:50',
        'issued_by' => 'nullable|string|max:100',
        'created_at' => 'required',
        'updated_at' => 'required'
    ];

    public function billing(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Billing::class, 'billing_id');
    }

    public function patient(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Patient::class, 'patient_id');
    }
}
