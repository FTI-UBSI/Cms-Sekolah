<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sosmed extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'order',
        'is_active',
        'title',
        'E_Mail',
        'No_HP',
        'Jam_Operasional',
        'Alamat',
        'Fb_link',
        'ig_link',
        'ytb_link',
        'Wa_link',
    ];
}
