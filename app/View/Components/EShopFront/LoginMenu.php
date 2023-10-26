<?php

namespace App\View\Components\EShopFront;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class LoginMenu extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.e-shop-front.login-menu');
    }
}
