<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $images = Gallery::all();
        return view('superadministrator.gallery.index', compact('images'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         // Validate the uploaded files
    $request->validate([
        'images.*' => 'image|mimes:jpeg,png,jpg,gif', // Example validation rules
    ]);

    // Store the uploaded files
    $paths = [];
    if ($request->hasFile('images')) {
        foreach ($request->file('images') as $file) {
            // Store the file and get its path
            $path = $file->store('images', 'public');

            // Save the path to the database
            $image = new Gallery();
            $image->images = $path;
            $image->save();


            // Store the path in an array
            $paths[] = $path;
        }
    }

    // Redirect back or respond with a success message
    return redirect()->back()->with('success-message', 'Images uploaded successfully.');
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
        $gallery->delete();

        return redirect()->back()->with('danger-message', 'Image Deleted!');
    }
}
