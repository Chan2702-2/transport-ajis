<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ServiceController extends Controller
{
    public function index(Request $request): View
    {
        $category = $request->get('category');

        $query = Service::active();

        if ($category) {
            $query->where('category', $category);
        }

        $services = $query->get();
        $categories = Service::distinct()->pluck('category')->filter();

        return view('services.index', compact('services', 'categories', 'category'));
    }

    public function show(string $slug): View
    {
        $service = Service::where('slug', $slug)->firstOrFail();

        return view('services.show', compact('service'));
    }
}
