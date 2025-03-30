<?php

namespace App\View\Components\Section;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class NavHeader extends Component
{
    public $active;
    /**
     * Create a new component instance.
     */
    public function __construct($active = null)
    {
        $this->active = $active;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.section.nav-header');
    }
}
