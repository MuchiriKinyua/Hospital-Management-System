<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Billing extends Model
{
    public $table = 'billings';

    public $fillable = [
        'patient_id',
        'appointment_id',
        'amount',
        'payment_status',
        'payment_method',
        'invoice_date'
    ];

    protected $casts = [
        'amount' => 'string',
        'payment_status' => 'string',
        'payment_method' => 'string',
        'invoice_date' => 'date'
    ];

    public static array $rules = [
        'patient_id' => 'nullable',
        'appointment_id' => 'nullable',
        'amount' => 'nullable|string|max:100',
        'payment_status' => 'nullable|string|max:50',
        'payment_method' => 'nullable|string|max:30',
        'invoice_date' => 'nullable',
        'created_at' => 'required',
        'updated_at' => 'required'
    ];

    public function patient(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Patient::class, 'patient_id');
    }
}
