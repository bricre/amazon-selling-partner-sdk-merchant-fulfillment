<?php

namespace Amz\MerchantFulfillment\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The weight.
 */
class Weight extends AbstractModel
{
    /**
     * @var \Amz\MerchantFulfillment\Model\WeightValue
     */
    public $Value = null;

    /**
     * @var \Amz\MerchantFulfillment\Model\UnitOfWeight
     */
    public $Unit = null;
}
