<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artwork;

class ArtworkController extends Controller
{
    // Index action to display a list of artworks
    public function index()
    {
        $artworks = Artwork::all();
        return view('artworks.index', compact('artworks'));
    }

    // Create action to display the artwork creation form
    public function create()
    {
        return view('artworks.create');
    }

    // Store action to save a new artwork to the database
    public function store(Request $request)
    {
        // Validate input and store the artwork
    }

    // Show action to display details of a specific artwork
    public function show($id)
    {
        $artwork = Artwork::findOrFail($id);
        return view('artworks.show', compact('artwork'));
    }

    // Edit action to display the artwork editing form
    public function edit($id)
    {
        $artwork = Artwork::findOrFail($id);
        return view('artworks.edit', compact('artwork'));
    }

    // Update action to update an existing artwork
    public function update(Request $request, $id)
    {
        // Validate input and update the artwork
    }

    // Destroy action to delete an artwork
    public function destroy($id)
    {
        $artwork = Artwork::findOrFail($id);
        // Delete the artwork
    }
}
