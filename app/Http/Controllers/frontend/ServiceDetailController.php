<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Setting;
use Illuminate\Support\Facades\Validator;
use PDF;


class ServiceDetailController extends Controller
{
    public function index()
    {
        $mobile = Setting::FirstWhere('key', 'mobile');
        $location = Setting::FirstWhere('key', 'location');
        $hours = Setting::FirstWhere('key', 'hours');
        $gmail = Setting::FirstWhere('key', 'gmail');
        $about_us = Setting::FirstWhere('key', 'about_us');
        $author = Setting::FirstWhere('key', 'author');
        $service = Service::find(1);
        $services = Service::get();
        
        return view('frontend.pages.service_details', compact(
            'services',
            'mobile',
            'location',
            'hours',
            'gmail',
            'about_us',
            'author',
            'service'
        )
        );
    }

    public function downloadPdf(){
        $urls = Service::get();

        view()->share('urls', $urls);
        $pdf = PDF::loadView('download', '$urls');

        return $pdf->download('');
    }

    
}