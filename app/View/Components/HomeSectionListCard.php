<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class HomeSectionListCard extends Component
{
    public array $lists;
    /**
     * Create a new component instance.
     */
    public function __construct(array $lists)
    {
        $this->lists = $lists;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.home-section-list-card');
    }
}
