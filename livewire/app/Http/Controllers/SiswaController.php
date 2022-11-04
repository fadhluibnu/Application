<?php

namespace App\Http\Controllers;

use App\Exports\SiswaExport;
use App\Imports\SiswaImport;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Maatwebsite\Excel\Excel;

class SiswaController extends Controller
{
    public function index()
    {
        $siswa = Siswa::all();
        return view('siswa', [
            'siswa' => $siswa
        ]);
    }
    public function export_excel()
    {
        return Excel::download(new SiswaExport, 'siswa.xlsx');
    }

    public function import_excel(Request $request)
    {
        // validasi
        $this->validate($request, [
            'file' => 'required|mimes:csv,xsl,xlsx'
        ]);

        //menangkap file excel
        $file = $request->file('file');

        //membuat nama file unik
        $nama_file = rand() . $file->getClientOriginalName();

        //upload ke folder file_siswa di dalam folder public
        $file->move('file_siswa', $nama_file);

        //import data
        Excel::import(new SiswaImport, public_path('/file_siswa/' . $nama_file));

        // notifikasi dengan session
        return redirect('/siswa')->with('success', 'All good!');
    }
}
