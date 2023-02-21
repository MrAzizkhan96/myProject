<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About;
use App\Models\SettingImage;
use App\Models\Service;
use App\Models\Team;
use App\Models\Setting;


class AboutController extends Controller
{
    public function index()
    {
        $mobile = Setting::FirstWhere('key', 'mobile');
        $location = Setting::FirstWhere('key', 'location');
        $hours = Setting::FirstWhere('key', 'hours');
        $gmail = Setting::FirstWhere('key', 'gmail');
        $about_us = Setting::FirstWhere('key', 'about_us');
        $author = Setting::FirstWhere('key', 'author');

        $abouts = About::get();
        $setting_image = SettingImage::find(2);
        $services = Service::get();
        $teams = Team::get();
        return view('frontend.pages.about', compact(
            'abouts',
            'setting_image',
            'services',
            'teams',
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