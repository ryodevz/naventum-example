<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Naventum\Framework\Illuminate\Support\BladeComponentViewTrait;

class Success extends Component
{
    use BladeComponentViewTrait;

    public function __construct()
    {
        // 
    }

    public function render()
    {
        return $this->view('success');
    }
}
