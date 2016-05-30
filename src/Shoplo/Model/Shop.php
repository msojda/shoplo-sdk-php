<?php

namespace Acedo\SDK\Shoplo\Model;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class Shop
{
    /**
     * @var int
     * @Type("integer")
     */
    public $id;

    /**
     * @var string
     * @Type("string")
     */
    public $name;

    /**
     * @var string
     * @Type("string")
     */
    public $email;

    /**
     * @var string
     * @Type("string")
     */
    public $domain;

    /**
     * @var string
     * @Type("string")
     * @SerializedName("permanent_domain")
     */
    public $permanentDomain;

    /**
     * @var string
     * @Type("string")
     * @SerializedName("shop_owner")
     */
    public $shopOwner;

    /**
     * @var string
     * @Type("string")
     */
    public $currency;

    /**
     * @var string
     * @Type("string")
     * @SerializedName("currency_code")
     */
    public $currencyCode;

    /**
     * @var string
     * @Type("string")
     * @SerializedName("money_format")
     */
    public $moneyFormat;

    /**
     * @var string
     * @Type("string")
     * @SerializedName("money_with_currency_format")
     */
    public $moneyWithCurrencyFormat;

    /**
     * @var string
     * @Type("string")
     */
    public $address1;

    /**
     * @var string
     * @Type("string")
     */
    public $city;

    /**
     * @var string
     * @Type("string")
     * @SerializedName("zip_code")
     */
    public $zipCode;

    /**
     * @var string
     * @Type("string")
     */
    public $country;

    /**
     * @var string
     * @Type("string")
     */
    public $phone;

    /**
     * @var string
     * @Type("string")
     */
    public $www;

    /**
     * @var string
     * @Type("string")
     */
    public $language;

    /**
     * @var string
     * @Type("string")
     * @SerializedName("checkout_language")
     */
    public $checkoutLanguage;

    /**
     * @var string
     * @Type("string")
     */
    public $timezone;

    /**
     * @var string
     * @Type("string")
     * @SerializedName("bank_account")
     */
    public $bankAccount;

    /**
     * @var string
     * @Type("string")
     * @SerializedName("bank_name")
     */
    public $bankName;

    /**
     * @var \DateTime
     * @Type("DateTime<'Y-m-d H:i:s'>")
     * @SerializedName("created_at")
     */
    public $createdAt;

    /**
     * @var string
     * @Type("string")
     * @SerializedName("vat_id")
     */
    public $vatId;

    /**
     * @var string
     * @Type("string")
     * @SerializedName("company_name")
     */
    public $companyName;

    /**
     * @var string
     * @Type("string")
     * @SerializedName("plan_name")
     */
    public $planName;
}
