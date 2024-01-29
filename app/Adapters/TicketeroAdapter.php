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
            'searchType' => 'destination',
            'withPerformers' => false,
            'destination' =>[
                'latitude' => $data['destination']['latitude'],
                'longitude' => $data['destination']['longitude'],
                'radius' => $data['destination']['radius'],
                'city' => $data['destination']['city'],
            ]
        ];

        return (new Ticketero())->getByDestination(data: $parameters);
    }

    public static function getByPerformer(int $id)
    {
        $parameters = [
            'searchType' => 'performer',
            'performerId' => $id,
            'withPerformers' => false,
        ];
        return (new Ticketero())->getByPerformer(data: $parameters);
    }

    public static function getByVenue(int $id)
    {
        $parameters = [
            'searchType' => 'venue',
            'performerId' => $id,
            'withPerformers' => false,
        ];
        return (new Ticketero())->getByVenue(data: $parameters);
    }
}
