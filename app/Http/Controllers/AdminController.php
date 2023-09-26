<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function permissions()
    {
        $permissions = Permission::all();
        return view('admin.permissions', compact('permissions'));
    }

    public function storePermission(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:permissions',
        ]);

        Permission::create(['name' => $request->name]);
        return redirect()->route('admin.permissions')->with('success', 'Permission created successfully');
    }

    public function roles()
    {
        $roles = Role::all();
        return view('admin.roles', compact('roles'));
    }

    public function storeRole(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:roles',
        ]);

        Role::create(['name' => $request->name]);
        return redirect()->route('admin.roles')->with('success', 'Role created successfully');
    }

    public function users()
    {
        $users = User::all();
        return view('admin.users', compact('users'));
    }

    public function assignRole(Request $request)
    {
        $user = User::findOrFail($request->user_id);
        $user->syncRoles($request->roles);

        return redirect()->route('admin.users')->with('success', 'Role assigned successfully');
    }
    public function createPermission()
    {
        return view('admin.createpermission');
    }
    public function createRole()
    {
        return view('admin.createrole');
    }
    public function assignments()
    {
        $users = User::all();
        $roles = Role::all();
        return view('admin.assignments', compact('users', 'roles'));
    }
    public function storeAssignedRoles(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'roles' => 'required|array',
        ]);

        $user = User::findOrFail($request->user_id);
        $user->syncRoles($request->roles);

        return redirect()->route('admin.users')->with('success', 'Roles assigned to user successfully');
    }
    public function editRole($id)
    {
        $role = Role::findOrFail($id);
        return view('admin.editrole', compact('role'));
    }
    public function editPermission($id)
    {
        $permission = Permission::findOrFail($id);
        return view('admin.editpermission', compact('permission'));
    }
    public function updateRole(Request $request, $id)
    {
        $role = Role::findOrFail($id);

        $request->validate([
            'name' => 'required|unique:roles,name,' . $role->id,
        ]);

        $role->update(['name' => $request->name]);
        return redirect()->route('admin.roles')->with('success', 'Role updated successfully');
    }
    public function updatePermission(Request $request, $id)
    {
        $permission = Permission::findOrFail($id);

        $request->validate([
            'name' => 'required|unique:permissions,name,' . $permission->id,
        ]);

        $permission->update(['name' => $request->name]);
        return redirect()->route('admin.permissions')->with('success', 'Permission updated successfully');
    }
    public function destroyRole($id)
    {
        $role = Role::findOrFail($id);
        $role->delete();

        return redirect()->route('admin.roles')->with('success', 'Role deleted successfully');
    }

    public function destroyPermission($id)
    {
        $permission = Permission::findOrFail($id);
        $permission->delete();

        return redirect()->route('admin.permissions')->with('success', 'Permission deleted successfully');
    }
}
