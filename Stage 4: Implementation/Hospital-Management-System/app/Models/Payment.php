<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    public $table = 'payments';

    public $fillable = [
        'patient_id',
        'amount',
        'issued_by'
    ];

    protected $casts = [
        'amount' => 'string',
        'issued_by' => 'string'
    ];

    public static array $rules = [
        'patient_id' => 'nullable',
        'amount' => 'nullable|string|max:50',
        'issued_by' => 'nullable|string|max:100',
        'created_at' => 'required',
        'updated_at' => 'required'
    ];

    public function patient(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Patient::class, 'patient_id');
    }
}
