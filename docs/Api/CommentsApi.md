# CommentsApi

All URIs are relative to *https://api.kinow.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createProductComment**](#createProductComment) | **POST** /products/{product_id}/comments | 
[**getCustomerComments**](#getCustomerComments) | **GET** /customers/{customer_id}/comments | 
[**getProductComments**](#getProductComments) | **GET** /products/{product_id}/comments | 


## **createProductComment**
> \Kinow\Client\Model\ProductCommentResponse createProductComment($product_id, $body)



Create product comment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiClientId
Kinow\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Client-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Kinow\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Client-Id', 'Bearer');
// Configure API key authorization: ApiClientSecret
Kinow\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Client-Secret', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Kinow\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Client-Secret', 'Bearer');

$api_instance = new Kinow\Client\Api\CommentsApi();
$product_id = 789; // int | Product ID to fetch
$body = new \Kinow\Client\Model\CreateCommentRequest(); // \Kinow\Client\Model\CreateCommentRequest | Create a comment

try {
    $result = $api_instance->createProductComment($product_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommentsApi->createProductComment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_id** | **int**| Product ID to fetch |
 **body** | [**\Kinow\Client\Model\CreateCommentRequest**](#\Kinow\Client\Model\CreateCommentRequest)| Create a comment |

### Return type

[**\Kinow\Client\Model\ProductCommentResponse**](#ProductCommentResponse)

### Authorization

[ApiClientId](#ApiClientId), [ApiClientSecret](#ApiClientSecret)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getCustomerComments**
> \Kinow\Client\Model\CustomerCommentListResponse getCustomerComments($customer_id)



Get customer comments

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiClientId
Kinow\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Client-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Kinow\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Client-Id', 'Bearer');
// Configure API key authorization: ApiClientSecret
Kinow\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Client-Secret', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Kinow\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Client-Secret', 'Bearer');

$api_instance = new Kinow\Client\Api\CommentsApi();
$customer_id = 789; // int | Customer ID to fetch

try {
    $result = $api_instance->getCustomerComments($customer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommentsApi->getCustomerComments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **int**| Customer ID to fetch |

### Return type

[**\Kinow\Client\Model\CustomerCommentListResponse**](#CustomerCommentListResponse)

### Authorization

[ApiClientId](#ApiClientId), [ApiClientSecret](#ApiClientSecret)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getProductComments**
> \Kinow\Client\Model\ProductCommentListResponse getProductComments($product_id)



Get product comments

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiClientId
Kinow\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Client-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Kinow\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Client-Id', 'Bearer');
// Configure API key authorization: ApiClientSecret
Kinow\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Client-Secret', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Kinow\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Client-Secret', 'Bearer');

$api_instance = new Kinow\Client\Api\CommentsApi();
$product_id = 789; // int | Product ID to fetch

try {
    $result = $api_instance->getProductComments($product_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommentsApi->getProductComments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_id** | **int**| Product ID to fetch |

### Return type

[**\Kinow\Client\Model\ProductCommentListResponse**](#ProductCommentListResponse)

### Authorization

[ApiClientId](#ApiClientId), [ApiClientSecret](#ApiClientSecret)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

