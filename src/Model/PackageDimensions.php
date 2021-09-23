<?php

namespace Amz\MerchantFulfillment\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The dimensions of a package contained in a shipment.
 */
class PackageDimensions extends AbstractModel
{
    /**
     * The length dimension. If you don't specify PredefinedPackageDimensions, you must
     * specify the Length.
     *
     * @var \Amz\MerchantFulfillment\Model\PackageDimension
     */
    public $Length = null;

    /**
     * The width dimension. If you don't specify PredefinedPackageDimensions, you must
     * specify the Width.
     *
     * @var \Amz\MerchantFulfillment\Model\PackageDimension
     */
    public $Width = null;

    /**
     * The height dimension. If you don't specify PredefinedPackageDimensions, you must
     * specify the Height.
     *
     * @var \Amz\MerchantFulfillment\Model\PackageDimension
     */
    public $Height = null;

    /**
     * The unit of measurement. If you don't specify PredefinedPackageDimensions, you
     * must specify the Unit.
     *
     * @var \Amz\MerchantFulfillment\Model\UnitOfLength
     */
    public $Unit = null;

    /**
     * @var \Amz\MerchantFulfillment\Model\PredefinedPackageDimensions
     */
    public $PredefinedPackageDimensions = null;
}
