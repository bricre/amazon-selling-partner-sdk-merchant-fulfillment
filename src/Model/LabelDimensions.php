<?php

namespace Amz\MerchantFulfillment\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Dimensions for printing a shipping label.
 */
class LabelDimensions extends AbstractModel
{
    /**
     * The length dimension.
     *
     * @var \Amz\MerchantFulfillment\Model\LabelDimension
     */
    public $Length = null;

    /**
     * The width dimension.
     *
     * @var \Amz\MerchantFulfillment\Model\LabelDimension
     */
    public $Width = null;

    /**
     * The unit of measurement.
     *
     * @var \Amz\MerchantFulfillment\Model\UnitOfLength
     */
    public $Unit = null;
}
