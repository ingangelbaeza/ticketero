<?php

namespace App\Adapters;

use App\Http\Controllers\Ticketero;
use App\Ports\TicketeroPort;

class TicketeroAdapter implements TicketeroPort
{

    public static function getAutocomplete(string $q, int $limit)
    {
        return (new Ticketero())->getAutocomplete(q: $q, limit: $limit);
    }

    public static function getByDestination(array $data)
    {
        $parameters = [
            'startDate' => $data['startDate'],
            'endDate' => $data['endDate'],
            'searchType' => $data['searchType'],
            'withPerformers' => $data['withPerformers'],
            'destination' =>[
                'latitude' => $data['latitude'],
                'longitude' => $data['longitude'],
                'radius' => $data['radius'],
                'city' => $data['city'],
            ]
        ];
    }

    public static function getByPerformer(array $data)
    {
        // TODO: Implement getByPerformer() method.
    }

    public static function getByVenue(array $data)
    {
        // TODO: Implement getByVenue() method.
    }
}
