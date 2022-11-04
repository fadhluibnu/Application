<?php

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
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

Route::group(['middleware' => 'auth:sanctum'], function () {
    Route::get('/roles', function () {
        return response()->json([
            'message' => 'success',
            'roles' => Role::all(),
            'status' => 200
        ], 200);
    });
    Route::get('/logout', function (Request $request) {
        $user = $request->user();
        $user->currentAccessToken()->delete();

        return response()->json([
            'message' => 'Berhasil Logout',
            'status' => 200
        ], 200);
    });
});

Route::post('/login', function (Request $request) {
    $user = User::where('email', $request->email)->first();

    if (!$user || !Hash::check($request->password, $user->password)) {
        return response()->json([
            'message' => 'unauthorized',
            'status' => 404
        ], 404);
    }

    $token = $user->createToken('token-name')->plainTextToken;

    return response()->json([
        'message' => 'success',
        'token' => $token,
        'user' => $user,
        'status' => 200
    ], 200);
});
