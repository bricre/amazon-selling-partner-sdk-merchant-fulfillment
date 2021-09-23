<?php

namespace Amz\MerchantFulfillment\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Response schema.
 */
class CreateShipmentResponse extends AbstractModel
{
    /**
     * Shipment information.
     *
     * @var \Amz\MerchantFulfillment\Model\Shipment
     */
    public $payload = null;

    /**
     * One or more unexpected errors occurred during the createShipment operation.
     *
     * @var \Amz\MerchantFulfillment\Model\ErrorList
     */
    public $errors = null;
}
