<?php

namespace Acedo\SDK\Shoplo;

abstract class AbstractRepository
{
    /**
     * @var HttpClientInterface
     */
    protected $client;

    /**
     * @var Serializer
     */
    protected $serializer;

    public function __construct(HttpClientInterface $client, Serializer $serializer)
    {
        $this->client = $client;
        $this->serializer = $serializer;
    }
}