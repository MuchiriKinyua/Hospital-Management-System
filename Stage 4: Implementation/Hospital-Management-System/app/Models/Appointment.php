<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    public $table = 'appointments';

    public $fillable = [
        'name',
        'email',
        'phone',
        'doctor',
        'date',
        'message',
        'status',
        'user_id'
    ];

    protected $casts = [
        'name' => 'string',
        'email' => 'string',
        'phone' => 'string',
        'doctor' => 'string',
        'date' => 'string',
        'message' => 'string',
        'status' => 'string',
        'user_id' => 'string'
    ];

    public static array $rules = [
        'name' => 'nullable|string|max:255',
        'email' => 'nullable|string|max:255',
        'phone' => 'nullable|string|max:255',
        'doctor' => 'nullable|string|max:255',
        'date' => 'nullable|string|max:255',
        'message' => 'nullable|string|max:255',
        'status' => 'nullable|string|max:255',
        'user_id' => 'nullable|string|max:255',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
