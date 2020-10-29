# MediaSourcesApi

All URIs are relative to *https://api.kinow.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getMediaSource**](#getMediaSource) | **GET** /media-sources/{source_id} | 
[**getMediaSourceFiles**](#getMediaSourceFiles) | **GET** /media-sources/{source_id}/files | 
[**getMediaSources**](#getMediaSources) | **GET** /media-sources | 
[**postMediaSourceFiles**](#postMediaSourceFiles) | **POST** /media-sources/{source_id}/files | 


## **getMediaSource**
> \Kinow\Client\Model\MediaSource getMediaSource($source_id)



Get media source

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kinow\Client\Api\MediaSourcesApi();
$source_id = 789; // int | Media source ID to fetch

try {
    $result = $api_instance->getMediaSource($source_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MediaSourcesApi->getMediaSource: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **source_id** | **int**| Media source ID to fetch |

### Return type

[**\Kinow\Client\Model\MediaSource**](#MediaSource)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getMediaSourceFiles**
> \Kinow\Client\Model\MediaFiles getMediaSourceFiles($source_id, $page, $per_page, $filters, $sort_by, $sort_direction)



Get media source files

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kinow\Client\Api\MediaSourcesApi();
$source_id = 789; // int | Media source ID to fetch
$page = 789; // int | 
$per_page = 789; // int | 
$filters = "filters_example"; // string | ```     name[value]=string&name[operator]=contains&date_add[value]=string&date_add[operator]=lt     _______________      {     \"name\": {     \"value\": \"string\",     \"operator\": \"contains\"     },     \"date_add\": {     \"value\": \"string\",     \"operator\": \"lt\"     }     } ```Operator can be: strict, contains, between, in, gt (greater than), lt (lower than).
$sort_by = "sort_by_example"; // string | Sort by this attribute (id by default)
$sort_direction = "sort_direction_example"; // string | Sorting direction (asc by default)

try {
    $result = $api_instance->getMediaSourceFiles($source_id, $page, $per_page, $filters, $sort_by, $sort_direction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MediaSourcesApi->getMediaSourceFiles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **source_id** | **int**| Media source ID to fetch |
 **page** | **int**|  | [optional]
 **per_page** | **int**|  | [optional]
 **filters** | **string**| &#x60;&#x60;&#x60;     name[value]&#x3D;string&amp;name[operator]&#x3D;contains&amp;date_add[value]&#x3D;string&amp;date_add[operator]&#x3D;lt     _______________      {     \&quot;name\&quot;: {     \&quot;value\&quot;: \&quot;string\&quot;,     \&quot;operator\&quot;: \&quot;contains\&quot;     },     \&quot;date_add\&quot;: {     \&quot;value\&quot;: \&quot;string\&quot;,     \&quot;operator\&quot;: \&quot;lt\&quot;     }     } &#x60;&#x60;&#x60;Operator can be: strict, contains, between, in, gt (greater than), lt (lower than). | [optional]
 **sort_by** | **string**| Sort by this attribute (id by default) | [optional]
 **sort_direction** | **string**| Sorting direction (asc by default) | [optional]

### Return type

[**\Kinow\Client\Model\MediaFiles**](#MediaFiles)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getMediaSources**
> \Kinow\Client\Model\MediaSources getMediaSources($page, $per_page)



Get media source list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kinow\Client\Api\MediaSourcesApi();
$page = 789; // int | 
$per_page = 789; // int | 

try {
    $result = $api_instance->getMediaSources($page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MediaSourcesApi->getMediaSources: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**|  | [optional]
 **per_page** | **int**|  | [optional]

### Return type

[**\Kinow\Client\Model\MediaSources**](#MediaSources)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **postMediaSourceFiles**
> \Kinow\Client\Model\MediaFile postMediaSourceFiles($source_id, $body)



Post media file

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kinow\Client\Api\MediaSourcesApi();
$source_id = 789; // int | Media source ID to fetch
$body = new \Kinow\Client\Model\MediaFile(); // \Kinow\Client\Model\MediaFile | Create MediaFile object

try {
    $result = $api_instance->postMediaSourceFiles($source_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MediaSourcesApi->postMediaSourceFiles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **source_id** | **int**| Media source ID to fetch |
 **body** | [**\Kinow\Client\Model\MediaFile**](#\Kinow\Client\Model\MediaFile)| Create MediaFile object |

### Return type

[**\Kinow\Client\Model\MediaFile**](#MediaFile)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

