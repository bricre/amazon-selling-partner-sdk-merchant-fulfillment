<?php

namespace Amz\MerchantFulfillment\Api;

use Amz\MerchantFulfillment\Model\CancelShipmentResponse as CancelShipmentResponse;
use Amz\MerchantFulfillment\Model\CreateShipmentRequest as CreateShipmentRequest;
use Amz\MerchantFulfillment\Model\CreateShipmentResponse as CreateShipmentResponse;
use Amz\MerchantFulfillment\Model\GetAdditionalSellerInputsRequest as GetAdditionalSellerInputsRequest;
use Amz\MerchantFulfillment\Model\GetAdditionalSellerInputsResponse as GetAdditionalSellerInputsResponse;
use Amz\MerchantFulfillment\Model\GetEligibleShipmentServicesRequest as GetEligibleShipmentServicesRequest;
use Amz\MerchantFulfillment\Model\GetEligibleShipmentServicesResponse as GetEligibleShipmentServicesResponse;
use Amz\MerchantFulfillment\Model\GetShipmentResponse as GetShipmentResponse;
use OpenAPI\Runtime\AbstractAPI as AbstractAPI;

class MerchantFulfillment extends AbstractAPI
{
    /**
     * Returns a list of shipping service offers that satisfy the specified shipment
     * request details.
     *
     * **Usage Plan:**
     *
     * | Rate (requests per second) | Burst |
     * | ---- | ---- |
     * | 1 | 1 |
     *
     * For more information, see "Usage Plans and Rate Limits" in the Selling Partner
     * API documentation.
     *
     * @param GetEligibleShipmentServicesRequest $Model Returns a list of shipping
     *                                                  service offers that satisfy the specified shipment request details.
     *
     * **Usage Plan:**
     *
     * | Rate (requests per second) | Burst |
     * | ---- | ---- |
     * | 1 | 1 |
     *
     * For more information, see "Usage Plans and Rate Limits" in the Selling Partner
     * API documentation.
     *
     * @return GetEligibleShipmentServicesResponse
     */
    public function getEligibleShipmentServicesOld(GetEligibleShipmentServicesRequest $Model): GetEligibleShipmentServicesResponse
    {
        return $this->client->request('getEligibleShipmentServicesOld', 'POST', 'mfn/v0/eligibleServices',
            [
                'json' => $Model->getArrayCopy(),
            ]
        );
    }

    /**
     * Returns a list of shipping service offers that satisfy the specified shipment
     * request details.
     *
     * **Usage Plan:**
     *
     * | Rate (requests per second) | Burst |
     * | ---- | ---- |
     * | 1 | 1 |
     *
     * For more information, see "Usage Plans and Rate Limits" in the Selling Partner
     * API documentation.
     *
     * @param GetEligibleShipmentServicesRequest $Model Returns a list of shipping
     *                                                  service offers that satisfy the specified shipment request details.
     *
     * **Usage Plan:**
     *
     * | Rate (requests per second) | Burst |
     * | ---- | ---- |
     * | 1 | 1 |
     *
     * For more information, see "Usage Plans and Rate Limits" in the Selling Partner
     * API documentation.
     *
     * @return GetEligibleShipmentServicesResponse
     */
    public function getEligibleShipmentServices(GetEligibleShipmentServicesRequest $Model): GetEligibleShipmentServicesResponse
    {
        return $this->client->request('getEligibleShipmentServices', 'POST', 'mfn/v0/eligibleShippingServices',
            [
                'json' => $Model->getArrayCopy(),
            ]
        );
    }

    /**
     * Returns the shipment information for an existing shipment.
     *
     * **Usage Plan:**
     *
     * | Rate (requests per second) | Burst |
     * | ---- | ---- |
     * | 1 | 1 |
     *
     * For more information, see "Usage Plans and Rate Limits" in the Selling Partner
     * API documentation.
     *
     * @param $shipmentId The Amazon-defined shipment identifier for the shipment
     *
     * @return GetShipmentResponse
     */
    public function getShipment($shipmentId): GetShipmentResponse
    {
        return $this->client->request('getShipment', 'GET', "mfn/v0/shipments/{$shipmentId}",
            [
            ]
        );
    }

    /**
     * Cancel the shipment indicated by the specified shipment identifier.
     *
     * **Usage Plan:**
     *
     * | Rate (requests per second) | Burst |
     * | ---- | ---- |
     * | 1 | 1 |
     *
     * For more information, see "Usage Plans and Rate Limits" in the Selling Partner
     * API documentation.
     *
     * @param $shipmentId The Amazon-defined shipment identifier for the shipment to
     * cancel
     *
     * @return CancelShipmentResponse
     */
    public function cancelShipment($shipmentId): CancelShipmentResponse
    {
        return $this->client->request('cancelShipment', 'DELETE', "mfn/v0/shipments/{$shipmentId}",
            [
            ]
        );
    }

    /**
     * Cancel the shipment indicated by the specified shipment identifer.
     *
     * **Usage Plan:**
     *
     * | Rate (requests per second) | Burst |
     * | ---- | ---- |
     * | 1 | 1 |
     *
     * For more information, see "Usage Plans and Rate Limits" in the Selling Partner
     * API documentation.
     *
     * @param $shipmentId The Amazon-defined shipment identifier for the shipment to
     * cancel
     *
     * @return CancelShipmentResponse
     */
    public function cancelShipmentOld($shipmentId): CancelShipmentResponse
    {
        return $this->client->request('cancelShipmentOld', 'PUT', "mfn/v0/shipments/{$shipmentId}/cancel",
            [
            ]
        );
    }

    /**
     * Create a shipment with the information provided.
     *
     * **Usage Plan:**
     *
     * | Rate (requests per second) | Burst |
     * | ---- | ---- |
     * | 1 | 1 |
     *
     * For more information, see "Usage Plans and Rate Limits" in the Selling Partner
     * API documentation.
     *
     * @param CreateShipmentRequest $Model Create a shipment with the information
     *                                     provided.
     *
     * **Usage Plan:**
     *
     * | Rate (requests per second) | Burst |
     * | ---- | ---- |
     * | 1 | 1 |
     *
     * For more information, see "Usage Plans and Rate Limits" in the Selling Partner
     * API documentation.
     *
     * @return CreateShipmentResponse
     */
    public function createShipment(CreateShipmentRequest $Model): CreateShipmentResponse
    {
        return $this->client->request('createShipment', 'POST', 'mfn/v0/shipments',
            [
                'json' => $Model->getArrayCopy(),
            ]
        );
    }

    /**
     * Get a list of additional seller inputs required for a ship method. This is
     * generally used for international shipping.
     *
     * **Usage Plan:**
     *
     * | Rate (requests per second) | Burst |
     * | ---- | ---- |
     * | 1 | 1 |
     *
     * For more information, see "Usage Plans and Rate Limits" in the Selling Partner
     * API documentation.
     *
     * @param GetAdditionalSellerInputsRequest $Model Get a list of additional seller
     *                                                inputs required for a ship method. This is generally used for international
     *                                                shipping.
     *
     * **Usage Plan:**
     *
     * | Rate (requests per second) | Burst |
     * | ---- | ---- |
     * | 1 | 1 |
     *
     * For more information, see "Usage Plans and Rate Limits" in the Selling Partner
     * API documentation.
     *
     * @return GetAdditionalSellerInputsResponse
     */
    public function getAdditionalSellerInputsOld(GetAdditionalSellerInputsRequest $Model): GetAdditionalSellerInputsResponse
    {
        return $this->client->request('getAdditionalSellerInputsOld', 'POST', 'mfn/v0/sellerInputs',
            [
                'json' => $Model->getArrayCopy(),
            ]
        );
    }

    /**
     * Gets a list of additional seller inputs required for a ship method. This is
     * generally used for international shipping.
     *
     * **Usage Plan:**
     *
     * | Rate (requests per second) | Burst |
     * | ---- | ---- |
     * | 1 | 1 |
     *
     * For more information, see "Usage Plans and Rate Limits" in the Selling Partner
     * API documentation.
     *
     * @param GetAdditionalSellerInputsRequest $Model Gets a list of additional seller
     *                                                inputs required for a ship method. This is generally used for international
     *                                                shipping.
     *
     * **Usage Plan:**
     *
     * | Rate (requests per second) | Burst |
     * | ---- | ---- |
     * | 1 | 1 |
     *
     * For more information, see "Usage Plans and Rate Limits" in the Selling Partner
     * API documentation.
     *
     * @return GetAdditionalSellerInputsResponse
     */
    public function getAdditionalSellerInputs(GetAdditionalSellerInputsRequest $Model): GetAdditionalSellerInputsResponse
    {
        return $this->client->request('getAdditionalSellerInputs', 'POST', 'mfn/v0/additionalSellerInputs',
            [
                'json' => $Model->getArrayCopy(),
            ]
        );
    }
}
