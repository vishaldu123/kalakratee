<?php

namespace App\Http\Controllers;
       
use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Artwork;
use App\Models\Collaboration;
use App\Models\Group;
use App\Models\Event;

class UserController extends Controller
{

    public function index()
    {
        $users = User::all();
        return view('admin.users.index', compact('users'));
    }

    public function show($id)
    {
        $user = User::findOrFail($id);
        $user->load(['artworks', 'collaborations', 'groups', 'events']);
        return view('admin.users.show', compact('user'));
    }
    
    public function addUser()
    {
        die("hello world");
        //return view('admin.users.addUser');
    }

    public function storeUser(Request $request)
    {
        // Validate and store the new user
        // Example validation and storage logic
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            // Add more validation rules for other user attributes
        ]);

        $user = new User();
        $user->name = $request->input('name');
        $user->username = $request->input('username');
        $user->email = $request->input('email');
        // Set other user attributes
        $user->save();
        return redirect()->route('admin.users.index')->with('success', 'User created successfully');
        // Redirect or return a response as needed
    }

    public function editUser($id)
    {
        $user = User::findOrFail($id);
        return view('admin.users.editUser', compact('user'));
    }

    public function updateUser(Request $request, $id)
    {
        // Validate and update the user
        // Example validation and update logic
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $id,
            // Add more validation rules for other user attributes
        ]);

        $user = User::findOrFail($id);
        $user->name = $request->input('name');
        $user->username = $request->input('username');
        $user->email = $request->input('email');
        // Update other user attributes
        $user->save();
        return redirect()->route('admin.users.index')->with('success', 'User updated successfully');
        // Redirect or return a response as
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('admin.users.index')->with('success', 'User deleted successfully');
    }

}