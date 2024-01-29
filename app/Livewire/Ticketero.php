<?php

namespace App\Livewire;

use Livewire\Attributes\Validate;
use App\Adapters\TicketeroAdapter;
use Livewire\Component;

class Ticketero extends Component
{
    #[Validate('required', message: 'El campo es requerido')]
    #[Validate('max:255',message: 'El campo acepta maximo 255 caracteres')]
    public $search;
    public $results;

    public function render()
    {
        return view('livewire.ticketero');
    }

    public function send()
    {
        $this->validate();
        $this->results = TicketeroAdapter::getAutocomplete(q: $this->search, limit: 10);
    }

    public function performer($id)
    {
        return redirect(route('ticketeros.performer', $id));
    }
    public function venue($id)
    {
        return redirect(route('ticketeros.venue', $id));
    }
    public function destination($latitude, $longitude, $city)
    {
        return redirect(route('ticketeros.destination', [$latitude, $longitude, $city]));
    }
}
