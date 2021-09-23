<?php

namespace Amz\MerchantFulfillment\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Request schema.
 */
class CreateShipmentRequest extends AbstractModel
{
    /**
     * Shipment information required for creating a shipment.
     *
     * @var \Amz\MerchantFulfillment\Model\ShipmentRequestDetails
     */
    public $ShipmentRequestDetails = null;

    /**
     * @var \Amz\MerchantFulfillment\Model\ShippingServiceIdentifier
     */
    public $ShippingServiceId = null;

    /**
     * Identifies a shipping service order made by a carrier.
     *
     * @var string
     */
    public $ShippingServiceOfferId = null;

    /**
     * Hazardous materials options for a package. Consult the terms and conditions for
     * each carrier for more information about hazardous materials.
     *
     * @var \Amz\MerchantFulfillment\Model\HazmatType
     */
    public $HazmatType = null;

    /**
     * @var \Amz\MerchantFulfillment\Model\LabelFormatOptionRequest
     */
    public $LabelFormatOption = null;

    /**
     * A list of additional seller inputs required to ship this shipment.
     *
     * @var \Amz\MerchantFulfillment\Model\AdditionalSellerInputsList
     */
    public $ShipmentLevelSellerInputsList = null;
}
