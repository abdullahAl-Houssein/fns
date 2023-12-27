<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    public function showAssignRolesForm()
    {
        $users = User::all();
        $roles = Role::all();

        return view('assign-roles', compact('users', 'roles'));
    }

    public function assignRoles(Request $request)
    {
        $user = User::find($request->user_id);
        $user->syncRoles($request->roles);

        return redirect()->route('assign-roles.show')->with('success', 'Roles assigned successfully');
    }
}
