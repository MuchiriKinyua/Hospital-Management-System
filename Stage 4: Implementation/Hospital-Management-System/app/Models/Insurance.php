<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Insurance extends Model
{
    public $table = 'insurances';

    public $fillable = [
        'patient_id',
        'provider_name',
        'policy_number',
        'coverage_details'
    ];

    protected $casts = [
        'provider_name' => 'string',
        'policy_number' => 'string',
        'coverage_details' => 'string'
    ];

    public static array $rules = [
        'patient_id' => 'nullable',
        'provider_name' => 'nullable|string|max:100',
        'policy_number' => 'nullable|string|max:50',
        'coverage_details' => 'nullable|string|max:600',
        'created_at' => 'required',
        'updated_at' => 'required'
    ];

    public function patient(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Patient::class, 'patient_id');
    }
}
