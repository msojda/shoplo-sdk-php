<?php

namespace Acedo\SDK\Shoplo\Model;

use JMS\Serializer\Annotation\Type;

class GetShopResponse
{
    /**
     * @var Shop
     * @Type("Acedo\SDK\Shoplo\Model\Shop")
     */
    public $shop;
}
