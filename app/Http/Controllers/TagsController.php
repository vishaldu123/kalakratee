<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tag;

class TagsController extends Controller
{
    // Index action to display a list of tags
    public function index()
    {
        $tags = Tag::all();
        return view('tags.index', compact('tags'));
    }

    // Create action to display the tag creation form
    public function create()
    {
        return view('tags.create');
    }

    // Store action to save a new tag to the database
    public function store(Request $request)
    {
        // Validate input and store the tag
    }

    // Show action to display details of a specific tag
    public function show($id)
    {
        $tag = Tag::findOrFail($id);
        return view('tags.show', compact('tag'));
    }

    // Edit action to display the tag editing form
    public function edit($id)
    {
        $tag = Tag::findOrFail($id);
        return view('tags.edit', compact('tag'));
    }

    // Update action to update an existing tag
    public function update(Request $request, $id)
    {
        // Validate input and update the tag
    }

    // Destroy action to delete an tag
    public function destroy($id)
    {
        $tag = Tag::findOrFail($id);
        // Delete the tag
    }
}
