<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    public $table = 'reports';

    public $fillable = [
        'report_type',
        'generated_by',
        'date',
        'summary'
    ];

    protected $casts = [
        'report_type' => 'string',
        'generated_by' => 'string',
        'date' => 'datetime',
        'summary' => 'string'
    ];

    public static array $rules = [
        'report_type' => 'nullable|string|max:100',
        'generated_by' => 'nullable|string|max:50',
        'date' => 'nullable',
        'summary' => 'nullable|string|max:600',
        'created_at' => 'required',
        'updated_at' => 'required'
    ];

    
}
