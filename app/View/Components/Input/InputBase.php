<?php

namespace App\View\Components\Input;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class InputBase extends Component
{
    public string $label;
    public string $name;
    public string $type;
    public bool $required;
    public string $customClass;

    /**
     * Create a new component instance.
     */
    public function __construct(
        string $label,
        string $name,
        string $type = 'text',
        bool $required = false,
        string $customClass = ''
    )
    {
        $this->label = $label;
        $this->name = $name;
        $this->type = $type;
        $this->required = $required;
        $this->customClass = $customClass;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.input.input-base');
    }
}
