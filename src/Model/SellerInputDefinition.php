<?php

namespace Amz\MerchantFulfillment\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Specifies characteristics that apply to a seller input.
 */
class SellerInputDefinition extends AbstractModel
{
    /**
     * When true, the additional input field is required.
     *
     * @var bool
     */
    public $IsRequired = null;

    /**
     * The data type of the additional input field.
     *
     * @var string
     */
    public $DataType = null;

    /**
     * @var \Amz\MerchantFulfillment\Model\Constraints
     */
    public $Constraints = null;

    /**
     * The display text for the additional input field.
     *
     * @var string
     */
    public $InputDisplayText = null;

    /**
     * Whether the seller input applies to the item or the shipment.
     *
     * @var \Amz\MerchantFulfillment\Model\InputTargetType
     */
    public $InputTarget = null;

    /**
     * @var \Amz\MerchantFulfillment\Model\AdditionalSellerInput
     */
    public $StoredValue = null;

    /**
     * @var \Amz\MerchantFulfillment\Model\RestrictedSetValues
     */
    public $RestrictedSetValues = null;
}
