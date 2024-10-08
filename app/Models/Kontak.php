<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kontak extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'name', 
        'email', 
        'phone', 
        'jenis_informasi', 
        'subject', 
        'message'
    ];

}
