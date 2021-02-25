<?php
/**
 * OAuthApi
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
 * Client API for Kinow Rest API
 *
 * OpenAPI spec version: 1.4.34
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
 * OAuthApi Class Doc Comment
 *
 * @category Class
 * @package  Kinow\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OAuthApi
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
     * @return OAuthApi
     */
    public function setApiClient(\Kinow\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation getToken
     *
     * 
     *
     * @param string $client_id Client Id given by your back office (required)
     * @param string $client_secret Client secret given by your back office (required)
     * @throws \Kinow\Client\ApiException on non-2xx response
     * @return \Kinow\Client\Model\OAuthToken
     */
    public function getToken($client_id, $client_secret)
    {
        list($response) = $this->getTokenWithHttpInfo($client_id, $client_secret);
        return $response;
    }

    /**
     * Operation getTokenWithHttpInfo
     *
     * 
     *
     * @param string $client_id Client Id given by your back office (required)
     * @param string $client_secret Client secret given by your back office (required)
     * @throws \Kinow\Client\ApiException on non-2xx response
     * @return array of \Kinow\Client\Model\OAuthToken, HTTP status code, HTTP response headers (array of strings)
     */
    public function getTokenWithHttpInfo($client_id, $client_secret)
    {
        // verify the required parameter 'client_id' is set
        if ($client_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $client_id when calling getToken');
        }
        // verify the required parameter 'client_secret' is set
        if ($client_secret === null) {
            throw new \InvalidArgumentException('Missing the required parameter $client_secret when calling getToken');
        }
        // parse inputs
        $resourcePath = "/get-token";
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

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // form params
        if ($client_id !== null) {
            $formParams['client_id'] = $this->apiClient->getSerializer()->toFormValue($client_id);
        }
        // form params
        if ($client_secret !== null) {
            $formParams['client_secret'] = $this->apiClient->getSerializer()->toFormValue($client_secret);
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
                '\Kinow\Client\Model\OAuthToken',
                '/get-token'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Kinow\Client\Model\OAuthToken', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Kinow\Client\Model\OAuthToken', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
