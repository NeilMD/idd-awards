<?php

namespace App\View\Components\Section;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Memories extends Component
{
    public $submissions;
    /**
     * Create a new component instance.
     */
    public function __construct($submissions = null)
    {
        $this->submissions = $submissions;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.section.memories');
    }
}
