<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Naventum\Framework\Illuminate\Support\BladeComponentViewTrait;

class Input extends Component
{
    use BladeComponentViewTrait;

    public $for;

    public function __construct($for = null)
    {
        $this->for = $for;
    }

    public function render()
    {
        return $this->view('input');
    }
}
