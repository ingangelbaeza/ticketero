<?php

namespace App\Ports;

interface TicketeroPort
{
    public static function getAutocomplete(string $q, int $limit);
    public static function getByDestination(array $data);
    public static function getByPerformer(int $id);
    public static function getByVenue(int $id);
}
