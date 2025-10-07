<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class WeeddingCard extends Component
{
    public $slug;
    public $thumbnail;
    public $name;

    public $location;
    public $price;
    public $days;
    public function __construct($slug, $name, $thumbnail, $location, $price, $days)
    {
        $this->slug = $slug;
        $this->name = $name;
        $this->thumbnail = $thumbnail;
        $this->location = $location;
        $this->price = $price;
        $this->days = $days;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.weedding-card');
    }
}
