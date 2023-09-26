<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Group;

class GroupController extends Controller
{
    // Index action to display a list of groups
    public function index()
    {
        $groups = Group::all();
        return view('groups.index', compact('groups'));
    }

    // Create action to display the group creation form
    public function create()
    {
        return view('groups.create');
    }

    // Store action to save a new group to the database
    public function store(Request $request)
    {
        // Validate input and store the group
    }

    // Show action to display details of a specific group
    public function show($id)
    {
        $group = Group::findOrFail($id);
        return view('groups.show', compact('group'));
    }

    // Edit action to display the group editing form
    public function edit($id)
    {
        $group = Group::findOrFail($id);
        return view('groups.edit', compact('group'));
    }

    // Update action to update an existing group
    public function update(Request $request, $id)
    {
        // Validate input and update the group
    }

    // Destroy action to delete an group
    public function destroy($id)
    {
        $group = Group::findOrFail($id);
        // Delete the group
    }
}
