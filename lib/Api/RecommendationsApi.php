<?php
/**
 * RecommendationsApi
 * PHP version 5
 *
 * @category Class
 * @package  Kinow\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Server API
 *
 * Reference for Server API (REST/Json)
 *
 * OpenAPI spec version: 1.4.57
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Kinow\Client\Api;

use \Kinow\Client\ApiClient;
use \Kinow\Client\ApiException;
use \Kinow\Client\Configuration;
use \Kinow\Client\ObjectSerializer;

/**
 * RecommendationsApi Class Doc Comment
 *
 * @category Class
 * @package  Kinow\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RecommendationsApi
{
    /**
     * API Client
     *
     * @var \Kinow\Client\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \Kinow\Client\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\Kinow\Client\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
            $apiClient->getConfig()->setHost('https://api.kinow.com/api');
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \Kinow\Client\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \Kinow\Client\ApiClient $apiClient set the API client
     *
     * @return RecommendationsApi
     */
    public function setApiClient(\Kinow\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation getCustomerRecommendations
     *
     * 
     *
     * @param int $customer_id  (required)
     * @param int $page  (optional)
     * @param int $per_page  (optional)
     * @param string $sort_by Sort by this attribute (id by default) (optional)
     * @param string $sort_direction Sorting direction (asc by default) (optional)
     * @param string $ip Filter by Customer IP (optional)
     * @param string $iso_code Filter by ISO Code (optional)
     * @throws \Kinow\Client\ApiException on non-2xx response
     * @return \Kinow\Client\Model\Products
     */
    public function getCustomerRecommendations($customer_id, $page = null, $per_page = null, $sort_by = null, $sort_direction = null, $ip = null, $iso_code = null)
    {
        list($response) = $this->getCustomerRecommendationsWithHttpInfo($customer_id, $page, $per_page, $sort_by, $sort_direction, $ip, $iso_code);
        return $response;
    }

    /**
     * Operation getCustomerRecommendationsWithHttpInfo
     *
     * 
     *
     * @param int $customer_id  (required)
     * @param int $page  (optional)
     * @param int $per_page  (optional)
     * @param string $sort_by Sort by this attribute (id by default) (optional)
     * @param string $sort_direction Sorting direction (asc by default) (optional)
     * @param string $ip Filter by Customer IP (optional)
     * @param string $iso_code Filter by ISO Code (optional)
     * @throws \Kinow\Client\ApiException on non-2xx response
     * @return array of \Kinow\Client\Model\Products, HTTP status code, HTTP response headers (array of strings)
     */
    public function getCustomerRecommendationsWithHttpInfo($customer_id, $page = null, $per_page = null, $sort_by = null, $sort_direction = null, $ip = null, $iso_code = null)
    {
        // verify the required parameter 'customer_id' is set
        if ($customer_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $customer_id when calling getCustomerRecommendations');
        }
        // parse inputs
        $resourcePath = "/customers/{customer_id}/recommendations";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $apiVersion = $this->apiClient->getConfig()->getApiVersion();
        $_header_accept = $this->apiClient->selectHeaderAccept(["application/vnd.kinowapi.v$apiVersion+json"]);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // query params
        if ($page !== null) {
            $queryParams['page'] = $this->apiClient->getSerializer()->toQueryValue($page);
        }
        // query params
        if ($per_page !== null) {
            $queryParams['per_page'] = $this->apiClient->getSerializer()->toQueryValue($per_page);
        }
        // query params
        if ($sort_by !== null) {
            $queryParams['sort_by'] = $this->apiClient->getSerializer()->toQueryValue($sort_by);
        }
        // query params
        if ($sort_direction !== null) {
            $queryParams['sort_direction'] = $this->apiClient->getSerializer()->toQueryValue($sort_direction);
        }
        // query params
        if ($ip !== null) {
            $queryParams['ip'] = $this->apiClient->getSerializer()->toQueryValue($ip);
        }
        // query params
        if ($iso_code !== null) {
            $queryParams['iso_code'] = $this->apiClient->getSerializer()->toQueryValue($iso_code);
        }
        // path params
        if ($customer_id !== null) {
            $resourcePath = str_replace(
                "{" . "customer_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($customer_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('X-Client-Id');
        if (strlen($apiKey) !== 0) {
            $headerParams['X-Client-Id'] = $apiKey;
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('X-Client-Secret');
        if (strlen($apiKey) !== 0) {
            $headerParams['X-Client-Secret'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Kinow\Client\Model\Products',
                '/customers/{customer_id}/recommendations'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Kinow\Client\Model\Products', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Kinow\Client\Model\Products', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
