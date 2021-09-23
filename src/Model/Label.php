<?php

namespace Amz\MerchantFulfillment\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Data for creating a shipping label and dimensions for printing the label.
 */
class Label extends AbstractModel
{
    /**
     * @var \Amz\MerchantFulfillment\Model\CustomTextForLabel
     */
    public $CustomTextForLabel = null;

    /**
     * @var \Amz\MerchantFulfillment\Model\LabelDimensions
     */
    public $Dimensions = null;

    /**
     * @var \Amz\MerchantFulfillment\Model\FileContents
     */
    public $FileContents = null;

    /**
     * @var \Amz\MerchantFulfillment\Model\LabelFormat
     */
    public $LabelFormat = null;

    /**
     * @var \Amz\MerchantFulfillment\Model\StandardIdForLabel
     */
    public $StandardIdForLabel = null;
}
