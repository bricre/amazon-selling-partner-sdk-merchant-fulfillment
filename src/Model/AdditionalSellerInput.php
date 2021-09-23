<?php

namespace Amz\MerchantFulfillment\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Additional information required to purchase shipping.
 */
class AdditionalSellerInput extends AbstractModel
{
    /**
     * The data type of the additional information.
     *
     * @var string
     */
    public $DataType = null;

    /**
     * The value when the data type is string.
     *
     * @var string
     */
    public $ValueAsString = null;

    /**
     * The value when the data type is boolean.
     *
     * @var bool
     */
    public $ValueAsBoolean = null;

    /**
     * The value when the data type is integer.
     *
     * @var int
     */
    public $ValueAsInteger = null;

    /**
     * The value when the data type is a date-time formatted string.
     *
     * @var \Amz\MerchantFulfillment\Model\Timestamp
     */
    public $ValueAsTimestamp = null;

    /**
     * @var \Amz\MerchantFulfillment\Model\Address
     */
    public $ValueAsAddress = null;

    /**
     * @var \Amz\MerchantFulfillment\Model\Weight
     */
    public $ValueAsWeight = null;

    /**
     * @var \Amz\MerchantFulfillment\Model\Length
     */
    public $ValueAsDimension = null;

    /**
     * @var \Amz\MerchantFulfillment\Model\CurrencyAmount
     */
    public $ValueAsCurrency = null;
}
