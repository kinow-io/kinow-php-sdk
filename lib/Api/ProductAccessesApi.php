<?php
/**
 * ProductAccessesApi
 * PHP version 5
 *
 * @category Class
 * @package  Kaemo\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Kaemo API
 *
 * Public api for Kaemo back office
 *
 * OpenAPI spec version: 1.0.16
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Kaemo\Client\Api;

use \Kaemo\Client\ApiClient;
use \Kaemo\Client\ApiException;
use \Kaemo\Client\Configuration;
use \Kaemo\Client\ObjectSerializer;

/**
 * ProductAccessesApi Class Doc Comment
 *
 * @category Class
 * @package  Kaemo\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ProductAccessesApi
{
    /**
     * API Client
     *
     * @var \Kaemo\Client\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \Kaemo\Client\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\Kaemo\Client\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
            $apiClient->getConfig()->setHost('https://api.kaemo.com/api');
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \Kaemo\Client\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \Kaemo\Client\ApiClient $apiClient set the API client
     *
     * @return ProductAccessesApi
     */
    public function setApiClient(\Kaemo\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation createProductAccess
     *
     * 
     *
     * @param \Kaemo\Client\Model\ProductAccess $body  (required)
     * @throws \Kaemo\Client\ApiException on non-2xx response
     * @return \Kaemo\Client\Model\ProductAccess
     */
    public function createProductAccess($body)
    {
        list($response) = $this->createProductAccessWithHttpInfo($body);
        return $response;
    }

    /**
     * Operation createProductAccessWithHttpInfo
     *
     * 
     *
     * @param \Kaemo\Client\Model\ProductAccess $body  (required)
     * @throws \Kaemo\Client\ApiException on non-2xx response
     * @return array of \Kaemo\Client\Model\ProductAccess, HTTP status code, HTTP response headers (array of strings)
     */
    public function createProductAccessWithHttpInfo($body)
    {
        // verify the required parameter 'body' is set
        if ($body === null) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling createProductAccess');
        }
        // parse inputs
        $resourcePath = "/product-accesses";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $apiVersion = $this->apiClient->getConfig()->getApiVersion();
        $_header_accept = $this->apiClient->selectHeaderAccept(["application/vnd.kaemoapi.v$apiVersion+json"]);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Kaemo\Client\Model\ProductAccess',
                '/product-accesses'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Kaemo\Client\Model\ProductAccess', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Kaemo\Client\Model\ProductAccess', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation deleteProductAccess
     *
     * 
     *
     * @param int $product_access_id ID of the product access to fetch (required)
     * @throws \Kaemo\Client\ApiException on non-2xx response
     * @return void
     */
    public function deleteProductAccess($product_access_id)
    {
        list($response) = $this->deleteProductAccessWithHttpInfo($product_access_id);
        return $response;
    }

    /**
     * Operation deleteProductAccessWithHttpInfo
     *
     * 
     *
     * @param int $product_access_id ID of the product access to fetch (required)
     * @throws \Kaemo\Client\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteProductAccessWithHttpInfo($product_access_id)
    {
        // verify the required parameter 'product_access_id' is set
        if ($product_access_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $product_access_id when calling deleteProductAccess');
        }
        // parse inputs
        $resourcePath = "/product-accesses/{product_access_id}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $apiVersion = $this->apiClient->getConfig()->getApiVersion();
        $_header_accept = $this->apiClient->selectHeaderAccept(["application/vnd.kaemoapi.v$apiVersion+json"]);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // path params
        if ($product_access_id !== null) {
            $resourcePath = str_replace(
                "{" . "product_access_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($product_access_id),
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
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'DELETE',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/product-accesses/{product_access_id}'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }

    /**
     * Operation getCustomerAccessesSubscriptions
     *
     * 
     *
     * @param int $customer_id ID of the customer to fetch (required)
     * @param int $page  (optional)
     * @param int $per_page  (optional)
     * @throws \Kaemo\Client\ApiException on non-2xx response
     * @return \Kaemo\Client\Model\SubscriptionAccesses
     */
    public function getCustomerAccessesSubscriptions($customer_id, $page = null, $per_page = null)
    {
        list($response) = $this->getCustomerAccessesSubscriptionsWithHttpInfo($customer_id, $page, $per_page);
        return $response;
    }

    /**
     * Operation getCustomerAccessesSubscriptionsWithHttpInfo
     *
     * 
     *
     * @param int $customer_id ID of the customer to fetch (required)
     * @param int $page  (optional)
     * @param int $per_page  (optional)
     * @throws \Kaemo\Client\ApiException on non-2xx response
     * @return array of \Kaemo\Client\Model\SubscriptionAccesses, HTTP status code, HTTP response headers (array of strings)
     */
    public function getCustomerAccessesSubscriptionsWithHttpInfo($customer_id, $page = null, $per_page = null)
    {
        // verify the required parameter 'customer_id' is set
        if ($customer_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $customer_id when calling getCustomerAccessesSubscriptions');
        }
        // parse inputs
        $resourcePath = "/customers/{customer_id}/accesses/subscriptions";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $apiVersion = $this->apiClient->getConfig()->getApiVersion();
        $_header_accept = $this->apiClient->selectHeaderAccept(["application/vnd.kaemoapi.v$apiVersion+json"]);
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
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Kaemo\Client\Model\SubscriptionAccesses',
                '/customers/{customer_id}/accesses/subscriptions'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Kaemo\Client\Model\SubscriptionAccesses', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Kaemo\Client\Model\SubscriptionAccesses', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getCustomerAccessesVideos
     *
     * 
     *
     * @param int $customer_id ID of the customer to fetch (required)
     * @param int $page  (optional)
     * @param int $per_page  (optional)
     * @throws \Kaemo\Client\ApiException on non-2xx response
     * @return \Kaemo\Client\Model\SubscriptionAccesses
     */
    public function getCustomerAccessesVideos($customer_id, $page = null, $per_page = null)
    {
        list($response) = $this->getCustomerAccessesVideosWithHttpInfo($customer_id, $page, $per_page);
        return $response;
    }

    /**
     * Operation getCustomerAccessesVideosWithHttpInfo
     *
     * 
     *
     * @param int $customer_id ID of the customer to fetch (required)
     * @param int $page  (optional)
     * @param int $per_page  (optional)
     * @throws \Kaemo\Client\ApiException on non-2xx response
     * @return array of \Kaemo\Client\Model\SubscriptionAccesses, HTTP status code, HTTP response headers (array of strings)
     */
    public function getCustomerAccessesVideosWithHttpInfo($customer_id, $page = null, $per_page = null)
    {
        // verify the required parameter 'customer_id' is set
        if ($customer_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $customer_id when calling getCustomerAccessesVideos');
        }
        // parse inputs
        $resourcePath = "/customers/{customer_id}/accesses/videos";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $apiVersion = $this->apiClient->getConfig()->getApiVersion();
        $_header_accept = $this->apiClient->selectHeaderAccept(["application/vnd.kaemoapi.v$apiVersion+json"]);
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
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Kaemo\Client\Model\SubscriptionAccesses',
                '/customers/{customer_id}/accesses/videos'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Kaemo\Client\Model\SubscriptionAccesses', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Kaemo\Client\Model\SubscriptionAccesses', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getProductAccesses
     *
     * 
     *
     * @param int $page  (optional)
     * @param int $per_page  (optional)
     * @param string $type Filter by access type, available values are: video, sub (optional)
     * @param string $date_add Filter by creation date (optional)
     * @param string $date_add_direction Choose the direction for date_add parameter, default value is after ,available values are: before, equal, after (optional)
     * @param string $date_exp Filter by expiration date (optional)
     * @param string $date_exp_direction Choose the direction for date_exp parameter, default value is after ,available values are: before, equal, after (optional)
     * @throws \Kaemo\Client\ApiException on non-2xx response
     * @return \Kaemo\Client\Model\SubscriptionAccesses
     */
    public function getProductAccesses($page = null, $per_page = null, $type = null, $date_add = null, $date_add_direction = null, $date_exp = null, $date_exp_direction = null)
    {
        list($response) = $this->getProductAccessesWithHttpInfo($page, $per_page, $type, $date_add, $date_add_direction, $date_exp, $date_exp_direction);
        return $response;
    }

    /**
     * Operation getProductAccessesWithHttpInfo
     *
     * 
     *
     * @param int $page  (optional)
     * @param int $per_page  (optional)
     * @param string $type Filter by access type, available values are: video, sub (optional)
     * @param string $date_add Filter by creation date (optional)
     * @param string $date_add_direction Choose the direction for date_add parameter, default value is after ,available values are: before, equal, after (optional)
     * @param string $date_exp Filter by expiration date (optional)
     * @param string $date_exp_direction Choose the direction for date_exp parameter, default value is after ,available values are: before, equal, after (optional)
     * @throws \Kaemo\Client\ApiException on non-2xx response
     * @return array of \Kaemo\Client\Model\SubscriptionAccesses, HTTP status code, HTTP response headers (array of strings)
     */
    public function getProductAccessesWithHttpInfo($page = null, $per_page = null, $type = null, $date_add = null, $date_add_direction = null, $date_exp = null, $date_exp_direction = null)
    {
        // parse inputs
        $resourcePath = "/product-accesses";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $apiVersion = $this->apiClient->getConfig()->getApiVersion();
        $_header_accept = $this->apiClient->selectHeaderAccept(["application/vnd.kaemoapi.v$apiVersion+json"]);
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
        if ($type !== null) {
            $queryParams['type'] = $this->apiClient->getSerializer()->toQueryValue($type);
        }
        // query params
        if ($date_add !== null) {
            $queryParams['date_add'] = $this->apiClient->getSerializer()->toQueryValue($date_add);
        }
        // query params
        if ($date_add_direction !== null) {
            $queryParams['date_add_direction'] = $this->apiClient->getSerializer()->toQueryValue($date_add_direction);
        }
        // query params
        if ($date_exp !== null) {
            $queryParams['date_exp'] = $this->apiClient->getSerializer()->toQueryValue($date_exp);
        }
        // query params
        if ($date_exp_direction !== null) {
            $queryParams['date_exp_direction'] = $this->apiClient->getSerializer()->toQueryValue($date_exp_direction);
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Kaemo\Client\Model\SubscriptionAccesses',
                '/product-accesses'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Kaemo\Client\Model\SubscriptionAccesses', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Kaemo\Client\Model\SubscriptionAccesses', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation stopSubscription
     *
     * 
     *
     * @param int $customer_id ID of the user to unsubscribe (required)
     * @param string $product_access_id ID of the product access to unsubscribe from (required)
     * @throws \Kaemo\Client\ApiException on non-2xx response
     * @return void
     */
    public function stopSubscription($customer_id, $product_access_id)
    {
        list($response) = $this->stopSubscriptionWithHttpInfo($customer_id, $product_access_id);
        return $response;
    }

    /**
     * Operation stopSubscriptionWithHttpInfo
     *
     * 
     *
     * @param int $customer_id ID of the user to unsubscribe (required)
     * @param string $product_access_id ID of the product access to unsubscribe from (required)
     * @throws \Kaemo\Client\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function stopSubscriptionWithHttpInfo($customer_id, $product_access_id)
    {
        // verify the required parameter 'customer_id' is set
        if ($customer_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $customer_id when calling stopSubscription');
        }
        // verify the required parameter 'product_access_id' is set
        if ($product_access_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $product_access_id when calling stopSubscription');
        }
        // parse inputs
        $resourcePath = "/customers/{customer_id}/unsubscribe";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $apiVersion = $this->apiClient->getConfig()->getApiVersion();
        $_header_accept = $this->apiClient->selectHeaderAccept(["application/vnd.kaemoapi.v$apiVersion+json"]);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

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

        // form params
        if ($product_access_id !== null) {
            $formParams['product_access_id'] = $this->apiClient->getSerializer()->toFormValue($product_access_id);
        }
        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
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
                '/customers/{customer_id}/unsubscribe'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }

    /**
     * Operation updateProductAccess
     *
     * 
     *
     * @param int $product_access_id ID of the product access to update (required)
     * @param \Kaemo\Client\Model\ProductAccess $body  (required)
     * @throws \Kaemo\Client\ApiException on non-2xx response
     * @return \Kaemo\Client\Model\ProductAccess
     */
    public function updateProductAccess($product_access_id, $body)
    {
        list($response) = $this->updateProductAccessWithHttpInfo($product_access_id, $body);
        return $response;
    }

    /**
     * Operation updateProductAccessWithHttpInfo
     *
     * 
     *
     * @param int $product_access_id ID of the product access to update (required)
     * @param \Kaemo\Client\Model\ProductAccess $body  (required)
     * @throws \Kaemo\Client\ApiException on non-2xx response
     * @return array of \Kaemo\Client\Model\ProductAccess, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateProductAccessWithHttpInfo($product_access_id, $body)
    {
        // verify the required parameter 'product_access_id' is set
        if ($product_access_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $product_access_id when calling updateProductAccess');
        }
        // verify the required parameter 'body' is set
        if ($body === null) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling updateProductAccess');
        }
        // parse inputs
        $resourcePath = "/product-accesses/{product_access_id}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $apiVersion = $this->apiClient->getConfig()->getApiVersion();
        $_header_accept = $this->apiClient->selectHeaderAccept(["application/vnd.kaemoapi.v$apiVersion+json"]);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // path params
        if ($product_access_id !== null) {
            $resourcePath = str_replace(
                "{" . "product_access_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($product_access_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'PUT',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Kaemo\Client\Model\ProductAccess',
                '/product-accesses/{product_access_id}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Kaemo\Client\Model\ProductAccess', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Kaemo\Client\Model\ProductAccess', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
