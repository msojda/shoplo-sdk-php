<?php

namespace spec\Acedo\SDK\Shoplo\HttpClient;

use Acedo\SDK\Shoplo\HttpClient\GuzzleHttpClient;
use GuzzleHttp\Client;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\StreamInterface;

/**
 * @mixin GuzzleHttpClient
 */
class GuzzleHttpClientSpec extends ObjectBehavior
{
    /**
     * @var Client
     */
    protected $guzzle;

    function let(Client $client)
    {
        $this->beConstructedWith($client);

        $this->guzzle = $client;
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Acedo\SDK\Shoplo\HttpClient\GuzzleHttpClient');
    }

    function it_sends_a_request(ResponseInterface $response)
    {
        $this->guzzle->request('GET', '/shop')->willReturn($response)->shouldBeCalled();

        $this->send('/shop', 'GET');
    }

    function it_receives_a_response(ResponseInterface $response, StreamInterface $stream)
    {
        $response->getBody()->willReturn($stream);

        $stream->__toString()->willReturn('response');

        $this->guzzle->request('GET', '/shop')->willReturn($response)->shouldBeCalled();

        $this->send('/shop', 'GET')->shouldBeString();
    }

    function it_receives_a_JSON_response(ResponseInterface $response, StreamInterface $stream)
    {
        $response->getBody()->willReturn($stream);

        $stream->__toString()->willReturn('{"data": {"type": "articles", "id": "1"}}');

        $this->guzzle->request('GET', '/shop')->willReturn($response)->shouldBeCalled();

        $this->send('/shop', 'GET')->shouldReturn('{"data": {"type": "articles", "id": "1"}}');
    }
}
