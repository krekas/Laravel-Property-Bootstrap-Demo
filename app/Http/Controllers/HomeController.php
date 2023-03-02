<?php

namespace App\Http\Controllers;

use App\Models\Agent;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke(Request $request)
    {
        $agents = Agent::inRandomOrder()->take(3)->get();
        $testimonials = Testimonial::inRandomOrder()->take(9)->get();

        return view('welcome', compact('agents', 'testimonials'));
    }
}