<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Trail extends Model
{
    public $table = 'trails';

    public $fillable = [
        'user_id',
        'action'
    ];

    protected $casts = [
        'action' => 'string'
    ];

    public static array $rules = [
        'user_id' => 'nullable',
        'action' => 'nullable|string|max:255',
        'created_at' => 'required',
        'updated_at' => 'required'
    ];

    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\User::class, 'user_id');
    }
}
