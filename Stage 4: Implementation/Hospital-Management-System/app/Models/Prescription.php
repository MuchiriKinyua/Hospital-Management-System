<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Prescription extends Model
{
    public $table = 'prescriptions';

    public $fillable = [
        'patient_id',
        'doctor_id',
        'medicine',
        'dosage',
        'duration',
        'instructions'
    ];

    protected $casts = [
        'medicine' => 'string',
        'dosage' => 'string',
        'duration' => 'string',
        'instructions' => 'string'
    ];

    public static array $rules = [
        'patient_id' => 'nullable',
        'doctor_id' => 'nullable',
        'medicine' => 'nullable|string|max:100',
        'dosage' => 'nullable|string|max:50',
        'duration' => 'nullable|string|max:20',
        'instructions' => 'nullable|string|max:20',
        'created_at' => 'required',
        'updated_at' => 'required'
    ];

    public function doctor(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Doctor::class, 'doctor_id');
    }

    public function patient(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Patient::class, 'patient_id');
    }
}
