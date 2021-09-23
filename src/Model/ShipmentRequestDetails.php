<?php

namespace Amz\MerchantFulfillment\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Shipment information required for requesting shipping service offers or for
 * creating a shipment.
 */
class ShipmentRequestDetails extends AbstractModel
{
    /**
     * An Amazon-defined order identifier in 3-7-7 format.
     *
     * @var \Amz\MerchantFulfillment\Model\AmazonOrderId
     */
    public $AmazonOrderId = null;

    /**
     * A seller-defined order identifier.
     *
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
     * The package dimensions.
     *
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
     * The date by which the package must arrive to keep the promise to the customer,
     * in ISO 8601 datetime format. If MustArriveByDate is specified, only shipping
     * service offers that can be delivered by that date are returned.
     *
     * @var \Amz\MerchantFulfillment\Model\Timestamp
     */
    public $MustArriveByDate = null;

    /**
     * When used in a request, this is the date and time that the seller wants to ship
     * the package. When used in a response, this is the date and time that the package
     * can be shipped by the indicated method.
     *
     * @var \Amz\MerchantFulfillment\Model\Timestamp
     */
    public $ShipDate = null;

    /**
     * Extra services offered by the carrier.
     *
     * @var \Amz\MerchantFulfillment\Model\ShippingServiceOptions
     */
    public $ShippingServiceOptions = null;

    /**
     * Label customization options.
     *
     * @var \Amz\MerchantFulfillment\Model\LabelCustomization
     */
    public $LabelCustomization = null;
}
