<?php

namespace Amz\MerchantFulfillment\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Request schema.
 */
class GetEligibleShipmentServicesRequest extends AbstractModel
{
    /**
     * Shipment information required for requesting shipping service offers.
     *
     * @var \Amz\MerchantFulfillment\Model\ShipmentRequestDetails
     */
    public $ShipmentRequestDetails = null;

    /**
     * @var \Amz\MerchantFulfillment\Model\ShippingOfferingFilter
     */
    public $ShippingOfferingFilter = null;
}
