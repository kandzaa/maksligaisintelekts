<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Development extends Model
{
    use HasFactory;

    protected $fillable = [
        'title_lv',
        'title_en',
        'content_lv',
        'content_en',
        'image',
        'slug',
        'published',
        'description_lv',
        'description_en',
        'icon_class',
        'order',
    ];

    protected $casts = [
        'published' => 'boolean',
        'order' => 'integer',
    ];

    public function getLocalizedTitleAttribute()
    {
        $locale = app()->getLocale();
        return $this->{'title_' . $locale} ?? $this->title_en;
    }

    public function getLocalizedContentAttribute()
    {
        $locale = app()->getLocale();
        return $this->{'content_' . $locale} ?? $this->content_en;
    }

    public function getLocalizedDescriptionAttribute()
    {
        $locale = app()->getLocale();
        return $this->{'description_' . $locale} ?? $this->description_en;
    }
}
