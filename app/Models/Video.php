<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Video extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'is_active',
        'title',
        'slug',
        'url',
        'description'
    ];

    public static function boot()
    {
        parent::boot();

        // Generate slug before saving
        static::creating(function ($model) {
            if (empty($model->slug)) {
                $model->slug = Str::slug($model->title);
            }
        });
    }
}
