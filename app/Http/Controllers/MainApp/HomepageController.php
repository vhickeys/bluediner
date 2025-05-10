<?php

namespace App\Http\Controllers\MainApp;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index()
    {
        $packages = getPackages();
        return view('main-app.index', compact('packages'));
    }
    public function about()
    {
        return view('main-app.about');
    }
    public function menu()
    {
        return view('main-app.menu');
    }
    public function gallery()
    {
        return view('main-app.gallery');
    }
    public function contact()
    {
        return view('main-app.contact');
    }

    public function package_details($package_slug)
    {
        $package = getPackageBySlug($package_slug);
        $packages = getPackages();
        return view('main-app.package-details', compact('package', 'packages'));
    }
}
