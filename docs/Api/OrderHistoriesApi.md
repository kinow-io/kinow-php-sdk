# OrderHistoriesApi

All URIs are relative to *https://api.kinow.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getOrderHistories**](#getOrderHistories) | **GET** /orders/{order_id}/histories | 


## **getOrderHistories**
> \Kinow\Client\Model\OrderHistoryListResponse getOrderHistories($order_id, $page, $per_page, $sort_by, $sort_direction)



Get order histories

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

$api_instance = new Kinow\Client\Api\OrderHistoriesApi();
$order_id = 789; // int | Order ID to fetch
$page = 789; // int | 
$per_page = 789; // int | 
$sort_by = "sort_by_example"; // string | Sort by this attribute (id by default)
$sort_direction = "sort_direction_example"; // string | Sorting direction (asc by default)

try {
    $result = $api_instance->getOrderHistories($order_id, $page, $per_page, $sort_by, $sort_direction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderHistoriesApi->getOrderHistories: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **int**| Order ID to fetch |
 **page** | **int**|  | [optional]
 **per_page** | **int**|  | [optional]
 **sort_by** | **string**| Sort by this attribute (id by default) | [optional]
 **sort_direction** | **string**| Sorting direction (asc by default) | [optional]

### Return type

[**\Kinow\Client\Model\OrderHistoryListResponse**](#OrderHistoryListResponse)

### Authorization

[ApiClientId](#ApiClientId), [ApiClientSecret](#ApiClientSecret)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

