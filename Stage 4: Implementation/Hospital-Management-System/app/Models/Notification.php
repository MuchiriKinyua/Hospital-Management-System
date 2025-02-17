<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    public $table = 'notifications';

    public $fillable = [
        'type',
        'notifiable_type',
        'notifiable_id',
        'data',
        'read_at'
    ];

    protected $casts = [
        'id' => 'string',
        'type' => 'string',
        'notifiable_type' => 'string',
        'data' => 'string',
        'read_at' => 'datetime'
    ];

    public static array $rules = [
        'type' => 'required|string|max:255',
        'notifiable_type' => 'required|string|max:255',
        'notifiable_id' => 'required',
        'data' => 'required|string|max:65535',
        'read_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
