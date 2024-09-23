<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class ExtracurricularCategory extends Model
{
    use HasFactory, HasUlids;

    protected $fillable = [
        'is_active',
        'title',
        'slug',
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

    public function extracurriculars()
{
    return $this->hasMany(Extracurricular::class, 'extracurricular_category_id');
}

}
