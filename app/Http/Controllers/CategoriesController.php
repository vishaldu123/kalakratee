<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;

class CategoriesController extends Controller
{
    // Index action to display a list of categories
    public function index()
    {
        $categories = Categories::all();
        return view('categories.index', compact('categories'));
    }

    // Create action to display the category creation form
    public function create()
    {
        return view('categories.create');
    }

    // Store action to save a new category to the database
    public function store(Request $request)
    {
        // Validate input and store the category
    }

    // Show action to display details of a specific category
    public function show($id)
    {
        $category = Categories::findOrFail($id);
        return view('categories.show', compact('category'));
    }

    // Edit action to display the category editing form
    public function edit($id)
    {
        $category = Categories::findOrFail($id);
        return view('categories.edit', compact('category'));
    }

    // Update action to update an existing category
    public function update(Request $request, $id)
    {
        // Validate input and update the category
    }

    // Destroy action to delete an category
    public function destroy($id)
    {
        $category = Categories::findOrFail($id);
        // Delete the category
    }
}
