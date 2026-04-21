<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PageController extends Controller
{
    public function tentang(): View
    {
        return view('pages.tentang');
    }

    public function kontak(Request $request): View
    {
        return view('pages.kontak');
    }

    public function kontakFullscreen(): View
    {
        return view('pages.kontak-fullscreen');
    }

    public function testimoni(): View
    {
        $testimonials = Testimonial::active()->get();

        return view('pages.testimoni', compact('testimonials'));
    }
}
