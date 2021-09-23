<?php

namespace Amz\MerchantFulfillment\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The payload for the getEligibleShipmentServices operation.
 */
class GetEligibleShipmentServicesResult extends AbstractModel
{
    /**
     * A list of shipping services offers.
     *
     * @var \Amz\MerchantFulfillment\Model\ShippingServiceList
     */
    public $ShippingServiceList = null;

    /**
     * @var \Amz\MerchantFulfillment\Model\RejectedShippingServiceList
     */
    public $RejectedShippingServiceList = null;

    /**
     * @var \Amz\MerchantFulfillment\Model\TemporarilyUnavailableCarrierList
     */
    public $TemporarilyUnavailableCarrierList = null;

    /**
     * @var \Amz\MerchantFulfillment\Model\TermsAndConditionsNotAcceptedCarrierList
     */
    public $TermsAndConditionsNotAcceptedCarrierList = null;
}
