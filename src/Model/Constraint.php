<?php

namespace Amz\MerchantFulfillment\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * A validation constraint.
 */
class Constraint extends AbstractModel
{
    /**
     * A regular expression.
     *
     * @var string
     */
    public $ValidationRegEx = null;

    /**
     * A validation string.
     *
     * @var string
     */
    public $ValidationString = null;
}
