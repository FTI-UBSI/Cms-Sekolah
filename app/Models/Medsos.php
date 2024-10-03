<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medsos extends Model
{
    use HasFactory, HasUuids;
    
    protected $fillable = [
        'order',
        'is_active',
        'Instagram_url',
        'gambarinstagram_cover',
        'Facebook_url',
        'gambarfacebook_cover',
    ];
}
