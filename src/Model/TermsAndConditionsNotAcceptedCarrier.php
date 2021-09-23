<?php

namespace Amz\MerchantFulfillment\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * A carrier whose terms and conditions have not been accepted by the seller.
 */
class TermsAndConditionsNotAcceptedCarrier extends AbstractModel
{
    /**
     * The name of the carrier.
     *
     * @var string
     */
    public $CarrierName = null;
}
