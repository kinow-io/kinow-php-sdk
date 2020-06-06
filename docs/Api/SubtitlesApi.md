# SubtitlesApi

All URIs are relative to *https://api.kinow.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getSubtitles**](#getSubtitles) | **GET** /subtitles | 


## **getSubtitles**
> \Kaemo\Client\Model\SubtitleFiles getSubtitles($page, $per_page)



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

[**\Kaemo\Client\Model\SubtitleFiles**](#SubtitleFiles)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

