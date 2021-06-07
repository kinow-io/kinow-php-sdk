<?php
/**
 * PlaylistsApi
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
 * OpenAPI spec version: 1.4.41
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
 * PlaylistsApi Class Doc Comment
 *
 * @category Class
 * @package  Kinow\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PlaylistsApi
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
     * @return PlaylistsApi
     */
    public function setApiClient(\Kinow\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation attachBookmarkToPlaylist
     *
     * 
     *
     * @param int $playlist_id Playlist ID to fetch (required)
     * @param int $product_id  (required)
     * @throws \Kinow\Client\ApiException on non-2xx response
     * @return void
     */
    public function attachBookmarkToPlaylist($playlist_id, $product_id)
    {
        list($response) = $this->attachBookmarkToPlaylistWithHttpInfo($playlist_id, $product_id);
        return $response;
    }

    /**
     * Operation attachBookmarkToPlaylistWithHttpInfo
     *
     * 
     *
     * @param int $playlist_id Playlist ID to fetch (required)
     * @param int $product_id  (required)
     * @throws \Kinow\Client\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function attachBookmarkToPlaylistWithHttpInfo($playlist_id, $product_id)
    {
        // verify the required parameter 'playlist_id' is set
        if ($playlist_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $playlist_id when calling attachBookmarkToPlaylist');
        }
        // verify the required parameter 'product_id' is set
        if ($product_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $product_id when calling attachBookmarkToPlaylist');
        }
        // parse inputs
        $resourcePath = "/playlists/{playlist_id}/bookmarks";
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
        if ($playlist_id !== null) {
            $resourcePath = str_replace(
                "{" . "playlist_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($playlist_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // form params
        if ($product_id !== null) {
            $formParams['product_id'] = $this->apiClient->getSerializer()->toFormValue($product_id);
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
                '/playlists/{playlist_id}/bookmarks'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }

    /**
     * Operation createPlaylist
     *
     * 
     *
     * @param int $customer_id  (required)
     * @param string $name  (required)
     * @throws \Kinow\Client\ApiException on non-2xx response
     * @return \Kinow\Client\Model\Playlist
     */
    public function createPlaylist($customer_id, $name)
    {
        list($response) = $this->createPlaylistWithHttpInfo($customer_id, $name);
        return $response;
    }

    /**
     * Operation createPlaylistWithHttpInfo
     *
     * 
     *
     * @param int $customer_id  (required)
     * @param string $name  (required)
     * @throws \Kinow\Client\ApiException on non-2xx response
     * @return array of \Kinow\Client\Model\Playlist, HTTP status code, HTTP response headers (array of strings)
     */
    public function createPlaylistWithHttpInfo($customer_id, $name)
    {
        // verify the required parameter 'customer_id' is set
        if ($customer_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $customer_id when calling createPlaylist');
        }
        // verify the required parameter 'name' is set
        if ($name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling createPlaylist');
        }
        // parse inputs
        $resourcePath = "/playlists";
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
        if ($customer_id !== null) {
            $formParams['customer_id'] = $this->apiClient->getSerializer()->toFormValue($customer_id);
        }
        // form params
        if ($name !== null) {
            $formParams['name'] = $this->apiClient->getSerializer()->toFormValue($name);
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
                '\Kinow\Client\Model\Playlist',
                '/playlists'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Kinow\Client\Model\Playlist', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Kinow\Client\Model\Playlist', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation deletePlaylist
     *
     * 
     *
     * @param int $playlist_id  (required)
     * @throws \Kinow\Client\ApiException on non-2xx response
     * @return void
     */
    public function deletePlaylist($playlist_id)
    {
        list($response) = $this->deletePlaylistWithHttpInfo($playlist_id);
        return $response;
    }

    /**
     * Operation deletePlaylistWithHttpInfo
     *
     * 
     *
     * @param int $playlist_id  (required)
     * @throws \Kinow\Client\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function deletePlaylistWithHttpInfo($playlist_id)
    {
        // verify the required parameter 'playlist_id' is set
        if ($playlist_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $playlist_id when calling deletePlaylist');
        }
        // parse inputs
        $resourcePath = "/playlists/{playlist_id}";
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
        if ($playlist_id !== null) {
            $resourcePath = str_replace(
                "{" . "playlist_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($playlist_id),
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
                '/playlists/{playlist_id}'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }

    /**
     * Operation detachBookmarkFromPlaylist
     *
     * 
     *
     * @param int $playlist_id Playlist ID to fetch (required)
     * @param int $product_id  (required)
     * @throws \Kinow\Client\ApiException on non-2xx response
     * @return void
     */
    public function detachBookmarkFromPlaylist($playlist_id, $product_id)
    {
        list($response) = $this->detachBookmarkFromPlaylistWithHttpInfo($playlist_id, $product_id);
        return $response;
    }

    /**
     * Operation detachBookmarkFromPlaylistWithHttpInfo
     *
     * 
     *
     * @param int $playlist_id Playlist ID to fetch (required)
     * @param int $product_id  (required)
     * @throws \Kinow\Client\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function detachBookmarkFromPlaylistWithHttpInfo($playlist_id, $product_id)
    {
        // verify the required parameter 'playlist_id' is set
        if ($playlist_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $playlist_id when calling detachBookmarkFromPlaylist');
        }
        // verify the required parameter 'product_id' is set
        if ($product_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $product_id when calling detachBookmarkFromPlaylist');
        }
        // parse inputs
        $resourcePath = "/playlists/{playlist_id}/bookmarks/{product_id}";
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
        if ($playlist_id !== null) {
            $resourcePath = str_replace(
                "{" . "playlist_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($playlist_id),
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
                '/playlists/{playlist_id}/bookmarks/{product_id}'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }

    /**
     * Operation getCustomerPlaylists
     *
     * 
     *
     * @param int $customer_id  (required)
     * @param int $page  (optional)
     * @param int $per_page  (optional)
     * @param string $sort_by Sort by this attribute (id by default) (optional)
     * @param string $sort_direction Sorting direction (asc by default) (optional)
     * @throws \Kinow\Client\ApiException on non-2xx response
     * @return \Kinow\Client\Model\Playlists
     */
    public function getCustomerPlaylists($customer_id, $page = null, $per_page = null, $sort_by = null, $sort_direction = null)
    {
        list($response) = $this->getCustomerPlaylistsWithHttpInfo($customer_id, $page, $per_page, $sort_by, $sort_direction);
        return $response;
    }

    /**
     * Operation getCustomerPlaylistsWithHttpInfo
     *
     * 
     *
     * @param int $customer_id  (required)
     * @param int $page  (optional)
     * @param int $per_page  (optional)
     * @param string $sort_by Sort by this attribute (id by default) (optional)
     * @param string $sort_direction Sorting direction (asc by default) (optional)
     * @throws \Kinow\Client\ApiException on non-2xx response
     * @return array of \Kinow\Client\Model\Playlists, HTTP status code, HTTP response headers (array of strings)
     */
    public function getCustomerPlaylistsWithHttpInfo($customer_id, $page = null, $per_page = null, $sort_by = null, $sort_direction = null)
    {
        // verify the required parameter 'customer_id' is set
        if ($customer_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $customer_id when calling getCustomerPlaylists');
        }
        // parse inputs
        $resourcePath = "/customers/{customer_id}/playlists";
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
                '\Kinow\Client\Model\Playlists',
                '/customers/{customer_id}/playlists'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Kinow\Client\Model\Playlists', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Kinow\Client\Model\Playlists', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getPlaylist
     *
     * 
     *
     * @param int $playlist_id Playlist ID to fetch (required)
     * @throws \Kinow\Client\ApiException on non-2xx response
     * @return \Kinow\Client\Model\Playlist
     */
    public function getPlaylist($playlist_id)
    {
        list($response) = $this->getPlaylistWithHttpInfo($playlist_id);
        return $response;
    }

    /**
     * Operation getPlaylistWithHttpInfo
     *
     * 
     *
     * @param int $playlist_id Playlist ID to fetch (required)
     * @throws \Kinow\Client\ApiException on non-2xx response
     * @return array of \Kinow\Client\Model\Playlist, HTTP status code, HTTP response headers (array of strings)
     */
    public function getPlaylistWithHttpInfo($playlist_id)
    {
        // verify the required parameter 'playlist_id' is set
        if ($playlist_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $playlist_id when calling getPlaylist');
        }
        // parse inputs
        $resourcePath = "/playlists/{playlist_id}";
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
        if ($playlist_id !== null) {
            $resourcePath = str_replace(
                "{" . "playlist_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($playlist_id),
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
                '\Kinow\Client\Model\Playlist',
                '/playlists/{playlist_id}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Kinow\Client\Model\Playlist', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Kinow\Client\Model\Playlist', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getPlaylistBookmarks
     *
     * 
     *
     * @param int $playlist_id  (required)
     * @param int $page  (optional)
     * @param int $per_page  (optional)
     * @param string $sort_by Sort by this attribute (id by default) (optional)
     * @param string $sort_direction Sorting direction (asc by default) (optional)
     * @throws \Kinow\Client\ApiException on non-2xx response
     * @return \Kinow\Client\Model\Products
     */
    public function getPlaylistBookmarks($playlist_id, $page = null, $per_page = null, $sort_by = null, $sort_direction = null)
    {
        list($response) = $this->getPlaylistBookmarksWithHttpInfo($playlist_id, $page, $per_page, $sort_by, $sort_direction);
        return $response;
    }

    /**
     * Operation getPlaylistBookmarksWithHttpInfo
     *
     * 
     *
     * @param int $playlist_id  (required)
     * @param int $page  (optional)
     * @param int $per_page  (optional)
     * @param string $sort_by Sort by this attribute (id by default) (optional)
     * @param string $sort_direction Sorting direction (asc by default) (optional)
     * @throws \Kinow\Client\ApiException on non-2xx response
     * @return array of \Kinow\Client\Model\Products, HTTP status code, HTTP response headers (array of strings)
     */
    public function getPlaylistBookmarksWithHttpInfo($playlist_id, $page = null, $per_page = null, $sort_by = null, $sort_direction = null)
    {
        // verify the required parameter 'playlist_id' is set
        if ($playlist_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $playlist_id when calling getPlaylistBookmarks');
        }
        // parse inputs
        $resourcePath = "/playlists/{playlist_id}/bookmarks";
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
        if ($playlist_id !== null) {
            $resourcePath = str_replace(
                "{" . "playlist_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($playlist_id),
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
                '\Kinow\Client\Model\Products',
                '/playlists/{playlist_id}/bookmarks'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Kinow\Client\Model\Products', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Kinow\Client\Model\Products', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getPlaylists
     *
     * 
     *
     * @param int $page  (optional)
     * @param int $per_page  (optional)
     * @param string $sort_by Sort by this attribute (id by default) (optional)
     * @param string $sort_direction Sorting direction (asc by default) (optional)
     * @throws \Kinow\Client\ApiException on non-2xx response
     * @return \Kinow\Client\Model\Playlists
     */
    public function getPlaylists($page = null, $per_page = null, $sort_by = null, $sort_direction = null)
    {
        list($response) = $this->getPlaylistsWithHttpInfo($page, $per_page, $sort_by, $sort_direction);
        return $response;
    }

    /**
     * Operation getPlaylistsWithHttpInfo
     *
     * 
     *
     * @param int $page  (optional)
     * @param int $per_page  (optional)
     * @param string $sort_by Sort by this attribute (id by default) (optional)
     * @param string $sort_direction Sorting direction (asc by default) (optional)
     * @throws \Kinow\Client\ApiException on non-2xx response
     * @return array of \Kinow\Client\Model\Playlists, HTTP status code, HTTP response headers (array of strings)
     */
    public function getPlaylistsWithHttpInfo($page = null, $per_page = null, $sort_by = null, $sort_direction = null)
    {
        // parse inputs
        $resourcePath = "/playlists";
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
                '\Kinow\Client\Model\Playlists',
                '/playlists'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Kinow\Client\Model\Playlists', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Kinow\Client\Model\Playlists', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation updatePlaylist
     *
     * 
     *
     * @param int $playlist_id Playlist ID to update (required)
     * @param \Kinow\Client\Model\PlaylistUpdate $body Playlist settings (required)
     * @throws \Kinow\Client\ApiException on non-2xx response
     * @return \Kinow\Client\Model\Playlist
     */
    public function updatePlaylist($playlist_id, $body)
    {
        list($response) = $this->updatePlaylistWithHttpInfo($playlist_id, $body);
        return $response;
    }

    /**
     * Operation updatePlaylistWithHttpInfo
     *
     * 
     *
     * @param int $playlist_id Playlist ID to update (required)
     * @param \Kinow\Client\Model\PlaylistUpdate $body Playlist settings (required)
     * @throws \Kinow\Client\ApiException on non-2xx response
     * @return array of \Kinow\Client\Model\Playlist, HTTP status code, HTTP response headers (array of strings)
     */
    public function updatePlaylistWithHttpInfo($playlist_id, $body)
    {
        // verify the required parameter 'playlist_id' is set
        if ($playlist_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $playlist_id when calling updatePlaylist');
        }
        // verify the required parameter 'body' is set
        if ($body === null) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling updatePlaylist');
        }
        // parse inputs
        $resourcePath = "/playlists/{playlist_id}";
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
        if ($playlist_id !== null) {
            $resourcePath = str_replace(
                "{" . "playlist_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($playlist_id),
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
                'PUT',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Kinow\Client\Model\Playlist',
                '/playlists/{playlist_id}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Kinow\Client\Model\Playlist', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Kinow\Client\Model\Playlist', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
