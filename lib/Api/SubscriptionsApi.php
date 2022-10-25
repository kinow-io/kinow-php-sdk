<?php
/**
 * SubscriptionsApi
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
 * OpenAPI spec version: 2.0.19
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
 * SubscriptionsApi Class Doc Comment
 *
 * @category Class
 * @package  Kinow\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SubscriptionsApi
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
     * @return SubscriptionsApi
     */
    public function setApiClient(\Kinow\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation attachCategoriesToSubscription
     *
     * 
     *
     * @param int $subscription_id Subscription ID to fetch (required)
     * @param string $category_ids List of category IDs to attach, separated with comma (required)
     * @throws \Kinow\Client\ApiException on non-2xx response
     * @return void
     */
    public function attachCategoriesToSubscription($subscription_id, $category_ids)
    {
        list($response) = $this->attachCategoriesToSubscriptionWithHttpInfo($subscription_id, $category_ids);
        return $response;
    }

    /**
     * Operation attachCategoriesToSubscriptionWithHttpInfo
     *
     * 
     *
     * @param int $subscription_id Subscription ID to fetch (required)
     * @param string $category_ids List of category IDs to attach, separated with comma (required)
     * @throws \Kinow\Client\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function attachCategoriesToSubscriptionWithHttpInfo($subscription_id, $category_ids)
    {
        // verify the required parameter 'subscription_id' is set
        if ($subscription_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $subscription_id when calling attachCategoriesToSubscription');
        }
        // verify the required parameter 'category_ids' is set
        if ($category_ids === null) {
            throw new \InvalidArgumentException('Missing the required parameter $category_ids when calling attachCategoriesToSubscription');
        }
        // parse inputs
        $resourcePath = "/subscriptions/{subscription_id}/categories";
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
        if ($subscription_id !== null) {
            $resourcePath = str_replace(
                "{" . "subscription_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($subscription_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // form params
        if ($category_ids !== null) {
            $formParams['category_ids'] = $this->apiClient->getSerializer()->toFormValue($category_ids);
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
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/subscriptions/{subscription_id}/categories'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }

    /**
     * Operation detachCategoryFromSubscription
     *
     * 
     *
     * @param int $subscription_id Subscription ID to fetch (required)
     * @param int $category_id Category ID to detach (required)
     * @throws \Kinow\Client\ApiException on non-2xx response
     * @return void
     */
    public function detachCategoryFromSubscription($subscription_id, $category_id)
    {
        list($response) = $this->detachCategoryFromSubscriptionWithHttpInfo($subscription_id, $category_id);
        return $response;
    }

    /**
     * Operation detachCategoryFromSubscriptionWithHttpInfo
     *
     * 
     *
     * @param int $subscription_id Subscription ID to fetch (required)
     * @param int $category_id Category ID to detach (required)
     * @throws \Kinow\Client\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function detachCategoryFromSubscriptionWithHttpInfo($subscription_id, $category_id)
    {
        // verify the required parameter 'subscription_id' is set
        if ($subscription_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $subscription_id when calling detachCategoryFromSubscription');
        }
        // verify the required parameter 'category_id' is set
        if ($category_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $category_id when calling detachCategoryFromSubscription');
        }
        // parse inputs
        $resourcePath = "/subscriptions/{subscription_id}/categories/{category_id}";
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
        if ($subscription_id !== null) {
            $resourcePath = str_replace(
                "{" . "subscription_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($subscription_id),
                $resourcePath
            );
        }
        // path params
        if ($category_id !== null) {
            $resourcePath = str_replace(
                "{" . "category_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($category_id),
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
                '/subscriptions/{subscription_id}/categories/{category_id}'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }

    /**
     * Operation getDisabledSubscriptions
     *
     * 
     *
     * @param int $video_id Video ID to fetch (required)
     * @param int $page  (optional)
     * @param int $per_page  (optional)
     * @throws \Kinow\Client\ApiException on non-2xx response
     * @return \Kinow\Client\Model\SubscriptionListResponse
     */
    public function getDisabledSubscriptions($video_id, $page = null, $per_page = null)
    {
        list($response) = $this->getDisabledSubscriptionsWithHttpInfo($video_id, $page, $per_page);
        return $response;
    }

    /**
     * Operation getDisabledSubscriptionsWithHttpInfo
     *
     * 
     *
     * @param int $video_id Video ID to fetch (required)
     * @param int $page  (optional)
     * @param int $per_page  (optional)
     * @throws \Kinow\Client\ApiException on non-2xx response
     * @return array of \Kinow\Client\Model\SubscriptionListResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getDisabledSubscriptionsWithHttpInfo($video_id, $page = null, $per_page = null)
    {
        // verify the required parameter 'video_id' is set
        if ($video_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $video_id when calling getDisabledSubscriptions');
        }
        // parse inputs
        $resourcePath = "/videos/{video_id}/disabled-subscriptions";
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
        if ($video_id !== null) {
            $resourcePath = str_replace(
                "{" . "video_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($video_id),
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
                '\Kinow\Client\Model\SubscriptionListResponse',
                '/videos/{video_id}/disabled-subscriptions'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Kinow\Client\Model\SubscriptionListResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Kinow\Client\Model\SubscriptionListResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getProductSubscription
     *
     * 
     *
     * @param int $product_id Product ID to fetch (required)
     * @throws \Kinow\Client\ApiException on non-2xx response
     * @return \Kinow\Client\Model\SubscriptionResponse
     */
    public function getProductSubscription($product_id)
    {
        list($response) = $this->getProductSubscriptionWithHttpInfo($product_id);
        return $response;
    }

    /**
     * Operation getProductSubscriptionWithHttpInfo
     *
     * 
     *
     * @param int $product_id Product ID to fetch (required)
     * @throws \Kinow\Client\ApiException on non-2xx response
     * @return array of \Kinow\Client\Model\SubscriptionResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getProductSubscriptionWithHttpInfo($product_id)
    {
        // verify the required parameter 'product_id' is set
        if ($product_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $product_id when calling getProductSubscription');
        }
        // parse inputs
        $resourcePath = "/products/{product_id}/subscription";
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
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Kinow\Client\Model\SubscriptionResponse',
                '/products/{product_id}/subscription'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Kinow\Client\Model\SubscriptionResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Kinow\Client\Model\SubscriptionResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getSubscription
     *
     * 
     *
     * @param int $subscription_id Product ID to fetch (required)
     * @throws \Kinow\Client\ApiException on non-2xx response
     * @return \Kinow\Client\Model\SubscriptionResponse
     */
    public function getSubscription($subscription_id)
    {
        list($response) = $this->getSubscriptionWithHttpInfo($subscription_id);
        return $response;
    }

    /**
     * Operation getSubscriptionWithHttpInfo
     *
     * 
     *
     * @param int $subscription_id Product ID to fetch (required)
     * @throws \Kinow\Client\ApiException on non-2xx response
     * @return array of \Kinow\Client\Model\SubscriptionResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getSubscriptionWithHttpInfo($subscription_id)
    {
        // verify the required parameter 'subscription_id' is set
        if ($subscription_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $subscription_id when calling getSubscription');
        }
        // parse inputs
        $resourcePath = "/subscriptions/{subscription_id}";
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
        if ($subscription_id !== null) {
            $resourcePath = str_replace(
                "{" . "subscription_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($subscription_id),
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
                '\Kinow\Client\Model\SubscriptionResponse',
                '/subscriptions/{subscription_id}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Kinow\Client\Model\SubscriptionResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Kinow\Client\Model\SubscriptionResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getSubscriptionCategories
     *
     * 
     *
     * @param int $subscription_id  (required)
     * @param int $page  (optional)
     * @param int $per_page  (optional)
     * @param string $sort_by Sort by this attribute (id by default) (optional)
     * @param string $sort_direction Sorting direction (asc by default) (optional)
     * @throws \Kinow\Client\ApiException on non-2xx response
     * @return \Kinow\Client\Model\CategoryListResponse
     */
    public function getSubscriptionCategories($subscription_id, $page = null, $per_page = null, $sort_by = null, $sort_direction = null)
    {
        list($response) = $this->getSubscriptionCategoriesWithHttpInfo($subscription_id, $page, $per_page, $sort_by, $sort_direction);
        return $response;
    }

    /**
     * Operation getSubscriptionCategoriesWithHttpInfo
     *
     * 
     *
     * @param int $subscription_id  (required)
     * @param int $page  (optional)
     * @param int $per_page  (optional)
     * @param string $sort_by Sort by this attribute (id by default) (optional)
     * @param string $sort_direction Sorting direction (asc by default) (optional)
     * @throws \Kinow\Client\ApiException on non-2xx response
     * @return array of \Kinow\Client\Model\CategoryListResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getSubscriptionCategoriesWithHttpInfo($subscription_id, $page = null, $per_page = null, $sort_by = null, $sort_direction = null)
    {
        // verify the required parameter 'subscription_id' is set
        if ($subscription_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $subscription_id when calling getSubscriptionCategories');
        }
        // parse inputs
        $resourcePath = "/subscriptions/{subscription_id}/categories";
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
        // path params
        if ($subscription_id !== null) {
            $resourcePath = str_replace(
                "{" . "subscription_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($subscription_id),
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
                '\Kinow\Client\Model\CategoryListResponse',
                '/subscriptions/{subscription_id}/categories'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Kinow\Client\Model\CategoryListResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Kinow\Client\Model\CategoryListResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getSubscriptionCoverImage
     *
     * 
     *
     * @param int $subscription_id Subscription ID to fetch (required)
     * @throws \Kinow\Client\ApiException on non-2xx response
     * @return \Kinow\Client\Model\ImageResponse
     */
    public function getSubscriptionCoverImage($subscription_id)
    {
        list($response) = $this->getSubscriptionCoverImageWithHttpInfo($subscription_id);
        return $response;
    }

    /**
     * Operation getSubscriptionCoverImageWithHttpInfo
     *
     * 
     *
     * @param int $subscription_id Subscription ID to fetch (required)
     * @throws \Kinow\Client\ApiException on non-2xx response
     * @return array of \Kinow\Client\Model\ImageResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getSubscriptionCoverImageWithHttpInfo($subscription_id)
    {
        // verify the required parameter 'subscription_id' is set
        if ($subscription_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $subscription_id when calling getSubscriptionCoverImage');
        }
        // parse inputs
        $resourcePath = "/subscriptions/{subscription_id}/cover";
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
        if ($subscription_id !== null) {
            $resourcePath = str_replace(
                "{" . "subscription_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($subscription_id),
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
                '\Kinow\Client\Model\ImageResponse',
                '/subscriptions/{subscription_id}/cover'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Kinow\Client\Model\ImageResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Kinow\Client\Model\ImageResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getSubscriptions
     *
     * 
     *
     * @param int $page  (optional)
     * @param int $per_page  (optional)
     * @throws \Kinow\Client\ApiException on non-2xx response
     * @return \Kinow\Client\Model\SubscriptionListResponse
     */
    public function getSubscriptions($page = null, $per_page = null)
    {
        list($response) = $this->getSubscriptionsWithHttpInfo($page, $per_page);
        return $response;
    }

    /**
     * Operation getSubscriptionsWithHttpInfo
     *
     * 
     *
     * @param int $page  (optional)
     * @param int $per_page  (optional)
     * @throws \Kinow\Client\ApiException on non-2xx response
     * @return array of \Kinow\Client\Model\SubscriptionListResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getSubscriptionsWithHttpInfo($page = null, $per_page = null)
    {
        // parse inputs
        $resourcePath = "/subscriptions";
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
                '\Kinow\Client\Model\SubscriptionListResponse',
                '/subscriptions'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Kinow\Client\Model\SubscriptionListResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Kinow\Client\Model\SubscriptionListResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation uploadSubscriptionCover
     *
     * 
     *
     * @param float $subscription_id Subscription ID to fetch (required)
     * @param \SplFileObject $file  (optional)
     * @param string $hash  (optional)
     * @param string $hash_algorithm Hash algorithm to check the hash file (default value is: sha256) (optional)
     * @throws \Kinow\Client\ApiException on non-2xx response
     * @return \Kinow\Client\Model\ImageResponse
     */
    public function uploadSubscriptionCover($subscription_id, $file = null, $hash = null, $hash_algorithm = null)
    {
        list($response) = $this->uploadSubscriptionCoverWithHttpInfo($subscription_id, $file, $hash, $hash_algorithm);
        return $response;
    }

    /**
     * Operation uploadSubscriptionCoverWithHttpInfo
     *
     * 
     *
     * @param float $subscription_id Subscription ID to fetch (required)
     * @param \SplFileObject $file  (optional)
     * @param string $hash  (optional)
     * @param string $hash_algorithm Hash algorithm to check the hash file (default value is: sha256) (optional)
     * @throws \Kinow\Client\ApiException on non-2xx response
     * @return array of \Kinow\Client\Model\ImageResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function uploadSubscriptionCoverWithHttpInfo($subscription_id, $file = null, $hash = null, $hash_algorithm = null)
    {
        // verify the required parameter 'subscription_id' is set
        if ($subscription_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $subscription_id when calling uploadSubscriptionCover');
        }
        // parse inputs
        $resourcePath = "/subscriptions/{subscription_id}/cover";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $apiVersion = $this->apiClient->getConfig()->getApiVersion();
        $_header_accept = $this->apiClient->selectHeaderAccept(["application/vnd.kinowapi.v$apiVersion+json"]);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['multipart/form-data']);

        // path params
        if ($subscription_id !== null) {
            $resourcePath = str_replace(
                "{" . "subscription_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($subscription_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // form params
        if ($file !== null) {
            // PHP 5.5 introduced a CurlFile object that deprecates the old @filename syntax
            // See: https://wiki.php.net/rfc/curl-file-upload
            if (function_exists('curl_file_create')) {
                $formParams['file'] = curl_file_create($this->apiClient->getSerializer()->toFormValue($file));
            } else {
                $formParams['file'] = '@' . $this->apiClient->getSerializer()->toFormValue($file);
            }
        }
        // form params
        if ($hash !== null) {
            $formParams['hash'] = $this->apiClient->getSerializer()->toFormValue($hash);
        }
        // form params
        if ($hash_algorithm !== null) {
            $formParams['hash_algorithm'] = $this->apiClient->getSerializer()->toFormValue($hash_algorithm);
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
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Kinow\Client\Model\ImageResponse',
                '/subscriptions/{subscription_id}/cover'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Kinow\Client\Model\ImageResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Kinow\Client\Model\ImageResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
