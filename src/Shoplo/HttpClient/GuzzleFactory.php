<?php

namespace Acedo\SDK\Shoplo\HttpClient;

use GuzzleHttp\Client;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Subscriber\Oauth\Oauth1;

class GuzzleFactory
{
    /**
     * @param string $url
     * @param array  $credentials
     *
     * @return Client
     */
    public static function forUrlAndCredentials($url, array $credentials)
    {
        $middleware = new Oauth1($credentials);

        $stack = HandlerStack::create();
        $stack->push($middleware);

        return new Client([
            'base_uri' => $url,
            'handler' => $stack,
            'auth' => 'oauth',
        ]);
    }
}
