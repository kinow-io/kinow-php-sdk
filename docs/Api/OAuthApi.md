# OAuthApi

All URIs are relative to *https://api.kinow.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getToken**](#getToken) | **POST** /get-token | 


## **getToken**
> \Kaemo\Client\Model\OAuthToken getToken($client_id, $client_secret)



Get authentication token

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\OAuthApi();
$client_id = "client_id_example"; // string | Client Id given by your back office
$client_secret = "client_secret_example"; // string | Client secret given by your back office

try {
    $result = $api_instance->getToken($client_id, $client_secret);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OAuthApi->getToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **string**| Client Id given by your back office |
 **client_secret** | **string**| Client secret given by your back office |

### Return type

[**\Kaemo\Client\Model\OAuthToken**](#OAuthToken)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

