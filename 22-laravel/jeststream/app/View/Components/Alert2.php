<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Alert2 extends Component
{
    public $color;

    /**
     * Create a new component instance.
     */
    public function __construct($type = 'warning')
    {
        $colors = [
            'success' => 'border-green-500 text-green-700 bg-green-100',
            'info' => 'border-blue-500 text-blue-700 bg-blue-100',
            'warning' => 'border-orange-500 text-orange-700 bg-orange-100',
        ];

        $this->color = $colors[$type] ?? $colors['warning'];
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.alert2');
    }
}
