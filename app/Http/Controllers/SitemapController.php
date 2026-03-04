<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Service;
use App\Models\Development;

class SitemapController extends Controller
{
    public function index()
    {
        $sitemap = '<?xml version="1.0" encoding="UTF-8"?>';
        $sitemap .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';
        
        // Homepage
        $sitemap .= $this->generateUrl(url('/'), '1.0', 'daily');
        
        // Static pages
        $sitemap .= $this->generateUrl(url('/en'), '0.9', 'daily');
        $sitemap .= $this->generateUrl(url('/about'), '0.8', 'monthly');
        $sitemap .= $this->generateUrl(url('/en/about'), '0.8', 'monthly');
        $sitemap .= $this->generateUrl(url('/contact'), '0.7', 'monthly');
        $sitemap .= $this->generateUrl(url('/en/contact'), '0.7', 'monthly');
        
        // Dynamic pages
        $sitemap .= $this->generateNewsUrls();
        $sitemap .= $this->generateServiceUrls();
        $sitemap .= $this->generateDevelopmentUrls();
        
        $sitemap .= '</urlset>';
        
        return response($sitemap)
            ->header('Content-Type', 'application/xml');
    }
    
    private function generateUrl($url, $priority, $changefreq)
    {
        return "
        <url>
            <loc>" . htmlspecialchars($url) . "</loc>
            <lastmod>" . now()->format('Y-m-d') . "</lastmod>
            <changefreq>{$changefreq}</changefreq>
            <priority>{$priority}</priority>
        </url>";
    }
    
    private function generateNewsUrls()
    {
        $urls = '';
        $news = News::where('published', true)->get();
        
        foreach ($news as $item) {
            $urls .= $this->generateUrl(
                route('news.show', $item->slug),
                '0.8',
                'weekly'
            );
            $urls .= $this->generateUrl(
                route('en.news.show', $item->slug),
                '0.8',
                'weekly'
            );
        }
        
        return $urls;
    }
    
    private function generateServiceUrls()
    {
        $urls = '';
        $services = Service::where('published', true)->get();
        
        foreach ($services as $item) {
            $urls .= $this->generateUrl(
                route('services.show', $item->slug),
                '0.8',
                'weekly'
            );
            $urls .= $this->generateUrl(
                route('en.services.show', $item->slug),
                '0.8',
                'weekly'
            );
        }
        
        return $urls;
    }
    
    private function generateDevelopmentUrls()
    {
        $urls = '';
        $developments = Development::where('published', true)->get();
        
        foreach ($developments as $item) {
            $urls .= $this->generateUrl(
                route('development.show', $item->slug),
                '0.8',
                'weekly'
            );
            $urls .= $this->generateUrl(
                route('en.development.show', $item->slug),
                '0.8',
                'weekly'
            );
        }
        
        return $urls;
    }
}
