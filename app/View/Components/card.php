<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class card extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public string $modal1, public string $modal2)
    {
        //
    }


    public function render(): View
    {
        return view('components.card');
    }
  /*
    public function render(): View|Closure|string
    {
        return <<<'blade'
<div>
    <!-- Simplicity is the essence of happiness. - Cedric Bledsoe -->
</div>
blade;
    }    */
}
