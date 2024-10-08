<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eskul extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
       'order',
        'is_active',
        'image_cover',
        'title',
    ];
}
