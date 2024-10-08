<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory,HasUuids;
    protected $fillable = [
        'is_active',
        'about_us',
        'foto_about_us',
        'visi',
        'misi',
        'foto_visi_misi',
        'core_value',
    ];
}
