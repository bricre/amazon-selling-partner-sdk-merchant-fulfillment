<?php

namespace Amz\MerchantFulfillment\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Custom text for shipping labels.
 */
class LabelCustomization extends AbstractModel
{
    /**
     * @var \Amz\MerchantFulfillment\Model\CustomTextForLabel
     */
    public $CustomTextForLabel = null;

    /**
     * @var \Amz\MerchantFulfillment\Model\StandardIdForLabel
     */
    public $StandardIdForLabel = null;
}
