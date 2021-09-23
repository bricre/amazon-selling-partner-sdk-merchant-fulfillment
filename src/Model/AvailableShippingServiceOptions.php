<?php

namespace Amz\MerchantFulfillment\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The available shipping service options.
 */
class AvailableShippingServiceOptions extends AbstractModel
{
    /**
     * @var \Amz\MerchantFulfillment\Model\AvailableCarrierWillPickUpOptionsList
     */
    public $AvailableCarrierWillPickUpOptions = null;

    /**
     * @var \Amz\MerchantFulfillment\Model\AvailableDeliveryExperienceOptionsList
     */
    public $AvailableDeliveryExperienceOptions = null;
}
