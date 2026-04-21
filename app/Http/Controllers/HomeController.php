<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Testimonial;
use App\Models\Vehicle;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        $services = Service::active()->limit(3)->get();
        $testimonials = Testimonial::active()->limit(3)->get();
        $vehicles = Vehicle::active()->limit(3)->get();

        return view('home', compact('services', 'testimonials', 'vehicles'));
    }
}
