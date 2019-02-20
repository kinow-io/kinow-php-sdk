# StatsApi

All URIs are relative to *https://api.kinow.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getVideoStatsByCustomers**](#getVideoStatsByCustomers) | **GET** /video-stats/customers | 
[**getVideoStatsByVideo**](#getVideoStatsByVideo) | **GET** /video-stats/videos | 
[**getVideoStatsSessions**](#getVideoStatsSessions) | **GET** /video-stats/sessions | 


## **getVideoStatsByCustomers**
> \Kaemo\Client\Model\CustomerVideoStats getVideoStatsByCustomers($customer_id, $date_from, $date_to, $page, $per_page)



Get video stats by customer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\StatsApi();
$customer_id = 789; // int | ID of the customer to fetch
$date_from = "date_from_example"; // string | Search entries from this date
$date_to = "date_to_example"; // string | Search entries to this date
$page = 789; // int | 
$per_page = 789; // int | 

try {
    $result = $api_instance->getVideoStatsByCustomers($customer_id, $date_from, $date_to, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatsApi->getVideoStatsByCustomers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **int**| ID of the customer to fetch | [optional]
 **date_from** | **string**| Search entries from this date | [optional]
 **date_to** | **string**| Search entries to this date | [optional]
 **page** | **int**|  | [optional]
 **per_page** | **int**|  | [optional]

### Return type

[**\Kaemo\Client\Model\CustomerVideoStats**](#CustomerVideoStats)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getVideoStatsByVideo**
> \Kaemo\Client\Model\VideoStats getVideoStatsByVideo($video_id, $date_from, $date_to, $page)



Get video stats by video

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\StatsApi();
$video_id = 789; // int | ID of the customer to fetch
$date_from = "date_from_example"; // string | Search entries from this date
$date_to = "date_to_example"; // string | Search entries to this date
$page = 789; // int | 

try {
    $result = $api_instance->getVideoStatsByVideo($video_id, $date_from, $date_to, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatsApi->getVideoStatsByVideo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **video_id** | **int**| ID of the customer to fetch | [optional]
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

## **getVideoStatsSessions**
> \Kaemo\Client\Model\SessionVideoStats getVideoStatsSessions($customer_id, $video_id, $date_from, $date_to, $page, $per_page)



Get video stats sessions

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\StatsApi();
$customer_id = 789; // int | ID of the customer to fetch
$video_id = 789; // int | ID of the video to fetch
$date_from = "date_from_example"; // string | Search entries from this date
$date_to = "date_to_example"; // string | Search entries to this date
$page = 789; // int | 
$per_page = 789; // int | 

try {
    $result = $api_instance->getVideoStatsSessions($customer_id, $video_id, $date_from, $date_to, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatsApi->getVideoStatsSessions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **int**| ID of the customer to fetch | [optional]
 **video_id** | **int**| ID of the video to fetch | [optional]
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

