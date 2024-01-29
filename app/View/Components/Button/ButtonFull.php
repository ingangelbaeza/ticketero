<?php

namespace App\View\Components\Button;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ButtonFull extends Component
{
    public string $label;
    public string $action;
    public string $type;
    public string $customClass;

    /**
     * Create a new component instance.
     */
    public function __construct(string $label, string $action, string $type = 'button', string $customClass = '')
    {
        //
        $this->label = $label;
        $this->action = $action;
        $this->type = $type;
        $this->customClass = $customClass;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.button.button-full');
    }
}
