<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    public $table = 'records';

    public $fillable = [
        'patient_id',
        'doctor_id',
        'diagnosis',
        'treatment_plan',
        'prescription',
        'visit_date'
    ];

    protected $casts = [
        'diagnosis' => 'string',
        'treatment_plan' => 'string',
        'prescription' => 'string',
        'visit_date' => 'date'
    ];

    public static array $rules = [
        'patient_id' => 'nullable',
        'doctor_id' => 'nullable',
        'diagnosis' => 'nullable|string|max:200',
        'treatment_plan' => 'nullable|string|max:600',
        'prescription' => 'nullable|string|max:100',
        'visit_date' => 'nullable',
        'created_at' => 'required',
        'updated_at' => 'required'
    ];

    public function patient(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Patient::class, 'patient_id');
    }

    public function doctor(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Doctor::class, 'doctor_id');
    }
}
