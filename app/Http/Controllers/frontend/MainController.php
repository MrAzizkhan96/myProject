<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\backend\AboutBackController;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\SettingImage;
use App\Models\About;
use App\Models\OurGoal;
use App\Models\Service;
use App\Models\GalleryCategory;
use App\Models\Gallery;
use App\Models\Offer;
use App\Models\Team;
use App\Models\Blog;
use App\Models\Setting;

class MainController extends Controller
{
    public function index()
    {
        $banners = Banner::get();
        $setting_image = SettingImage::find(2);
        $abouts = About::paginate(3);
        $our_goals = OurGoal::get();
        $services = Service::get();
        $galleries = Gallery::paginate(6);
        $gallery_categories = GalleryCategory::get();
        $offers = Offer::get();
        $teams = Team::get();
        $blogs = Blog::paginate(2);

        $mobile = Setting::FirstWhere('key', 'mobile');
        $location = Setting::FirstWhere('key', 'location');
        $hours = Setting::FirstWhere('key', 'hours');
        $gmail = Setting::FirstWhere('key', 'gmail');
        $about_us = Setting::FirstWhere('key', 'about_us');
        $author = Setting::FirstWhere('key', 'author');

        return view(
            'frontend.pages.main',
            compact(
                'banners',
                'setting_image',
                'abouts',
                'our_goals',
                'services',
                'galleries',
                'gallery_categories',
                'offers',
                'teams',
                'blogs',
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