<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Support\Facades\Http;

class Ticketero extends Controller
{
    private string $endpoint;
    private string $token;

    public function __construct()
    {
        $this->endpoint = config('ticketero.api.endpoint');
        $this->token = config('ticketero.api.token');
    }

    public function getAutocomplete(string $q, int $limit)
    {
        $parameters = [
            'q' => $q,
            'limit' => $limit
        ];
        try {
            $response = Http::withHeaders([
                'Authorization' => 'Bearer ' . $this->token,
                'Accept' => 'application/json',
                'Content-Type' => 'application/json',
            ])->get($this->endpoint . '/search/autocomplete?' . http_build_query($parameters));
            return $response->json();

        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function getByDestination(array $data)
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
        try {
            $response = Http::withHeaders([
                'Authorization' => 'Bearer ' . $this->token,
                'Accept' => 'application/json',
                'Content-Type' => 'application/json',
            ])->get($this->endpoint . '/search/events?' . http_build_query($parameters));
            return $response->json();

        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
    public function getByPerformer(array $data)
    {
        $parameters = [
            'searchType' => $data['searchType'],
            'performerId' => $data['performerId'],
            'withPerformers' => $data['withPerformers'],
        ];
        try {
            $response = Http::withHeaders([
                'Authorization' => 'Bearer ' . $this->token,
                'Accept' => 'application/json',
                'Content-Type' => 'application/json',
            ])->get($this->endpoint . '/search/events?' . http_build_query($parameters));
            return $response->json();

        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
    public function getByVenue(array $data)
    {
        $parameters = [
            'searchType' => $data['searchType'],
            'venueId' => $data['performerId'],
            'withPerformers' => $data['withPerformers'],
        ];
        try {
            $response = Http::withHeaders([
                'Authorization' => 'Bearer ' . $this->token,
                'Accept' => 'application/json',
                'Content-Type' => 'application/json',
            ])->get($this->endpoint . '/search/events?' . http_build_query($parameters));
            return $response->json();

        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
}
