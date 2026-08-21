<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    /**
     * Show all users.
     */
    public function index()
    {
        $users = User::with('roles')->get();

        $roles = Role::all();

        return view('user-records', compact('users', 'roles'));
    }


    /**
     * Show edit user form.
     */
    public function edit(User $user)
    {
        // Only users with Edit Users permission
        abort_unless(
            auth()->user()->can('Edit Users'),
            403
        );

        return view('edit-user', compact('user'));
    }


    /**
     * Update user's name and email.
     */
    public function update(Request $request, User $user)
    {
        // Only users with Edit Users permission
        abort_unless(
            auth()->user()->can('Edit Users'),
            403
        );

        $request->validate([
            'name' => [
                'required',
                'string',
                'max:255',
            ],

            'email' => [
                'required',
                'email',
                Rule::unique('users', 'email')->ignore($user->id),
            ],
        ]);


        $user->update([
            'name' => $request->name,
            'email' => $request->email,
        ]);


        return redirect()
            ->route('user.records')
            ->with(
                'success',
                'User updated successfully.'
            );
    }


    /**
     * Update user's role.
     */
    public function updateRole(Request $request, User $user)
    {
        // Only Admin can change roles
        abort_unless(
            auth()->user()->hasAnyRole(['Admin', 'admin']),
            403
        );

        $request->validate([
            'role' => 'required|exists:roles,name',
        ]);


        $user->syncRoles([
            $request->role
        ]);


        return redirect()
            ->route('user.records')
            ->with(
                'success',
                'User role updated successfully.'
            );
    }


    /**
     * Delete user.
     */
    public function destroy(User $user)
    {
        // Only Admin with Delete Users permission
        abort_unless(
            auth()->user()->hasAnyRole(['Admin', 'admin'])
            && auth()->user()->can('Delete Users'),
            403
        );


        // Prevent logged-in admin from deleting own account
        if (auth()->id() === $user->id) {

            return redirect()
                ->route('user.records')
                ->with(
                    'error',
                    'You cannot delete your own account.'
                );
        }


        // Remove Spatie roles
        $user->syncRoles([]);

        // Remove any direct permissions
        $user->syncPermissions([]);

        // Delete user from database
        $user->delete();


        return redirect()
            ->route('user.records')
            ->with(
                'success',
                'User deleted successfully.'
            );
    }
}