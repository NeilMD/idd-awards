<?php

namespace App\View\Components\section;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CardSection extends Component
{   

    public $hiddenAward;
    
    /**
     * Create a new component instance.
     */
    public function __construct($hiddenAward = null)
    {
     $this->hiddenAward = $hiddenAward;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.section.card-section');
    }
}
