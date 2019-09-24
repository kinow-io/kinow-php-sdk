# MediaFilesApi

All URIs are relative to *https://api.kinow.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getMediaSourceFiles**](#getMediaSourceFiles) | **GET** /media-sources/{source_id}/files | 
[**postMediaSourceFiles**](#postMediaSourceFiles) | **POST** /media-sources/{source_id}/files | 


## **getMediaSourceFiles**
> \Kaemo\Client\Model\MediaFiles getMediaSourceFiles($source_id, $page, $per_page, $filters)



Get media source files

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\MediaFilesApi();
$source_id = 789; // int | Media source ID to fetch
$page = 789; // int | 
$per_page = 789; // int | 
$filters = "filters_example"; // string | ```      name[value]=string&name[operator]=contains&date_add[value]=string&date_add[operator]=lt      _______________        {      \"name\": {      \"value\": \"string\",      \"operator\": \"contains\"      },      \"date_add\": {      \"value\": \"string\",      \"operator\": \"lt\"      }      } ```Operator can be strict, contains, gt or lt.

try {
    $result = $api_instance->getMediaSourceFiles($source_id, $page, $per_page, $filters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MediaFilesApi->getMediaSourceFiles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **source_id** | **int**| Media source ID to fetch |
 **page** | **int**|  | [optional]
 **per_page** | **int**|  | [optional]
 **filters** | **string**| &#x60;&#x60;&#x60;      name[value]&#x3D;string&amp;name[operator]&#x3D;contains&amp;date_add[value]&#x3D;string&amp;date_add[operator]&#x3D;lt      _______________        {      \&quot;name\&quot;: {      \&quot;value\&quot;: \&quot;string\&quot;,      \&quot;operator\&quot;: \&quot;contains\&quot;      },      \&quot;date_add\&quot;: {      \&quot;value\&quot;: \&quot;string\&quot;,      \&quot;operator\&quot;: \&quot;lt\&quot;      }      } &#x60;&#x60;&#x60;Operator can be strict, contains, gt or lt. | [optional]

### Return type

[**\Kaemo\Client\Model\MediaFiles**](#MediaFiles)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **postMediaSourceFiles**
> \Kaemo\Client\Model\MediaFile postMediaSourceFiles($source_id, $body)



Post media file

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\MediaFilesApi();
$source_id = 789; // int | Media source ID to fetch
$body = new \Kaemo\Client\Model\MediaFile(); // \Kaemo\Client\Model\MediaFile | Create MediaFile object

try {
    $result = $api_instance->postMediaSourceFiles($source_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MediaFilesApi->postMediaSourceFiles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **source_id** | **int**| Media source ID to fetch |
 **body** | [**\Kaemo\Client\Model\MediaFile**](#\Kaemo\Client\Model\MediaFile)| Create MediaFile object |

### Return type

[**\Kaemo\Client\Model\MediaFile**](#MediaFile)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

