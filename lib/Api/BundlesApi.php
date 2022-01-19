<?php
/**
 * BundlesApi
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
 * OpenAPI spec version: 2.0.1
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
 * BundlesApi Class Doc Comment
 *
 * @category Class
 * @package  Kinow\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BundlesApi
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
     * @return BundlesApi
     */
    public function setApiClient(\Kinow\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation addProductToBundle
     *
     * 
     *
     * @param int $bundle_id Bundle ID to fetch (required)
     * @param int $product_id Product ID to add (required)
     * @param int $position Product position (required)
     * @throws \Kinow\Client\ApiException on non-2xx response
     * @return void
     */
    public function addProductToBundle($bundle_id, $product_id, $position)
    {
        list($response) = $this->addProductToBundleWithHttpInfo($bundle_id, $product_id, $position);
        return $response;
    }

    /**
     * Operation addProductToBundleWithHttpInfo
     *
     * 
     *
     * @param int $bundle_id Bundle ID to fetch (required)
     * @param int $product_id Product ID to add (required)
     * @param int $position Product position (required)
     * @throws \Kinow\Client\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function addProductToBundleWithHttpInfo($bundle_id, $product_id, $position)
    {
        // verify the required parameter 'bundle_id' is set
        if ($bundle_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $bundle_id when calling addProductToBundle');
        }
        // verify the required parameter 'product_id' is set
        if ($product_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $product_id when calling addProductToBundle');
        }
        // verify the required parameter 'position' is set
        if ($position === null) {
            throw new \InvalidArgumentException('Missing the required parameter $position when calling addProductToBundle');
        }
        // parse inputs
        $resourcePath = "/bundles/{bundle_id}";
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

        // path params
        if ($bundle_id !== null) {
            $resourcePath = str_replace(
                "{" . "bundle_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($bundle_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // form params
        if ($product_id !== null) {
            $formParams['product_id'] = $this->apiClient->getSerializer()->toFormValue($product_id);
        }
        // form params
        if ($position !== null) {
            $formParams['position'] = $this->apiClient->getSerializer()->toFormValue($position);
        }
        
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
                'PUT',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/bundles/{bundle_id}'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }

    /**
     * Operation getBundleProducts
     *
     * 
     *
     * @param int $bundle_id Bundle ID to fetch (required)
     * @param int $page  (optional)
     * @param int $per_page  (optional)
     * @throws \Kinow\Client\ApiException on non-2xx response
     * @return \Kinow\Client\Model\BlogPageProductsResponse
     */
    public function getBundleProducts($bundle_id, $page = null, $per_page = null)
    {
        list($response) = $this->getBundleProductsWithHttpInfo($bundle_id, $page, $per_page);
        return $response;
    }

    /**
     * Operation getBundleProductsWithHttpInfo
     *
     * 
     *
     * @param int $bundle_id Bundle ID to fetch (required)
     * @param int $page  (optional)
     * @param int $per_page  (optional)
     * @throws \Kinow\Client\ApiException on non-2xx response
     * @return array of \Kinow\Client\Model\BlogPageProductsResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getBundleProductsWithHttpInfo($bundle_id, $page = null, $per_page = null)
    {
        // verify the required parameter 'bundle_id' is set
        if ($bundle_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $bundle_id when calling getBundleProducts');
        }
        // parse inputs
        $resourcePath = "/bundles/{bundle_id}/products";
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
        // path params
        if ($bundle_id !== null) {
            $resourcePath = str_replace(
                "{" . "bundle_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($bundle_id),
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
                '\Kinow\Client\Model\BlogPageProductsResponse',
                '/bundles/{bundle_id}/products'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Kinow\Client\Model\BlogPageProductsResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Kinow\Client\Model\BlogPageProductsResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation removeProductFromBundle
     *
     * 
     *
     * @param int $bundle_id Bundle ID to fetch (required)
     * @param int $product_id Product ID to remove (required)
     * @throws \Kinow\Client\ApiException on non-2xx response
     * @return void
     */
    public function removeProductFromBundle($bundle_id, $product_id)
    {
        list($response) = $this->removeProductFromBundleWithHttpInfo($bundle_id, $product_id);
        return $response;
    }

    /**
     * Operation removeProductFromBundleWithHttpInfo
     *
     * 
     *
     * @param int $bundle_id Bundle ID to fetch (required)
     * @param int $product_id Product ID to remove (required)
     * @throws \Kinow\Client\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function removeProductFromBundleWithHttpInfo($bundle_id, $product_id)
    {
        // verify the required parameter 'bundle_id' is set
        if ($bundle_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $bundle_id when calling removeProductFromBundle');
        }
        // verify the required parameter 'product_id' is set
        if ($product_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $product_id when calling removeProductFromBundle');
        }
        // parse inputs
        $resourcePath = "/bundles/{bundle_id}/{product_id}";
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

        // path params
        if ($bundle_id !== null) {
            $resourcePath = str_replace(
                "{" . "bundle_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($bundle_id),
                $resourcePath
            );
        }
        // path params
        if ($product_id !== null) {
            $resourcePath = str_replace(
                "{" . "product_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($product_id),
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
                'DELETE',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/bundles/{bundle_id}/{product_id}'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }
}
