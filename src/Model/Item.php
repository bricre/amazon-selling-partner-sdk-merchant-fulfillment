<?php

namespace Amz\MerchantFulfillment\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * An Amazon order item identifier and a quantity.
 */
class Item extends AbstractModel
{
    /**
     * @var \Amz\MerchantFulfillment\Model\OrderItemId
     */
    public $OrderItemId = null;

    /**
     * @var \Amz\MerchantFulfillment\Model\ItemQuantity
     */
    public $Quantity = null;

    /**
     * @var \Amz\MerchantFulfillment\Model\Weight
     */
    public $ItemWeight = null;

    /**
     * @var \Amz\MerchantFulfillment\Model\ItemDescription
     */
    public $ItemDescription = null;

    /**
     * @var \Amz\MerchantFulfillment\Model\TransparencyCodeList
     */
    public $TransparencyCodeList = null;

    /**
     * A list of additional seller inputs required to ship this item using the chosen
     * shipping service.
     *
     * @var \Amz\MerchantFulfillment\Model\AdditionalSellerInputsList
     */
    public $ItemLevelSellerInputsList = null;
}
