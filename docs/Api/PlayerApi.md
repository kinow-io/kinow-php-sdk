# PlayerApi

All URIs are relative to *https://api.kinow.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getExtractPlayer**](#getExtractPlayer) | **GET** /extracts/{extract_id}/player | 


## **getExtractPlayer**
> \Kaemo\Client\Model\PlayerConfiguration getExtractPlayer($extract_id)



Get extract's player

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\PlayerApi();
$extract_id = 789; // int | ID of the extract to fetch

try {
    $result = $api_instance->getExtractPlayer($extract_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlayerApi->getExtractPlayer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **extract_id** | **int**| ID of the extract to fetch |

### Return type

[**\Kaemo\Client\Model\PlayerConfiguration**](#PlayerConfiguration)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

