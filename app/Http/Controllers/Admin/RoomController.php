<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rooms = \App\Models\Room::orderByDesc('id')->get();
        return view('admin.rooms.index', compact('rooms'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.rooms.create');
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
            'capacity' => 'nullable|integer',
            'amenities' => 'nullable|string',
        ]);
    
        $warning = null;
    
        if ($request->hasFile('image')) {
            $file = $request->file('image');
    
            // ✅ Check size in KB
            if ($file->getSize() > 295 * 1024) {
                $warning = "Image size should be less than 295 KB.";
                return redirect()->back()->withInput()->with('warning', $warning);
            }
    
            // ✅ Check dimensions (must be exactly 336x240)
            // [$width, $height] = getimagesize($file);
            // if ($width != 336 || $height != 240) {
            //     $warning = "Image must be exactly 336 x 240 pixels.";
            //     return redirect()->back()->withInput()->with('warning', $warning);
            // }
    
            // ✅ If no warnings, store image
            if (!$warning) {
                $imagePath = $file->store('rooms', 'public');
                $validated['image_url'] = 'storage/' . $imagePath;
            }
        }
    
        // ✅ Convert amenities string → array
        $validated['amenities'] = $validated['amenities'] 
            ? array_map('trim', explode(',', $validated['amenities'])) 
            : [];
    
        \App\Models\Room::create($validated);
    
        return redirect()
            ->route('admin.rooms.index')
            ->with('success', 'Room created successfully.')
            ->with('warning', $warning);
    }
    

    /**
     * Display the specified resource.
     */
    public function show(Room $room)
    {
        return view('admin.rooms.show', compact('room'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Room $room)
    {
        return view('admin.rooms.edit', compact('room'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Room $room)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'nullable|numeric',
           
            'capacity' => 'nullable|integer',
            'amenities' => 'nullable|string',
        ]);
        $warning = null;
    
        if ($request->hasFile('image')) {
            $file = $request->file('image');
    
            // ✅ Check size in KB
            if ($file->getSize() > 295 * 1024) {
                $warning = "Image size should be less than 295 KB.";
                return redirect()->back()->withInput()->with('warning', $warning);
            }
    
            // ✅ Check dimensions (must be exactly 336x240)
            // [$width, $height] = getimagesize($file);
            // if ($width != 336 || $height != 240) {
            //     $warning = "Image must be exactly 336 x 240 pixels.";
            //     return redirect()->back()->withInput()->with('warning', $warning);
            // }
    
            // ✅ If no warnings, store image
            if (!$warning) {
                $imagePath = $file->store('rooms', 'public');
                $validated['image_url'] = 'storage/' . $imagePath;
            }
        }
    
        // ✅ Convert amenities string → array
        $validated['amenities'] = $validated['amenities'] 
            ? array_map('trim', explode(',', $validated['amenities'])) 
            : [];
        $room->update($validated);
        return redirect()->route('admin.rooms.index')->with('success', 'Room updated successfully.')->with('warning', $warning);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Room $room)
    {
        $room->delete();
        return redirect()->route('admin.rooms.index')->with('success', 'Room deleted successfully.');
    }
}
