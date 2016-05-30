<?php

namespace Acedo\SDK\Shoplo\Repository;

use Acedo\SDK\Shoplo\AbstractRepository;
use Acedo\SDK\Shoplo\Exception\ShoploException;
use Acedo\SDK\Shoplo\HttpClientInterface;
use Acedo\SDK\Shoplo\Model\GetShopResponse;
use Acedo\SDK\Shoplo\Model\Shop;

class ShopRepository extends AbstractRepository
{
    /**
     * @return Shop
     * @throws ShoploException
     */
    public function getShop()
    {
        try {
            $json = $this->client->send('shop', HttpClientInterface::HTTP_GET);
            $unserialized = $this->serializer->unserialize($json, GetShopResponse::class);            
        } catch (\Exception $exception) {
            throw new ShoploException();
        }

        return $unserialized->shop;
    }
}