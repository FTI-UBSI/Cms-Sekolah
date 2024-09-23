<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Educator extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'is_active',
        'name',
        'slug',
        'description',
        'image',
        'position_id',
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

    public function position()
    {
        return $this->belongsTo(Position::class);
    }
}
