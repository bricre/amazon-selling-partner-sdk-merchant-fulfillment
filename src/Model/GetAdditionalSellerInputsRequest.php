<?php

namespace Amz\MerchantFulfillment\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Request schema.
 */
class GetAdditionalSellerInputsRequest extends AbstractModel
{
    /**
     * @var \Amz\MerchantFulfillment\Model\ShippingServiceIdentifier
     */
    public $ShippingServiceId = null;

    /**
     * The address from which to ship.
     *
     * @var \Amz\MerchantFulfillment\Model\Address
     */
    public $ShipFromAddress = null;

    /**
     * An Amazon defined order identifier.
     *
     * @var \Amz\MerchantFulfillment\Model\AmazonOrderId
     */
    public $OrderId = null;
}
