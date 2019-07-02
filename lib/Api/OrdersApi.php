<?php
/**
 * OrdersApi
 * PHP version 5
 *
 * @category Class
 * @package  Kaemo\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Kinow API
 *
 * Public api for Kinow back office
 *
 * OpenAPI spec version: 1.1.0
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
 * OrdersApi Class Doc Comment
 *
 * @category Class
 * @package  Kaemo\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OrdersApi
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
            $apiClient->getConfig()->setHost('https://api.kinow.com/api');
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
     * @return OrdersApi
     */
    public function setApiClient(\Kaemo\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation getCustomerOrders
     *
     * 
     *
     * @param int $customer_id Customer ID to fetch (required)
     * @param int $page  (optional)
     * @param int $per_page  (optional)
     * @throws \Kaemo\Client\ApiException on non-2xx response
     * @return \Kaemo\Client\Model\Orders
     */
    public function getCustomerOrders($customer_id, $page = null, $per_page = null)
    {
        list($response) = $this->getCustomerOrdersWithHttpInfo($customer_id, $page, $per_page);
        return $response;
    }

    /**
     * Operation getCustomerOrdersWithHttpInfo
     *
     * 
     *
     * @param int $customer_id Customer ID to fetch (required)
     * @param int $page  (optional)
     * @param int $per_page  (optional)
     * @throws \Kaemo\Client\ApiException on non-2xx response
     * @return array of \Kaemo\Client\Model\Orders, HTTP status code, HTTP response headers (array of strings)
     */
    public function getCustomerOrdersWithHttpInfo($customer_id, $page = null, $per_page = null)
    {
        // verify the required parameter 'customer_id' is set
        if ($customer_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $customer_id when calling getCustomerOrders');
        }
        // parse inputs
        $resourcePath = "/customers/{customer_id}/orders";
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
                '\Kaemo\Client\Model\Orders',
                '/customers/{customer_id}/orders'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Kaemo\Client\Model\Orders', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Kaemo\Client\Model\Orders', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getOrder
     *
     * 
     *
     * @param int $order_id Order ID to fetch (required)
     * @throws \Kaemo\Client\ApiException on non-2xx response
     * @return \Kaemo\Client\Model\Order
     */
    public function getOrder($order_id)
    {
        list($response) = $this->getOrderWithHttpInfo($order_id);
        return $response;
    }

    /**
     * Operation getOrderWithHttpInfo
     *
     * 
     *
     * @param int $order_id Order ID to fetch (required)
     * @throws \Kaemo\Client\ApiException on non-2xx response
     * @return array of \Kaemo\Client\Model\Order, HTTP status code, HTTP response headers (array of strings)
     */
    public function getOrderWithHttpInfo($order_id)
    {
        // verify the required parameter 'order_id' is set
        if ($order_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $order_id when calling getOrder');
        }
        // parse inputs
        $resourcePath = "/orders/{order_id}";
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
        if ($order_id !== null) {
            $resourcePath = str_replace(
                "{" . "order_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($order_id),
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
                '\Kaemo\Client\Model\Order',
                '/orders/{order_id}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Kaemo\Client\Model\Order', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Kaemo\Client\Model\Order', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getOrderHistories
     *
     * 
     *
     * @param int $order_id Order ID to fetch (required)
     * @param int $page  (optional)
     * @param int $per_page  (optional)
     * @throws \Kaemo\Client\ApiException on non-2xx response
     * @return \Kaemo\Client\Model\OrderHistories
     */
    public function getOrderHistories($order_id, $page = null, $per_page = null)
    {
        list($response) = $this->getOrderHistoriesWithHttpInfo($order_id, $page, $per_page);
        return $response;
    }

    /**
     * Operation getOrderHistoriesWithHttpInfo
     *
     * 
     *
     * @param int $order_id Order ID to fetch (required)
     * @param int $page  (optional)
     * @param int $per_page  (optional)
     * @throws \Kaemo\Client\ApiException on non-2xx response
     * @return array of \Kaemo\Client\Model\OrderHistories, HTTP status code, HTTP response headers (array of strings)
     */
    public function getOrderHistoriesWithHttpInfo($order_id, $page = null, $per_page = null)
    {
        // verify the required parameter 'order_id' is set
        if ($order_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $order_id when calling getOrderHistories');
        }
        // parse inputs
        $resourcePath = "/orders/{order_id}/histories";
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
        if ($order_id !== null) {
            $resourcePath = str_replace(
                "{" . "order_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($order_id),
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
                '\Kaemo\Client\Model\OrderHistories',
                '/orders/{order_id}/histories'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Kaemo\Client\Model\OrderHistories', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Kaemo\Client\Model\OrderHistories', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getOrderInvoice
     *
     * 
     *
     * @param int $order_id Order ID to fetch (required)
     * @throws \Kaemo\Client\ApiException on non-2xx response
     * @return string
     */
    public function getOrderInvoice($order_id)
    {
        list($response) = $this->getOrderInvoiceWithHttpInfo($order_id);
        return $response;
    }

    /**
     * Operation getOrderInvoiceWithHttpInfo
     *
     * 
     *
     * @param int $order_id Order ID to fetch (required)
     * @throws \Kaemo\Client\ApiException on non-2xx response
     * @return array of string, HTTP status code, HTTP response headers (array of strings)
     */
    public function getOrderInvoiceWithHttpInfo($order_id)
    {
        // verify the required parameter 'order_id' is set
        if ($order_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $order_id when calling getOrderInvoice');
        }
        // parse inputs
        $resourcePath = "/orders/{order_id}/invoice";
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
        if ($order_id !== null) {
            $resourcePath = str_replace(
                "{" . "order_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($order_id),
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
                'string',
                '/orders/{order_id}/invoice'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, 'string', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'string', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getOrders
     *
     * 
     *
     * @param int $page  (optional)
     * @param int $per_page  (optional)
     * @param string $filters email[value]&#x3D;string&amp;email[operator]&#x3D;strict&amp;firstname[value]&#x3D;string&amp;firstname[operator]&#x3D;contains  &#x60;&#x60;&#x60; {     \&quot;email\&quot;: {         \&quot;value\&quot;: \&quot;string\&quot;,         \&quot;operator\&quot;: \&quot;strict\&quot;     },     \&quot;firstname\&quot;: {         \&quot;value\&quot;: \&quot;string\&quot;,         \&quot;operator\&quot;: \&quot;contains\&quot;     },     \&quot;invoice_date\&quot;: {         \&quot;value\&quot;: [\&quot;Y-m-d\&quot;, \&quot;Y-m-d\&quot;],         \&quot;operator\&quot;: \&quot;between\&quot;     } }&#x60;&#x60;&#x60; Operator can be strict, contains, between, gt or lt. (optional)
     * @param string $sort_by Sort by this attribute (id by default) (optional)
     * @param string $sort_direction Sorting direction (asc by default) (optional)
     * @throws \Kaemo\Client\ApiException on non-2xx response
     * @return \Kaemo\Client\Model\Orders
     */
    public function getOrders($page = null, $per_page = null, $filters = null, $sort_by = null, $sort_direction = null)
    {
        list($response) = $this->getOrdersWithHttpInfo($page, $per_page, $filters, $sort_by, $sort_direction);
        return $response;
    }

    /**
     * Operation getOrdersWithHttpInfo
     *
     * 
     *
     * @param int $page  (optional)
     * @param int $per_page  (optional)
     * @param string $filters email[value]&#x3D;string&amp;email[operator]&#x3D;strict&amp;firstname[value]&#x3D;string&amp;firstname[operator]&#x3D;contains  &#x60;&#x60;&#x60; {     \&quot;email\&quot;: {         \&quot;value\&quot;: \&quot;string\&quot;,         \&quot;operator\&quot;: \&quot;strict\&quot;     },     \&quot;firstname\&quot;: {         \&quot;value\&quot;: \&quot;string\&quot;,         \&quot;operator\&quot;: \&quot;contains\&quot;     },     \&quot;invoice_date\&quot;: {         \&quot;value\&quot;: [\&quot;Y-m-d\&quot;, \&quot;Y-m-d\&quot;],         \&quot;operator\&quot;: \&quot;between\&quot;     } }&#x60;&#x60;&#x60; Operator can be strict, contains, between, gt or lt. (optional)
     * @param string $sort_by Sort by this attribute (id by default) (optional)
     * @param string $sort_direction Sorting direction (asc by default) (optional)
     * @throws \Kaemo\Client\ApiException on non-2xx response
     * @return array of \Kaemo\Client\Model\Orders, HTTP status code, HTTP response headers (array of strings)
     */
    public function getOrdersWithHttpInfo($page = null, $per_page = null, $filters = null, $sort_by = null, $sort_direction = null)
    {
        // parse inputs
        $resourcePath = "/orders";
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
        if ($filters !== null) {
            $queryParams['filters'] = $this->apiClient->getSerializer()->toQueryValue($filters);
        }
        // query params
        if ($sort_by !== null) {
            $queryParams['sort_by'] = $this->apiClient->getSerializer()->toQueryValue($sort_by);
        }
        // query params
        if ($sort_direction !== null) {
            $queryParams['sort_direction'] = $this->apiClient->getSerializer()->toQueryValue($sort_direction);
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
                '\Kaemo\Client\Model\Orders',
                '/orders'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Kaemo\Client\Model\Orders', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Kaemo\Client\Model\Orders', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
