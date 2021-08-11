<?php
/**
 * GeolocationsApi
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
 * OpenAPI spec version: 1.4.45
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
 * GeolocationsApi Class Doc Comment
 *
 * @category Class
 * @package  Kinow\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GeolocationsApi
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
     * @return GeolocationsApi
     */
    public function setApiClient(\Kinow\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation getGeolocSettings
     *
     * 
     *
     * @param string $type Item type, available values are: category, subscription, product, video, extract, blogpage, slider, topmenu, homerail (required)
     * @param int $type_id Item ID (required)
     * @throws \Kinow\Client\ApiException on non-2xx response
     * @return \Kinow\Client\Model\GeolocSettings
     */
    public function getGeolocSettings($type, $type_id)
    {
        list($response) = $this->getGeolocSettingsWithHttpInfo($type, $type_id);
        return $response;
    }

    /**
     * Operation getGeolocSettingsWithHttpInfo
     *
     * 
     *
     * @param string $type Item type, available values are: category, subscription, product, video, extract, blogpage, slider, topmenu, homerail (required)
     * @param int $type_id Item ID (required)
     * @throws \Kinow\Client\ApiException on non-2xx response
     * @return array of \Kinow\Client\Model\GeolocSettings, HTTP status code, HTTP response headers (array of strings)
     */
    public function getGeolocSettingsWithHttpInfo($type, $type_id)
    {
        // verify the required parameter 'type' is set
        if ($type === null) {
            throw new \InvalidArgumentException('Missing the required parameter $type when calling getGeolocSettings');
        }
        // verify the required parameter 'type_id' is set
        if ($type_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $type_id when calling getGeolocSettings');
        }
        // parse inputs
        $resourcePath = "/geolocations/settings";
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
        if ($type_id !== null) {
            $queryParams['type_id'] = $this->apiClient->getSerializer()->toQueryValue($type_id);
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
                '\Kinow\Client\Model\GeolocSettings',
                '/geolocations/settings'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Kinow\Client\Model\GeolocSettings', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Kinow\Client\Model\GeolocSettings', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getIPLocation
     *
     * 
     *
     * @param string $ip_address address ip (required)
     * @throws \Kinow\Client\ApiException on non-2xx response
     * @return \Kinow\Client\Model\IPLocation
     */
    public function getIPLocation($ip_address)
    {
        list($response) = $this->getIPLocationWithHttpInfo($ip_address);
        return $response;
    }

    /**
     * Operation getIPLocationWithHttpInfo
     *
     * 
     *
     * @param string $ip_address address ip (required)
     * @throws \Kinow\Client\ApiException on non-2xx response
     * @return array of \Kinow\Client\Model\IPLocation, HTTP status code, HTTP response headers (array of strings)
     */
    public function getIPLocationWithHttpInfo($ip_address)
    {
        // verify the required parameter 'ip_address' is set
        if ($ip_address === null) {
            throw new \InvalidArgumentException('Missing the required parameter $ip_address when calling getIPLocation');
        }
        // parse inputs
        $resourcePath = "/geolocations/ip";
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
        if ($ip_address !== null) {
            $queryParams['ip_address'] = $this->apiClient->getSerializer()->toQueryValue($ip_address);
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
                '\Kinow\Client\Model\IPLocation',
                '/geolocations/ip'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Kinow\Client\Model\IPLocation', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Kinow\Client\Model\IPLocation', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getPlatformAccessInfo
     *
     * 
     *
     * @param string $ip_address IP address (required)
     * @throws \Kinow\Client\ApiException on non-2xx response
     * @return \Kinow\Client\Model\PlatformAccessInfo
     */
    public function getPlatformAccessInfo($ip_address)
    {
        list($response) = $this->getPlatformAccessInfoWithHttpInfo($ip_address);
        return $response;
    }

    /**
     * Operation getPlatformAccessInfoWithHttpInfo
     *
     * 
     *
     * @param string $ip_address IP address (required)
     * @throws \Kinow\Client\ApiException on non-2xx response
     * @return array of \Kinow\Client\Model\PlatformAccessInfo, HTTP status code, HTTP response headers (array of strings)
     */
    public function getPlatformAccessInfoWithHttpInfo($ip_address)
    {
        // verify the required parameter 'ip_address' is set
        if ($ip_address === null) {
            throw new \InvalidArgumentException('Missing the required parameter $ip_address when calling getPlatformAccessInfo');
        }
        // parse inputs
        $resourcePath = "/geolocations/platform-access";
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
        if ($ip_address !== null) {
            $queryParams['ip_address'] = $this->apiClient->getSerializer()->toQueryValue($ip_address);
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
                '\Kinow\Client\Model\PlatformAccessInfo',
                '/geolocations/platform-access'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Kinow\Client\Model\PlatformAccessInfo', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Kinow\Client\Model\PlatformAccessInfo', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getProductGeolocations
     *
     * 
     *
     * @param int $product_id Product ID to fetch (required)
     * @param int $page  (optional)
     * @param int $per_page  (optional)
     * @throws \Kinow\Client\ApiException on non-2xx response
     * @return \Kinow\Client\Model\Geolocs
     */
    public function getProductGeolocations($product_id, $page = null, $per_page = null)
    {
        list($response) = $this->getProductGeolocationsWithHttpInfo($product_id, $page, $per_page);
        return $response;
    }

    /**
     * Operation getProductGeolocationsWithHttpInfo
     *
     * 
     *
     * @param int $product_id Product ID to fetch (required)
     * @param int $page  (optional)
     * @param int $per_page  (optional)
     * @throws \Kinow\Client\ApiException on non-2xx response
     * @return array of \Kinow\Client\Model\Geolocs, HTTP status code, HTTP response headers (array of strings)
     */
    public function getProductGeolocationsWithHttpInfo($product_id, $page = null, $per_page = null)
    {
        // verify the required parameter 'product_id' is set
        if ($product_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $product_id when calling getProductGeolocations');
        }
        // parse inputs
        $resourcePath = "/products/{product_id}/geolocations";
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
                '\Kinow\Client\Model\Geolocs',
                '/products/{product_id}/geolocations'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Kinow\Client\Model\Geolocs', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Kinow\Client\Model\Geolocs', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getProductGeolocationsByIp
     *
     * 
     *
     * @param int $product_id Product ID to fetch (required)
     * @param string $ip_address address ip (required)
     * @param int $page  (optional)
     * @param int $per_page  (optional)
     * @throws \Kinow\Client\ApiException on non-2xx response
     * @return void
     */
    public function getProductGeolocationsByIp($product_id, $ip_address, $page = null, $per_page = null)
    {
        list($response) = $this->getProductGeolocationsByIpWithHttpInfo($product_id, $ip_address, $page, $per_page);
        return $response;
    }

    /**
     * Operation getProductGeolocationsByIpWithHttpInfo
     *
     * 
     *
     * @param int $product_id Product ID to fetch (required)
     * @param string $ip_address address ip (required)
     * @param int $page  (optional)
     * @param int $per_page  (optional)
     * @throws \Kinow\Client\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function getProductGeolocationsByIpWithHttpInfo($product_id, $ip_address, $page = null, $per_page = null)
    {
        // verify the required parameter 'product_id' is set
        if ($product_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $product_id when calling getProductGeolocationsByIp');
        }
        // verify the required parameter 'ip_address' is set
        if ($ip_address === null) {
            throw new \InvalidArgumentException('Missing the required parameter $ip_address when calling getProductGeolocationsByIp');
        }
        // parse inputs
        $resourcePath = "/products/{product_id}/geolocations";
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
        if ($product_id !== null) {
            $resourcePath = str_replace(
                "{" . "product_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($product_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // form params
        if ($ip_address !== null) {
            $formParams['ip_address'] = $this->apiClient->getSerializer()->toFormValue($ip_address);
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
                '/products/{product_id}/geolocations'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }

    /**
     * Operation getVideoGeolocationByIp
     *
     * 
     *
     * @param int $video_id Video ID to fetch (required)
     * @param string $ip_address IP address (required)
     * @param int $page  (optional)
     * @param int $per_page  (optional)
     * @throws \Kinow\Client\ApiException on non-2xx response
     * @return void
     */
    public function getVideoGeolocationByIp($video_id, $ip_address, $page = null, $per_page = null)
    {
        list($response) = $this->getVideoGeolocationByIpWithHttpInfo($video_id, $ip_address, $page, $per_page);
        return $response;
    }

    /**
     * Operation getVideoGeolocationByIpWithHttpInfo
     *
     * 
     *
     * @param int $video_id Video ID to fetch (required)
     * @param string $ip_address IP address (required)
     * @param int $page  (optional)
     * @param int $per_page  (optional)
     * @throws \Kinow\Client\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function getVideoGeolocationByIpWithHttpInfo($video_id, $ip_address, $page = null, $per_page = null)
    {
        // verify the required parameter 'video_id' is set
        if ($video_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $video_id when calling getVideoGeolocationByIp');
        }
        // verify the required parameter 'ip_address' is set
        if ($ip_address === null) {
            throw new \InvalidArgumentException('Missing the required parameter $ip_address when calling getVideoGeolocationByIp');
        }
        // parse inputs
        $resourcePath = "/videos/{video_id}/geolocations/{ip_address}";
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
        // path params
        if ($ip_address !== null) {
            $resourcePath = str_replace(
                "{" . "ip_address" . "}",
                $this->apiClient->getSerializer()->toPathValue($ip_address),
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
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/videos/{video_id}/geolocations/{ip_address}'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }

    /**
     * Operation setProductGeolocation
     *
     * 
     *
     * @param int $product_id Product ID to fetch (required)
     * @param int $enabled Enabled (required)
     * @param string $behavior_detected_countries Behavior for detected countries (required)
     * @param string $behavior_non_detected_countries Behavior for non-detected countries (required)
     * @param string $countries IDs of the non-detected countries separated by comma (optional)
     * @param int $page  (optional)
     * @param int $per_page  (optional)
     * @throws \Kinow\Client\ApiException on non-2xx response
     * @return void
     */
    public function setProductGeolocation($product_id, $enabled, $behavior_detected_countries, $behavior_non_detected_countries, $countries = null, $page = null, $per_page = null)
    {
        list($response) = $this->setProductGeolocationWithHttpInfo($product_id, $enabled, $behavior_detected_countries, $behavior_non_detected_countries, $countries, $page, $per_page);
        return $response;
    }

    /**
     * Operation setProductGeolocationWithHttpInfo
     *
     * 
     *
     * @param int $product_id Product ID to fetch (required)
     * @param int $enabled Enabled (required)
     * @param string $behavior_detected_countries Behavior for detected countries (required)
     * @param string $behavior_non_detected_countries Behavior for non-detected countries (required)
     * @param string $countries IDs of the non-detected countries separated by comma (optional)
     * @param int $page  (optional)
     * @param int $per_page  (optional)
     * @throws \Kinow\Client\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function setProductGeolocationWithHttpInfo($product_id, $enabled, $behavior_detected_countries, $behavior_non_detected_countries, $countries = null, $page = null, $per_page = null)
    {
        // verify the required parameter 'product_id' is set
        if ($product_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $product_id when calling setProductGeolocation');
        }
        // verify the required parameter 'enabled' is set
        if ($enabled === null) {
            throw new \InvalidArgumentException('Missing the required parameter $enabled when calling setProductGeolocation');
        }
        // verify the required parameter 'behavior_detected_countries' is set
        if ($behavior_detected_countries === null) {
            throw new \InvalidArgumentException('Missing the required parameter $behavior_detected_countries when calling setProductGeolocation');
        }
        // verify the required parameter 'behavior_non_detected_countries' is set
        if ($behavior_non_detected_countries === null) {
            throw new \InvalidArgumentException('Missing the required parameter $behavior_non_detected_countries when calling setProductGeolocation');
        }
        // parse inputs
        $resourcePath = "/products/{product_id}/geolocations";
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
        if ($product_id !== null) {
            $resourcePath = str_replace(
                "{" . "product_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($product_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // form params
        if ($countries !== null) {
            $formParams['countries'] = $this->apiClient->getSerializer()->toFormValue($countries);
        }
        // form params
        if ($enabled !== null) {
            $formParams['enabled'] = $this->apiClient->getSerializer()->toFormValue($enabled);
        }
        // form params
        if ($behavior_detected_countries !== null) {
            $formParams['behavior_detected_countries'] = $this->apiClient->getSerializer()->toFormValue($behavior_detected_countries);
        }
        // form params
        if ($behavior_non_detected_countries !== null) {
            $formParams['behavior_non_detected_countries'] = $this->apiClient->getSerializer()->toFormValue($behavior_non_detected_countries);
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
                '/products/{product_id}/geolocations'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }

    /**
     * Operation setVideoGeolocation
     *
     * 
     *
     * @param int $video_id Video ID to fetch (required)
     * @param int $enabled Enabled (required)
     * @param string $behavior_detected_countries Behavior for detected countries (required)
     * @param string $behavior_non_detected_countries Behavior for non-detected countries (required)
     * @param string $countries IDs of the non-detected countries separated by comma (optional)
     * @throws \Kinow\Client\ApiException on non-2xx response
     * @return void
     */
    public function setVideoGeolocation($video_id, $enabled, $behavior_detected_countries, $behavior_non_detected_countries, $countries = null)
    {
        list($response) = $this->setVideoGeolocationWithHttpInfo($video_id, $enabled, $behavior_detected_countries, $behavior_non_detected_countries, $countries);
        return $response;
    }

    /**
     * Operation setVideoGeolocationWithHttpInfo
     *
     * 
     *
     * @param int $video_id Video ID to fetch (required)
     * @param int $enabled Enabled (required)
     * @param string $behavior_detected_countries Behavior for detected countries (required)
     * @param string $behavior_non_detected_countries Behavior for non-detected countries (required)
     * @param string $countries IDs of the non-detected countries separated by comma (optional)
     * @throws \Kinow\Client\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function setVideoGeolocationWithHttpInfo($video_id, $enabled, $behavior_detected_countries, $behavior_non_detected_countries, $countries = null)
    {
        // verify the required parameter 'video_id' is set
        if ($video_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $video_id when calling setVideoGeolocation');
        }
        // verify the required parameter 'enabled' is set
        if ($enabled === null) {
            throw new \InvalidArgumentException('Missing the required parameter $enabled when calling setVideoGeolocation');
        }
        // verify the required parameter 'behavior_detected_countries' is set
        if ($behavior_detected_countries === null) {
            throw new \InvalidArgumentException('Missing the required parameter $behavior_detected_countries when calling setVideoGeolocation');
        }
        // verify the required parameter 'behavior_non_detected_countries' is set
        if ($behavior_non_detected_countries === null) {
            throw new \InvalidArgumentException('Missing the required parameter $behavior_non_detected_countries when calling setVideoGeolocation');
        }
        // parse inputs
        $resourcePath = "/videos/{video_id}/geolocations";
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
        if ($video_id !== null) {
            $resourcePath = str_replace(
                "{" . "video_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($video_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // form params
        if ($countries !== null) {
            $formParams['countries'] = $this->apiClient->getSerializer()->toFormValue($countries);
        }
        // form params
        if ($enabled !== null) {
            $formParams['enabled'] = $this->apiClient->getSerializer()->toFormValue($enabled);
        }
        // form params
        if ($behavior_detected_countries !== null) {
            $formParams['behavior_detected_countries'] = $this->apiClient->getSerializer()->toFormValue($behavior_detected_countries);
        }
        // form params
        if ($behavior_non_detected_countries !== null) {
            $formParams['behavior_non_detected_countries'] = $this->apiClient->getSerializer()->toFormValue($behavior_non_detected_countries);
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
                '/videos/{video_id}/geolocations'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }
}
