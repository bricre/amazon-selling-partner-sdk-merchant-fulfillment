<?php

namespace Amz\MerchantFulfillment\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * An enumeration of predefined parcel tokens. If you specify a
 * PredefinedPackageDimensions token, you are not obligated to use a branded
 * package from a carrier. For example, if you specify the FedEx_Box_10kg token,
 * you do not have to use that particular package from FedEx. You are only
 * obligated to use a box that matches the dimensions specified by the token.
 *
 * Note: Please note that carriers can have restrictions on the type of package
 * allowed for certain ship methods. Check the carrier website for all details.
 * Example: Flat rate pricing is available when materials are sent by USPS in a
 * USPS-produced Flat Rate Envelope or Box.
 */
class PredefinedPackageDimensions extends AbstractModel
{
    protected $isRawObject = true;
}
