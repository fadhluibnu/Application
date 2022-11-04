<?php

namespace App\Imports;

use App\Models\Student;
use App\Models\StudentDataValidation;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithValidation;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\SkipsErrors;
use Maatwebsite\Excel\Concerns\SkipsOnError;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Throwable;

class StudentImport implements ToModel, WithValidation, WithHeadingRow, SkipsOnError
{
    use Importable, SkipsErrors;
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */


    public function model(array $row)
    {
        return new StudentDataValidation([
            'id_user' => request()->input('idUser'),
            'nama' => $row['nama'],
            'nis' => $row['nis'],
            'jurusan' => $row['jurusan'],
            'alamat' => $row['alamat']
        ]);
    }
    public function rules(): array
    {
        return [
            // '*.nis' => ['unique:students,nis']
        ];
    }
}
