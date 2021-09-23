<?php

namespace Amz\MerchantFulfillment\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * A carrier who is temporarily unavailable, most likely due to a service outage
 * experienced by the carrier.
 */
class TemporarilyUnavailableCarrier extends AbstractModel
{
    /**
     * The name of the carrier.
     *
     * @var string
     */
    public $CarrierName = null;
}
