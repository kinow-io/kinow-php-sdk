<?php
/**
 * SupportApi
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
 * SupportApi Class Doc Comment
 *
 * @category Class
 * @package  Kinow\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SupportApi
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
     * @return SupportApi
     */
    public function setApiClient(\Kinow\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation createMessage
     *
     * 
     *
     * @param int $id_lang Language ID used by user to write his message (required)
     * @param string $email User email in order to send him a response (required)
     * @param int $id_contact Contact ID to send the user message (required)
     * @param string $message User message (required)
     * @param int $id_support Link the message to a previous message (optional)
     * @param int $id_product Link the message to a product in catalog (optional)
     * @param int $id_order Link the message to an existing order (optional)
     * @param bool $send_mail Send confirmation email to the providen email (optional)
     * @throws \Kinow\Client\ApiException on non-2xx response
     * @return \Kinow\Client\Model\Support
     */
    public function createMessage($id_lang, $email, $id_contact, $message, $id_support = null, $id_product = null, $id_order = null, $send_mail = null)
    {
        list($response) = $this->createMessageWithHttpInfo($id_lang, $email, $id_contact, $message, $id_support, $id_product, $id_order, $send_mail);
        return $response;
    }

    /**
     * Operation createMessageWithHttpInfo
     *
     * 
     *
     * @param int $id_lang Language ID used by user to write his message (required)
     * @param string $email User email in order to send him a response (required)
     * @param int $id_contact Contact ID to send the user message (required)
     * @param string $message User message (required)
     * @param int $id_support Link the message to a previous message (optional)
     * @param int $id_product Link the message to a product in catalog (optional)
     * @param int $id_order Link the message to an existing order (optional)
     * @param bool $send_mail Send confirmation email to the providen email (optional)
     * @throws \Kinow\Client\ApiException on non-2xx response
     * @return array of \Kinow\Client\Model\Support, HTTP status code, HTTP response headers (array of strings)
     */
    public function createMessageWithHttpInfo($id_lang, $email, $id_contact, $message, $id_support = null, $id_product = null, $id_order = null, $send_mail = null)
    {
        // verify the required parameter 'id_lang' is set
        if ($id_lang === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id_lang when calling createMessage');
        }
        // verify the required parameter 'email' is set
        if ($email === null) {
            throw new \InvalidArgumentException('Missing the required parameter $email when calling createMessage');
        }
        // verify the required parameter 'id_contact' is set
        if ($id_contact === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id_contact when calling createMessage');
        }
        // verify the required parameter 'message' is set
        if ($message === null) {
            throw new \InvalidArgumentException('Missing the required parameter $message when calling createMessage');
        }
        // parse inputs
        $resourcePath = "/support";
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
        if ($id_lang !== null) {
            $formParams['id_lang'] = $this->apiClient->getSerializer()->toFormValue($id_lang);
        }
        // form params
        if ($id_support !== null) {
            $formParams['id_support'] = $this->apiClient->getSerializer()->toFormValue($id_support);
        }
        // form params
        if ($email !== null) {
            $formParams['email'] = $this->apiClient->getSerializer()->toFormValue($email);
        }
        // form params
        if ($id_contact !== null) {
            $formParams['id_contact'] = $this->apiClient->getSerializer()->toFormValue($id_contact);
        }
        // form params
        if ($message !== null) {
            $formParams['message'] = $this->apiClient->getSerializer()->toFormValue($message);
        }
        // form params
        if ($id_product !== null) {
            $formParams['id_product'] = $this->apiClient->getSerializer()->toFormValue($id_product);
        }
        // form params
        if ($id_order !== null) {
            $formParams['id_order'] = $this->apiClient->getSerializer()->toFormValue($id_order);
        }
        // form params
        if ($send_mail !== null) {
            $formParams['send_mail'] = $this->apiClient->getSerializer()->toFormValue($send_mail);
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
                '\Kinow\Client\Model\Support',
                '/support'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Kinow\Client\Model\Support', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Kinow\Client\Model\Support', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getContacts
     *
     * 
     *
     * @param int $page  (optional)
     * @param int $per_page  (optional)
     * @param string $sort_by Sort by this attribute (id by default) (optional)
     * @param string $sort_direction Sorting direction (asc by default) (optional)
     * @throws \Kinow\Client\ApiException on non-2xx response
     * @return \Kinow\Client\Model\Contacts
     */
    public function getContacts($page = null, $per_page = null, $sort_by = null, $sort_direction = null)
    {
        list($response) = $this->getContactsWithHttpInfo($page, $per_page, $sort_by, $sort_direction);
        return $response;
    }

    /**
     * Operation getContactsWithHttpInfo
     *
     * 
     *
     * @param int $page  (optional)
     * @param int $per_page  (optional)
     * @param string $sort_by Sort by this attribute (id by default) (optional)
     * @param string $sort_direction Sorting direction (asc by default) (optional)
     * @throws \Kinow\Client\ApiException on non-2xx response
     * @return array of \Kinow\Client\Model\Contacts, HTTP status code, HTTP response headers (array of strings)
     */
    public function getContactsWithHttpInfo($page = null, $per_page = null, $sort_by = null, $sort_direction = null)
    {
        // parse inputs
        $resourcePath = "/support/contacts";
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
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Kinow\Client\Model\Contacts',
                '/support/contacts'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Kinow\Client\Model\Contacts', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Kinow\Client\Model\Contacts', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
