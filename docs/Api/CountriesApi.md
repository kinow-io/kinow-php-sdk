# CountriesApi

All URIs are relative to *https://api.kinow.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCountries**](#getCountries) | **GET** /countries | 


## **getCountries**
> \Kaemo\Client\Model\Countries getCountries($page, $per_page, $bypass_pagination)



Get country list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\CountriesApi();
$page = 789; // int | 
$per_page = 789; // int | 
$bypass_pagination = true; // bool | 

try {
    $result = $api_instance->getCountries($page, $per_page, $bypass_pagination);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CountriesApi->getCountries: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**|  | [optional]
 **per_page** | **int**|  | [optional]
 **bypass_pagination** | **bool**|  | [optional]

### Return type

[**\Kaemo\Client\Model\Countries**](#Countries)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

