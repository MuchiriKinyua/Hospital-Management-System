<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Prediction extends Model
{
    public $table = 'predictions';

    public $fillable = [
        
    ];

    protected $casts = [
        
    ];

    public static array $rules = [
        'created_at' => 'required',
        'updated_at' => 'required'
    ];

    
}
