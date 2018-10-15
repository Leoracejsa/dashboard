<?php

namespace App\Model;

use GuzzleHttp\Client;

abstract class BaseModel
{
    protected static function getClientApi()
    {
        return new Client([
            // Base URI is used with relative requests
            'base_uri' => 'https://bb-api-uni.herokuapp.com',
            // You can set any number of default request options.
            'timeout'  => 2.0,
        ]);
    }

    protected static function makeReturn($response)
    {
        return collect(json_decode($response->getBody()->getContents()));
    }
}
