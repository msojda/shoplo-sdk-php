<?php

namespace spec\Acedo\SDK\Shoplo;

use Acedo\SDK\Shoplo\Serializer;
use JMS\Serializer\SerializerInterface as JMSSerializerInterface;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

/**
 * @mixin Serializer
 */
class SerializerSpec extends ObjectBehavior
{
    /**
     * @var JMSSerializerInterface
     */
    protected $jmsSerializer;

    function let(JMSSerializerInterface $jmsSerializer)
    {
        $this->jmsSerializer = $jmsSerializer;

        $this->beConstructedWith($this->jmsSerializer);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Acedo\SDK\Shoplo\Serializer');
    }

    function it_unserializes_the_response()
    {
        $json = '{"data": {"type": "articles", "id": "1"}}';

        $this->jmsSerializer->deserialize($json, \stdClass::class, 'json')->shouldBeCalled();

        $this->unserialize($json, \stdClass::class);
    }
}
