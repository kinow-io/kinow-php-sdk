<?php
/**
 * TasksApi
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
 * OpenAPI spec version: 2.0.28
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
 * TasksApi Class Doc Comment
 *
 * @category Class
 * @package  Kinow\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TasksApi
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
     * @return TasksApi
     */
    public function setApiClient(\Kinow\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation createTask
     *
     * 
     *
     * @param \Kinow\Client\Model\CreateTaskRequest $body Create task object (required)
     * @throws \Kinow\Client\ApiException on non-2xx response
     * @return \Kinow\Client\Model\TaskResponse
     */
    public function createTask($body)
    {
        list($response) = $this->createTaskWithHttpInfo($body);
        return $response;
    }

    /**
     * Operation createTaskWithHttpInfo
     *
     * 
     *
     * @param \Kinow\Client\Model\CreateTaskRequest $body Create task object (required)
     * @throws \Kinow\Client\ApiException on non-2xx response
     * @return array of \Kinow\Client\Model\TaskResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function createTaskWithHttpInfo($body)
    {
        // verify the required parameter 'body' is set
        if ($body === null) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling createTask');
        }
        // parse inputs
        $resourcePath = "/tasks";
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
                '\Kinow\Client\Model\TaskResponse',
                '/tasks'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Kinow\Client\Model\TaskResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Kinow\Client\Model\TaskResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
