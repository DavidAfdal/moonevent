<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TestimonialCard extends Component
{
    public $avatar;
    public $name;
    public $date;
    public $message;
    public function __construct($avatar, $name, $date, $message)
    {
        $this->avatar = $avatar;
        $this->name = $name;
        $this->date = $date;
        $this->message = $message;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.testimonial-card');
    }
}
