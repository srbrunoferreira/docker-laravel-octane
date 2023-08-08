<?php

namespace App\Postcode;

use Illuminate\Support\Facades\Http;

final class PostcodeController
{
    public function forBrazil(string $cep)
    {
        $baseUrl = config('api.postcode.br.base_url');

        $response = Http::get("$baseUrl/$cep/json")->body();

        return response($response)->header('Content-Type', 'application/json');
    }

    public function forPortugal(string $postcode)
    {
        $baseUrl = config('api.postcode.pt.base_url');

        $response = Http::get("$baseUrl/codigo_postal/$postcode")->body();

        return response($response)->header('Content-Type', 'application/json');
    }
}
