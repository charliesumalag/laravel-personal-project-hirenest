<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class PostJobSelectField extends Component
{
    public $label;
    public $name;
    public $options;
    /**
     * Create a new component instance.
     */
    public function __construct($label = null, $name = null, $options = [])
    {
        $this->label = $label;
        $this->name = $name;
        $this->options = $options;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.post-job-select-field');
    }
}
