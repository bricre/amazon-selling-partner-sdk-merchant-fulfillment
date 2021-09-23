<?php

namespace Amz\MerchantFulfillment\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Custom text to print on the label.
 *
 * Note: Custom text is only included on labels that are in ZPL format (ZPL203).
 * FedEx does not support CustomTextForLabel.
 */
class CustomTextForLabel extends AbstractModel
{
    protected $isRawObject = true;
}
