<?php

namespace Amz\MerchantFulfillment\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The length.
 */
class Length extends AbstractModel
{
    /**
     * The value in units.
     *
     * @var float
     */
    public $value = null;

    /**
     * @var \Amz\MerchantFulfillment\Model\UnitOfLength
     */
    public $unit = null;
}
