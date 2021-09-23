<?php

namespace Amz\MerchantFulfillment\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Response schema.
 */
class CancelShipmentResponse extends AbstractModel
{
    /**
     * The payload for the cancelShipment operation.
     *
     * @var \Amz\MerchantFulfillment\Model\Shipment
     */
    public $payload = null;

    /**
     * One or more unexpected errors occurred during the cancelShipment operation.
     *
     * @var \Amz\MerchantFulfillment\Model\ErrorList
     */
    public $errors = null;
}
