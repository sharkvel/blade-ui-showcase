<?php

namespace App\View\Components\Ui;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TableBody extends Component
{
    /**
     * Base Classes
     */
    protected string $baseClasses = '[&_tr:last-child]:border-0';

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
        return function (array $data) {
            $attributes = $data['attributes']->twMerge(
                $this->baseClasses,
            );

            return view('components.ui.table-body', compact('attributes'));
        };
    }
}
