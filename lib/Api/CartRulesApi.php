<?php
/**
 * CartRulesApi
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
 * OpenAPI spec version: 1.4.21
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
 * CartRulesApi Class Doc Comment
 *
 * @category Class
 * @package  Kinow\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CartRulesApi
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
     * @return CartRulesApi
     */
    public function setApiClient(\Kinow\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation attachCartRuleToCart
     *
     * 
     *
     * @param int $cart_id Cart ID to fetch (required)
     * @param string $code Code of the cart rule to attach (required)
     * @throws \Kinow\Client\ApiException on non-2xx response
     * @return void
     */
    public function attachCartRuleToCart($cart_id, $code)
    {
        list($response) = $this->attachCartRuleToCartWithHttpInfo($cart_id, $code);
        return $response;
    }

    /**
     * Operation attachCartRuleToCartWithHttpInfo
     *
     * 
     *
     * @param int $cart_id Cart ID to fetch (required)
     * @param string $code Code of the cart rule to attach (required)
     * @throws \Kinow\Client\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function attachCartRuleToCartWithHttpInfo($cart_id, $code)
    {
        // verify the required parameter 'cart_id' is set
        if ($cart_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $cart_id when calling attachCartRuleToCart');
        }
        // verify the required parameter 'code' is set
        if ($code === null) {
            throw new \InvalidArgumentException('Missing the required parameter $code when calling attachCartRuleToCart');
        }
        // parse inputs
        $resourcePath = "/carts/{cart_id}/cart-rules";
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
        if ($cart_id !== null) {
            $resourcePath = str_replace(
                "{" . "cart_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($cart_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // form params
        if ($code !== null) {
            $formParams['code'] = $this->apiClient->getSerializer()->toFormValue($code);
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
                '/carts/{cart_id}/cart-rules'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }

    /**
     * Operation createCartRule
     *
     * 
     *
     * @param \Kinow\Client\Model\CartRule $body  (required)
     * @throws \Kinow\Client\ApiException on non-2xx response
     * @return void
     */
    public function createCartRule($body)
    {
        list($response) = $this->createCartRuleWithHttpInfo($body);
        return $response;
    }

    /**
     * Operation createCartRuleWithHttpInfo
     *
     * 
     *
     * @param \Kinow\Client\Model\CartRule $body  (required)
     * @throws \Kinow\Client\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function createCartRuleWithHttpInfo($body)
    {
        // verify the required parameter 'body' is set
        if ($body === null) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling createCartRule');
        }
        // parse inputs
        $resourcePath = "/cart-rules";
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
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/cart-rules'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }

    /**
     * Operation deleteCartRule
     *
     * 
     *
     * @param int $cart_rule_id  (required)
     * @throws \Kinow\Client\ApiException on non-2xx response
     * @return void
     */
    public function deleteCartRule($cart_rule_id)
    {
        list($response) = $this->deleteCartRuleWithHttpInfo($cart_rule_id);
        return $response;
    }

    /**
     * Operation deleteCartRuleWithHttpInfo
     *
     * 
     *
     * @param int $cart_rule_id  (required)
     * @throws \Kinow\Client\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteCartRuleWithHttpInfo($cart_rule_id)
    {
        // verify the required parameter 'cart_rule_id' is set
        if ($cart_rule_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $cart_rule_id when calling deleteCartRule');
        }
        // parse inputs
        $resourcePath = "/cart-rules/{cart_rule_id}";
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
        if ($cart_rule_id !== null) {
            $resourcePath = str_replace(
                "{" . "cart_rule_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($cart_rule_id),
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
                '/cart-rules/{cart_rule_id}'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }

    /**
     * Operation detachCartRuleFromCart
     *
     * 
     *
     * @param int $cart_id Cart ID to fetch (required)
     * @param int $cart_rule_id Cart rule ID to detach (required)
     * @throws \Kinow\Client\ApiException on non-2xx response
     * @return void
     */
    public function detachCartRuleFromCart($cart_id, $cart_rule_id)
    {
        list($response) = $this->detachCartRuleFromCartWithHttpInfo($cart_id, $cart_rule_id);
        return $response;
    }

    /**
     * Operation detachCartRuleFromCartWithHttpInfo
     *
     * 
     *
     * @param int $cart_id Cart ID to fetch (required)
     * @param int $cart_rule_id Cart rule ID to detach (required)
     * @throws \Kinow\Client\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function detachCartRuleFromCartWithHttpInfo($cart_id, $cart_rule_id)
    {
        // verify the required parameter 'cart_id' is set
        if ($cart_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $cart_id when calling detachCartRuleFromCart');
        }
        // verify the required parameter 'cart_rule_id' is set
        if ($cart_rule_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $cart_rule_id when calling detachCartRuleFromCart');
        }
        // parse inputs
        $resourcePath = "/carts/{cart_id}/cart-rules/{cart_rule_id}";
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
        if ($cart_id !== null) {
            $resourcePath = str_replace(
                "{" . "cart_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($cart_id),
                $resourcePath
            );
        }
        // path params
        if ($cart_rule_id !== null) {
            $resourcePath = str_replace(
                "{" . "cart_rule_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($cart_rule_id),
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
                '/carts/{cart_id}/cart-rules/{cart_rule_id}'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }

    /**
     * Operation getCartRule
     *
     * 
     *
     * @param int $cart_rule_id Cart rule ID to fetch (required)
     * @throws \Kinow\Client\ApiException on non-2xx response
     * @return \Kinow\Client\Model\CartRule
     */
    public function getCartRule($cart_rule_id)
    {
        list($response) = $this->getCartRuleWithHttpInfo($cart_rule_id);
        return $response;
    }

    /**
     * Operation getCartRuleWithHttpInfo
     *
     * 
     *
     * @param int $cart_rule_id Cart rule ID to fetch (required)
     * @throws \Kinow\Client\ApiException on non-2xx response
     * @return array of \Kinow\Client\Model\CartRule, HTTP status code, HTTP response headers (array of strings)
     */
    public function getCartRuleWithHttpInfo($cart_rule_id)
    {
        // verify the required parameter 'cart_rule_id' is set
        if ($cart_rule_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $cart_rule_id when calling getCartRule');
        }
        // parse inputs
        $resourcePath = "/cart-rules/{cart_rule_id}";
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
        if ($cart_rule_id !== null) {
            $resourcePath = str_replace(
                "{" . "cart_rule_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($cart_rule_id),
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
                '\Kinow\Client\Model\CartRule',
                '/cart-rules/{cart_rule_id}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Kinow\Client\Model\CartRule', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Kinow\Client\Model\CartRule', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getCartRules
     *
     * 
     *
     * @param int $page  (optional)
     * @param int $per_page  (optional)
     * @param string $filters &#x60;&#x60;&#x60;     type[value]&#x3D;string&amp;type[operator]&#x3D;strict&amp;cancel[value]&#x3D;string&amp;cancel[operator]&#x3D;contains     _______________      {     \&quot;type\&quot;: {     \&quot;value\&quot;: \&quot;string\&quot;,     \&quot;operator\&quot;: \&quot;strict\&quot;     },     \&quot;cancel\&quot;: {     \&quot;value\&quot;: \&quot;string\&quot;,     \&quot;operator\&quot;: \&quot;contains\&quot;     }     } &#x60;&#x60;&#x60;Operator can be: strict, contains, between, in, gt (greater than), lt (lower than). (optional)
     * @throws \Kinow\Client\ApiException on non-2xx response
     * @return \Kinow\Client\Model\CartRules
     */
    public function getCartRules($page = null, $per_page = null, $filters = null)
    {
        list($response) = $this->getCartRulesWithHttpInfo($page, $per_page, $filters);
        return $response;
    }

    /**
     * Operation getCartRulesWithHttpInfo
     *
     * 
     *
     * @param int $page  (optional)
     * @param int $per_page  (optional)
     * @param string $filters &#x60;&#x60;&#x60;     type[value]&#x3D;string&amp;type[operator]&#x3D;strict&amp;cancel[value]&#x3D;string&amp;cancel[operator]&#x3D;contains     _______________      {     \&quot;type\&quot;: {     \&quot;value\&quot;: \&quot;string\&quot;,     \&quot;operator\&quot;: \&quot;strict\&quot;     },     \&quot;cancel\&quot;: {     \&quot;value\&quot;: \&quot;string\&quot;,     \&quot;operator\&quot;: \&quot;contains\&quot;     }     } &#x60;&#x60;&#x60;Operator can be: strict, contains, between, in, gt (greater than), lt (lower than). (optional)
     * @throws \Kinow\Client\ApiException on non-2xx response
     * @return array of \Kinow\Client\Model\CartRules, HTTP status code, HTTP response headers (array of strings)
     */
    public function getCartRulesWithHttpInfo($page = null, $per_page = null, $filters = null)
    {
        // parse inputs
        $resourcePath = "/cart-rules";
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
        if ($filters !== null) {
            $queryParams['filters'] = $this->apiClient->getSerializer()->toQueryValue($filters);
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
                '\Kinow\Client\Model\CartRules',
                '/cart-rules'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Kinow\Client\Model\CartRules', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Kinow\Client\Model\CartRules', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation updateCartRule
     *
     * 
     *
     * @param int $cart_rule_id  (required)
     * @param \Kinow\Client\Model\CartRule $body  (required)
     * @throws \Kinow\Client\ApiException on non-2xx response
     * @return void
     */
    public function updateCartRule($cart_rule_id, $body)
    {
        list($response) = $this->updateCartRuleWithHttpInfo($cart_rule_id, $body);
        return $response;
    }

    /**
     * Operation updateCartRuleWithHttpInfo
     *
     * 
     *
     * @param int $cart_rule_id  (required)
     * @param \Kinow\Client\Model\CartRule $body  (required)
     * @throws \Kinow\Client\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateCartRuleWithHttpInfo($cart_rule_id, $body)
    {
        // verify the required parameter 'cart_rule_id' is set
        if ($cart_rule_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $cart_rule_id when calling updateCartRule');
        }
        // verify the required parameter 'body' is set
        if ($body === null) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling updateCartRule');
        }
        // parse inputs
        $resourcePath = "/cart-rules/{cart_rule_id}";
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
        if ($cart_rule_id !== null) {
            $resourcePath = str_replace(
                "{" . "cart_rule_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($cart_rule_id),
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
                null,
                '/cart-rules/{cart_rule_id}'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }
}
