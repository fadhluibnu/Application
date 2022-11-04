<?php

namespace App\Http\Livewire\Dashboard;

use App\Models\Student;
use Livewire\Component;
use Illuminate\Support\Facades\DB;
use App\Models\StudentDataValidation;
use Illuminate\Support\Facades\Cookie;

class StudentValidationLivewire extends Component
{

    public $studentsValidation;
    public $old_data_validation;


    public function clearTable()
    {
        DB::table('student_data_validations')->where('id_user', '=', auth()->user()->id)->delete();
    }

    public function mount()
    {
        if (!Cookie::get('imp_success')) {
            $this->clearTable();
            return redirect('/add')->with("no_succ_imp" . auth()->user()->id, "Gagal Submit, <strong>Proses Kadaluarsa</strong>");
        }

        $students = DB::table('student_data_validations')
            ->whereExists(function ($query) {
                $query->select(DB::raw(1))
                    ->from('students')->whereColumn('students.nis', 'student_data_validations.nis')->whereColumn('students.id_user', 'student_data_validations.id_user');
            })
            ->get();

        if ($students->count()) {

            $arr_old_data_student = [];
            foreach ($students as $item) {
                $data = Student::where('id_user', $item->id_user)->where('nis', $item->nis)->get();
                foreach ($data as $item) {
                    $arr_old_data_student[] = [
                        'id' => $item->id,
                        'id_user' => $item->id_user,
                        'nama' => $item->nama,
                        'nis' => $item->nis,
                        'jurusan' => $item->jurusan
                    ];
                }
            }

            // return dd($arr_old_data_student);
            return [$this->studentsValidation = $students, $this->old_data_validation = $arr_old_data_student];
        } else {
            $this->studentsValidation = "Berhasil";
            $studentsVal = StudentDataValidation::where('id_user', auth()->user()->id)->get();
            $array = [];
            foreach ($studentsVal as $item) {
                $array[] = [
                    'id_user' => $item->id_user,
                    'nama' => $item->nama,
                    'nis' => $item->nis,
                    'jurusan' => $item->jurusan,
                    'alamat' => $item->alamat
                ];
            }
            Student::insert($array);
            $this->clearTable();
            return redirect('/add');
        }
    }

    public function batal_sum()
    {

        setcookie('imp_success', '', 1, '/');

        return redirect()->to('/add');
    }

    public function render()
    {
        return view('livewire.dashboard.student-validation-livewire', [
            'title' => 'Cek Data'
        ]);
    }
}
