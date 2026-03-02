<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function indexLv()
    {
        $services = Service::where('published', true)
            ->orderBy('created_at', 'asc')
            ->get();
        
        return view('template.lv.services', compact('services'));
    }

    public function indexEn()
    {
        $services = Service::where('published', true)
            ->orderBy('created_at', 'asc')
            ->get();
        
        return view('template.en.services-en', compact('services'));
    }

    public function showLv($slug)
    {
        $service = Service::where('slug', $slug)
            ->where('published', true)
            ->firstOrFail();
        
        return view('template.lv.service-detail', compact('service'));
    }

    public function showEn($slug)
    {
        $service = Service::where('slug', $slug)
            ->where('published', true)
            ->firstOrFail();
        
        return view('template.en.service-detail-en', compact('service'));
    }
}