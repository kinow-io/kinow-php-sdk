# SubtitlesApi

All URIs are relative to *https://api.kinow.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getSubtitle**](#getSubtitle) | **GET** /subtitles/{subtitle_id} | 
[**getSubtitles**](#getSubtitles) | **GET** /subtitles | 
[**getVideoSubtitles**](#getVideoSubtitles) | **GET** /videos/{video_id}/subtitles | 


## **getSubtitle**
> \Kaemo\Client\Model\Subtitle getSubtitle($subtitle_id)



Get Subtitle

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\SubtitlesApi();
$subtitle_id = 789; // int | ID of the product to fetch

try {
    $result = $api_instance->getSubtitle($subtitle_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubtitlesApi->getSubtitle: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subtitle_id** | **int**| ID of the product to fetch |

### Return type

[**\Kaemo\Client\Model\Subtitle**](#Subtitle)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getSubtitles**
> \Kaemo\Client\Model\Subtitles getSubtitles($page, $per_page)



Get Subtitles list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\SubtitlesApi();
$page = 789; // int | 
$per_page = 789; // int | 

try {
    $result = $api_instance->getSubtitles($page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubtitlesApi->getSubtitles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**|  | [optional]
 **per_page** | **int**|  | [optional]

### Return type

[**\Kaemo\Client\Model\Subtitles**](#Subtitles)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getVideoSubtitles**
> \Kaemo\Client\Model\Subtitles getVideoSubtitles($video_id, $page, $per_page)



Get subtitles of a video

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\SubtitlesApi();
$video_id = 789; // int | ID of the video to fetch
$page = 789; // int | 
$per_page = 789; // int | 

try {
    $result = $api_instance->getVideoSubtitles($video_id, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubtitlesApi->getVideoSubtitles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **video_id** | **int**| ID of the video to fetch |
 **page** | **int**|  | [optional]
 **per_page** | **int**|  | [optional]

### Return type

[**\Kaemo\Client\Model\Subtitles**](#Subtitles)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

