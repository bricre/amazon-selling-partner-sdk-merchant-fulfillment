<?php

namespace Amz\MerchantFulfillment\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Response schema.
 */
class GetShipmentResponse extends AbstractModel
{
    /**
     * The payload for the getShipment operation.
     *
     * @var \Amz\MerchantFulfillment\Model\Shipment
     */
    public $payload = null;

    /**
     * One or more unexpected errors occurred during this operation.
     *
     * @var \Amz\MerchantFulfillment\Model\ErrorList
     */
    public $errors = null;
}
