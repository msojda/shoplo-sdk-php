<?php

namespace Acedo\SDK\Shoplo\HttpClient;

use Acedo\SDK\Shoplo\Exception\ClientException;
use Acedo\SDK\Shoplo\HttpClientInterface;
use GuzzleHttp\Client;

class GuzzleHttpClient implements HttpClientInterface
{
    /**
     * @var Client
     */
    private $guzzle;

    public function __construct(Client $guzzle)
    {
        $this->guzzle = $guzzle;
    }

    /**
     * {@inheritdoc}
     */
    public function send($location, $method)
    {
        try {
            $response = $this->guzzle->request($method, $location);
        } catch (\Exception $exception) {
            throw new ClientException('Request error', $exception->getCode(), $exception);
        }

        return (string) $response->getBody();
    }
}
