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
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif',
            'itinerary' => 'nullable|string',
        ]);
        $validated['itinerary'] = $validated['itinerary'] ? array_map('trim', explode(',', $validated['itinerary'])) : [];
          // Handle image upload
    if ($request->hasFile('image')) {
        $image = $request->file('image');

        // Resize image to 336x240
        $resizedImage = Image::make($image)->resize(336, 240)->encode($image->getClientOriginalExtension(), 90);

        // Reduce file size under 295 KB
        $quality = 90;
        while (strlen($resizedImage) > 295 * 1024 && $quality > 10) {
            $quality -= 5;
            $resizedImage = Image::make($image)->resize(336, 240)->encode($image->getClientOriginalExtension(), $quality);
        }

        // Save the image
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $resizedImage->save(public_path('storage/tour-images/' . $imageName));

        $validated['image_url'] = 'storage/tour-images/' . $imageName;
    }
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
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif',
            'itinerary' => 'nullable|string',
        ]);
        $validated['itinerary'] = $validated['itinerary'] ? array_map('trim', explode(',', $validated['itinerary'])) : [];
        // Handle image upload
        if ($request->hasFile('image')) {
            // $imagePath = $request->file('image')->store('tour-images', 'public');
            // $validated['image_url'] = 'storage/' . $imagePath; // Save relative path
            $image = $request->file('image');

            // Resize image to 336x240
            $resizedImage = Image::make($image)->resize(336, 240)->encode($image->getClientOriginalExtension(), 90);
    
              // Check file size after resize
    if (strlen($resizedImage) > 295 * 1024) {
        return Redirect::back()
            ->withInput()
            ->with('error', 'The image file size after resizing should not be greater than 295 KB.');
    }
           
            // Reduce file size under 295 KB
            $quality = 90;
            while (strlen($resizedImage) > 295 * 1024 && $quality > 10) {
                $quality -= 5;
                $resizedImage = Image::make($image)->resize(336, 240)->encode($image->getClientOriginalExtension(), $quality);
            }
    
            // Save the image
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $resizedImage->save(public_path('storage/tour-images/' . $imageName));
    
            $validated['image_url'] = 'storage/tour-images/' . $imageName;
        }
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
