<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    public $table = 'expenses';

    public $fillable = [
        'category',
        'amount',
        'date',
        'description'
    ];

    protected $casts = [
        'category' => 'string',
        'amount' => 'string',
        'date' => 'datetime',
        'description' => 'string'
    ];

    public static array $rules = [
        'category' => 'nullable|string|max:100',
        'amount' => 'nullable|string|max:100',
        'date' => 'nullable',
        'description' => 'nullable|string|max:600',
        'created_at' => 'required',
        'updated_at' => 'required'
    ];

    
}
