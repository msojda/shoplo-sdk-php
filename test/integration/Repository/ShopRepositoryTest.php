<?php

namespace integration\Acedo\Repository;

use Acedo\SDK\Shoplo\Model\Shop;
use Acedo\SDK\Shoplo\Repository\ShopRepository;
use Hamcrest\MatcherAssert as ha;
use Hamcrest\Matchers as hm;
use integration\Acedo\AbstractRepositoryTest;

class ShopRepositoryTest extends AbstractRepositoryTest
{
    /**
     * @var ShopRepository
     */
    private $shopRepository;

    public function setUp()
    {
        parent::setUp();

        $this->shopRepository = new ShopRepository($this->client, $this->serializer);
    }

    public function testGetShop()
    {
        $shop = $this->shopRepository->getShop();

        ha::assertThat('valid shop', $shop, hm::is(hm::anInstanceOf(Shop::class)));
        ha::assertThat('valid shop id', $shop->id, hm::is(hm::greaterThan(0)));
        ha::assertThat('valid shop name', $shop->name, hm::is(hm::nonEmptyString()));
        ha::assertThat('valid shop domain', $shop->domain, hm::is(hm::nonEmptyString()));
    }
}