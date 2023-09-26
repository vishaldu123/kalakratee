<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Artwork;
use App\Models\Collaboration;
use App\Models\Group;
use App\Models\Event;
use DB;
use Hash;
use Illuminate\Support\Arr;

class UserController extends Controller
{

    public function index()
    {
        if(Auth::check()){
          // Retrieve a list of users
            $users = User::all();

            return view('users.index', compact('users'));
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

    public function create()
    {
        if(Auth::check()){
            $roles = Role::pluck('name','name')->all();
            return view('admin.users.addUser',compact('roles'));
        }

        return redirect("login")->withSuccess('You are not allowed to access');

    }

    public function store(Request $request)
    {
        if(Auth::check()){
            // Validate and store the new user
            // Example validation and storage logic
            $validatedData = $request->validate([
                'name' => 'required|string|max:255',
                'username' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users',
                'roles' => 'required'
                // Add more validation rules for other user attributes
            ]);

            $user = new User();
            $user->name = $request->input('name');
            $user->username = $request->input('username');
            $user->email = $request->input('email');
            $user->bios = $request->input('bios');
            $user->profile_picture = $request->input('profile_picture');
            $user->payment_qr_code = $request->input('payment_qr_code');
            $user->facebook_id = $request->input('facebook_id');
            $user->instagram_id = $request->input('instagram_id');
            $user->youtube_id = $request->input('youtube_id');
            $user->watermark = $request->input('watermark');

            // Set other user attributes
            $user = User::create($input);
            $user->assignRole($request->input('roles'));
            return redirect()->route('admin.users.index')->with('success', 'User created successfully');
            // Redirect or return a response as needed
        }

        return redirect("login")->withSuccess('You are not allowed to access');

    }

    public function edit($id)
    {
        if(Auth::check()){
            $user = User::findOrFail($id);
            $roles = Role::pluck('name','name')->all();
            $userRole = $user->roles->pluck('name','name')->all();
            return view('admin.users.editUser', compact('user','roles','userRole'));
        }

        return redirect("login")->withSuccess('You are not allowed to access');
    }

    public function update(Request $request, $id)
    {
        if(Auth::check()){
            // Validate and update the user
            // Example validation and update logic
            $validatedData = $request->validate([
                'name' => 'required|string|max:255',
                'username' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users,email,' . $id,
                'roles' => 'required'
                // Add more validation rules for other user attributes
            ]);

            $user = User::findOrFail($id);
            $user->name = $request->input('name');
            $user->username = $request->input('username');
            $user->email = $request->input('email');
            $user->bios = $request->input('bios');
            $user->profile_picture = $request->input('profile_picture');
            $user->payment_qr_code = $request->input('payment_qr_code');
            $user->facebook_id = $request->input('facebook_id');
            $user->instagram_id = $request->input('instagram_id');
            $user->youtube_id = $request->input('youtube_id');
            $user->watermark = $request->input('watermark');

            // Update other user attributes
            $user->update($input);
            DB::table('model_has_roles')->where('model_id',$id)->delete();

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
