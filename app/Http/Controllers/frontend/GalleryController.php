<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gallery;
use App\Models\GalleryCategory;
use App\Models\Service;
use App\Models\Setting;

class GalleryController extends Controller
{
    public function index()
    {
        $mobile = Setting::FirstWhere('key', 'mobile');
        $location = Setting::FirstWhere('key', 'location');
        $hours = Setting::FirstWhere('key', 'hours');
        $gmail = Setting::FirstWhere('key', 'gmail');
        $about_us = Setting::FirstWhere('key', 'about_us');
        $author = Setting::FirstWhere('key', 'author');

        $services = Service::get();
        $gallery_categories = GalleryCategory::get();
        $galleries = Gallery::paginate(6);
        
        return view('frontend.pages.gallery', compact(
            'gallery_categories',
            'galleries',
            'services',
            'mobile',
            'location',
            'hours',
            'gmail',
            'about_us',
            'author'
        )
        );
    }
}