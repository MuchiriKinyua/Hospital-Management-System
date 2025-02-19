<?php

namespace App\Repositories;

use App\Models\Note;
use App\Repositories\BaseRepository;

class NoteRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'doctor_id',
        'patient_id',
        'visit_id',
        'notes'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Note::class;
    }
}
