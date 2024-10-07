<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Video extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'order',
        'is_active',
        'title_video',
        'description',
        'description_video',
        'image_cover',
        'video_link',
    ];

}
