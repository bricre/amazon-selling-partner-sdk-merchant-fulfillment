<?php

namespace Amz\MerchantFulfillment\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Information about a rejected shipping service.
 */
class RejectedShippingService extends AbstractModel
{
    /**
     * The rejected shipping carrier name. e.g. USPS.
     *
     * @var string
     */
    public $CarrierName = null;

    /**
     * The rejected shipping service localized name. e.g. FedEx Standard Overnight.
     *
     * @var string
     */
    public $ShippingServiceName = null;

    /**
     * The rejected shipping service identifier. e.g. FEDEX_PTP_STANDARD_OVERNIGHT.
     *
     * @var \Amz\MerchantFulfillment\Model\ShippingServiceIdentifier
     */
    public $ShippingServiceId = null;

    /**
     * A reason code meant to be consumed programatically. e.g.
     * CARRIER_CANNOT_SHIP_TO_POBOX.
     *
     * @var string
     */
    public $RejectionReasonCode = null;

    /**
     * A localized human readable description of the rejected reason.
     *
     * @var string
     */
    public $RejectionReasonMessage = null;
}
