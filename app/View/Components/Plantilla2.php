<?php

namespace App\View\Components;

use Closure;
//use App\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Plantilla2 extends Component
{

    public $producto;

    public function __construct($producto)
    {
        $this->producto = $producto;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.plantilla2');
    }

    
}
