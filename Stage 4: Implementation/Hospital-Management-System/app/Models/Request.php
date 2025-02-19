<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    public $table = 'requests';

    public $fillable = [
        'equipment',
        'issue',
        'reported_by',
        'status'
    ];

    protected $casts = [
        'equipment' => 'string',
        'issue' => 'string',
        'reported_by' => 'string',
        'status' => 'string'
    ];

    public static array $rules = [
        'equipment' => 'nullable|string|max:100',
        'issue' => 'nullable|string|max:600',
        'reported_by' => 'nullable|string|max:100',
        'status' => 'nullable|string|max:20',
        'created_at' => 'required',
        'updated_at' => 'required'
    ];

    
}
