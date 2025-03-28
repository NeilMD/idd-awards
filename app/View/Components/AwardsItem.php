<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class AwardsItem extends Component
{
    public $pageUrl;
    public $imageUrl;
    public $awardTitle;
    public $awardText;

    public function __construct($pageUrl, $imageUrl, $awardTitle, $awardText)
    {
        $this->pageUrl = $pageUrl;
        $this->imageUrl = $imageUrl;
        $this->awardTitle = $awardTitle;
        $this->awardText = $awardText;
    }

    public function render()
    {
        return view('components.awards-item');
    }
}
