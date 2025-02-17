<?php

namespace App\Repositories;

use App\Models\Notification;
use App\Repositories\BaseRepository;

class NotificationRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'type',
        'notifiable_type',
        'notifiable_id',
        'data',
        'read_at'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Notification::class;
    }
}
