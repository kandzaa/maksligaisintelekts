<?php

namespace App\Http\Controllers;

use App\Models\Development;
use Illuminate\Http\Request;

class DevelopmentController extends Controller
{
    public function indexLv()
    {
        $developments = Development::where('published', true)
            ->orderBy('order', 'asc')
            ->orderBy('created_at', 'asc')
            ->get();
        
        return view('template.lv.development', compact('developments'));
    }

    public function indexEn()
    {
        $developments = Development::where('published', true)
            ->orderBy('order', 'asc')
            ->orderBy('created_at', 'asc')
            ->get();
        
        return view('template.en.development-en', compact('developments'));
    }

    public function showLv($slug)
    {
        $development = Development::where('slug', $slug)
            ->where('published', true)
            ->firstOrFail();
        
        return view('template.lv.development-detail', compact('development'));
    }

    public function showEn($slug)
    {
        $development = Development::where('slug', $slug)
            ->where('published', true)
            ->firstOrFail();
        
        return view('template.en.development-detail-en', compact('development'));
    }
}
