<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    // public function __construct(Request $request)
    // {
    // }
    public function index()
    {
        $data = session('user');
        return $data[0]['role']['id'];
        // $response = Http::withToken(session('token'))->get('https://sdamawebsite.000webhostapp.com/api/form');
        // $json = $response->json();

        // return view('home', [
        //     'message' => $json['message']
        // ]);
    }
}
