<?php

namespace Acedo\SDK\Shoplo;

use Acedo\SDK\Shoplo\Exception\ClientException;

interface HttpClientInterface
{
    const HTTP_GET = 'GET';
    const HTTP_POST = 'POST';

    /**
     * @param $location
     * @param $method
     *
     * @return string
     *
     * @throws ClientException
     */
    public function send($location, $method);
}
