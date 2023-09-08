<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\Artwork;
use App\Models\Collaboration;
use App\Models\Group;
use App\Models\Event;

class UserController extends Controller
{

    public function index()
    {
        if(Auth::check()){
            $users = User::all();
            return view('admin.users.index', compact('users'));
        }

        return redirect("login")->withSuccess('You are not allowed to access');

    }

    public function show($id)
    {
        if(Auth::check()){
            $user = User::findOrFail($id);
            $user->load(['artworks', 'collaborations', 'groups', 'events']);
            return view('admin.users.show', compact('user'));
        }

        return redirect("login")->withSuccess('You are not allowed to access');
    }

    public function addUser()
    {
        if(Auth::check()){
            return view('admin.users.addUser');
        }

        return redirect("login")->withSuccess('You are not allowed to access');

    }

    public function storeUser(Request $request)
    {
        if(Auth::check()){
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

        return redirect("login")->withSuccess('You are not allowed to access');

    }

    public function editUser($id)
    {
        if(Auth::check()){
            $user = User::findOrFail($id);
            return view('admin.users.editUser', compact('user'));
        }

        return redirect("login")->withSuccess('You are not allowed to access');
    }

    public function updateUser(Request $request, $id)
    {
        if(Auth::check()){
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

        return redirect("login")->withSuccess('You are not allowed to access');

    }

    public function destroy($id)
    {
        if(Auth::check()){
            $user = User::findOrFail($id);
            $user->delete();

            return redirect()->route('admin.users.index')->with('success', 'User deleted successfully');
        }

        return redirect("login")->withSuccess('You are not allowed to access');

    }

}
