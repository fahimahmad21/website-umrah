<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\UmrahPackage;
use App\Models\Testimonial;

class HomeController extends Controller
{
    public function index()
    {
        $sliders = Slider::get();
        $umrah_packages = UmrahPackage::get();
        $testimonials = Testimonial::get();

        return view('frontend.home', compact('sliders', 'umrah_packages', 'testimonials'));
    }
}
