<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\CustomerReview;
use App\Models\Faq;
use App\Models\Setting;

class ServiceController extends Controller
{
    public function index()
    {
        $mobile = Setting::FirstWhere('key', 'mobile');
        $location = Setting::FirstWhere('key', 'location');
        $hours = Setting::FirstWhere('key', 'hours');
        $gmail = Setting::FirstWhere('key', 'gmail');
        $about_us = Setting::FirstWhere('key', 'about_us');
        $author = Setting::FirstWhere('key', 'author');

        $faqs = Faq::get();
        $services = Service::get();
        $customer_reviews = CustomerReview::get();
        return view('frontend.pages.services', compact(
            'services',
            'customer_reviews',
            'faqs',
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