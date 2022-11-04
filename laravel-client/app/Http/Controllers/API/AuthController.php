<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;

class AuthController extends Controller
{
    public function index()
    {
        return view('login');
    }
    public function login(Request $request)
    {
        $email = $request->email;
        $password = $request->password;

        $response = Http::accept('application/json')->post('https://pds-api-example.000webhostapp.com/api/login', [
            'email' => $email,
            'password' => $password,
        ]);
        $json = $response->json();

        if ($json['message'] != 'unauthorized') {
            if ($json['status'] == 200 & $json['message'] == "success") {
                session([
                    'user' => [
                        $json['user']
                    ],
                    'token' => $json['token']
                ]);

                return redirect()->route('home');
            }
        }
        return redirect()->route('login');
    }
    public function logout()
    {
        $response = Http::withToken(session('token'))->get('https://pds-api-example.000webhostapp.com/api/logout');
        // return $response['status'];
        if ($response['status'] == 200) {
            session()->forget(['user', 'token']);
            return redirect()->route('login');
        }
        return redirect('/');
    }
}
