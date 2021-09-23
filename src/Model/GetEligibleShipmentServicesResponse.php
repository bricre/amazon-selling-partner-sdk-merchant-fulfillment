<?php

namespace Amz\MerchantFulfillment\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Response schema.
 */
class GetEligibleShipmentServicesResponse extends AbstractModel
{
    /**
     * @var \Amz\MerchantFulfillment\Model\GetEligibleShipmentServicesResult
     */
    public $payload = null;

    /**
     * One or more unexpected errors occurred during this operation.
     *
     * @var \Amz\MerchantFulfillment\Model\ErrorList
     */
    public $errors = null;
}
