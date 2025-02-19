<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Method extends Model
{
    public $table = 'methods';

    public $fillable = [
        'name',
        'details'
    ];

    protected $casts = [
        'name' => 'string',
        'details' => 'string'
    ];

    public static array $rules = [
        'name' => 'nullable|string|max:100',
        'details' => 'nullable|string|max:600',
        'created_at' => 'required',
        'updated_at' => 'required'
    ];

    
}
