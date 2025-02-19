<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Technician extends Model
{
    public $table = 'technicians';

    public $fillable = [
        'department_id',
        'full_name',
        'speciality',
        'phone',
        'email'
    ];

    protected $casts = [
        'full_name' => 'string',
        'speciality' => 'string',
        'phone' => 'string',
        'email' => 'string'
    ];

    public static array $rules = [
        'department_id' => 'nullable',
        'full_name' => 'nullable|string|max:100',
        'speciality' => 'nullable|string|max:50',
        'phone' => 'nullable|string|max:50',
        'email' => 'nullable|string|max:255',
        'created_at' => 'required',
        'updated_at' => 'required'
    ];

    public function department(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Department::class, 'department_id');
    }
}
