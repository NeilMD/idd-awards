<?php

namespace App\View\Components\email;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class DesignVerification extends Component
{
    public $designTitle;
    public $category;
    public $description;
    public $designImageUrl;
    public $verificationUrl;
    /**
     * Create a new component instance.
     */
    public function __construct($designTitle, $category, $description, $designImageUrl, $verificationUrl)
    {
       $this->designTitle = $designTitle;
       $this->category = $category;
       $this->description = $description;
       $this->designImageUrl = $designImageUrl;
       $this->verificationUrl =$verificationUrl;
        
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.email.design-verification');
    }
}
