<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peta extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
       'order',
        'is_active',
        'image_cover',
        'title',
        'description',
        'button_text',
        'button_link',
    ];
}
