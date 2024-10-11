<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UmrahPackage;

class PackageController extends Controller
{
    public function index()
    {
        // Fetch all Umrah packages
        $umrah_packages = UmrahPackage::get();
        
        // Pass the correct variable to the view
        return view('frontend.paket.index', compact('umrah_packages'));
    }

    public function show(UmrahPackage $umrah_package)
    {
        // Pass the Umrah package to the show view
        return view('frontend.paket.show', compact('umrah_package'));
    }
}
