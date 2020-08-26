# CategoryVideosApi

All URIs are relative to *https://api.kinow.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCategoryVideoPlayer**](#getCategoryVideoPlayer) | **GET** /categories/videos/{video_id}/player | 
[**getCategoryVideoSubtitles**](#getCategoryVideoSubtitles) | **GET** /categories/videos/{video_id}/subtitles | 
[**getVideosFromCategories**](#getVideosFromCategories) | **GET** /categories/videos | 
[**getVideosFromCategory**](#getVideosFromCategory) | **GET** /categories/{category_id}/videos | 


## **getCategoryVideoPlayer**
> \Kaemo\Client\Model\Player getCategoryVideoPlayer($video_id, $customer_id, $country_id)



Get video player

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\CategoryVideosApi();
$video_id = 789; // int | Video ID to fetch
$customer_id = 789; // int | Customer ID to fetch
$country_id = 789; // int | Country ID to use in video analytics

try {
    $result = $api_instance->getCategoryVideoPlayer($video_id, $customer_id, $country_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoryVideosApi->getCategoryVideoPlayer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **video_id** | **int**| Video ID to fetch |
 **customer_id** | **int**| Customer ID to fetch | [optional]
 **country_id** | **int**| Country ID to use in video analytics | [optional]

### Return type

[**\Kaemo\Client\Model\Player**](#Player)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getCategoryVideoSubtitles**
> \Kaemo\Client\Model\VideoSubtitlesResponse getCategoryVideoSubtitles($video_id, $page, $per_page)



Get subtitles of a video

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\CategoryVideosApi();
$video_id = 789; // int | Video ID to fetch
$page = 789; // int | 
$per_page = 789; // int | 

try {
    $result = $api_instance->getCategoryVideoSubtitles($video_id, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoryVideosApi->getCategoryVideoSubtitles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **video_id** | **int**| Video ID to fetch |
 **page** | **int**|  | [optional]
 **per_page** | **int**|  | [optional]

### Return type

[**\Kaemo\Client\Model\VideoSubtitlesResponse**](#VideoSubtitlesResponse)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getVideosFromCategories**
> \Kaemo\Client\Model\Videos getVideosFromCategories($page, $per_page, $sort_by, $sort_direction)



Get Videos attached to Categories

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\CategoryVideosApi();
$page = 789; // int | 
$per_page = 789; // int | 
$sort_by = "sort_by_example"; // string | Sort by this attribute (id by default)
$sort_direction = "sort_direction_example"; // string | Sorting direction (asc by default)

try {
    $result = $api_instance->getVideosFromCategories($page, $per_page, $sort_by, $sort_direction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoryVideosApi->getVideosFromCategories: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**|  | [optional]
 **per_page** | **int**|  | [optional]
 **sort_by** | **string**| Sort by this attribute (id by default) | [optional]
 **sort_direction** | **string**| Sorting direction (asc by default) | [optional]

### Return type

[**\Kaemo\Client\Model\Videos**](#Videos)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getVideosFromCategory**
> \Kaemo\Client\Model\Videos getVideosFromCategory($category_id, $page, $per_page, $sort_by, $sort_direction)



Get Videos attached to Category

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\CategoryVideosApi();
$category_id = 789; // int | Category ID to fetch
$page = 789; // int | 
$per_page = 789; // int | 
$sort_by = "sort_by_example"; // string | Sort by this attribute (id by default)
$sort_direction = "sort_direction_example"; // string | Sorting direction (asc by default)

try {
    $result = $api_instance->getVideosFromCategory($category_id, $page, $per_page, $sort_by, $sort_direction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoryVideosApi->getVideosFromCategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **category_id** | **int**| Category ID to fetch |
 **page** | **int**|  | [optional]
 **per_page** | **int**|  | [optional]
 **sort_by** | **string**| Sort by this attribute (id by default) | [optional]
 **sort_direction** | **string**| Sorting direction (asc by default) | [optional]

### Return type

[**\Kaemo\Client\Model\Videos**](#Videos)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

