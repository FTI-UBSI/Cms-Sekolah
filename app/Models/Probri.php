<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Probri extends Model
{
    use HasFactory,HasUuids;

    protected $fillable = [
        'order',
        'is_active',
        'title',
        'description',
        'image_cover',
        'video_link',
        'video_cover',
        'button_text',
        'button_link',
    ];
}
