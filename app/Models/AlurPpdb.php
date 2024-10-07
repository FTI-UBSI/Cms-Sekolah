<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlurPpdb extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
       'order',
        'is_active',
        'image_cover',
        'title',
        'description',
        'button_text1',
        'button_link1',
        'button_text2',
        'button_link2',
    ];
}
