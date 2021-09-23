<?php

namespace Amz\MerchantFulfillment\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Indicates whether the carrier will pick up the package, and what fee is charged,
 * if any.
 */
class AvailableCarrierWillPickUpOption extends AbstractModel
{
    /**
     * @var \Amz\MerchantFulfillment\Model\CarrierWillPickUpOption
     */
    public $CarrierWillPickUpOption = null;

    /**
     * The fee charged.
     *
     * @var \Amz\MerchantFulfillment\Model\CurrencyAmount
     */
    public $Charge = null;
}
