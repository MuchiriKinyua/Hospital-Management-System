<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    public $table = 'settings';

    public $fillable = [
        'setting_name',
        'setting_value'
    ];

    protected $casts = [
        'setting_name' => 'string',
        'setting_value' => 'string'
    ];

    public static array $rules = [
        'setting_name' => 'nullable|string|max:100',
        'setting_value' => 'nullable|string|max:255',
        'created_at' => 'required',
        'updated_at' => 'required'
    ];

    
}
