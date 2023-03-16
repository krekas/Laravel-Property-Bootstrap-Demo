<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Inertia\Response;
use App\Models\Property;

class PropertyController extends Controller
{
    public function index(): Response
    {
        $featuredProperties = Property::with(['images'])->where('is_featured', true)->inRandomOrder()->take(9)->get();
        $properties = Property::with('images')->paginate();

        return Inertia::render('Properties/Index', compact('featuredProperties', 'properties'));
    }

    public function show(Property $property): Response
    {
        $property->load(['agent', 'images']);

        return Inertia::render('Properties/Property', compact('property'));
    }
}
