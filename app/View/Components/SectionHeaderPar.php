<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SectionHeaderPar extends Component
{
    public string $headerText;
    public string $headerPar;

    /**
     * Create a new component instance.
     */
    public function __construct($headerText = '', $headerPar = '')
    {
        $this->headerText = $headerText;
        $this->headerPar = $headerPar;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.section-header-par');
    }
}
