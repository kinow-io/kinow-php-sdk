# GendersApi

All URIs are relative to *https://api.kinow.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getGenders**](#getGenders) | **GET** /genders | 


## **getGenders**
> \Kaemo\Client\Model\Genders getGenders($page, $per_page)



Get gender list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\GendersApi();
$page = 789; // int | 
$per_page = 789; // int | 

try {
    $result = $api_instance->getGenders($page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GendersApi->getGenders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**|  | [optional]
 **per_page** | **int**|  | [optional]

### Return type

[**\Kaemo\Client\Model\Genders**](#Genders)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

