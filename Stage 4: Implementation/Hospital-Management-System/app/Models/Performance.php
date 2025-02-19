<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Performance extends Model
{
    public $table = 'performances';

    public $fillable = [
        'doctor_id',
        'patient_count',
        'avg_consultation_time'
    ];

    protected $casts = [
        'patient_count' => 'string',
        'avg_consultation_time' => 'string'
    ];

    public static array $rules = [
        'doctor_id' => 'nullable',
        'patient_count' => 'nullable|string|max:50',
        'avg_consultation_time' => 'nullable|string|max:20',
        'created_at' => 'required',
        'updated_at' => 'required'
    ];

    public function doctor(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Doctor::class, 'doctor_id');
    }
}
