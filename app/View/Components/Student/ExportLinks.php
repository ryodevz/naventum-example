<?php

namespace App\View\Components\Student;

use Illuminate\View\Component;
use Naventum\Framework\Illuminate\Support\BladeComponentViewTrait;

class ExportLinks extends Component
{
    use BladeComponentViewTrait;

    public function __construct()
    {
        // 
    }

    public function render()
    {
        return $this->view('student.export-links');
    }
}
