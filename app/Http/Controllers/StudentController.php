<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Ryodevz\Validator\Support\Facade\Validator;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::query();

        if (request()->get('q')) {
            $students = $students->where('nisn', 'LIKE', '%' . request()->get('q') . '%')->orWhere('name', 'LIKE', '%' . request()->get('q') . '%');
        }

        $students = $students->orderBy('created_at', 'DESC')->get();

        return view('student/index', compact('students'));
    }

    public function create()
    {
        return view('student/create');
    }

    public function edit(Student $student)
    {
        return view('student.edit', compact('student'));
    }

    public function store()
    {
        $validator = Validator::make(request()->all(), [
            'nisn' => 'required|max:191',
            'name' => 'required|string|max:50',
            'address' => 'required|string|max:191',
            'department' => 'required|string|max:191',
        ])->validate();

        if (!$validator->fails()) {
            Student::create([
                'nisn' => request()->nisn,
                'name' => request()->name,
                'address' => request()->address,
                'department' => request()->department
            ]);

            return redirect('/', ['success' => 'Berhasil di tambah.']);
        }

        return redirect('/student/create', ['errors' => $validator->all()]);
    }

    public function update(Student $student)
    {
        $validator = Validator::make(request()->all(), [
            'nisn' => 'required|max:191',
            'name' => 'required|string|max:50',
            'address' => 'required|string|max:191',
            'department' => 'required|string|max:191',
        ])->validate();

        if (!$validator->fails()) {
            $student->update([
                'nisn' => request()->nisn,
                'name' => request()->name,
                'address' => request()->address,
                'department' => request()->department
            ]);

            return redirect('/', ['success' => 'Berhasil di update.']);
        }

        return redirect('/student/' . $student->id . '/edit', ['errors' => $validator->all()]);
    }

    public function destroy(Student $student)
    {
        $student->delete();

        return redirect('/', ['success' => 'Berhasil di hapus.']);
    }
}
