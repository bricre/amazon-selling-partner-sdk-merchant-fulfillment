<?php

namespace Amz\MerchantFulfillment\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Filter for use when requesting eligible shipping services.
 */
class ShippingOfferingFilter extends AbstractModel
{
    /**
     * When true, include a packing slip with the label.
     *
     * @var bool
     */
    public $IncludePackingSlipWithLabel = null;

    /**
     * When true, include complex shipping options.
     *
     * @var bool
     */
    public $IncludeComplexShippingOptions = null;

    /**
     * @var \Amz\MerchantFulfillment\Model\CarrierWillPickUpOption
     */
    public $CarrierWillPickUp = null;

    /**
     * @var \Amz\MerchantFulfillment\Model\DeliveryExperienceOption
     */
    public $DeliveryExperience = null;
}
