<?php

namespace App\View\Components\Ui;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SidebarMenuSubButton extends Component
{
    /**
     * Base Classes
     */
    protected string $baseClasses = "flex h-7 w-full items-center gap-2 rounded-md px-2 text-sidebar-foreground ring-sidebar-ring hover:bg-sidebar-accent hover:text-sidebar-accent-foreground active:bg-sidebar-accent active:text-sidebar-accent-foreground data-[active=true]:bg-sidebar-accent data-[active=true]:text-sidebar-accent-foreground [&_svg]:size-4 [&>svg]:text-sidebar-accent-foreground";

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

            return view('components.ui.sidebar-menu-sub-button', compact('attributes'));
        };
    }
}
