<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    public $table = 'tests';

    public $fillable = [
        'patient_id',
        'doctor_id',
        'test_name',
        'test_result',
        'test_date',
        'status'
    ];

    protected $casts = [
        'test_name' => 'string',
        'test_result' => 'string',
        'test_date' => 'date',
        'status' => 'string'
    ];

    public static array $rules = [
        'patient_id' => 'nullable',
        'doctor_id' => 'nullable',
        'test_name' => 'nullable|string|max:100',
        'test_result' => 'nullable|string|max:100',
        'test_date' => 'nullable',
        'status' => 'nullable|string|max:100',
        'created_at' => 'required',
        'updated_at' => 'required'
    ];

    
}
