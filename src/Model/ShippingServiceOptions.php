<?php

namespace Amz\MerchantFulfillment\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Extra services provided by a carrier.
 */
class ShippingServiceOptions extends AbstractModel
{
    /**
     * The delivery confirmation level.
     *
     * @var \Amz\MerchantFulfillment\Model\DeliveryExperienceType
     */
    public $DeliveryExperience = null;

    /**
     * The declared value of the shipment. The carrier uses this value to determine the
     * amount to use to insure the shipment. If DeclaredValue is greater than the
     * carrier's minimum insurance amount, the seller is charged for the additional
     * insurance as determined by the carrier. For information about optional insurance
     * coverage, see the Seller Central Help
     * [UK](https://sellercentral.amazon.co.uk/gp/help/200204080)
     * [US](https://sellercentral.amazon.com/gp/help/200204080).
     *
     * @var \Amz\MerchantFulfillment\Model\CurrencyAmount
     */
    public $DeclaredValue = null;

    /**
     * When true, the carrier will pick up the package.
     *
     * Note: Scheduled carrier pickup is available only using Dynamex (US), DPD (UK),
     * and Royal Mail (UK).
     *
     * @var bool
     */
    public $CarrierWillPickUp = null;

    /**
     * @var \Amz\MerchantFulfillment\Model\CarrierWillPickUpOption
     */
    public $CarrierWillPickUpOption = null;

    /**
     * The seller's preferred label format.
     *
     * @var \Amz\MerchantFulfillment\Model\LabelFormat
     */
    public $LabelFormat = null;
}
