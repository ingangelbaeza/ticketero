<?php

namespace App\Livewire;

use App\Adapters\TicketeroAdapter;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Destination extends Component
{
    public $latitude;
    public $longitude;
    public $city;
    public $destinations;

    #[Validate('required')]
    public $startDate;
    #[Validate('required')]
    public $endDate;
    #[Validate('required')]
    public $radius;


    public function render()
    {
        $this->radius = 50;
        return view('livewire.destination');
    }

    public function getByDestination()
    {
        $this->validate();
        $parameters = [
            'startDate' => $this->startDate,
            'endDate' => $this->endDate,
            'destination' =>[
                'latitude' => $this->latitude,
                'longitude' => $this->longitude,
                'radius' => $this->radius,
                'city' => $this->city,
            ]
        ];
        $this->destinations = TicketeroAdapter::getByDestination($parameters);
    }
}
