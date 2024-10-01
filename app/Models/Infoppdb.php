<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Infoppdb extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'order',
        'is_active',
        'description',
        'button_text',
        'button_link',
    ];

}
