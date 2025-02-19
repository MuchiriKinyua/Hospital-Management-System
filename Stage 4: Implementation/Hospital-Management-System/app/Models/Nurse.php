<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Nurse extends Model
{
    public $table = 'nurses';

    public $fillable = [
        'department_id',
        'doctor_id',
        'full_name',
        'phone',
        'email'
    ];

    protected $casts = [
        'full_name' => 'string',
        'phone' => 'string',
        'email' => 'string'
    ];

    public static array $rules = [
        'department_id' => 'nullable',
        'doctor_id' => 'nullable',
        'full_name' => 'nullable|string|max:100',
        'phone' => 'nullable|string|max:255',
        'email' => 'nullable|string|max:255',
        'created_at' => 'required',
        'updated_at' => 'required'
    ];

    public function doctor(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Doctor::class, 'doctor_id');
    }

    public function department(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Department::class, 'department_id');
    }
}
