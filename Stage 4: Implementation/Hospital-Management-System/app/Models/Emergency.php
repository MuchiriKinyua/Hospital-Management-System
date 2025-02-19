<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Emergency extends Model
{
    public $table = 'emergencies';

    public $fillable = [
        'patient_id',
        'full_name',
        'role',
        'phone'
    ];

    protected $casts = [
        'full_name' => 'string',
        'role' => 'string',
        'phone' => 'string'
    ];

    public static array $rules = [
        'patient_id' => 'nullable',
        'full_name' => 'nullable|string|max:100',
        'role' => 'nullable|string|max:50',
        'phone' => 'nullable|string|max:255',
        'created_at' => 'required',
        'updated_at' => 'required'
    ];

    public function patient(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Patient::class, 'patient_id');
    }
}
