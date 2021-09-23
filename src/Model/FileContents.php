<?php

namespace Amz\MerchantFulfillment\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The document data and checksum.
 */
class FileContents extends AbstractModel
{
    /**
     * Data for printing labels, in the form of a Base64-encoded, GZip-compressed
     * string.
     *
     * @var string
     */
    public $Contents = null;

    /**
     * @var \Amz\MerchantFulfillment\Model\FileType
     */
    public $FileType = null;

    /**
     * An MD5 hash to validate the PDF document data, in the form of a Base64-encoded
     * string.
     *
     * @var string
     */
    public $Checksum = null;
}
