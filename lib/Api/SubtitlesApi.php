<?php
/**
 * SubtitlesApi
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
 * OpenAPI spec version: 2.0.18
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
 * SubtitlesApi Class Doc Comment
 *
 * @category Class
 * @package  Kinow\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SubtitlesApi
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
     * @return SubtitlesApi
     */
    public function setApiClient(\Kinow\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation createExtractSubtitle
     *
     * 
     *
     * @param int $extract_id Extract ID to attach the created Subtitle (required)
     * @param \Kinow\Client\Model\CreateExtractSubtitleRequest $body Subtitle settings (required)
     * @throws \Kinow\Client\ApiException on non-2xx response
     * @return \Kinow\Client\Model\SubtitleResponse
     */
    public function createExtractSubtitle($extract_id, $body)
    {
        list($response) = $this->createExtractSubtitleWithHttpInfo($extract_id, $body);
        return $response;
    }

    /**
     * Operation createExtractSubtitleWithHttpInfo
     *
     * 
     *
     * @param int $extract_id Extract ID to attach the created Subtitle (required)
     * @param \Kinow\Client\Model\CreateExtractSubtitleRequest $body Subtitle settings (required)
     * @throws \Kinow\Client\ApiException on non-2xx response
     * @return array of \Kinow\Client\Model\SubtitleResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function createExtractSubtitleWithHttpInfo($extract_id, $body)
    {
        // verify the required parameter 'extract_id' is set
        if ($extract_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $extract_id when calling createExtractSubtitle');
        }
        // verify the required parameter 'body' is set
        if ($body === null) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling createExtractSubtitle');
        }
        // parse inputs
        $resourcePath = "/extracts/{extract_id}/subtitle";
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
        if ($extract_id !== null) {
            $resourcePath = str_replace(
                "{" . "extract_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($extract_id),
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
                '\Kinow\Client\Model\SubtitleResponse',
                '/extracts/{extract_id}/subtitle'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Kinow\Client\Model\SubtitleResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Kinow\Client\Model\SubtitleResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation createVideoSubtitle
     *
     * 
     *
     * @param int $video_id Video ID to attach the created Subtitle (required)
     * @param \Kinow\Client\Model\CreateVideoSubtitleRequest $body Subtitle settings (required)
     * @throws \Kinow\Client\ApiException on non-2xx response
     * @return \Kinow\Client\Model\SubtitleResponse
     */
    public function createVideoSubtitle($video_id, $body)
    {
        list($response) = $this->createVideoSubtitleWithHttpInfo($video_id, $body);
        return $response;
    }

    /**
     * Operation createVideoSubtitleWithHttpInfo
     *
     * 
     *
     * @param int $video_id Video ID to attach the created Subtitle (required)
     * @param \Kinow\Client\Model\CreateVideoSubtitleRequest $body Subtitle settings (required)
     * @throws \Kinow\Client\ApiException on non-2xx response
     * @return array of \Kinow\Client\Model\SubtitleResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function createVideoSubtitleWithHttpInfo($video_id, $body)
    {
        // verify the required parameter 'video_id' is set
        if ($video_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $video_id when calling createVideoSubtitle');
        }
        // verify the required parameter 'body' is set
        if ($body === null) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling createVideoSubtitle');
        }
        // parse inputs
        $resourcePath = "/videos/{video_id}/subtitle";
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
                '\Kinow\Client\Model\SubtitleResponse',
                '/videos/{video_id}/subtitle'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Kinow\Client\Model\SubtitleResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Kinow\Client\Model\SubtitleResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getCategoryVideoSubtitles
     *
     * 
     *
     * @param int $video_id Video ID to fetch (required)
     * @param int $page  (optional)
     * @param int $per_page  (optional)
     * @throws \Kinow\Client\ApiException on non-2xx response
     * @return \Kinow\Client\Model\SubtitleListResponse
     */
    public function getCategoryVideoSubtitles($video_id, $page = null, $per_page = null)
    {
        list($response) = $this->getCategoryVideoSubtitlesWithHttpInfo($video_id, $page, $per_page);
        return $response;
    }

    /**
     * Operation getCategoryVideoSubtitlesWithHttpInfo
     *
     * 
     *
     * @param int $video_id Video ID to fetch (required)
     * @param int $page  (optional)
     * @param int $per_page  (optional)
     * @throws \Kinow\Client\ApiException on non-2xx response
     * @return array of \Kinow\Client\Model\SubtitleListResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getCategoryVideoSubtitlesWithHttpInfo($video_id, $page = null, $per_page = null)
    {
        // verify the required parameter 'video_id' is set
        if ($video_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $video_id when calling getCategoryVideoSubtitles');
        }
        // parse inputs
        $resourcePath = "/categories/videos/{video_id}/subtitles";
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
                '\Kinow\Client\Model\SubtitleListResponse',
                '/categories/videos/{video_id}/subtitles'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Kinow\Client\Model\SubtitleListResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Kinow\Client\Model\SubtitleListResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getExtractSubtitles
     *
     * 
     *
     * @param int $extract_id Extract ID to fetch (required)
     * @param int $page  (optional)
     * @param int $per_page  (optional)
     * @throws \Kinow\Client\ApiException on non-2xx response
     * @return \Kinow\Client\Model\ExtractSubtitlesResponse
     */
    public function getExtractSubtitles($extract_id, $page = null, $per_page = null)
    {
        list($response) = $this->getExtractSubtitlesWithHttpInfo($extract_id, $page, $per_page);
        return $response;
    }

    /**
     * Operation getExtractSubtitlesWithHttpInfo
     *
     * 
     *
     * @param int $extract_id Extract ID to fetch (required)
     * @param int $page  (optional)
     * @param int $per_page  (optional)
     * @throws \Kinow\Client\ApiException on non-2xx response
     * @return array of \Kinow\Client\Model\ExtractSubtitlesResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getExtractSubtitlesWithHttpInfo($extract_id, $page = null, $per_page = null)
    {
        // verify the required parameter 'extract_id' is set
        if ($extract_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $extract_id when calling getExtractSubtitles');
        }
        // parse inputs
        $resourcePath = "/extracts/{extract_id}/subtitles";
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
        if ($extract_id !== null) {
            $resourcePath = str_replace(
                "{" . "extract_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($extract_id),
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
                '\Kinow\Client\Model\ExtractSubtitlesResponse',
                '/extracts/{extract_id}/subtitles'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Kinow\Client\Model\ExtractSubtitlesResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Kinow\Client\Model\ExtractSubtitlesResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getSubtitles
     *
     * 
     *
     * @param int $page  (optional)
     * @param int $per_page  (optional)
     * @throws \Kinow\Client\ApiException on non-2xx response
     * @return \Kinow\Client\Model\SubtitleListResponse
     */
    public function getSubtitles($page = null, $per_page = null)
    {
        list($response) = $this->getSubtitlesWithHttpInfo($page, $per_page);
        return $response;
    }

    /**
     * Operation getSubtitlesWithHttpInfo
     *
     * 
     *
     * @param int $page  (optional)
     * @param int $per_page  (optional)
     * @throws \Kinow\Client\ApiException on non-2xx response
     * @return array of \Kinow\Client\Model\SubtitleListResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getSubtitlesWithHttpInfo($page = null, $per_page = null)
    {
        // parse inputs
        $resourcePath = "/subtitles";
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
                '\Kinow\Client\Model\SubtitleListResponse',
                '/subtitles'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Kinow\Client\Model\SubtitleListResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Kinow\Client\Model\SubtitleListResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getVideoSubtitles
     *
     * 
     *
     * @param int $video_id Video ID to fetch (required)
     * @param int $page  (optional)
     * @param int $per_page  (optional)
     * @throws \Kinow\Client\ApiException on non-2xx response
     * @return \Kinow\Client\Model\ExtractSubtitlesResponse
     */
    public function getVideoSubtitles($video_id, $page = null, $per_page = null)
    {
        list($response) = $this->getVideoSubtitlesWithHttpInfo($video_id, $page, $per_page);
        return $response;
    }

    /**
     * Operation getVideoSubtitlesWithHttpInfo
     *
     * 
     *
     * @param int $video_id Video ID to fetch (required)
     * @param int $page  (optional)
     * @param int $per_page  (optional)
     * @throws \Kinow\Client\ApiException on non-2xx response
     * @return array of \Kinow\Client\Model\ExtractSubtitlesResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getVideoSubtitlesWithHttpInfo($video_id, $page = null, $per_page = null)
    {
        // verify the required parameter 'video_id' is set
        if ($video_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $video_id when calling getVideoSubtitles');
        }
        // parse inputs
        $resourcePath = "/videos/{video_id}/subtitles";
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
                '\Kinow\Client\Model\ExtractSubtitlesResponse',
                '/videos/{video_id}/subtitles'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Kinow\Client\Model\ExtractSubtitlesResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Kinow\Client\Model\ExtractSubtitlesResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
