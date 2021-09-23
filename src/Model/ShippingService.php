<?php

namespace Amz\MerchantFulfillment\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * A shipping service offer made by a carrier.
 */
class ShippingService extends AbstractModel
{
    /**
     * A plain text representation of a carrier's shipping service. For example, "UPS
     * Ground" or "FedEx Standard Overnight".
     *
     * @var string
     */
    public $ShippingServiceName = null;

    /**
     * The name of the carrier.
     *
     * @var string
     */
    public $CarrierName = null;

    /**
     * @var \Amz\MerchantFulfillment\Model\ShippingServiceIdentifier
     */
    public $ShippingServiceId = null;

    /**
     * An Amazon-defined shipping service offer identifier.
     *
     * @var string
     */
    public $ShippingServiceOfferId = null;

    /**
     * The date that the carrier will ship the package.
     *
     * @var \Amz\MerchantFulfillment\Model\Timestamp
     */
    public $ShipDate = null;

    /**
     * The earliest date by which the shipment will be delivered.
     *
     * @var \Amz\MerchantFulfillment\Model\Timestamp
     */
    public $EarliestEstimatedDeliveryDate = null;

    /**
     * The latest date by which the shipment will be delivered.
     *
     * @var \Amz\MerchantFulfillment\Model\Timestamp
     */
    public $LatestEstimatedDeliveryDate = null;

    /**
     * The amount that the carrier will charge for the shipment.
     *
     * @var \Amz\MerchantFulfillment\Model\CurrencyAmount
     */
    public $Rate = null;

    /**
     * Extra services offered by the carrier.
     *
     * @var \Amz\MerchantFulfillment\Model\ShippingServiceOptions
     */
    public $ShippingServiceOptions = null;

    /**
     * @var \Amz\MerchantFulfillment\Model\AvailableShippingServiceOptions
     */
    public $AvailableShippingServiceOptions = null;

    /**
     * @var \Amz\MerchantFulfillment\Model\LabelFormatList
     */
    public $AvailableLabelFormats = null;

    /**
     * @var \Amz\MerchantFulfillment\Model\AvailableFormatOptionsForLabelList
     */
    public $AvailableFormatOptionsForLabel = null;

    /**
     * When true, additional seller inputs are required.
     *
     * @var bool
     */
    public $RequiresAdditionalSellerInputs = null;
}
