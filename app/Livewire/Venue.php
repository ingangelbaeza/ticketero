<?php

namespace App\Livewire;

use App\Adapters\TicketeroAdapter;
use Livewire\Component;

class Venue extends Component
{
    public $id;
    public $venues;
    public function render()
    {
        $this->venues = TicketeroAdapter::getByVenue($this->id);
        return view('livewire.venue');
    }
}
