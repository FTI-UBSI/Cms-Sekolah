<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Educator extends Model
{
    use HasFactory, HasUuids;
    protected $fillable = [
        'is_active',
        'nama_gtk',
        'posisi_gtk',
        'foto_gtk',
    ];
}
