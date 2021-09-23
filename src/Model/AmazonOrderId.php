<?php

namespace Amz\MerchantFulfillment\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * An Amazon-defined order identifier, in 3-7-7 format. <br>**Pattern** :
 * `[0-9A-Z]{3}-[0-9]{7}-[0-9]{7}`.
 */
class AmazonOrderId extends AbstractModel
{
    protected $isRawObject = true;
}
