<?php

namespace App\Livewire;

use Livewire\Attributes\Validate;
use App\Adapters\TicketeroAdapter;
use Livewire\Component;

class Ticketero extends Component
{
    #[Validate('required|string|max:255')]
    public $search;
    public $results;

    public function render()
    {
        return view('livewire.ticketero');
    }

    public function aaa()
    {
        $this->validate();
        $this->results = TicketeroAdapter::getAutocomplete(q: $this->search, limit: 10)['data']['results'];
    }
}
