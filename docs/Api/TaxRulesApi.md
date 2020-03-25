# TaxRulesApi

All URIs are relative to *https://api.kinow.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getTaxRules**](#getTaxRules) | **GET** /tax-rules | 


## **getTaxRules**
> \Kaemo\Client\Model\TaxRules getTaxRules($page, $per_page)



Get tax rules list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\TaxRulesApi();
$page = 789; // int | 
$per_page = 789; // int | 

try {
    $result = $api_instance->getTaxRules($page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxRulesApi->getTaxRules: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**|  | [optional]
 **per_page** | **int**|  | [optional]

### Return type

[**\Kaemo\Client\Model\TaxRules**](#TaxRules)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

