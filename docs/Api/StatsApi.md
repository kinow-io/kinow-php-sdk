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
> \Kaemo\Client\Model\CustomerGroupVideoStats1 getCustomerGroupTotalWatched($group_id, $video_id, $page, $per_page)



Get video statistics for a given customer group

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\StatsApi();
$group_id = 789; // int | Customer group ID to fecth
$video_id = 789; // int | Video ID to fetch
$page = 789; // int | 
$per_page = 789; // int | 

try {
    $result = $api_instance->getCustomerGroupTotalWatched($group_id, $video_id, $page, $per_page);
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
 **video_id** | **int**| Video ID to fetch |
 **page** | **int**|  | [optional]
 **per_page** | **int**|  | [optional]

### Return type

[**\Kaemo\Client\Model\CustomerGroupVideoStats1**](#CustomerGroupVideoStats1)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getCustomerSessions**
> \Kaemo\Client\Model\SessionVideoStats getCustomerSessions($customer_id, $video_id, $date_from, $date_to, $page, $per_page)



Get Customer video sessions statistics

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\StatsApi();
$customer_id = 789; // int | Customer ID to fetch
$video_id = 789; // int | Video ID to fetch
$date_from = "date_from_example"; // string | Search entries from this date
$date_to = "date_to_example"; // string | Search entries to this date
$page = 789; // int | 
$per_page = 789; // int | 

try {
    $result = $api_instance->getCustomerSessions($customer_id, $video_id, $date_from, $date_to, $page, $per_page);
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
 **video_id** | **int**| Video ID to fetch | [optional]
 **date_from** | **string**| Search entries from this date | [optional]
 **date_to** | **string**| Search entries to this date | [optional]
 **page** | **int**|  | [optional]
 **per_page** | **int**|  | [optional]

### Return type

[**\Kaemo\Client\Model\SessionVideoStats**](#SessionVideoStats)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getCustomerSessionsMultiple**
> \Kaemo\Client\Model\SessionVideoStats getCustomerSessionsMultiple($customer_id, $body)



Get Customer sessions statistics for multiple videos

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\StatsApi();
$customer_id = 789; // int | Customer ID to fetch
$body = new \Kaemo\Client\Model\VideoIDList1(); // \Kaemo\Client\Model\VideoIDList1 | List of Video IDs separated by comma, eg. '42,21,84'

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
 **body** | [**\Kaemo\Client\Model\VideoIDList1**](#\Kaemo\Client\Model\VideoIDList1)| List of Video IDs separated by comma, eg. &#39;42,21,84&#39; |

### Return type

[**\Kaemo\Client\Model\SessionVideoStats**](#SessionVideoStats)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getCustomerVideoStats**
> \Kaemo\Client\Model\CustomerVideoStats1 getCustomerVideoStats($customer_id, $date_from, $date_to, $page, $per_page)



Get customer video statistics

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\StatsApi();
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

[**\Kaemo\Client\Model\CustomerVideoStats1**](#CustomerVideoStats1)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getVideoStats**
> \Kaemo\Client\Model\VideoStats getVideoStats($video_id, $date_from, $date_to, $page)



Get video statistics

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\StatsApi();
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

[**\Kaemo\Client\Model\VideoStats**](#VideoStats)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

