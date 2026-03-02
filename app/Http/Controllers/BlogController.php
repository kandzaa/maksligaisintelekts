<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function indexEn()
    {
        $news = News::where('published', true)
                    ->orderBy('created_at', 'desc')
                    ->paginate(9);
                    
        return view('template.en.blog-en', compact('news'));
    }

    public function indexLv()
    {
        $news = News::where('published', true)
                    ->orderBy('created_at', 'desc')
                    ->paginate(9);
                    
        return view('template.lv.blog', compact('news'));
    }

    public function showEn($slug)
    {
        $news = News::where('slug', $slug)
                   ->where('published', true)
                   ->firstOrFail();
                   
        return view('template.en.news-single', compact('news'));
    }

    public function showLv($slug)
    {
        $news = News::where('slug', $slug)
                   ->where('published', true)
                   ->firstOrFail();
                   
        return view('template.lv.news-single', compact('news'));
    }

    public function getLatestNews($limit = 5)
    {
        return News::where('published', true)
                   ->orderBy('created_at', 'desc')
                   ->take($limit)
                   ->get();
    }


}