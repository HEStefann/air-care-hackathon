<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class footer extends Component
{
    /**
     * Create a new component instance.
     */
    public $roundFooter;
    public $noBack;

    public function __construct($roundFooter, $noBack)
    {
        $this->roundFooter = $roundFooter;
        $this->noBack = $noBack;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.footer');
    }
}
