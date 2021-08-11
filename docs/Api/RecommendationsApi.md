# RecommendationsApi

All URIs are relative to *https://api.kinow.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCustomerRecommendations**](#getCustomerRecommendations) | **GET** /customers/{customer_id}/recommendations | 


## **getCustomerRecommendations**
> \Kinow\Client\Model\Products getCustomerRecommendations($customer_id, $page, $per_page, $sort_by, $sort_direction, $ip, $iso_code)



Get customer recommendations

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

$api_instance = new Kinow\Client\Api\RecommendationsApi();
$customer_id = 789; // int | 
$page = 789; // int | 
$per_page = 789; // int | 
$sort_by = "sort_by_example"; // string | Sort by this attribute (id by default)
$sort_direction = "sort_direction_example"; // string | Sorting direction (asc by default)
$ip = "ip_example"; // string | Filter by Customer IP
$iso_code = "iso_code_example"; // string | Filter by ISO Code

try {
    $result = $api_instance->getCustomerRecommendations($customer_id, $page, $per_page, $sort_by, $sort_direction, $ip, $iso_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecommendationsApi->getCustomerRecommendations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **int**|  |
 **page** | **int**|  | [optional]
 **per_page** | **int**|  | [optional]
 **sort_by** | **string**| Sort by this attribute (id by default) | [optional]
 **sort_direction** | **string**| Sorting direction (asc by default) | [optional]
 **ip** | **string**| Filter by Customer IP | [optional]
 **iso_code** | **string**| Filter by ISO Code | [optional]

### Return type

[**\Kinow\Client\Model\Products**](#Products)

### Authorization

[ApiClientId](#ApiClientId), [ApiClientSecret](#ApiClientSecret)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

