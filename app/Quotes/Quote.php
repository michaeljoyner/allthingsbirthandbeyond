<?php

namespace App\Quotes;

use michaeljoyner\SimpleJsonEndpoint\SimpleJsonEndpoint;

class Quote extends SimpleJsonEndpoint
{
    protected $cache_key = 'daily_quote';

    protected function getEndpointUrl(array $options)
    {
        return 'http://quotes.rest/qod.json?category=inspire';
    }

    protected function parseResponse($response)
    {
        return [
            'quote' => $response['contents']['quotes'][0]['quote'],
            'author' => $response['contents']['quotes'][0]['author']
        ];
    }
}