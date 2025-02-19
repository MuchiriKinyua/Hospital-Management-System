<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    public $table = 'notes';

    public $fillable = [
        'doctor_id',
        'patient_id',
        'visit_id',
        'notes'
    ];

    protected $casts = [
        'notes' => 'string'
    ];

    public static array $rules = [
        'doctor_id' => 'nullable',
        'patient_id' => 'nullable',
        'visit_id' => 'nullable',
        'notes' => 'nullable|string|max:600',
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
