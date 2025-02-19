<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    public $table = 'results';

    public $fillable = [
        'doctor_id',
        'patient_id',
        'test_name',
        'result'
    ];

    protected $casts = [
        'test_name' => 'string',
        'result' => 'string'
    ];

    public static array $rules = [
        'doctor_id' => 'nullable',
        'patient_id' => 'nullable',
        'test_name' => 'nullable|string|max:100',
        'result' => 'nullable|string|max:50',
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
