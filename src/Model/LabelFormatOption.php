<?php

namespace Amz\MerchantFulfillment\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The label format details and whether to include a packing slip.
 */
class LabelFormatOption extends AbstractModel
{
    /**
     * When true, include a packing slip with the label.
     *
     * @var bool
     */
    public $IncludePackingSlipWithLabel = null;

    /**
     * @var \Amz\MerchantFulfillment\Model\LabelFormat
     */
    public $LabelFormat = null;
}
