<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $galleries = Gallery::orderByDesc('id')->get();
        return view('admin.galleries.index', compact('galleries'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.galleries.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'caption' => 'nullable|string|max:255',
            'image'   => 'required|image|mimes:jpg,jpeg,png', // basic image validation
        ]);
    
        $warning = null;
        $imagePath = null;
    
        if ($request->hasFile('image')) {
            $file = $request->file('image');
    
            // ✅ Check size in KB (max 295 KB)
            if ($file->getSize() > 295 * 1024) {
                $warning = "Image size should be less than 295 KB.";
                return redirect()->back()->withInput()->with('warning', $warning);
            }
    
            // // ✅ Check dimensions (must be 336x240)
            // [$width, $height] = getimagesize($file);
            // if ($width != 336 || $height != 240) {
            //     $warning = "Image must be exactly 336 x 240 pixels.";
            //     return redirect()->back()->withInput()->with('warning', $warning);
            // }
    
            // ✅ If no warnings, store image
            if (!$warning) {
                $imagePath = $file->store('galleries', 'public');
            }
        }
    
        Gallery::create([
            'image_url' => $imagePath ? 'storage/' . $imagePath : null,
            'caption'   => $request->caption ?? null,
            'category'  => null, // always null
        ]);
    
        return redirect()
            ->route('admin.galleries.index')
            ->with('success', 'Picture added successfully.')
            ->with('warning', $warning);
    }
    

    /**
     * Display the specified resource.
     */
    public function show(Gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Gallery $gallery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Gallery $gallery)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Gallery $gallery)
    {
        
    $gallery->delete(); // now performs soft delete
    return redirect()->route('admin.galleries.index')->with('success', 'Picture moved to trash.');
    }
}
