<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Card extends Component
{
    /**
     * Create a new component instance.
     * @return void
     */

    //  defining variables here
    public $title;
    public $subTitle;
    public $description;
    public function __construct($title,$subTitle, $description)
    {
        $this->title = $title;
        $this->subTitle = $subTitle;
        $this->description=$description;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.card');
    }

    // Component Method
    public function addNumber($a) {
        return $a + 20;
    }
}
