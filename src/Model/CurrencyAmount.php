<?php

namespace Amz\MerchantFulfillment\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Currency type and amount.
 */
class CurrencyAmount extends AbstractModel
{
    /**
     * Three-digit currency code in ISO 4217 format.
     *
     * @var string
     */
    public $CurrencyCode = null;

    /**
     * The currency amount.
     *
     * @var float
     */
    public $Amount = null;
}
