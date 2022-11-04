<?php

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Validator;

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

Route::post("login", function (Request $request) {
    $credentials = Validator::make($request->all(), [
        'email' => ['required', 'email'],
        'password' => ['required'],
    ]);
    if ($credentials->fails()) {
        return response()->json([
            'status' => 400,
            'message' => $credentials->errors()
        ], 400);
    }
    if (Auth::attempt($credentials->validate())) {
        User::where('email', $request->email)->update([
            'token' => Hash::make(rand(0, 100))
        ]);

        $get_user = User::where('email', $request->email)->first();
        return response()->json([
            'status' => 200,
            'message' => $get_user
        ], 200);
    }
});
Route::post("logout", function (Request $request) {
    $user = User::where('token', $request->token)->update([
        'token' => null
    ]);
    if ($user) {
        return response()->json([
            'status' => 200,
            'message' => "Berhasil Logout"
        ], 200);
    }
    return response()->json([
        'status' => 400,
        'message' => "Gagal Logout"
    ], 400);
});
