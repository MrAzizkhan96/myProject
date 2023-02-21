<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\BlogComment;
use App\Models\Service;
use App\Models\Setting;

class BlogDetailController extends Controller
{
    public function index($id)
    {
        $mobile = Setting::FirstWhere('key', 'mobile');
        $location = Setting::FirstWhere('key', 'location');
        $hours = Setting::FirstWhere('key', 'hours');
        $gmail = Setting::FirstWhere('key', 'gmail');
        $about_us = Setting::FirstWhere('key', 'about_us');
        $author = Setting::FirstWhere('key', 'author');

        $services = Service::get();
        $blog = Blog::find($id);
        $blog_comment = BlogComment::get();
        return view('frontend.pages.blog_details', compact(
            'blog',
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