<?php

namespace Amz\MerchantFulfillment\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Response schema.
 */
class GetAdditionalSellerInputsResponse extends AbstractModel
{
    /**
     * @var \Amz\MerchantFulfillment\Model\GetAdditionalSellerInputsResult
     */
    public $payload = null;

    /**
     * @var \Amz\MerchantFulfillment\Model\ErrorList
     */
    public $errors = null;
}
