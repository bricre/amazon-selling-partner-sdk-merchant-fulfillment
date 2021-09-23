<?php

namespace Amz\MerchantFulfillment\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Whether to include a packing slip.
 */
class LabelFormatOptionRequest extends AbstractModel
{
    /**
     * When true, include a packing slip with the label.
     *
     * @var bool
     */
    public $IncludePackingSlipWithLabel = null;
}
