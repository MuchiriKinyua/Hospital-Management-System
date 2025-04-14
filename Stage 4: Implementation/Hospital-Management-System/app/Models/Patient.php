<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    public $table = 'patients';

    public $fillable = [
        'full_name',
        'dob',
        'gender',
        'phone',
        'email',
        'address',
        'blood_type',
        'allergies',
        'medical_history',
        'image'
    ];

    protected $casts = [
        'full_name' => 'string',
        'dob' => 'string',
        'gender' => 'string',
        'phone' => 'string',
        'email' => 'string',
        'address' => 'string',
        'blood_type' => 'string',
        'allergies' => 'string',
        'medical_history' => 'string',
        'image' => 'string'
    ];

    public static array $rules = [
        'full_name' => 'nullable|string|max:100',
        'dob' => 'nullable|string|max:50',
        'gender' => 'nullable|string|max:10',
        'phone' => 'nullable|string|max:50',
        'email' => 'nullable|string|max:255',
        'address' => 'nullable|string|max:100',
        'blood_type' => 'nullable|string|max:10',
        'allergies' => 'nullable|string|max:30',
        'medical_history' => 'nullable|string|max:40',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    public function billings(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\Billing::class, 'patient_id');
    }

    public function emergencies(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\Emergency::class, 'patient_id');
    }

    public function insurances(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\Insurance::class, 'patient_id');
    }

    public function invoices(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\Invoice::class, 'patient_id');
    }

    public function notes(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\Note::class, 'patient_id');
    }

    public function payments(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\Payment::class, 'patient_id');
    }

    public function records(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\Record::class, 'patient_id');
    }

    public function tests(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\Test::class, 'patient_id');
    }

    public function wards(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\Ward::class, 'patient_id');
    }
}
