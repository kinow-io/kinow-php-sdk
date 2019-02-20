# FacebookApi

All URIs are relative to *https://api.kinow.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createFacebookId**](#createFacebookId) | **POST** /facebook/customers | 
[**getFacebookCustomer**](#getFacebookCustomer) | **GET** /facebook/customers/{facebook_id} | 


## **createFacebookId**
> createFacebookId($customer_id, $facebook_id)



Create new Facebook ID for user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\FacebookApi();
$customer_id = 789; // int | Customer ID
$facebook_id = "facebook_id_example"; // string | Facebook ID

try {
    $api_instance->createFacebookId($customer_id, $facebook_id);
} catch (Exception $e) {
    echo 'Exception when calling FacebookApi->createFacebookId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **int**| Customer ID |
 **facebook_id** | **string**| Facebook ID |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getFacebookCustomer**
> \Kaemo\Client\Model\CustomerId getFacebookCustomer($facebook_id)



Get customer ID by Facebook ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\FacebookApi();
$facebook_id = 789; // int | Facebook ID to fetch

try {
    $result = $api_instance->getFacebookCustomer($facebook_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FacebookApi->getFacebookCustomer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **facebook_id** | **int**| Facebook ID to fetch |

### Return type

[**\Kaemo\Client\Model\CustomerId**](#CustomerId)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

