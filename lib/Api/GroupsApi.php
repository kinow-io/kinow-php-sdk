<?php
/**
 * GroupsApi
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
 * OpenAPI spec version: 1.0.63
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
 * GroupsApi Class Doc Comment
 *
 * @category Class
 * @package  Kaemo\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GroupsApi
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
     * @return GroupsApi
     */
    public function setApiClient(\Kaemo\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation attachCustomerToGroup
     *
     * 
     *
     * @param int $group_id ID of the group (required)
     * @param int $customer_id ID of the customer to attach (required)
     * @throws \Kaemo\Client\ApiException on non-2xx response
     * @return void
     */
    public function attachCustomerToGroup($group_id, $customer_id)
    {
        list($response) = $this->attachCustomerToGroupWithHttpInfo($group_id, $customer_id);
        return $response;
    }

    /**
     * Operation attachCustomerToGroupWithHttpInfo
     *
     * 
     *
     * @param int $group_id ID of the group (required)
     * @param int $customer_id ID of the customer to attach (required)
     * @throws \Kaemo\Client\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function attachCustomerToGroupWithHttpInfo($group_id, $customer_id)
    {
        // verify the required parameter 'group_id' is set
        if ($group_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $group_id when calling attachCustomerToGroup');
        }
        // verify the required parameter 'customer_id' is set
        if ($customer_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $customer_id when calling attachCustomerToGroup');
        }
        // parse inputs
        $resourcePath = "/groups/{group_id}/customers";
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
        if ($group_id !== null) {
            $resourcePath = str_replace(
                "{" . "group_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($group_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // form params
        if ($customer_id !== null) {
            $formParams['customer_id'] = $this->apiClient->getSerializer()->toFormValue($customer_id);
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
                null,
                '/groups/{group_id}/customers'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }

    /**
     * Operation detachCustomerFromGroup
     *
     * 
     *
     * @param int $group_id Id of the group (required)
     * @param int $customer_id ID of the customer to attach (required)
     * @throws \Kaemo\Client\ApiException on non-2xx response
     * @return void
     */
    public function detachCustomerFromGroup($group_id, $customer_id)
    {
        list($response) = $this->detachCustomerFromGroupWithHttpInfo($group_id, $customer_id);
        return $response;
    }

    /**
     * Operation detachCustomerFromGroupWithHttpInfo
     *
     * 
     *
     * @param int $group_id Id of the group (required)
     * @param int $customer_id ID of the customer to attach (required)
     * @throws \Kaemo\Client\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function detachCustomerFromGroupWithHttpInfo($group_id, $customer_id)
    {
        // verify the required parameter 'group_id' is set
        if ($group_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $group_id when calling detachCustomerFromGroup');
        }
        // verify the required parameter 'customer_id' is set
        if ($customer_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $customer_id when calling detachCustomerFromGroup');
        }
        // parse inputs
        $resourcePath = "/groups/{group_id}/customers/{customer_id}";
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
        if ($group_id !== null) {
            $resourcePath = str_replace(
                "{" . "group_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($group_id),
                $resourcePath
            );
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
                'DELETE',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/groups/{group_id}/customers/{customer_id}'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }

    /**
     * Operation getGroup
     *
     * 
     *
     * @param int $group_id ID of the group to fetch (required)
     * @throws \Kaemo\Client\ApiException on non-2xx response
     * @return \Kaemo\Client\Model\Group
     */
    public function getGroup($group_id)
    {
        list($response) = $this->getGroupWithHttpInfo($group_id);
        return $response;
    }

    /**
     * Operation getGroupWithHttpInfo
     *
     * 
     *
     * @param int $group_id ID of the group to fetch (required)
     * @throws \Kaemo\Client\ApiException on non-2xx response
     * @return array of \Kaemo\Client\Model\Group, HTTP status code, HTTP response headers (array of strings)
     */
    public function getGroupWithHttpInfo($group_id)
    {
        // verify the required parameter 'group_id' is set
        if ($group_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $group_id when calling getGroup');
        }
        // parse inputs
        $resourcePath = "/groups/{group_id}";
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
        if ($group_id !== null) {
            $resourcePath = str_replace(
                "{" . "group_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($group_id),
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
                '\Kaemo\Client\Model\Group',
                '/groups/{group_id}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Kaemo\Client\Model\Group', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Kaemo\Client\Model\Group', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getGroups
     *
     * 
     *
     * @param int $page  (optional)
     * @param int $per_page  (optional)
     * @param string $filters &#x60;&#x60;&#x60;     filters[email][value]&#x3D;string&amp;filters[email][operator]&#x3D;strict&amp;filters[firstname][value]&#x3D;string&amp;filters[firstname][operator]&#x3D;contains     _______________      {     \&quot;email\&quot;: {     \&quot;value\&quot;: \&quot;string\&quot;,     \&quot;operator\&quot;: \&quot;strict\&quot;     },     \&quot;firstname\&quot;: {     \&quot;value\&quot;: \&quot;string\&quot;,     \&quot;operator\&quot;: \&quot;contains\&quot;     }     } &#x60;&#x60;&#x60;Operator can be strict, contains, gt or lt. (optional)
     * @param string $sort_by Sort by this attribute (id by default) (optional)
     * @param string $sort_direction Sorting direction (asc by default) (optional)
     * @throws \Kaemo\Client\ApiException on non-2xx response
     * @return \Kaemo\Client\Model\Groups
     */
    public function getGroups($page = null, $per_page = null, $filters = null, $sort_by = null, $sort_direction = null)
    {
        list($response) = $this->getGroupsWithHttpInfo($page, $per_page, $filters, $sort_by, $sort_direction);
        return $response;
    }

    /**
     * Operation getGroupsWithHttpInfo
     *
     * 
     *
     * @param int $page  (optional)
     * @param int $per_page  (optional)
     * @param string $filters &#x60;&#x60;&#x60;     filters[email][value]&#x3D;string&amp;filters[email][operator]&#x3D;strict&amp;filters[firstname][value]&#x3D;string&amp;filters[firstname][operator]&#x3D;contains     _______________      {     \&quot;email\&quot;: {     \&quot;value\&quot;: \&quot;string\&quot;,     \&quot;operator\&quot;: \&quot;strict\&quot;     },     \&quot;firstname\&quot;: {     \&quot;value\&quot;: \&quot;string\&quot;,     \&quot;operator\&quot;: \&quot;contains\&quot;     }     } &#x60;&#x60;&#x60;Operator can be strict, contains, gt or lt. (optional)
     * @param string $sort_by Sort by this attribute (id by default) (optional)
     * @param string $sort_direction Sorting direction (asc by default) (optional)
     * @throws \Kaemo\Client\ApiException on non-2xx response
     * @return array of \Kaemo\Client\Model\Groups, HTTP status code, HTTP response headers (array of strings)
     */
    public function getGroupsWithHttpInfo($page = null, $per_page = null, $filters = null, $sort_by = null, $sort_direction = null)
    {
        // parse inputs
        $resourcePath = "/groups";
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
                '\Kaemo\Client\Model\Groups',
                '/groups'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Kaemo\Client\Model\Groups', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Kaemo\Client\Model\Groups', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getProductGroups
     *
     * 
     *
     * @param int $product_id Id of the product (required)
     * @param int $page  (optional)
     * @param int $per_page  (optional)
     * @throws \Kaemo\Client\ApiException on non-2xx response
     * @return \Kaemo\Client\Model\Groups
     */
    public function getProductGroups($product_id, $page = null, $per_page = null)
    {
        list($response) = $this->getProductGroupsWithHttpInfo($product_id, $page, $per_page);
        return $response;
    }

    /**
     * Operation getProductGroupsWithHttpInfo
     *
     * 
     *
     * @param int $product_id Id of the product (required)
     * @param int $page  (optional)
     * @param int $per_page  (optional)
     * @throws \Kaemo\Client\ApiException on non-2xx response
     * @return array of \Kaemo\Client\Model\Groups, HTTP status code, HTTP response headers (array of strings)
     */
    public function getProductGroupsWithHttpInfo($product_id, $page = null, $per_page = null)
    {
        // verify the required parameter 'product_id' is set
        if ($product_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $product_id when calling getProductGroups');
        }
        // parse inputs
        $resourcePath = "/products/{product_id}/groups";
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
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Kaemo\Client\Model\Groups',
                '/products/{product_id}/groups'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Kaemo\Client\Model\Groups', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Kaemo\Client\Model\Groups', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
