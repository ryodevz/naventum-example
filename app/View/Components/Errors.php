<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Naventum\Framework\Illuminate\Support\BladeComponentViewTrait;

class Errors extends Component
{
    use BladeComponentViewTrait;

    public $errors = [];

    public function __construct($errors = [])
    {
        $this->errors = $errors;
    }

    public function render()
    {
        return $this->view('errors');
    }
}
