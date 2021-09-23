<?php

namespace Amz\MerchantFulfillment\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Maps the additional seller input to the definition. The key to the map is the
 * field name.
 */
class AdditionalInputs extends AbstractModel
{
    /**
     * The field name.
     *
     * @var string
     */
    public $AdditionalInputFieldName = null;

    /**
     * @var \Amz\MerchantFulfillment\Model\SellerInputDefinition
     */
    public $SellerInputDefinition = null;
}
