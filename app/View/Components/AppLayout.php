<?php

namespace App\View\Components;

use Illuminate\View\Component;

class AppLayout extends Component
{
    public ?string $title;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(?string $title = null)
    {
        $this->title = "Shaxsiy Blog";
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render(): \Illuminate\Contracts\View\View|string|\Closure
    {
        return view('layout.app');
    }
}
