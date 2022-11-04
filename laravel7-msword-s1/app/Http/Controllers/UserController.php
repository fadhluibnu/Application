<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use PhpOffice\PhpWord\TemplateProcessor;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }
    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('users.show', compact('user'));
    }
    public function Eksport($id)
    {
        $user = User::findOrFail($id);
        $templateProcessor = new TemplateProcessor('word-template/user.docx');
        $templateProcessor->setValue('id', $user->id);
        $templateProcessor->setValue('name', $user->name);
        $templateProcessor->setValue('email', $user->address);
        $templateProcessor->setValue('address', $user->address);
        $fileName = $user->name;
        $templateProcessor->saveAs($fileName . '.docx');

        return response()->download($fileName . '.docx')->deleteFileAfterSend(true);
    }
    public function eksall()
    {
        $user = User::all();
        $templateProcessor = new TemplateProcessor('word-template/user.docx');
        $array = [];
        foreach ($user as $key) {
            $array[] = [
                'id' => $key->id,
                'name' => $key->name,
                'email' => $key->email,
                'address' => $key->address
            ];
        }
        $templateProcessor->cloneBlock('block_clone', 0, true, false, $array);
        $fileName = "All Data";
        $templateProcessor->saveAs($fileName . '.docx');

        return response()->download($fileName . '.docx')->deleteFileAfterSend(true);
    }
}
