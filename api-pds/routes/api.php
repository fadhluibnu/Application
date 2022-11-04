<?php

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('/login', function (Request $request) {
    $user = User::where('email', $request->email)->first();

    if (!$user || $user->name != $request->name) {
        return response()->json([
            'success' => false,
            'err' => 'Email is inccorrect',
            'token' => null
        ]);
    }

    $token = $user->createToken('token-name')->plainTextToken;
    return response()->json([
        'success' => true,
        'err' => 'Success',
        'token' => $token
    ]);
});

Route::get('/user/{email}', function ($email) {
    $user = User::where('email', $email)->get();
    if (!$user) {
        return response()->json([
            'success' => false,
            'err' => 'Email is inccorrect',
            'token' => null
        ]);
    }
    return response()->json($user);
});

Route::get('/user-id/{id}', function ($id) {
    $user = User::where('id', $id)->get();
    if (!$user) {
        return response()->json([
            'success' => false,
            'err' => 'Id is inccorrect',
            'token' => null
        ]);
    }
    return response()->json($user);
});
