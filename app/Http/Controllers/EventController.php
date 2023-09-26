<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    // Index action to display a list of events
    public function index()
    {
        $events = Event::all();
        return view('events.index', compact('events'));
    }

    // Create action to display the event creation form
    public function create()
    {
        return view('events.create');
    }

    // Store action to save a new event to the database
    public function store(Request $request)
    {
        // Validate input and store the event
    }

    // Show action to display details of a specific event
    public function show($id)
    {
        $event = Event::findOrFail($id);
        return view('events.show', compact('event'));
    }

    // Edit action to display the event editing form
    public function edit($id)
    {
        $event = Event::findOrFail($id);
        return view('events.edit', compact('event'));
    }

    // Update action to update an existing event
    public function update(Request $request, $id)
    {
        // Validate input and update the event
    }

    // Destroy action to delete an event
    public function destroy($id)
    {
        $event = Event::findOrFail($id);
        // Delete the event
    }
}
