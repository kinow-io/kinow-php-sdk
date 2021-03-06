# StatsApi

All URIs are relative to *https://api.kinow.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCustomerGroupTotalWatched**](#getCustomerGroupTotalWatched) | **GET** /video-stats/customer-group | 
[**getCustomerSessions**](#getCustomerSessions) | **GET** /video-stats/sessions | 
[**getCustomerSessionsMultiple**](#getCustomerSessionsMultiple) | **POST** /video-stats/{customer_id}/sessions | 
[**getCustomerVideoStats**](#getCustomerVideoStats) | **GET** /video-stats/customers | 
[**getVideoStats**](#getVideoStats) | **GET** /video-stats/videos | 


## **getCustomerGroupTotalWatched**
> \Kinow\Client\Model\CustomerGroupVideoStats1 getCustomerGroupTotalWatched($group_id, $date_from, $date_to, $page, $per_page)



Get video statistics for a given customer group

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

$api_instance = new Kinow\Client\Api\StatsApi();
$group_id = 789; // int | Customer group ID to fecth
$date_from = "date_from_example"; // string | Search entries from this date
$date_to = "date_to_example"; // string | Search entries to this date
$page = 789; // int | 
$per_page = 789; // int | 

try {
    $result = $api_instance->getCustomerGroupTotalWatched($group_id, $date_from, $date_to, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatsApi->getCustomerGroupTotalWatched: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | **int**| Customer group ID to fecth |
 **date_from** | **string**| Search entries from this date | [optional]
 **date_to** | **string**| Search entries to this date | [optional]
 **page** | **int**|  | [optional]
 **per_page** | **int**|  | [optional]

### Return type

[**\Kinow\Client\Model\CustomerGroupVideoStats1**](#CustomerGroupVideoStats1)

### Authorization

[ApiClientId](#ApiClientId), [ApiClientSecret](#ApiClientSecret)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getCustomerSessions**
> \Kinow\Client\Model\SessionVideoStats getCustomerSessions($customer_id, $group_id, $video_id, $date_from, $date_to, $page, $per_page)



Get Customer video sessions statistics

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

$api_instance = new Kinow\Client\Api\StatsApi();
$customer_id = 789; // int | Customer ID to fetch
$group_id = 789; // int | Group ID to fetch
$video_id = 789; // int | Video ID to fetch
$date_from = "date_from_example"; // string | Search entries from this date
$date_to = "date_to_example"; // string | Search entries to this date
$page = 789; // int | 
$per_page = 789; // int | 

try {
    $result = $api_instance->getCustomerSessions($customer_id, $group_id, $video_id, $date_from, $date_to, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatsApi->getCustomerSessions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **int**| Customer ID to fetch | [optional]
 **group_id** | **int**| Group ID to fetch | [optional]
 **video_id** | **int**| Video ID to fetch | [optional]
 **date_from** | **string**| Search entries from this date | [optional]
 **date_to** | **string**| Search entries to this date | [optional]
 **page** | **int**|  | [optional]
 **per_page** | **int**|  | [optional]

### Return type

[**\Kinow\Client\Model\SessionVideoStats**](#SessionVideoStats)

### Authorization

[ApiClientId](#ApiClientId), [ApiClientSecret](#ApiClientSecret)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getCustomerSessionsMultiple**
> \Kinow\Client\Model\SessionVideoStat[] getCustomerSessionsMultiple($customer_id, $body)



Get Customer sessions statistics for multiple videos

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

$api_instance = new Kinow\Client\Api\StatsApi();
$customer_id = 789; // int | Customer ID to fetch
$body = new \Kinow\Client\Model\VideoIDList1(); // \Kinow\Client\Model\VideoIDList1 | List of Video IDs separated by comma, eg. '42,21,84'

try {
    $result = $api_instance->getCustomerSessionsMultiple($customer_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatsApi->getCustomerSessionsMultiple: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **int**| Customer ID to fetch |
 **body** | [**\Kinow\Client\Model\VideoIDList1**](#\Kinow\Client\Model\VideoIDList1)| List of Video IDs separated by comma, eg. &#39;42,21,84&#39; |

### Return type

[**\Kinow\Client\Model\SessionVideoStat[]**](#SessionVideoStat)

### Authorization

[ApiClientId](#ApiClientId), [ApiClientSecret](#ApiClientSecret)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getCustomerVideoStats**
> \Kinow\Client\Model\CustomerVideoStats1 getCustomerVideoStats($customer_id, $date_from, $date_to, $page, $per_page)



Get customer video statistics

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

$api_instance = new Kinow\Client\Api\StatsApi();
$customer_id = 789; // int | Customer ID to fetch
$date_from = "date_from_example"; // string | Search entries from this date
$date_to = "date_to_example"; // string | Search entries to this date
$page = 789; // int | 
$per_page = 789; // int | 

try {
    $result = $api_instance->getCustomerVideoStats($customer_id, $date_from, $date_to, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatsApi->getCustomerVideoStats: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **int**| Customer ID to fetch |
 **date_from** | **string**| Search entries from this date | [optional]
 **date_to** | **string**| Search entries to this date | [optional]
 **page** | **int**|  | [optional]
 **per_page** | **int**|  | [optional]

### Return type

[**\Kinow\Client\Model\CustomerVideoStats1**](#CustomerVideoStats1)

### Authorization

[ApiClientId](#ApiClientId), [ApiClientSecret](#ApiClientSecret)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getVideoStats**
> \Kinow\Client\Model\VideoStats getVideoStats($video_id, $date_from, $date_to, $page)



Get video statistics

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

$api_instance = new Kinow\Client\Api\StatsApi();
$video_id = 789; // int | Video ID to fetch
$date_from = "date_from_example"; // string | Search entries from this date
$date_to = "date_to_example"; // string | Search entries to this date
$page = 789; // int | 

try {
    $result = $api_instance->getVideoStats($video_id, $date_from, $date_to, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatsApi->getVideoStats: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **video_id** | **int**| Video ID to fetch | [optional]
 **date_from** | **string**| Search entries from this date | [optional]
 **date_to** | **string**| Search entries to this date | [optional]
 **page** | **int**|  | [optional]

### Return type

[**\Kinow\Client\Model\VideoStats**](#VideoStats)

### Authorization

[ApiClientId](#ApiClientId), [ApiClientSecret](#ApiClientSecret)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

