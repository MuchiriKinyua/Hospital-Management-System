<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Admission extends Model
{
    public $table = 'admissions';

    public $fillable = [
        'ward_id',
        'patient_id',
        'admitted_by',
        'reason',
        'admission_date',
        'discharge_date'
    ];

    protected $casts = [
        'admitted_by' => 'string',
        'reason' => 'string',
        'admission_date' => 'datetime',
        'discharge_date' => 'datetime'
    ];

    public static array $rules = [
        'ward_id' => 'nullable',
        'patient_id' => 'nullable',
        'admitted_by' => 'nullable|string|max:100',
        'reason' => 'nullable|string|max:600',
        'admission_date' => 'nullable',
        'discharge_date' => 'nullable',
        'created_at' => 'required',
        'updated_at' => 'required'
    ];

    public function ward(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Ward::class, 'ward_id');
    }

    public function patient(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Patient::class, 'patient_id');
    }
}
