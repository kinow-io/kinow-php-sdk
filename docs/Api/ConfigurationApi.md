# ConfigurationApi

All URIs are relative to *https://api.kinow.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getConfiguration**](#getConfiguration) | **GET** /configuration | 
[**getConfigurationByName**](#getConfigurationByName) | **GET** /configuration/{configuration_name} | 


## **getConfiguration**
> \Kaemo\Client\Model\ConfigurationList getConfiguration($page, $per_page)



Get configuration

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\ConfigurationApi();
$page = 789; // int | 
$per_page = 789; // int | 

try {
    $result = $api_instance->getConfiguration($page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurationApi->getConfiguration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**|  | [optional]
 **per_page** | **int**|  | [optional]

### Return type

[**\Kaemo\Client\Model\ConfigurationList**](#ConfigurationList)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

## **getConfigurationByName**
> \Kaemo\Client\Model\Configuration getConfigurationByName($configuration_name)



Get configuration by name

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Kaemo\Client\Api\ConfigurationApi();
$configuration_name = "configuration_name_example"; // string | 

try {
    $result = $api_instance->getConfigurationByName($configuration_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurationApi->getConfigurationByName: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **configuration_name** | **string**|  |

### Return type

[**\Kaemo\Client\Model\Configuration**](#Configuration)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

