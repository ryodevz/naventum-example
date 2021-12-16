<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Naventum\Framework\Illuminate\Support\BladeComponentViewTrait;

class Form extends Component
{
    use BladeComponentViewTrait;

    public $method;

    public $action;

    public function __construct($method, $action = null)
    {
        $this->method = $method;
        $this->action = $action;
    }

    public function render()
    {
        return $this->view('form');
    }
}
