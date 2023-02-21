<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Service;
use App\Models\Setting;

class BlogController extends Controller
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
        $blogs = Blog::get();
        return view('frontend.pages.blog', compact(
            'blogs',
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