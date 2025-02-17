<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ward extends Model
{
    public $table = 'wards';

    public $fillable = [
        'patient_id',
        'doctor_id',
        'ward_name',
        'room_number',
        'status'
    ];

    protected $casts = [
        'ward_name' => 'string',
        'room_number' => 'string',
        'status' => 'string'
    ];

    public static array $rules = [
        'patient_id' => 'nullable',
        'doctor_id' => 'nullable',
        'ward_name' => 'nullable|string|max:100',
        'room_number' => 'nullable|string|max:20',
        'status' => 'nullable|string|max:20',
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
