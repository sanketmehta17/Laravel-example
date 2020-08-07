<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Http\Controllers\GuzzleHttp\Client;
use GuzzleHttp\Client;


class PassportController extends Controller
{
    public function index()
    {
        $http = new \GuzzleHttp\Client;

        $response = $http->post('http://example/oauth/token', [
                'form_params' => [
                'grant_type' => 'password',
                'client_id' => '2',
                'client_secret' => 'GsEwQFxpazYl93jGGiehZ7sEThblTi5gE4jpp15z',
                'username' => 'dhruva@shah.com',
                'password' => 'dhruva14',
                'scope' => '',
            ],
        ]);
        return $response;
        return json_decode((string) $response->getBody(), true);
    }
}
