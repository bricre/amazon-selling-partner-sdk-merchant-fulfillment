<?php

namespace Amz\MerchantFulfillment\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The payload for the getAdditionalSellerInputs operation.
 */
class GetAdditionalSellerInputsResult extends AbstractModel
{
    /**
     * @var \Amz\MerchantFulfillment\Model\AdditionalInputsList
     */
    public $ShipmentLevelFields = null;

    /**
     * @var \Amz\MerchantFulfillment\Model\ItemLevelFieldsList
     */
    public $ItemLevelFieldsList = null;
}
