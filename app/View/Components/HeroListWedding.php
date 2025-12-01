<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class HeroListWedding extends Component
{
    public $locations;
    public $paxOptions;
    public $priceOptions;

    /**
     * Create a new component instance.
     */
    public function __construct($locations, $paxOptions, $priceOptions)
    {
        $this->locations = $locations;
        $this->paxOptions = $paxOptions;
        $this->priceOptions = $priceOptions;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.hero-list-wedding');
    }
}
