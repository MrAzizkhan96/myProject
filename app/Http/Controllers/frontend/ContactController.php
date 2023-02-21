<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;
use App\Models\Service;

class ContactController extends Controller
{
    public function index()
    {
        $services = Service::get();
        $mobile = Setting::FirstWhere('key', 'mobile');
        $location = Setting::FirstWhere('key', 'location');
        $hours = Setting::FirstWhere('key', 'hours');
        $gmail = Setting::FirstWhere('key', 'gmail');
        $about_us = Setting::FirstWhere('key', 'about_us');
        $author = Setting::FirstWhere('key', 'author');
        return view('frontend.pages.contact', compact('mobile', 'location', 'gmail', 'hours', 'about_us', 'author', 'services'));
    }
}