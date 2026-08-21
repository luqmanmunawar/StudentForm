<?php

namespace App\Http\Controllers;

use Spatie\Permission\Models\Role;

class RolePermissionController extends Controller
{
    public function index()
    {
        $roles = Role::with('permissions')->get();

        return view('role-permissions', compact('roles'));
    }
}