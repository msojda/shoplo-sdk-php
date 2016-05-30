<?php

namespace integration\Acedo;

use Acedo\SDK\Shoplo\HttpClient\GuzzleFactory;
use Acedo\SDK\Shoplo\HttpClient\GuzzleHttpClient;
use Acedo\SDK\Shoplo\Serializer;

abstract class AbstractRepositoryTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var GuzzleHttpClient
     */
    protected $client;

    /**
     * @var Serializer
     */
    protected $serializer;

    public function setUp()
    {
        \Doctrine\Common\Annotations\AnnotationRegistry::registerAutoloadNamespace(
            'JMS\Serializer\Annotation',
            dirname(__DIR__) . '/../vendor/jms/serializer/src'
        );

        $credentials = [
            'consumer_key' => getenv('SHOPLO_CONSUMER_KEY'),
            'consumer_secret' => getenv('SHOPLO_CONSUMER_SECRET'),
            'token' => getenv('SHOPLO_TOKEN'),
            'token_secret' => getenv('SHOPLO_TOKEN_SECRET')
        ];

        $guzzle = GuzzleFactory::forUrlAndCredentials('http://api.shoplo.com/services/', $credentials);

        $this->client = new GuzzleHttpClient($guzzle);

        $this->serializer = new Serializer(\JMS\Serializer\SerializerBuilder::create()->build());
    }
}