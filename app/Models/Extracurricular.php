<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Extracurricular extends Model
{
    use HasFactory, HasUlids;

    protected $fillable = [
        'extracurricular_category_id',
        'title',
        'slug',
        'description',
        'image',
        'is_active',
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

    public function category()
{
    return $this->belongsTo(ExtracurricularCategory::class, 'extracurricular_category_id');
}

}
