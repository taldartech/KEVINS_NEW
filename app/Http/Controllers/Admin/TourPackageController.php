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
    // public function store(Request $request) { $validated = $request->validate([ 'name' => 'required|string|max:255', 'description' => 'nullable|string', 'price' => 'nullable|numeric', 'duration' => 'nullable|string', 'image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048', 'itinerary' => 'nullable|string', ]); $validated['itinerary'] = $validated['itinerary'] ? array_map('trim', explode(',', $validated['itinerary'])) : []; if ($request->hasFile('image')) { $imagePath = $request->file('image')->store('tour-images', 'public'); $validated['image_url'] = 'storage/' . $imagePath;  } $tourPackage = \App\Models\TourPackage::create($validated); return redirect()->route('admin.tour-packages.index')->with('success', 'Tour package created successfully.'); }
    /**
     * Display the specified resource.
     */
    public function store(Request $request)
{
    // Validate other fields first (excluding image)
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'nullable|string',
        'price' => 'nullable|numeric',
        'duration' => 'nullable|string',
        'itinerary' => 'nullable|string',
    ]);

    $warning = null;

    if ($request->hasFile('image')) {
        $file = $request->file('image');

        // Check size in KB
        if ($file->getSize() > 295 * 1024) {
            $warning = "Image size should be less than 295 KB.";
            return redirect()->back()->withInput()->with('warning', $warning);
        }

        // Check dimensions
        [$width, $height] = getimagesize($file);
        if ($width != 336 && $height != 240) {
            $warning = "Image must be exactly 336 x 240 pixels.";
            return redirect()->back()->withInput()->with('warning', $warning);
        }

        // If no warnings, store image
        if (!$warning) {
            $imagePath = $file->store('tour-images', 'public');
            $validated['image_url'] = 'storage/' . $imagePath;
        }
    }

    // Convert itinerary to array
    $validated['itinerary'] = $validated['itinerary']
        ? array_map('trim', explode(',', $validated['itinerary']))
        : [];

    \App\Models\TourPackage::create($validated);

    return redirect()
        ->route('admin.tour-packages.index')
        ->with('success', 'Tour package created successfully.')
        ->with('warning', $warning);
}

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
            'itinerary' => 'nullable|string',
        ]);
    
        $warning = null;
    
        if ($request->hasFile('image')) {
            $file = $request->file('image');
    
            // Check size in KB
            if ($file->getSize() > 295 * 1024) {
                $warning = "Image size should be less than 295 KB.";
                return redirect()->back()->withInput()->with('warning', $warning);
            }
    
            // Check dimensions
            [$width, $height] = getimagesize($file);
            if ($width != 336 && $height != 240) {
                $warning = "Image must be exactly 336 x 240 pixels.";
                return redirect()->back()->withInput()->with('warning', $warning);
            }
    
            // If no warnings, store image
            if (!$warning) {
                $imagePath = $file->store('tour-images', 'public');
                $validated['image_url'] = 'storage/' . $imagePath;
            }
        }
    
        // Convert itinerary to array
        $validated['itinerary'] = $validated['itinerary']
            ? array_map('trim', explode(',', $validated['itinerary']))
            : [];
    
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
