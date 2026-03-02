<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
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
    ];

    protected $casts = [
        'published' => 'boolean',
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
}
