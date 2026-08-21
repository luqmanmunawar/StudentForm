<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\RolePermissionController;
use App\Http\Controllers\ProfileController;


/*
|--------------------------------------------------------------------------
| Home
|--------------------------------------------------------------------------
*/

Route::get('/', function () {

    return redirect()->route('dashboard');

});


/*
|--------------------------------------------------------------------------
| Dashboard
|--------------------------------------------------------------------------
*/

Route::get('/dashboard', function () {

    return view('dashboard');

})
->middleware(['auth'])
->name('dashboard');


/*
|--------------------------------------------------------------------------
| User Records
|--------------------------------------------------------------------------
|
| All logged-in users can view User Records.
| Role dropdown/change is protected inside UserController.
|
*/

Route::get(
    '/user-records',
    [UserController::class, 'index']
)
->middleware('auth')
->name('user.records');


/*
|--------------------------------------------------------------------------
| Edit User
|--------------------------------------------------------------------------
|
| Opens the Edit User page.
|
*/

Route::get(
    '/users/{user}/edit',
    [UserController::class, 'edit']
)
->middleware('auth')
->name('users.edit');


/*
|--------------------------------------------------------------------------
| Update User
|--------------------------------------------------------------------------
|
| Updates user's name and email.
|
*/

Route::put(
    '/users/{user}',
    [UserController::class, 'update']
)
->middleware('auth')
->name('users.update');


/*
|--------------------------------------------------------------------------
| Update User Role
|--------------------------------------------------------------------------
|
| Admin only.
| The Admin check is inside UserController::updateRole().
|
*/

Route::put(
    '/users/{user}/role',
    [UserController::class, 'updateRole']
)
->middleware('auth')
->name('users.role.update');


/*
|--------------------------------------------------------------------------
| Delete User
|--------------------------------------------------------------------------
|
| Admin only.
| The Admin/Delete Users check is inside UserController::destroy().
|
*/

Route::delete(
    '/users/{user}',
    [UserController::class, 'destroy']
)
->middleware('auth')
->name('users.destroy');


/*
|--------------------------------------------------------------------------
| Roles & Permissions
|--------------------------------------------------------------------------
|
| Only Admin should be allowed to access this page.
| Protection is inside RolePermissionController.
|
*/

Route::get(
    '/role-permissions',
    [RolePermissionController::class, 'index']
)
->middleware('auth')
->name('role.permissions');

Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])
        ->name('profile.edit');

    Route::patch('/profile', [ProfileController::class, 'update'])
        ->name('profile.update');

    Route::delete('/profile', [ProfileController::class, 'destroy'])
        ->name('profile.destroy');

});


/*
|--------------------------------------------------------------------------
| Authentication Routes
|--------------------------------------------------------------------------
|
| Login
| Register
| Forgot Password
| Reset Password
| Logout
|
*/

require __DIR__.'/auth.php';
