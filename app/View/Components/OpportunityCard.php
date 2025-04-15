<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class OpportunityCard extends Component
{
    public $title;
    public $image;
    public function __construct($title = '', $image = '')
    {
        $this->title = $title;
        $this->image = $image;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.opportunity-card');
    }
}
