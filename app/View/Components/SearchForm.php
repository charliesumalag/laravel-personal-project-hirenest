<?php

namespace App\View\Components;

namespace App\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SearchForm extends Component
{
    public $action;


    public function __construct($action)
    {
        $this->action = $action;
    }

    public function render(): View
    {
        return view('components.search-form');
    }
}
