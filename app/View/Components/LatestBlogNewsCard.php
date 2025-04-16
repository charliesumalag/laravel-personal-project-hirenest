<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class LatestBlogNewsCard extends Component
{
    public $image;
    /**
     * Create a new component instance.
     */
    public function __construct($image)
    {

        $imagePath = public_path('images/homepage/' . $image . '.jpg');

        if (file_exists($imagePath)) {
            $this->image = 'images/homepage/' . $image . '.jpg';
        } else {
            $this->image = 'images/homepage/logo.png';
        }
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.latest-blog-news-card');
    }
}
