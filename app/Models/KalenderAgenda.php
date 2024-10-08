<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KalenderAgenda extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'order',
        'is_active',
        'title',
        'description',
        'image_cover',
        'start_date',
        'end_date',
    ];
}
