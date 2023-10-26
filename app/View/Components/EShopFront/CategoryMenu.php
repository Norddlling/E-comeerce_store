<?php

namespace App\View\Components\EShopFront;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CategoryMenu extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public array|object $categories)
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.e-shop-front.category-menu');
    }
}
