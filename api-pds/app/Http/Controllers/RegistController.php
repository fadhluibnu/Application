<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegistController extends Controller
{
    public function regist(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required',
            'role' => 'required',
            'telp' => 'required',
            'email' => 'required',
            'photo' => 'required'
        ]);
        $validateData['photo'] = $request->file('photo')->store('profile');
        $create = User::create($validateData);
        if ($create) {
            return redirect('registrasi')->with("success", "Berhasil");
        }
        return redirect('registrasi')->with("gagal", "Berhasil");
    }
}
