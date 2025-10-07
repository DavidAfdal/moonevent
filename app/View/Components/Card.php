<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Card extends Component
{
    public $slug;
    public $image;
    public $category;
    public $price;
    public $title;
    public $pax;
    public $type;
    public $location;

   public function __construct($image, $category, $price, $title, $pax, $type, $location, $slug)
    {
        $this->image = $image;
        $this->category = $category;
        $this->price = $price;
        $this->title = $title;
        $this->pax = $pax;
        $this->type = $type;
        $this->location = $location;
        $this->slug = $slug;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.card');
    }
}
