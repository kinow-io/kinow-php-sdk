<?php
/**
 * PrepaymentsApi
 * PHP version 5
 *
 * @category Class
 * @package  Kinow\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Kinow API
 *
 * Client API for Kinow back-office
 *
 * OpenAPI spec version: 1.4.31
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
 * PrepaymentsApi Class Doc Comment
 *
 * @category Class
 * @package  Kinow\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PrepaymentsApi
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
     * @return PrepaymentsApi
     */
    public function setApiClient(\Kinow\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation getCustomerPrepaymentBalances
     *
     * 
     *
     * @param int $customer_id Customer ID to fetch (required)
     * @throws \Kinow\Client\ApiException on non-2xx response
     * @return \Kinow\Client\Model\PrepaymentBalance[]
     */
    public function getCustomerPrepaymentBalances($customer_id)
    {
        list($response) = $this->getCustomerPrepaymentBalancesWithHttpInfo($customer_id);
        return $response;
    }

    /**
     * Operation getCustomerPrepaymentBalancesWithHttpInfo
     *
     * 
     *
     * @param int $customer_id Customer ID to fetch (required)
     * @throws \Kinow\Client\ApiException on non-2xx response
     * @return array of \Kinow\Client\Model\PrepaymentBalance[], HTTP status code, HTTP response headers (array of strings)
     */
    public function getCustomerPrepaymentBalancesWithHttpInfo($customer_id)
    {
        // verify the required parameter 'customer_id' is set
        if ($customer_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $customer_id when calling getCustomerPrepaymentBalances');
        }
        // parse inputs
        $resourcePath = "/customers/{customer_id}/prepayment-balance";
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
                '\Kinow\Client\Model\PrepaymentBalance[]',
                '/customers/{customer_id}/prepayment-balance'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Kinow\Client\Model\PrepaymentBalance[]', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Kinow\Client\Model\PrepaymentBalance[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getCustomerPrepaymentOperations
     *
     * 
     *
     * @param int $customer_id Customer ID to fetch (required)
     * @param string $type  (optional)
     * @param int $page  (optional)
     * @param int $per_page  (optional)
     * @throws \Kinow\Client\ApiException on non-2xx response
     * @return \Kinow\Client\Model\PrepaymentOperations
     */
    public function getCustomerPrepaymentOperations($customer_id, $type = null, $page = null, $per_page = null)
    {
        list($response) = $this->getCustomerPrepaymentOperationsWithHttpInfo($customer_id, $type, $page, $per_page);
        return $response;
    }

    /**
     * Operation getCustomerPrepaymentOperationsWithHttpInfo
     *
     * 
     *
     * @param int $customer_id Customer ID to fetch (required)
     * @param string $type  (optional)
     * @param int $page  (optional)
     * @param int $per_page  (optional)
     * @throws \Kinow\Client\ApiException on non-2xx response
     * @return array of \Kinow\Client\Model\PrepaymentOperations, HTTP status code, HTTP response headers (array of strings)
     */
    public function getCustomerPrepaymentOperationsWithHttpInfo($customer_id, $type = null, $page = null, $per_page = null)
    {
        // verify the required parameter 'customer_id' is set
        if ($customer_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $customer_id when calling getCustomerPrepaymentOperations');
        }
        // parse inputs
        $resourcePath = "/customers/{customer_id}/prepayment-operations";
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
        if ($type !== null) {
            $queryParams['type'] = $this->apiClient->getSerializer()->toQueryValue($type);
        }
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
                '\Kinow\Client\Model\PrepaymentOperations',
                '/customers/{customer_id}/prepayment-operations'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Kinow\Client\Model\PrepaymentOperations', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Kinow\Client\Model\PrepaymentOperations', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getPrepaymentBonus
     *
     * 
     *
     * @param int $prepayment_bonus_id PrepaymentBonus ID to fetch (required)
     * @throws \Kinow\Client\ApiException on non-2xx response
     * @return \Kinow\Client\Model\PrepaymentBonus
     */
    public function getPrepaymentBonus($prepayment_bonus_id)
    {
        list($response) = $this->getPrepaymentBonusWithHttpInfo($prepayment_bonus_id);
        return $response;
    }

    /**
     * Operation getPrepaymentBonusWithHttpInfo
     *
     * 
     *
     * @param int $prepayment_bonus_id PrepaymentBonus ID to fetch (required)
     * @throws \Kinow\Client\ApiException on non-2xx response
     * @return array of \Kinow\Client\Model\PrepaymentBonus, HTTP status code, HTTP response headers (array of strings)
     */
    public function getPrepaymentBonusWithHttpInfo($prepayment_bonus_id)
    {
        // verify the required parameter 'prepayment_bonus_id' is set
        if ($prepayment_bonus_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $prepayment_bonus_id when calling getPrepaymentBonus');
        }
        // parse inputs
        $resourcePath = "/prepayment/bonus/{prepayment_bonus_id}";
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
        if ($prepayment_bonus_id !== null) {
            $resourcePath = str_replace(
                "{" . "prepayment_bonus_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($prepayment_bonus_id),
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
                '\Kinow\Client\Model\PrepaymentBonus',
                '/prepayment/bonus/{prepayment_bonus_id}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Kinow\Client\Model\PrepaymentBonus', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Kinow\Client\Model\PrepaymentBonus', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getPrepaymentBonusList
     *
     * 
     *
     * @param int $page  (optional)
     * @param int $per_page  (optional)
     * @throws \Kinow\Client\ApiException on non-2xx response
     * @return \Kinow\Client\Model\PrepaymentBonus1
     */
    public function getPrepaymentBonusList($page = null, $per_page = null)
    {
        list($response) = $this->getPrepaymentBonusListWithHttpInfo($page, $per_page);
        return $response;
    }

    /**
     * Operation getPrepaymentBonusListWithHttpInfo
     *
     * 
     *
     * @param int $page  (optional)
     * @param int $per_page  (optional)
     * @throws \Kinow\Client\ApiException on non-2xx response
     * @return array of \Kinow\Client\Model\PrepaymentBonus1, HTTP status code, HTTP response headers (array of strings)
     */
    public function getPrepaymentBonusListWithHttpInfo($page = null, $per_page = null)
    {
        // parse inputs
        $resourcePath = "/prepayment/bonus";
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
                '\Kinow\Client\Model\PrepaymentBonus1',
                '/prepayment/bonus'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Kinow\Client\Model\PrepaymentBonus1', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Kinow\Client\Model\PrepaymentBonus1', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getPrepaymentOperation
     *
     * 
     *
     * @param int $prepayment_operation_id PrepaymentOperation ID to fetch (required)
     * @throws \Kinow\Client\ApiException on non-2xx response
     * @return \Kinow\Client\Model\PrepaymentOperation
     */
    public function getPrepaymentOperation($prepayment_operation_id)
    {
        list($response) = $this->getPrepaymentOperationWithHttpInfo($prepayment_operation_id);
        return $response;
    }

    /**
     * Operation getPrepaymentOperationWithHttpInfo
     *
     * 
     *
     * @param int $prepayment_operation_id PrepaymentOperation ID to fetch (required)
     * @throws \Kinow\Client\ApiException on non-2xx response
     * @return array of \Kinow\Client\Model\PrepaymentOperation, HTTP status code, HTTP response headers (array of strings)
     */
    public function getPrepaymentOperationWithHttpInfo($prepayment_operation_id)
    {
        // verify the required parameter 'prepayment_operation_id' is set
        if ($prepayment_operation_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $prepayment_operation_id when calling getPrepaymentOperation');
        }
        // parse inputs
        $resourcePath = "/prepayment/operations/{prepayment_operation_id}";
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
        if ($prepayment_operation_id !== null) {
            $resourcePath = str_replace(
                "{" . "prepayment_operation_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($prepayment_operation_id),
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
                '\Kinow\Client\Model\PrepaymentOperation',
                '/prepayment/operations/{prepayment_operation_id}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Kinow\Client\Model\PrepaymentOperation', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Kinow\Client\Model\PrepaymentOperation', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getPrepaymentOperations
     *
     * 
     *
     * @param string $type  (optional)
     * @param int $page  (optional)
     * @param int $per_page  (optional)
     * @throws \Kinow\Client\ApiException on non-2xx response
     * @return \Kinow\Client\Model\PrepaymentOperations
     */
    public function getPrepaymentOperations($type = null, $page = null, $per_page = null)
    {
        list($response) = $this->getPrepaymentOperationsWithHttpInfo($type, $page, $per_page);
        return $response;
    }

    /**
     * Operation getPrepaymentOperationsWithHttpInfo
     *
     * 
     *
     * @param string $type  (optional)
     * @param int $page  (optional)
     * @param int $per_page  (optional)
     * @throws \Kinow\Client\ApiException on non-2xx response
     * @return array of \Kinow\Client\Model\PrepaymentOperations, HTTP status code, HTTP response headers (array of strings)
     */
    public function getPrepaymentOperationsWithHttpInfo($type = null, $page = null, $per_page = null)
    {
        // parse inputs
        $resourcePath = "/prepayment/operations";
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
        if ($type !== null) {
            $queryParams['type'] = $this->apiClient->getSerializer()->toQueryValue($type);
        }
        // query params
        if ($page !== null) {
            $queryParams['page'] = $this->apiClient->getSerializer()->toQueryValue($page);
        }
        // query params
        if ($per_page !== null) {
            $queryParams['per_page'] = $this->apiClient->getSerializer()->toQueryValue($per_page);
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
                '\Kinow\Client\Model\PrepaymentOperations',
                '/prepayment/operations'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Kinow\Client\Model\PrepaymentOperations', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Kinow\Client\Model\PrepaymentOperations', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getPrepaymentRecharge
     *
     * 
     *
     * @param int $prepayment_recharge_id PrepaymentRecharge ID to fetch (required)
     * @throws \Kinow\Client\ApiException on non-2xx response
     * @return \Kinow\Client\Model\PrepaymentRecharge
     */
    public function getPrepaymentRecharge($prepayment_recharge_id)
    {
        list($response) = $this->getPrepaymentRechargeWithHttpInfo($prepayment_recharge_id);
        return $response;
    }

    /**
     * Operation getPrepaymentRechargeWithHttpInfo
     *
     * 
     *
     * @param int $prepayment_recharge_id PrepaymentRecharge ID to fetch (required)
     * @throws \Kinow\Client\ApiException on non-2xx response
     * @return array of \Kinow\Client\Model\PrepaymentRecharge, HTTP status code, HTTP response headers (array of strings)
     */
    public function getPrepaymentRechargeWithHttpInfo($prepayment_recharge_id)
    {
        // verify the required parameter 'prepayment_recharge_id' is set
        if ($prepayment_recharge_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $prepayment_recharge_id when calling getPrepaymentRecharge');
        }
        // parse inputs
        $resourcePath = "/prepayment/recharges/{prepayment_recharge_id}";
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
        if ($prepayment_recharge_id !== null) {
            $resourcePath = str_replace(
                "{" . "prepayment_recharge_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($prepayment_recharge_id),
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
                '\Kinow\Client\Model\PrepaymentRecharge',
                '/prepayment/recharges/{prepayment_recharge_id}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Kinow\Client\Model\PrepaymentRecharge', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Kinow\Client\Model\PrepaymentRecharge', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getPrepaymentRecharges
     *
     * 
     *
     * @param int $page  (optional)
     * @param int $per_page  (optional)
     * @throws \Kinow\Client\ApiException on non-2xx response
     * @return \Kinow\Client\Model\PrepaymentRecharges
     */
    public function getPrepaymentRecharges($page = null, $per_page = null)
    {
        list($response) = $this->getPrepaymentRechargesWithHttpInfo($page, $per_page);
        return $response;
    }

    /**
     * Operation getPrepaymentRechargesWithHttpInfo
     *
     * 
     *
     * @param int $page  (optional)
     * @param int $per_page  (optional)
     * @throws \Kinow\Client\ApiException on non-2xx response
     * @return array of \Kinow\Client\Model\PrepaymentRecharges, HTTP status code, HTTP response headers (array of strings)
     */
    public function getPrepaymentRechargesWithHttpInfo($page = null, $per_page = null)
    {
        // parse inputs
        $resourcePath = "/prepayment/recharges";
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
                '\Kinow\Client\Model\PrepaymentRecharges',
                '/prepayment/recharges'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Kinow\Client\Model\PrepaymentRecharges', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Kinow\Client\Model\PrepaymentRecharges', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
