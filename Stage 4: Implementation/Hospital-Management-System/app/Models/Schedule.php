<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    public $table = 'schedules';

    public $fillable = [
        'doctor_id',
        'available_days',
        'start_time',
        'end_time'
    ];

    protected $casts = [
        'available_days' => 'date',
        'start_time' => 'datetime',
        'end_time' => 'datetime'
    ];

    public static array $rules = [
        'doctor_id' => 'nullable',
        'available_days' => 'nullable',
        'start_time' => 'nullable',
        'end_time' => 'nullable',
        'created_at' => 'required',
        'updated_at' => 'required'
    ];

    public function doctor(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Doctor::class, 'doctor_id');
    }
}
