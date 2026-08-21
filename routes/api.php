<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Controllers\AuthController;

// |Retrieve|

Route::get('/users', function () {

    $users = User::get();

    return response()->json([
        'status' => 200,
        'users' => $users
    ]);

});

// |Create|

Route::post('/users', function (Request $request) {

    $request->validate([
        'name' => 'required',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|min:8',
    ]);

    $user = User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => $request->password,
    ]);

    return response()->json([
        'status' => 201,
        'message' => 'User created successfully',
        'user' => $user
    ], 201);

});

// |Update|

Route::put('/users/{id}', function (Request $request, $id) {

    $user = User::find($id);

    if (!$user) {
        return response()->json([
            'status' => 404,
            'message' => 'User not found'
        ], 404);
    }

    $request->validate([
        'name' => 'required',
        'email' => 'required|email',
    ]);

    $user->update([
        'name' => $request->name,
        'email' => $request->email,
    ]);

    return response()->json([
        'status' => 200,
        'message' => 'User updated successfully',
        'user' => $user
    ]);

});

// |Delete|

Route::delete('/users/{id}', function ($id) {

    $user = User::find($id);

    if (!$user) {
        return response()->json([
            'status' => 404,
            'message' => 'User not found'
        ], 404);
    }

    $user->delete();

    return response()->json([
        'status' => 200,
        'message' => 'User deleted successfully'
    ]);

});

Route::post('/register', [AuthController::class, 'register']);

Route::post('/login', [AuthController::class, 'login']);