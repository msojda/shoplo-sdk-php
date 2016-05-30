<?php

namespace Acedo\SDK\Shoplo;

use Acedo\SDK\Shoplo\Exception\SerializerException;
use JMS\Serializer\SerializerInterface;

class Serializer
{
    const FORMAT_JSON = 'json';

    /**
     * @var SerializerInterface
     */
    private $serializer;

    public function __construct(SerializerInterface $serializer)
    {
        $this->serializer = $serializer;
    }

    /**
     * @param string $json
     * @param string $className
     * @return object
     * @throws SerializerException
     */
    public function unserialize($json, $className)
    {
        try {
            $object = $this->serializer->deserialize($json, $className, self::FORMAT_JSON);            
        } catch (\Exception $exception) {
            throw new SerializerException("JSON error", $exception->getCode(), $exception);
        }

        return $object;
    }
}
