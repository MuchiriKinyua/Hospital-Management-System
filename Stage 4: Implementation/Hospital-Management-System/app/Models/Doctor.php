<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    public $table = 'doctors';

    public $fillable = [
        'name',
        'phone',
        'room',
        'speciality',
        'image'
    ];

    protected $casts = [
        'name' => 'string',
        'phone' => 'string',
        'room' => 'string',
        'speciality' => 'string',
        'image' => 'string'
    ];

    public static array $rules = [
        'name' => 'nullable|string|max:255',
        'phone' => 'nullable|string|max:255',
        'room' => 'nullable|string|max:255',
        'speciality' => 'nullable|string|max:255',
        'image' => 'nullable|string|max:255',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
