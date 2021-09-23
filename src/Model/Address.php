<?php

namespace Amz\MerchantFulfillment\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The postal address information.
 */
class Address extends AbstractModel
{
    /**
     * @var \Amz\MerchantFulfillment\Model\AddressName
     */
    public $Name = null;

    /**
     * @var \Amz\MerchantFulfillment\Model\AddressLine1
     */
    public $AddressLine1 = null;

    /**
     * @var \Amz\MerchantFulfillment\Model\AddressLine2
     */
    public $AddressLine2 = null;

    /**
     * @var \Amz\MerchantFulfillment\Model\AddressLine3
     */
    public $AddressLine3 = null;

    /**
     * @var \Amz\MerchantFulfillment\Model\DistrictOrCounty
     */
    public $DistrictOrCounty = null;

    /**
     * @var \Amz\MerchantFulfillment\Model\EmailAddress
     */
    public $Email = null;

    /**
     * @var \Amz\MerchantFulfillment\Model\City
     */
    public $City = null;

    /**
     * @var \Amz\MerchantFulfillment\Model\StateOrProvinceCode
     */
    public $StateOrProvinceCode = null;

    /**
     * @var \Amz\MerchantFulfillment\Model\PostalCode
     */
    public $PostalCode = null;

    /**
     * @var \Amz\MerchantFulfillment\Model\CountryCode
     */
    public $CountryCode = null;

    /**
     * @var \Amz\MerchantFulfillment\Model\PhoneNumber
     */
    public $Phone = null;
}
