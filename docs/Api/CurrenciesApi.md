# CurrenciesApi

All URIs are relative to *https://api.kinow.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCurrencies**](#getCurrencies) | **GET** /currencies | 


## **getCurrencies**
> \Kaemo\Client\Model\Currencies getCurrencies($page, $per_page)



Get currency list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\CurrenciesApi();
$page = 789; // int | 
$per_page = 789; // int | 

try {
    $result = $api_instance->getCurrencies($page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CurrenciesApi->getCurrencies: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**|  | [optional]
 **per_page** | **int**|  | [optional]

### Return type

[**\Kaemo\Client\Model\Currencies**](#Currencies)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

