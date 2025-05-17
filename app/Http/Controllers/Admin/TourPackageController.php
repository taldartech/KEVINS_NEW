<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TourPackage;
use Illuminate\Http\Request;

class TourPackageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tourPackages = \App\Models\TourPackage::orderByDesc('id')->get();
        return view('admin.tour-packages.index', compact('tourPackages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.tour-packages.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'nullable|numeric',
            'duration' => 'nullable|string',
            'image_url' => 'nullable|string',
            'itinerary' => 'nullable|string',
        ]);
        $validated['itinerary'] = $validated['itinerary'] ? array_map('trim', explode(',', $validated['itinerary'])) : [];
        $tourPackage = \App\Models\TourPackage::create($validated);
        return redirect()->route('admin.tour-packages.index')->with('success', 'Tour package created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(TourPackage $tourPackage)
    {
        return view('admin.tour-packages.show', compact('tourPackage'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TourPackage $tourPackage)
    {
        return view('admin.tour-packages.edit', compact('tourPackage'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TourPackage $tourPackage)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'nullable|numeric',
            'duration' => 'nullable|string',
            'image_url' => 'nullable|string',
            'itinerary' => 'nullable|string',
        ]);
        $validated['itinerary'] = $validated['itinerary'] ? array_map('trim', explode(',', $validated['itinerary'])) : [];
        $tourPackage->update($validated);
        return redirect()->route('admin.tour-packages.index')->with('success', 'Tour package updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TourPackage $tourPackage)
    {
        $tourPackage->delete();
        return redirect()->route('admin.tour-packages.index')->with('success', 'Tour package deleted successfully.');
    }
}
