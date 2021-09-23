<?php

namespace Amz\MerchantFulfillment\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * An additional set of seller inputs required to purchase shipping.
 */
class AdditionalSellerInputs extends AbstractModel
{
    /**
     * The name of the additional input field.
     *
     * @var string
     */
    public $AdditionalInputFieldName = null;

    /**
     * @var \Amz\MerchantFulfillment\Model\AdditionalSellerInput
     */
    public $AdditionalSellerInput = null;
}
