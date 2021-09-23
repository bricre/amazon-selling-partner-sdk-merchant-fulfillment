<?php

namespace Amz\MerchantFulfillment\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The details of a shipment, including the shipment status.
 */
class Shipment extends AbstractModel
{
    /**
     * @var \Amz\MerchantFulfillment\Model\ShipmentId
     */
    public $ShipmentId = null;

    /**
     * @var \Amz\MerchantFulfillment\Model\AmazonOrderId
     */
    public $AmazonOrderId = null;

    /**
     * @var \Amz\MerchantFulfillment\Model\SellerOrderId
     */
    public $SellerOrderId = null;

    /**
     * @var \Amz\MerchantFulfillment\Model\ItemList
     */
    public $ItemList = null;

    /**
     * The address of the sender.
     *
     * @var \Amz\MerchantFulfillment\Model\Address
     */
    public $ShipFromAddress = null;

    /**
     * The destination address for the shipment.
     *
     * @var \Amz\MerchantFulfillment\Model\Address
     */
    public $ShipToAddress = null;

    /**
     * @var \Amz\MerchantFulfillment\Model\PackageDimensions
     */
    public $PackageDimensions = null;

    /**
     * The package weight.
     *
     * @var \Amz\MerchantFulfillment\Model\Weight
     */
    public $Weight = null;

    /**
     * If DeclaredValue was specified in a previous call to the createShipment
     * operation, then Insurance indicates the amount that the carrier will use to
     * insure the shipment. If DeclaredValue was not specified with a previous call to
     * the createShipment operation, then the shipment will be insured for the
     * carrier's minimum insurance amount, or the combined sale prices that the items
     * are listed for in the shipment, whichever is less.
     *
     * @var \Amz\MerchantFulfillment\Model\CurrencyAmount
     */
    public $Insurance = null;

    /**
     * @var \Amz\MerchantFulfillment\Model\ShippingService
     */
    public $ShippingService = null;

    /**
     * Data for creating a shipping label and dimensions for printing the label. If the
     * shipment is canceled, an empty Label is returned.
     *
     * @var \Amz\MerchantFulfillment\Model\Label
     */
    public $Label = null;

    /**
     * The shipment status.
     *
     * @var \Amz\MerchantFulfillment\Model\ShipmentStatus
     */
    public $Status = null;

    /**
     * @var \Amz\MerchantFulfillment\Model\TrackingId
     */
    public $TrackingId = null;

    /**
     * The date and time the shipment was created.
     *
     * @var \Amz\MerchantFulfillment\Model\Timestamp
     */
    public $CreatedDate = null;

    /**
     * The date and time of the last update.
     *
     * @var \Amz\MerchantFulfillment\Model\Timestamp
     */
    public $LastUpdatedDate = null;
}
