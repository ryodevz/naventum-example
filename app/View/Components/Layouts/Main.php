<?php

namespace App\View\Components\Layouts;

use Illuminate\View\Component;
use Naventum\Framework\Illuminate\Support\BladeComponentViewTrait;

class Main extends Component
{
    use BladeComponentViewTrait;

    public $title;

    public function __construct($title = null)
    {
        $this->title = $title;
    }

    public function render()
    {
        return $this->view('layouts.main');
    }
}
