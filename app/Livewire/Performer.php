<?php

namespace App\Livewire;

use App\Adapters\TicketeroAdapter;
use Livewire\Component;

class Performer extends Component
{
    public $id;
    public $performers;
    public function render()
    {
        $this->performers = TicketeroAdapter::getByPerformer($this->id);
        return view('livewire.performer', );
    }
}
