<?php

namespace Amz\MerchantFulfillment\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The available delivery confirmation options, and the fee charged, if any.
 */
class AvailableDeliveryExperienceOption extends AbstractModel
{
    /**
     * @var \Amz\MerchantFulfillment\Model\DeliveryExperienceOption
     */
    public $DeliveryExperienceOption = null;

    /**
     * @var \Amz\MerchantFulfillment\Model\CurrencyAmount
     */
    public $Charge = null;
}
