<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Message extends Model
{
    use HasUuids;

    protected $fillable = [
        'expediteur',
        'email',
        'telephone',
        'type',
        'objet',
        'date_prevue',
        'budget',
        'contenu',
        'is_read',
    ];

    protected $casts = [
        'is_read' => 'boolean',
    ];
}
