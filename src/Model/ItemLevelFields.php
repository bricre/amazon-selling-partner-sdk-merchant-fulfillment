<?php

namespace Amz\MerchantFulfillment\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

class ItemLevelFields extends AbstractModel
{
    /**
     * The Amazon Standard Identification Number (ASIN) of the item.
     *
     * @var string
     */
    public $Asin = null;

    /**
     * @var \Amz\MerchantFulfillment\Model\AdditionalInputsList
     */
    public $AdditionalInputs = null;
}
