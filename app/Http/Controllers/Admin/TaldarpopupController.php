<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Taldarpopup;
use Illuminate\Http\Request;

class TaldarpopupController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $taldarpopups = Taldarpopup::all();
        return view('admin.taldarpopups.index', compact('taldarpopups'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.taldarpopups.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:20',
            'content' => 'required|string|max:100',
            'link' => 'required|url|max:255',
            'is_active' => 'required|boolean',
        ]);
        // dd($request->all());
        

        Taldarpopup::create($request->all());

        return redirect()->route('admin.taldarpopups.index')->with('success', 'Taldarpopup created successfully.');
    }

    /**
     * Display the specified resource.
     */
    // public function show()
    // {
    //     $taldarpopup = Taldarpopup::where('is_active', 1)->first();
    //     if (!$taldarpopup) {
    //         return redirect()->route('admin.taldarpopups.index')->with('error', 'No active taldarpopup found.');
    //     }
    //     return view('partials.taldar-popup', compact('taldarpopup'));
    // }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Taldarpopup $taldarpopup)
    {

        return view('admin.taldarpopups.edit', compact('taldarpopup'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Taldarpopup $taldarpopup)
    {
        $request->validate([
            'title' => 'required|string|max:20',
            'content' => 'required|string|max:100',
            'link' => 'required|url|max:255',
            'is_active' => 'required|boolean',
        ]);

        $taldarpopup->update($request->all());

        return redirect()->route('admin.taldarpopups.index')->with('success', 'Taldarpopup updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Taldarpopup $taldarpopup)
    {
        $taldarpopup->delete();

        return redirect()->route('admin.taldarpopups.index')->with('success', 'Taldarpopup deleted successfully.');
    }
}
