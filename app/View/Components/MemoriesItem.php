<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class MemoriesItem extends Component
{
    public $memory;

    public function __construct($memory)
    {
        $this->memory = $memory;
    }

    public function render()
    {
        return view('components.memories-item');
    }
}
