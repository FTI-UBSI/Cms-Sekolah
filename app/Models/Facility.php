<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Facility extends Model
{
    use HasFactory, HasUlids;

    protected $fillable = [
        'is_active',
        'image_cover',
        'name',
        'slug',
        'description',
        'image'
    ];

    public static function boot()
    {
        parent::boot();

        // Generate slug before saving
        static::creating(function ($model) {
            if (empty($model->slug)) {
                $model->slug = Str::slug($model->name);
            }
        });
    }
}
