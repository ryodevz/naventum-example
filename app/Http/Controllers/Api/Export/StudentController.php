<?php

namespace App\Http\Controllers\Api\Export;

use App\Models\Student;
use Ryodevz\Phpexport\Support\Facade\Export;

class StudentController
{
    public function pdf()
    {
        return (new Export)->makePDF(view('student.api.index', ['students' => $this->get()]))->download();
    }

    public function pdf_preview()
    {
        return (new Export)->makePDF(view('student.api.index', ['students' => $this->get()]))->preview();
    }

    public function excel()
    {
        return (new Export)->makeExcel(view('student.api.index', ['students' => $this->get()]))->download();
    }

    public function word()
    {
        return (new Export)->makeWord(view('student.api.index', ['students' => $this->get()]))->download();
    }

    private function query()
    {
        $students = Student::query();

        if (request()->get('q')) {
            $students = $students->where('nisn', 'LIKE', '%' . request()->get('q') . '%')->orWhere('name', 'LIKE', '%' . request()->get('q') . '%');
        }

        return $this->orderAndGet($students);
    }

    private function get()
    {
        return $this->query();
    }

    private function orderAndGet($students)
    {
        return $students->orderBy('created_at', 'DESC')->get();
    }
}
