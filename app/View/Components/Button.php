<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Naventum\Framework\Illuminate\Support\BladeComponentViewTrait;

class Button extends Component
{
    use BladeComponentViewTrait;

    public $to;

    public function __construct($to = null)
    {
        $this->to = $to;
    }

    public function render()
    {
        return $this->view('button');
    }
}
